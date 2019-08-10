# -*- coding: utf-8 -*-
"""
Created on Sun Mar 24 15:06:59 2019

@author: igor2
"""

import matplotlib.pyplot as plt

dados = open("populacao-brasileira.csv").readlines()

titulo = "Crescimento da população Brasileira 1980-2016"
eixo_x = "ano"
eixo_y = "População em x100.000.000"
plt.title(titulo)
plt.xlabel(eixo_x)
plt.ylabel(eixo_y) 

x = []
y = []

for i in range(len(dados)):
        if i !=0:
            linha = dados[i].split(";")
            x.append(int(linha[0]))
            y.append(int(linha[1]))
            
          
plt.bar(x, y, color="#e4e4e4")
plt.plot(x, y, color="k", linestyle="--")
plt.show()
# plt.savefig("populacao_brasileira.png", dpi=300) = salvar