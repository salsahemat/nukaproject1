<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory; // mengisi record tabel database

    private static $products = [
        [
            'id' => 1,
            'name' => 'Vanilla
                         La La',
            'Ingredients' => 'Australian Oat, Water, Salt, Stevia,Vanilla Bean',
            'image_name' => 'Vanilalala.png',
            'Description' => 'This flavours is our best seller one, it taste very 
                              warm and sweet , and it will more sweet if you drink 
                              it with your lovers!',
        ],
        [
            'id' => 2,
            'name' => 'Choco
                        lalate',
            'Ingredients' => 'Australian Oat, Water, Salt,Stevia, Dark Cacao 90%',
            'image_name' => 'Chocolalate.png',
            'Description' => 'This flavors use purely dark cocoa that taste bitter 
                              but sweet at the same time, dont forget to drink it 
                              with your love ones! ',
        ]
    ];

    public static function product()
    {
        return collect(self::$products); // collection memungkinkan kita untuk menggunakan function function yg ada di laravel
    }

    public static function showProduct($id)
    {
        return self::home()->firstWhere('id', $id); //ambil 1 data pertama yg memiliki id yang sama dengan id ini 
    }
}
