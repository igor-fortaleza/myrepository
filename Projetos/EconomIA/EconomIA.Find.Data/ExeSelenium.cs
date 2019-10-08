using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using OpenQA;
using OpenQA.Selenium;
using OpenQA.Selenium.Chrome;

namespace EconomIA.Find.Data
{
    class ExeSelenium
    {
       

        public static IWebDriver GetPage(string url)
        {
           string folderDow = Environment.GetFolderPath(Environment.SpecialFolder.UserProfile);

                ChromeOptions options = new ChromeOptions();
                options.AddUserProfilePreference("download.default_directory", folderDow);
                options.AddArguments("--disable-infobars");
                options.AddArguments("disable-infobars");
                options.AddArgument("no-sandbox");
                options.AddArguments("start-maximized");

                IWebDriver driver = new ChromeDriver();

                driver.Navigate().GoToUrl(url);

            return driver;            
        }
    }
}
