# -*- coding: utf-8 -*-
"""
Created on Sat Mar 23 14:55:41 2019

@author: igor2
"""

arq = open('tmp/lista.txt', 'w')
texto = """
Lista de Alunos
---
João da Silva
José Lima
Maria das Dores
"""
arq.write(texto)
arq.close()

# Também é possível escrever em arquivos usando 
# listas no lugar de variáveis apenas em texto (alterar):

'''
arq = open('/tmp/lista.txt', 'w')
texto = []
texto.append('Lista de Alunos\n')
texto.append('---\n')
texto.append('João da Silva\n')
texto.append('José Lima\n')
texto.append('Maria das Dores')
arq.writelines(texto)
arq.close()
'''

