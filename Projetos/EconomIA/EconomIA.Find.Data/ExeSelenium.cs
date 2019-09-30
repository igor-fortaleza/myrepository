using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using OpenQA;
using OpenQA.Selenium.Chrome;

namespace EconomIA.Find.Data
{
    class ExeSelenium
    {
       

        public bool GetPage(string url)
        {
            ChromeDriver driver = new ChromeDriver();
            driver.Navigate.url(url);

            return true;
        }
    }
}
