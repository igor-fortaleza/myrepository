using OpenQA.Selenium;
using OpenQA.Selenium.Chrome;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApp5
{
    
    class SeleniumTools
    {
        private IWebDriver driver;

        public SeleniumTools()
        {

        }
        public SeleniumTools(string navigation)
        {
            switch (navigation)
            {
                case "1":
                    driver = new ChromeDriver();
                    break;
                case "2":
                    driver = new ChromeDriver();
                    break;
                    break;
                case "3":
                    driver = new ChromeDriver();
                    break;
            }


        }

    }
}
