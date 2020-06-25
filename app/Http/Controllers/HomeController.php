<?php

namespace App\Http\Controllers;

use App\Repository\CarruselRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $CarruselRepository;
    public function __construct(CarruselRepository $CarruselRepository)
    {
        $this->CarruselRepository=$CarruselRepository;

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $ListCarrusel=$this->CarruselRepository->all();
        return view('App.Frond.welcome')->with(['ListCarrusel'=>$ListCarrusel]);
    }
}
