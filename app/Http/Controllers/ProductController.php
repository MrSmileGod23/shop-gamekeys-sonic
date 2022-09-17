<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Product;
use App\Models\Publisher;
use Illuminate\Http\Request;
use mysql_xdevapi\Table;

class ProductController extends Controller
{
    public function allData()
    {
        return view('home',['data'=>Product::inRandomOrder()->limit(6)->get()]);
    }

    public function getGame($slug_publisher,$slug_genre,$slug_game)
    {
        $random = Product::inRandomOrder()->limit(3)->get();
        $data = Product::where('slug',$slug_game)->first();
        return view('show-game',[
            'data' => $data,
            'random' => $random
        ]);
    }

    public function getPreOrder()
    {
        $ldate = date('Y-m-d');

        $data = Product::where('release','>',$ldate)->inRandomOrder()->paginate(4);
        return view('preorder',[
            'data' => $data
        ]);
    }

    public function getStocks()
    {
        $data = Product::where('discount','>',0)->limit(3)->get();
        $dataMin = Product::orderBy('price','asc')->orderBy('discount','desc')->inRandomOrder()->limit(6)->get();
        return view('stocks',[
            'data' => $data,
            'dataMin' => $dataMin

        ]);
    }

    public function getCatalog()
    {
        $genre = Genre::get();
        $publisher = Publisher::get();
        $data = Product::paginate(3);
        return view('catalog',[
            'genre' => $genre,
            'data' => $data,
            'publisher' => $publisher
        ]);
    }
    public function getCatalogGenre($slug_genre,$id)
    {
        $genre= Genre::get();
        $publisher = Publisher::get();
        $data = Product::where('genre_id',$id)->paginate(3);
        return view('catalog',[
            'genre' => $genre,
            'data' => $data,
            'publisher' => $publisher
        ]);
    }
    public function getCatalogPublisher($slug_publisher,$id)
    {
        $genre= Genre::get();
        $publisher = Publisher::get();
        $data = Product::where('publisher_id',$id)->paginate(3);
        return view('catalog',[
            'genre' => $genre,
            'data' => $data,
            'publisher' => $publisher
        ]);
    }
}
