<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // DB::table('productos')->insert([
        //     'prod_imagen'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRww_myYP0wptEvB9k_V8r7jnwbeFZjHsWpv5kRkKGSWq4G89YP', 
        //     'prod_nombre'=>'Cafe', 
        //     'prod_precio'=>'12.0', 
        //     'prod_stock'=>'124', 
        //     'prod_descripcion'=>'Cafe elaborado con los granos de cafe, producidos en el Perú.',
        //     'categorias_id'=>'1',
        //     'proveedores_id'=>'1'    
        // ]);

        DB::table('productos')->insert([
            'prod_imagen'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRww_myYP0wptEvB9k_V8r7jnwbeFZjHsWpv5kRkKGSWq4G89YP', 
            'prod_nombre'=>'Leche', 
            'prod_precio'=>'12.0', 
            'prod_stock'=>'124', 
            'prod_descripcion'=>'Cafe elaborado con los granos de cafe, producidos en el Perú.',
            'categorias_id'=>'1',
            'proveedores_id'=>'1'    
        ]);

        DB::table('productos')->insert([
            'prod_imagen'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRww_myYP0wptEvB9k_V8r7jnwbeFZjHsWpv5kRkKGSWq4G89YP', 
            'prod_nombre'=>'Chocolate', 
            'prod_precio'=>'14.0', 
            'prod_stock'=>'4874', 
            'prod_descripcion'=>'Chocolates con cacao peruano',
            'categorias_id'=>'1',
            'proveedores_id'=>'2'    
        ]);
    }
}
