<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $product = new Product([
            'imageUrl'=>'images/coca_cola.png',
            'name'=>'Coca Cola',
            'price'=>500
        ]);
        $product->save();

        $product = new Product([
            'imageUrl'=>'images/world_cola.png',
            'name'=>'World Cola',
            'price'=>500
        ]);
        $product->save();
        
        $product = new Product([
            'imageUrl'=>'images/chap_cocktail.png',
            'name'=>'Chap Cocktail',
            'price'=>400
        ]);
        $product->save();
        
        $product = new Product([
            'imageUrl'=>'images/chap_cola.png',
            'name'=>'Chap Cola',
            'price'=>400
        ]);
        $product->save();
        
        $product = new Product([
            'imageUrl'=>'images/chap_lemon.png',
            'name'=>'Chap Lemon',
            'price'=>400
        ]);
        $product->save();
        
        $product = new Product([
            'imageUrl'=>'images/chap_lemonade.png',
            'name'=>'Chap Lemonade',
            'price'=>400
        ]);
        $product->save();
        
        $product = new Product([
            'imageUrl'=>'images/fanta_orange.png',
            'name'=>'Fanta Orange',
            'price'=>500
        ]);
        $product->save();
        
        $product = new Product([
            'imageUrl'=>'images/malta_tonic.png',
            'name'=>'Malta Tonic',
            'price'=>400
        ]);
        $product->save();
        
        $product = new Product([
            'imageUrl'=>'images/sprite.png',
            'name'=>'Sprite',
            'price'=>500
        ]);
        $product->save();
        
        $product = new Product([
            'imageUrl'=>'images/youki_cocktail.png',
            'name'=>'Youki Cocktail',
            'price'=>500
        ]);
        $product->save();
        
        $product = new Product([
            'imageUrl'=>'images/youki_orange.png',
            'name'=>'Youki Orange',
            'price'=>500
        ]);
        $product->save();
        
        $product = new Product([
            'imageUrl'=>'images/youki_pompom.png',
            'name'=>'Youki Pom-Pom',
            'price'=>500
        ]);
        $product->save();

        $product = new Product([
            'imageUrl'=>'images/youzou.png',
            'name'=>'Youzou',
            'price'=>500
        ]);
        $product->save();

        
        $product = new Product([
            'imageUrl'=>'images/chill.png',
            'name'=>'Chill Citron',
            'price'=>500
        ]);
        $product->save();
        
        $product = new Product([
            'imageUrl'=>'images/racine.png',
            'name'=>'Racine',
            'price'=>500
        ]);
        $product->save();
        
        $product = new Product([
            'imageUrl'=>'images/djama_panache.png',
            'name'=>'Djama Panaché',
            'price'=>600
        ]);
        $product->save();
        
        $product = new Product([
            'imageUrl'=>'images/djama.png',
            'name'=>'Djama 228',
            'price'=>600
        ]);
        $product->save();
        
        $product = new Product([
            'imageUrl'=>'images/djama_lager.png',
            'name'=>'Djama Lager',
            'price'=>600
        ]);
        $product->save();
        
        $product = new Product([
            'imageUrl'=>'images/djama_pils.png',
            'name'=>'Djama Pils',
            'price'=>600
        ]);
        $product->save();
        
        $product = new Product([
            'imageUrl'=>'images/beaufort.png',
            'name'=>'Beaufort',
            'price'=>600
        ]);
        $product->save();
        
        $product = new Product([
            'imageUrl'=>'images/lager.png',
            'name'=>'Lager',
            'price'=>500
        ]);
        $product->save();
        
        $product = new Product([
            'imageUrl'=>'images/pils.png',
            'name'=>'Pils',
            'price'=>600
        ]);
        $product->save();
        
        $product = new Product([
            'imageUrl'=>'images/doppel.png',
            'name'=>'Doppel',
            'price'=>600
        ]);
        $product->save();

        $product = new Product([
            'imageUrl'=>'images/guinness.png',
            'name'=>'Guinness',
            'price'=>600
        ]);
        $product->save();
        
        $product = new Product([
            'imageUrl'=>'images/awooyo.png',
            'name'=>'Awooyo',
            'price'=>600
        ]);
        $product->save();

        $product = new Product([
            'imageUrl'=>'images/flag.png',
            'name'=>'Flag',
            'price'=>600
        ]);
        $product->save();

        $product = new Product([
            'imageUrl'=>'images/castel_beer.png',
            'name'=>'Castel Beer',
            'price'=>600
        ]);
        $product->save();

        $product = new Product([
            'imageUrl'=>'images/tequila.png',
            'name'=>'Booster Tequila',
            'price'=>500
        ]);
        $product->save();

    }
}
