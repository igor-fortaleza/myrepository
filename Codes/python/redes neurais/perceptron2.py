# -*- coding: utf-8 -*-
"""
Created on Mon Sep 18 14:16:04 2017

@author: Jones
"""
import numpy as np

entradas = np.array([-1, 3, 1])
pesos = np.array([0.8, 0.7, 0.2])

def soma(e, p):
    return e.dot(p)
# dot product / produto escalar
        
s = soma(entradas, pesos)

def stepFunction(soma):
    if (soma >= 1):
        return 1
    return 0

r = stepFunction(s)