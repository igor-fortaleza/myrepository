using EconomIA.Find.Data;
using EconomIA.Find.Fonte;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace EconomIA.Program
{
    class Program
    {
        static void Main(string[] args)
        {
            ListFontes executa = new ListFontes();
            executa.GetSite("Daily Treasury Yield Curve Rates");
        }
    }
}
