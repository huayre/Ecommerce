<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormRequestArticle;
use App\Repository\ArticleRepository;
use App\Repository\SubCategoryRepository;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $ArticleRepository;
    private $SubCategoryRepository;
    public function __construct(ArticleRepository $ArticleRepository,SubCategoryRepository $SubCategoryRepository)
    {
        $this->ArticleRepository=$ArticleRepository;
        $this->SubCategoryRepository=$SubCategoryRepository;
    }

    public function index()
    {
        $ListArticle=$this->ArticleRepository->all();
        return view('App.Admin.article.index',compact('ListArticle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ListaSubCategorias=$this->SubCategoryRepository->all();
        $ListSizes=$this->ArticleRepository->allSizes();
        return view('App.Admin.article.create')->with(['ListaSubCategorias'=>$ListaSubCategorias,'ListSizes'=>$ListSizes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormRequestArticle $request)
    {
      $this->ArticleRepository->create($request->validated());
        toastr()->success('El producto fue registrado correctamente!');
      return redirect()->route('article.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
