# -*- coding: utf-8 -*-
"""
Created on Tue Mar 26 16:53:17 2019

@author: igor2
"""
# Busca de elementos

import urllib3
from bs4 import BeautifulSoup

def crawl(pagina):
    urllib3.disable_warnings(urllib3.exceptions.InsecureRequestWarning)
    http = urllib3.PoolManager()
    try: # Uma funçao q caso não funcione pula para função 'except'
        dados_pagina = http.request('GET', pagina)
    except: #caso 'try' não funcione
        print("erro ao abrir a página" + pagina)
        
    sopa = BeautifulSoup(dados_pagina.data, 'lxml')
    links = sopa.find_all('a')
    for link in links:
        print(str(link.contents) + ' - ' + str(link.get('href')))

crawl('https://pt.wikipedia.org/wiki/Linguagem_de_programa%C3%A7%C3%A3o')
    
    
        
        