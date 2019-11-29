<?php

use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categorias')->insert([
            'cat_nombre'=>'Alimentos'
        ]);
        DB::table('categorias')->insert([
            'cat_nombre'=>'Vestimentas'
        ]);
        DB::table('categorias')->insert([
            'cat_nombre'=>'Ceramicas'
        ]);
        DB::table('categorias')->insert([
            'cat_nombre'=>'Souvenirs'
        ]);
        DB::table('categorias')->insert([
            'cat_nombre'=>'Medicinales'
        ]);
    }
}
