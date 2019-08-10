# -*- coding: utf-8 -*-
"""
Created on Sun Mar 24 22:09:28 2019

@author: igor2
"""

import urllib3 

http = urllib3.PoolManager()
pagina = http.request('GET', 'http://www.iaexpert.com.br')
pagina.status
pagina.data[0:50]
#50 primeiras caracter dos dados