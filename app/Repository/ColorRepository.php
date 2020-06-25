<?php


namespace App\Repository;


use App\Color;
use App\Size;

class ColorRepository implements BaseRepository
{
    public function all()
    {
        return Color::all();
    }

    public function create($data)
    {
        Color::create($data);
    }

    public function update($data, $id)
    {
        $Category=Color::find($id);
        $Category->Update($data);
    }

    public function delete($id)
    {
        $Category=Color::find($id);
        $Category->delete();
    }

    public function find($id)
    {
        return Color::find($id);
    }

    public  function listSizes(){
        return Size::all();
    }
    public function listColor($id){
        return Color::where('article_id',$id)->get();
    }

}
