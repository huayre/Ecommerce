<?php

namespace App\Http\Controllers\Frond;

use App\Http\Controllers\Controller;
use App\Repository\ArticleRepository;

class ListController extends Controller
{
    private $ArticleRepository;
    public function __construct(ArticleRepository $ArticleRepository)
    {
        $this->ArticleRepository=$ArticleRepository;
    }

    public function getListArticleSubcategorie($id){
        $ListArticles=$this->ArticleRepository->getListArticleSubcategorie($id);
        return view('App.Frond.ListArticle')->with(['ListArticles'=>$ListArticles]);
    }
    public function GetDetalleProduct($id){
        $Article=$this->ArticleRepository->find($id);
        return view('App.Frond.DetallesArticulo')->with(['Article'=>$Article]);
    }
}
