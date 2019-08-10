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

urllib.request.urlretrieve(origem, arquivo)

dateparse = lambda x: pd.datetime.strptime(x, '%d/%m/%Y')
df_dolar = pd.read_csv(arquivo, encoding = "utf-8", delimiter=';', index_col=0, parse_dates=['data'], date_parser=dateparse)

df_dolar.index.names = ['Data']
df_dolar.columns = ['Dolar']
df_dolar['Dolar'] = df_dolar['Dolar'].str.replace(',', '.').astype(float)

data_inicial = datetime.datetime.strptime('2006' + \
       "-" + '01' + "-" + '01', "%Y-%m-%d")

data_final = datetime.datetime.strptime('2020' + \
       "-" + '12' + "-" + '31', "%Y-%m-%d")

df_dolar = df_dolar.loc[data_inicial:data_final]


print(df_dolar)

plt.title('Dólar')
df_dolar['Dolar'].plot()
plt.legend(loc=7)
plt.xlabel('Date')
plt.ylabel('Dólar')
plt.show()