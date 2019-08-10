import urllib3
from bs4 import BeautifulSoup
from urllib.parse import urljoin

def crawl(paginas, profundidade):
    urllib3.disable_warnings(urllib3.exceptions.InsecureRequestWarning)
    for i in range(profundidade):
        novas_paginas = set()
        for pagina in paginas:
            http = urllib3.PoolManager()
        try:
            dados_pagina = http.request('GET', pagina)
        except:
            print('Erro ao abrir a página' + pagina)
            continue
        
        sopa = BeautifulSoup(dados_pagina.data, "lxml")
        links = sopa.find_all('a')
        contador = 1
        for link in links:
            #print(str(Link.contents)+" - " + str(Link.get('href')))
            #print(Link.attrs)
            #print('\n')
            if ('href' in link.attrs):
                url = urljoin(pagina, str(link.get('href')))
                #if url != Link.get('href'):
                #   print(url)
                #   print(Link.get('href'))

                if url.find("'") != -1:
                    continue
                
                #print(url)
                url = url.split('#')[0]
                #print(url)                
                #print('\n')
                
                if url[0:4] == 'http':
                    novas_paginas.add(url)
                    
                contador = contador + 1
            paginas = novas_paginas
            print(contador)
# profundidade  1,    2,   3,   4
#         1 -> -> 396 -> 20.000 -> 1.000.000

listapaginas = ['https://pt.wikipedia.org/wiki/Linguagem_de_programa%C3%A7%C3%A3o']
crawl(listapaginas, 2)
