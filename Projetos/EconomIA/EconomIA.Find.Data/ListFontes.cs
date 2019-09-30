using EconomIA.Utils;
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

            ModelFonte[] FonteArray = {
                    new ModelFonte() { ID = 1, FonteName = "U.S. DEPARTMENT OF THE TREASURY", Url = "https://www.treasury.gov/resource-center/data-chart-center/interest-rates/Pages/TextView.aspx?data=yield" },
                    new ModelFonte() { ID = 1, FonteName = "John", Url = "www.google.com" }
                };

            // Use LINQ to find first Fonte whose name contains strDado 
            ModelFonte Fonte = FonteArray.Where(s => s.FonteName.Contains(strDado.ToUpper())).FirstOrDefault();

        }  
    
    }
}
