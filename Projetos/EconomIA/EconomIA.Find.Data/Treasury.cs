using OpenQA.Selenium;
using OpenQA.Selenium.Support.UI;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace EconomIA.Find.Data
{
    class Treasury
    {
        public static void Exe(string url)
        {
            IWebDriver driver = ExeSelenium.GetPage(url);

            
 
       }

        public Boolean AwaitElement(int time, String tipoLocator, string caminho, IWebDriver driver)
        {
            WebDriverWait wait = new WebDriverWait(driver, TimeSpan.FromSeconds(time));
            var retorno = true;

            try
            {
                switch (tipoLocator)
                {
                    case "id":
                        wait.Until(ExpectedConditions.PresenceOfAllElementsLocatedBy(By.Id(caminho)));
                        break;
                    case "cssselector":
                        wait.Until(ExpectedConditions.PresenceOfAllElementsLocatedBy(By.CssSelector(caminho)));
                        break;
                    case "xpath":
                        wait.Until(ExpectedConditions.PresenceOfAllElementsLocatedBy(By.XPath(caminho)));
                        break;
                    case "classname":
                        wait.Until(ExpectedConditions.PresenceOfAllElementsLocatedBy(By.ClassName(caminho)));
                        break;
                    case "tagName":
                        wait.Until(ExpectedConditions.PresenceOfAllElementsLocatedBy(By.TagName(caminho)));
                        break;
                    default:
                        retorno = false;
                        break;
                }
            }
            catch
            {
                retorno = false;
            }

            return retorno;
        }
    }
}
