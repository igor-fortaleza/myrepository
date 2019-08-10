# -*- coding: utf-8 -*-
"""
Created on Sat Mar 23 16:39:37 2019

@author: igor2
"""

import matplotlib.pyplot as plt
# "as"= o apelido da forma que vc vai usar a função

x1 = [1, 3, 5, 7, 9]
y1 = [2, 3, 7, 1, 6]

x2 = [2, 4, 6, 8, 10]
y2 = [5, 1, 3, 7, 4]

titulo = "Grafico Comparação em Python"
eixo_x = "Eixo X"
eixo_y = "Eixo Y"

#legendas
plt.title(titulo)
plt.xlabel(eixo_x)
plt.ylabel(eixo_y)

# plt.plot(x, y)
plt.bar(x1, y1, label = "grupo 1")
plt.bar(x2, y2, label = "grupo 2")
plt.legend()
#".bar" em barras
plt.show()