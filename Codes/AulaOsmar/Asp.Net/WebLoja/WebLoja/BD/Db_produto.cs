using System;
using System.Collections.Generic;
using System.Configuration;
using System.Data.SqlClient;
using System.Linq;
using System.Web;
using WebLoja.Models;

namespace WebLoja.BD
{
    public class Db_Produto
    {
        private string _conn;

        public Db_Produto()
        {
            _conn = ConfigurationManager.ConnectionStrings["WebLojaConnectionString"].ToString();
        }

        public List<Produto> ListProdutos()
        {
            SqlConnection connection = new SqlConnection(_conn);
            SqlCommand command = new SqlCommand("", connection);

            connection.Open();
            SqlDataReader reader = command.ExecuteReader();

            List<Produto> listProdutos = new List<Produto>();
            while(reader.Read())
            {
                Produto produto = new Produto();
                produto.ProdutoId = Convert.ToInt32(reader["ProdutoId"]);
                produto.ProdutoId = Convert.ToInt32(reader["Descricao"]);

                listProdutos.Add(produto);
            }
            connection.Close();

            return listProdutos;

        }
    }
}