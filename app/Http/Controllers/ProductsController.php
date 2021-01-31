<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function products(){
        $contenuP =
            [
                (object)[
                'span1'=> 'Blended to Perfection',
                'span2'=>'Coffees &amp; Teas',
                'monp1'=>"We take pride in our work, and it shows. Every time you order a beverage from us, we guarantee that it will be an experience worth having. Whether it's our world famous Venezuelan Cappuccino, a refreshing iced herbal tea, or something as simple as a cup of speciality sourced black coffee, you will be coming back for more."],

                (object)['span1'=>'Delicious Treats, Good Eats',
                'span2'=>'Bakery &amp; Kitchen',
                'monp1'=>"Our seasonal menu features delicious snacks, baked goods, and even full meals perfect for breakfast or lunchtime. We source our ingredients from local, oragnic farms whenever possible, alongside premium vendors for specialty goods."],
                (object)[
                'span1'=>'From Around the World',
                'span2'=>'Bulk Speciality Blends',
                'monp1'=>"Travelling the world for the very best quality coffee is something take pride in.When you visit us, you'll always find new blends from around the world, mainly from regionsin Central and South America. We sell our blends in smaller to large bulk quantities.Please visit us in person for more details."]

            ];


          

        
        return view('page/products', compact('contenuP'));
    }
}
