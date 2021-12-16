<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function viewproducts(){
        $data['products'] = array( ['name'=>'one' ,'price'=>10000],
        ['name'=>'two' ,'price'=>10000],
        ['name'=>'three' ,'price'=>10000]);

        return view('layouts/products',$data);
    }}
