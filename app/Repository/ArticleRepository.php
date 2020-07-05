<?php


namespace App\Repository;



use App\Article;
use App\Color;
use App\Size;

class ArticleRepository
{
    public function all()
    {
        return Article::with('subcategorie')->get();
    }

    public function create($data)
    {

       $article= Article::create($data->all());
       $contador=0;
       while ($contador<count($data->size)){
           $article->sizes()->attach($data->size[$contador]);
           $contador++;
       }
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

    public function GetArticulosMasVendidos(){
        $ListArticles=Article::with('photos')->get();
        return $ListArticles->random(6);
    }
    public function findArticle($id)
    {
        return Article::with('photos','colors')->find($id);
    }
    public  function allSizes(){
        return Size::all();
    }


}
