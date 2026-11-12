<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProductController extends Controller
{
    
    public function index()
    {
        $pageTitle = "AllProducts";

        $categories = ["choclet", "Box", "flower"];
        
        $featuredProduct = (object) [
            'name' => 'Book',
            'price' => 22,
        ];
        
        return view('products', ['title' => $pageTitle, 'categories' => $categories, 'featuredProduct' => $featuredProduct]);
    }
}