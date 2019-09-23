# -*- coding: utf-8 -*-
"""
Created on Tue Mar 26 01:20:36 2019

@author: Fortaleza
"""

import urllib.request
import pandas as pd
import datetime
import matplotlib.pyplot as plt

origem = 'http://api.bcb.gov.br/dados/serie/bcdata.sgs.10813/dados?formato=csv'
arquivo = 'dolar_bcb_api.csv'
origem2 = 'http://api.bcb.gov.br/dados/serie/bcdata.sgs.10822/dados?formato=csv'
arquivo2 = 'divida_publica_externa.csv'

urllib.request.urlretrieve(origem, arquivo)
urllib.request.urlretrieve(origem2, arquivo2)

dateparse = lambda x: pd.datetime.strptime(x, '%d/%m/%Y')
df_dolar = pd.read_csv(arquivo, encoding = "utf-8", delimiter=';', index_col=0,
                       parse_dates=['data'],
                       date_parser=dateparse)
df_dolar.index.names = ['Data']
df_dolar.columns = ['Dolar']
df_dolar['Dolar'] = df_dolar['Dolar'].str.replace(',', '.').astype(float)

df_divida = pd.read_csv(arquivo2, encoding = "utf-8", delimiter=';', index_col=0,
                       parse_dates=['data'],
                       date_parser=dateparse)
df_divida.index.names = ['Data']
df_divida.columns = ['Dolar']
df_divida['Dolar'] = df_divida['Dolar'].str.replace(',', '.').astype(float)

data_inicial = datetime.datetime.strptime('2006' + \
       "-" + '01' + "-" + '01', "%Y-%m-%d")

data_final = datetime.datetime.strptime('2020' + \
       "-" + '12' + "-" + '31', "%Y-%m-%d")

df_dolar = df_dolar.loc[data_inicial:data_final]
df_divida = df_divida.loc[data_inicial:data_final]


print(df_divida)

plt.title('Dólar')
df_dolar['Dolar'].plot(color="k")
df_divida['Dolar'].plot(color="r")
plt.legend(loc=7)
plt.xlabel('Data')
plt.ylabel('Dólar')
