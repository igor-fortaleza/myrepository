using System;
using System.Collections.Generic;
using System.Configuration;
using System.Data;
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
            _conn = ConfigurationManager.ConnectionStrings["WebLojaConnection"].ToString();
        }

        public bool CreatProduto(Produto produto)
        {
            bool criado = false;
            SqlConnection connection = new SqlConnection(_conn);
            SqlCommand command = new SqlCommand("INSERT Produtos(Descricao) VALUES (@Descricao)", connection);
            command.CommandType = CommandType.Text;
            command.Parameters.AddWithValue("@Descricao", produto.Descricao);

            int linhaAfetadas = 0;
            connection.Open();
            linhaAfetadas = command.ExecuteNonQuery();
            connection.Close();

            if (linhaAfetadas > 0)
                criado = true;

            return criado;
        }

        public Produto GetOneProduto(int id)
        {
            SqlConnection connection = new SqlConnection(_conn);
            SqlCommand command = new SqlCommand("Select ID, Descricao FROM Produtos WHERE ID = @ID", connection);
            command.CommandType = CommandType.Text;
            command.Parameters.AddWithValue("@ID", id);

            connection.Open();
            SqlDataReader reader = command.ExecuteReader();

            Produto produto = new Produto();
            if(reader.Read())
            {
                produto.ProdutoId = Convert.ToInt32(reader["ID"]);
                produto.Descricao = Convert.ToString(reader["Descricao"]);
            }
            connection.Close();

            return produto;

        }

        public List<Produto> ListProdutos()
        {
            SqlConnection connection = new SqlConnection(_conn);
            SqlCommand command = new SqlCommand("Select ID, Descricao FROM Produtos", connection);

            connection.Open();
            SqlDataReader reader = command.ExecuteReader();

            List<Produto> listProdutos = new List<Produto>();
            while(reader.Read())
            {
                Produto produto = new Produto();
                produto.ProdutoId = Convert.ToInt32(reader["ID"]);
                produto.Descricao = Convert.ToString(reader["Descricao"]);

                listProdutos.Add(produto);
            }
            connection.Close();

            return listProdutos;

        }
    }
}