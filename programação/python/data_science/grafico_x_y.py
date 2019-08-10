# -*- coding: utf-8 -*-
"""
Created on Sat Mar 23 16:39:37 2019

@author: igor2
"""

import matplotlib.pyplot as plt
# "as"= o apelido da forma que vc vai usar a função

x = [1, 2, 3, 4, 5]
y = [2, 4, 6, 3, 2]

titulo = "Grafico em Python"
eixo_x = "Eixo X"
eixo_y = "Eixo Y"

#legendas
plt.title(titulo)
plt.xlabel(eixo_x)
plt.ylabel(eixo_y)

# plt.plot(x, y)
plt.bar(x, y)
#".bar" em barras
plt.show()