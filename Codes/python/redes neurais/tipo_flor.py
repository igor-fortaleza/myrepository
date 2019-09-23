# -*- coding: utf-8 -*-
"""
Created on Wed Mar 20 13:39:19 2019

@author: igor2
"""

from sklearn.neural_network import MLPClassifier
from sklearn import datasets

iris = datasets.load_iris()
entradas = iris.data
saidas = iris.target

redeNeural = MLPClassifier(verbose=True,
                           max_iter=1000,
                           tol=0.00001,
                           activation='logistic',
                           learning_rate_init=0.001)
redeNeural.fit(entradas, saidas)
redeNeural.predict([[4, 5.2, 5.5, 1.2]])
#         dados da planta para serem analisadas
