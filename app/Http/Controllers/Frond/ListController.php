<?php

namespace App\Http\Controllers\Frond;

use App\Http\Controllers\Controller;
use App\Repository\ArticleRepository;
use App\Repository\PhotoRepository;

class ListController extends Controller
{
    private $ArticleRepository;
    private $PhotoRepository;
    public function __construct(ArticleRepository $ArticleRepository,PhotoRepository $PhotoRepository)
    {
        $this->ArticleRepository=$ArticleRepository;
        $this->PhotoRepository=$PhotoRepository;
    }

    public function getListArticleSubcategorie($id){
        $ListArticles=$this->ArticleRepository->getListArticleSubcategorie($id);
        return view('App.Frond.ListArticle')->with(['ListArticles'=>$ListArticles]);
    }
    public function GetDetalleProduct($id){
        $Articles=$this->ArticleRepository->findArticle($id);
        $ListArticlesSubcategories=$this->ArticleRepository->listArticleInteresSubcaptegories($Articles->subcategory_id);
        return view('App.Frond.DetallesArticulo')->with(['ListArticles'=>$Articles,'ListArticlesSubcategories'=>$ListArticlesSubcategories]);
    }
    public function getPhotos($color_id){
        $ListPhotos=$this->PhotoRepository->listPhotos($color_id);
        return response()->json($ListPhotos);
    }

}
