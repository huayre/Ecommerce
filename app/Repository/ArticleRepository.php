<?php


namespace App\Repository;



use App\Article;
use App\Color;
use App\Photo;

class ArticleRepository
{
    public function all()
    {
        return Article::with('subcategorie')->get();
    }

    public function create($data)
    {
       $article= Article::create($data);
       return $article;
    }

    public function update($data, $id)
    {
        $Category=Article::find($id);
        $Category->Update($data);
    }

    public function delete($id)
    {
        $Category=Article::find($id);
        $Category->delete();
    }

    public function find($id)
    {
        return Article::find($id);
    }
    //metodos adicionales
    public function getListArticleSubcategorie($id){

        $ListArticles=Article::with('photos')->where('subcategory_id',$id)->paginate(20);

        return $ListArticles;
    }


}
