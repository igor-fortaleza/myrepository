from tkinter import *
import pandas as pd
import html5lib
import matplotlib.pyplot as plt
import seaborn as sns
import os  
import urllib.request
import zipfile
import io, datetime, time, codecs

def carrega_selic():
  for widget in root.winfo_children():
    print(widget)
    if('menu' not in str(widget)):
      widget.forget()

  origem = 'http://api.bcb.gov.br/dados/serie/bcdata.sgs.1178/dados?formato=csv'
  arquivo = 'selic_bcb_api.csv'
  
  if(not os.path.isfile(arquivo)):
    print('Efetuando download do arquivo ' + arquivo)
    urllib.request.urlretrieve(origem, arquivo)
  else:
    print('Arquivo ' + arquivo + ' já existe. Utilizando o já existente!')
  print()
  
  df_selic = pd.read_csv('selic_bcb_api.csv', encoding = "utf-8", delimiter=';', index_col=0)

  df_selic['valor'] = df_selic['valor'].str.replace(',', '.').astype(float)

  data_inicial = '02/01/2006'

  data_final = '01/03/2019'

  df_selic = df_selic.loc[data_inicial:data_final]


  print(df_selic)

  df_selic['valor'].plot()
  plt.legend(loc=7)
  plt.xlabel('Data')
  plt.ylabel('Selic')
  plt.show()



root = Tk()

root.geometry('650x550+500+300')
root.title('Big Data Econômico')

menubar = Menu(root)

carrega_dados = Menu(menubar, tearoff=0)
carrega_dados.add_command(label="Selic", command=carrega_selic)
menubar.add_cascade(label="Coletar dados", menu=carrega_dados)

root.config(menu=menubar)
root.mainloop()