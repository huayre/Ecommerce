<?php

namespace App\Http\Controllers\Frond;

use App\Http\Controllers\Controller;
use App\Repository\ArticleRepository;
use App\Repository\CarruselRepository;
use App\Repository\CategoryRepository;
use Illuminate\Http\Request;

class ListController extends Controller
{
    private $ArticleRepository;
    private $CategoryRepository;
    private $CarruselRepository;
    public function __construct(ArticleRepository $ArticleRepository,CategoryRepository $CategoryRepository,CarruselRepository $CarruselRepository)
    {
        $this->ArticleRepository=$ArticleRepository;
        $this->CategoryRepository=$CategoryRepository;
        $this->CarruselRepository=$CarruselRepository;
    }

    public function getListArticleSubcategorie($id){
        $ListArticles=$this->ArticleRepository->getListArticleSubcategorie($id);
        $ListCarrusel=$this->CarruselRepository->all();
        return view('App.Frond.ListArticle')->with(['ListArticles'=>$ListArticles,'ListCarrusel'=>$ListCarrusel]);
    }
}
