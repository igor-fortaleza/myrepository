using System.Collections.Generic;
using System.Web.Mvc;
using WebLoja.BD;
using WebLoja.Models;

namespace WebLoja.Controllers
{
    public class ProdutoController : Controller
    {
        private Db_Produto _db = new Db_Produto();
        // GET: Produto
        public ActionResult Index()
        {
            List<Produto> listprodutos = _db.ListProdutos();
            return View(listprodutos);
        }

        public ActionResult Details(int id)
        {
            Produto produto = _db.GetOneProduto(id);

            return View(produto);
        }

        public ActionResult Edit(int id)
        {
            Produto produto = _db.GetOneProduto(id);

            return View(produto);
        }

        [HttpPost]
        public ActionResult Edit(Produto produto)
        {
            bool result = _db.UpdateProduto(produto);

            return RedirectToAction("Index");
        }

        public ActionResult Create()
        {
            return View();
        }

        [HttpPost]
        public ActionResult Create(Produto produto)
        {
            bool criado = _db.CreatProduto(produto);

            return RedirectToAction("Index");
        }
    }
}