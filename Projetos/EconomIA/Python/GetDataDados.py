import pandas as pd
import html5lib
import matplotlib.pyplot as plt
import seaborn as sns
from urllib.request import Request, urlopen

req = Request('http://www.portalbrasil.net/ipca.htm', headers={'User-Agent': 'Mozilla/5.0'})
pagina = urlopen(req).read()

ipca =  pd.read_html(pagina)

ipca = ipca[4]

ipca = ipca[[0,3]]
ipca = ipca.iloc[1:]

df = ipca[3].astype(float) / 10000
df = pd.concat([ipca, df], axis=1)

df.columns = ['Data', 'IPCA_OLD', 'IPCA']
df = df[['Data','IPCA']]

# reverse order
df = df.iloc[::-1]

df.set_index(['Data'], inplace=True)

print(df)

del(ipca)

sns.set_style('darkgrid') 
plt.title('IPCA Mensal')
df['IPCA'].plot()
plt.legend(loc=7)
plt.xlabel('Data')
plt.ylabel('IPCA')
plt.show()