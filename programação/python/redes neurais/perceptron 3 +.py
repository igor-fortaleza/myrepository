# -*- coding: utf-8 -*-
"""
Created on Tue Mar  5 14:43:11 2019

@author: Fortaleza
"""

import numpy as np
 
entradas = np.array( [ [0,0],[0,1],[1,0],[1,1] ])
saidas = np.array([0,0,0,1])
pesos = np.array([0.0,0.0])
taxaAprendizagem = 0.1
 
def stepFunction(soma):
    if (soma >= 1):
        return 1
    return 0
 
        
def calculaSaida(registro):
    s = registro.dot(pesos)
    return stepFunction(s)
 
 
def treinar():
    erroTotal = 1
    epoca=1
    while(erroTotal != 0):
        erroTotal = 0
        print("\n\n\n\nTREINAMENTO {ind}:".format(ind=epoca))
        epoca=epoca+1
        for i in range(len(saidas)): 
            saidaCalculada = calculaSaida(np.asarray(entradas[i]))
            erro = abs(saidas[i] - saidaCalculada)
            erroTotal += erro
            print("\nx1\tx2\tp1\tp2\tsaida\tsaidaesperada")
            print("{x1:d}\t{x2:d}\t{p1:02.2f}\t{p2:02.2f}\t{saida:02.2f}\t{saidaesperada:02.2f} \n".format(x1=entradas[i][0],x2=entradas[i][1],p1=pesos[0],p2=pesos[1],saida=saidaCalculada, saidaesperada=saidas[i]))
            for j in range(len(pesos)):   
                print('Peso peso[{ind}] antes:{p}'.format(ind=j,p=pesos[j]))            
                pesos[j] = pesos[j] + (taxaAprendizagem*entradas[i][j] *erro)
                print("Peso peso[{ind}] ajustado:{peso}".format(ind=j,peso=pesos[j]))
        print('Total de erros: {erros}'.format(erros=erroTotal))  
           
 
treinar()