# -*- coding: utf-8 -*-
"""
Created on Sat Mar 23 15:36:09 2019

@author: igor2
Exercicio:
    Grave esta lista em um arquivo (Copie para o seu código para isso):
Gol
Uno
Palio
EcoSport
Clio
Strada
Golf
Inverta a ordem da lista e grave em um segundo arquivo.
Ordene a lista alfabeticamente em um terceiro arquivo.
Com a lista organizada faça a sua numeração em um quarto arquivo, assim:
1 - Clio
2 - EcoSport…
"""
#Salvando o arquivo:
arq = open('carros.txt', 'w')
texto = """
Gol
Uno
Palio
EcoSport
Clio
Strada
Golf
"""
arq.write(texto)
arq.close()
print("----- ARQUIVO SALVO ------ \n"+texto)


#Exibindo em ordem alfabetica (.sort): 
arq2 = open('carros.txt', 'r')
print("\n Ordem Alfabetica")
texto = arq2.readlines()
texto.sort()
for linha in texto:
    print(linha)
arq2.close()

#Exibindo em inversa do alfabetica (.sort=(reverse=true)): 
'''
arq3 = open('carros.txt', 'r')
print("\n Ordem Alfabetica Inversa \n")
texto = arq3.readlines()
texto.sort(reverse=True)
for linha in texto:
    print(linha)
arq3.close()
'''
#Exibindo em ordem reversa (.reverse()): 
arq4 = open('carros.txt', 'r')
print("\n Ordem Reversa \n")
texto = arq4.readlines()
texto.reverse()
for linha in texto:
    print(linha)
arq4.close()


