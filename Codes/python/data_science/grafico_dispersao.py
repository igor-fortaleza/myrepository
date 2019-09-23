# -*- coding: utf-8 -*-
"""
Created on Sat Mar 23 16:39:37 2019

@author: igor2
"""

import matplotlib.pyplot as plt
# "as"= o apelido da forma que vc vai usar a função

x = [1, 2, 3, 4, 5]
y = [2, 4, 6, 3, 2]

x2 = [1, 2, 3, 4, 5]
y2 = [1, 2, 5, 3, 5]

titulo = "Scatterplot: gráfico de dispersão"
eixo_x = "Eixo X"
eixo_y = "Eixo Y"

#legendas
plt.title(titulo)
plt.xlabel(eixo_x)
plt.ylabel(eixo_y)

plt.plot(x, y, color="k", linestyle="-.")
plt.plot(x2, y2, color="#990000", linestyle="-.")
# plt.bar(x, y)
#".bar" em barras

plt.scatter(x, y, label="Grupo 1", color="k", marker=".", s=200)
plt.scatter(x2, y2, label="grupo 2", color="r", marker=".", s=200)
plt.legend()
plt.show()
# plt.savefig(grafico.pdf) = salvar imagem do grafico como vetor pdf
# plt.savefig(grafico.png, dpi=300) = salvar imagem do grafico como imagem com resolução definida


#types color ..https://matplotlib.org/api/pyplot_summary.html#colors-in-matplotlib