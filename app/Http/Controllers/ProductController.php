<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;

//controller utk aplikasi crud 
class ProductController extends Controller
{
    //kebanyakan controller punya function index yg tujuannya utk mereturn data
    //function tidak akan jauh dari crud. 
    public function product(){
        return view('product', [
            'pagetitle' => 'Products',
            'maintitle' => 'Choose Yo! Flavours',
            'products' => Products::product() //asosiatif array untuk mengambil semua data
        ]);
    }

    public function show($id){
        return view('show', [
            'pagetitle' => 'Product',
            'maintitle1' => 'Best Seller',
            'maintitle1' => 'Favoritos!',
            'product' => Products::showProduct($id) //ambil satu writer dengan memanggil function nya yang memiliki id 
        ]);
    }
}

