# -*- coding: utf-8 -*-
"""
Created on Sat Mar 23 00:38:57 2019

@author: Fortaleza
"""

velha="""               PosiÃ§Ãµes
  |   |      0 | 1 | 2
---+---+---  ---+---+---
  |   |      3 | 4 | 5
---+---+---  ---+---+---
  |   |      6 | 7 | 8
"""
print(velha)
 
 
 
print ("Jogador 1 = X e Jogador 2 = O")
 
sair= "N"
repetir = 2
velha = 0
 
while sair == "N":
 
    matriz = ['','','',
              '','','',
              '','','']
 
    nomeUm = str(input("Digite o nome do primeiro jogador: "))
    nomeDois = str(input("Digite o nome do segundo jogador: "))
    gameover=0
 
    while gameover==0:
        if repetir%2 == 0:
 
            linha = int(input(nomeUm+", faÃ§a sua jogada: "))
            if matriz[linha] == '':
                matriz[linha]='X'
            else:
                print("Jogada invÃ¡lida, tente novamente !")
                linha = int(input(nomeUm+", faÃ§a sua jogada: "))
                matriz[linha]='X'
 
            print('\t %s | %s | %s ' % (matriz[0],matriz[1],matriz[2]))
            print('\t---------')
            print('\t %s | %s | %s ' % (matriz[3],matriz[4],matriz[5]))
            print('\t----------')
            print('\t %s | %s | %s ' % (matriz[6], matriz[7],matriz[8]))
 
        else:
            linha = int(input(nomeDois+", faÃ§a sua jogada: "))
            if matriz[linha] == '':
                matriz[linha] = 'O'
            else:
                print("Jogada invÃ¡lida, tente novamente !")
                linha = int(input(nomeDois+", faÃ§a sua jogada: "))
                matriz[linha] = 'O'
 
            print('\t %s | %s | %s ' % (matriz[0], matriz[1], matriz[2]))
            print('\t---------')
            print('\t %s | %s | %s ' % (matriz[3], matriz[4], matriz[5]))
            print('\t----------')
            print('\t %s | %s | %s ' % (matriz[6], matriz[7], matriz[8]))
 
        repetir += 1
 
 
        if((matriz[0] == matriz[1] == matriz[2] == 'X') or
            (matriz[3] == matriz[4] == matriz[5] == 'X') or
            (matriz[6] == matriz[7] == matriz[8] == 'X')):
            print(nomeUm+" foi o ganhador !!")
            gameover=1
        else:
            velha += 1
 
        if((matriz[0] == matriz[1] == matriz[2] == 'O') or
            (matriz[3] == matriz[4] == matriz[5] == 'O') or
            (matriz[6] == matriz[7] == matriz[8] == 'O')):
            print(nomeDois+" foi o ganhador !!")
            gameover=1
        else:
            velha += 1
 
 
    op = input('Deseja sair ? "S"-sim ou "N"-nÃ£o : ')
    if op == 'S':
        break