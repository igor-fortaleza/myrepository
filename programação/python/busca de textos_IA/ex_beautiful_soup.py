# -*- coding: utf-8 -*-
from bs4 import BeautifulSoup
import urllib3

urllib3.disable_warnings(urllib3.exceptions.InsecureRequestWarning)
http = urllib3.PoolManager()
pagina = http.request('GET', 'http://iaexpert.com.br')
pagina = http.request('GET', 'https://pt.wikipedia.org/wiki/Linguagem_de_programa%C3%A7%C3%A3o')
pagina.status

sopa = BeautifulSoup(pagina.data, 'lxml')
sopa
sopa.title        #Buscando a <title> na pagina
sopa.title.string #Buscando as caracteres que esta entre <title> na pagina

links = sopa.find_all('a') #definindo todos da variavel <a>
len(links)
for link in links:
    print(link.get('href')) # buscando da variavel <a> os href (links)
    print(link.contents)    # buscando da variavel <a> os titulo dos links

