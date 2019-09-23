# -*- coding: utf-8 -*-
"""
Created on Sat Mar 23 15:14:27 2019

@author: igor2
"""

arq = open('tmp/lista.txt', 'r')
texto = arq.read()
print(texto)
arq.close()

# Pegar texto e colocar em outro arquivo (inserir):
'''
arq2 = open('tmp/lista2.txt', 'w')
arq2.write(texto)
arq2.close()
'''
# Pegar arquivo em linhas (alterar):
'''
arq = open('tmp/lista.txt', 'r')
texto = arq.readlines()
for linha in texto :
    print(linha)
arq.close()
'''