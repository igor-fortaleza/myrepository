using EconomIA.Find.Data;
using EconomIA.Utils;
using OpenQA.Selenium;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace EconomIA.Find.Fonte
{
    public class ListFontes
    {
     public void GetSite(string strDado)
        {
            string[] lista = {  "Daily Treasury Yield Curve Rates", "Daily Treasury Bill Rates",
                                     "Daily Treasury Long-Term Rates",
                                     "Daily Treasury Real Yield Curve Rates",
                                     "Daily Treasury Real Long-Term Rates",
                                     "Historical Treasury Rates Chart"
                        };
            List<string> listaTeste = new List<string>(lista);

            ModelFonte[] FonteArray = {
                    new ModelFonte() { ID = 1, FonteName = "U.S. DEPARTMENT OF THE TREASURY", Url = "https://www.treasury.gov/resource-center/data-chart-center/interest-rates/Pages/TextView.aspx?data=yield",
                        TypeDado = listaTeste             
                    }, 

                    //new ModelFonte() { ID = 1, FonteName = "John", Url = "www.google.com" }
                };

            // Use LINQ to find first Fonte whose name contains strDado 
            ModelFonte Fonte = FonteArray.Where(s => s.TypeDado.Contains(strDado)).FirstOrDefault();

            switch (Fonte.FonteName)
            {
                case "U.S. DEPARTMENT OF THE TREASURY":
                    Treasury.Exe(Fonte.Url);
                    break;

                default:
                    Console.WriteLine(" Erro ao dectar a fonte de acesso! ");
                    break;
            }

            //IWebDriver pagina = ExeSelenium.GetPage(Fonte.Url.ToString());



        }  
    
    }
}
