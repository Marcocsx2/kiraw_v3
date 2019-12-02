<?php

use Illuminate\Database\Seeder;

class PublicacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // publicaciones con Alimentos

        DB::table('publicaciones')->insert([
            'publi_imagen'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTAevl0ExFq0mn7n0jcDQBmMgSSCtKB25F5wTBYezi1h71_lUs3',
            'publi_titulo'=> 'Cafe Peruano',
            'publi_descripcion'=>'El cafe con el Mejor sabor del todo puto mundo',
            'proveedores_id' => '1',
        ]);

        DB::table('publicaciones')->insert([
            'publi_imagen'=>'https://wongfood.vteximg.com.br/arquivos/ids/163829-230-230/MIXTURA-ACEITUNA--VERDE-PICCASTA%C3%91-PASAS-MIXACEITOLIVAR-1-29594.jpg?v=636409954448000000',
            'publi_titulo'=> 'Aceituna Olivar',
            'publi_descripcion'=>'Las aceitunas de Gonzalo',
            'proveedores_id' => '2',
        ]);
        
        // DB::table('publicaciones')->insert([
        //     'publi_imagen'=>'',
        //     'publi_titulo'=> '',
        //     'publi_descripcion'=>'',
        //     'proveedores_id' => '3',
        // ]);
        
        // DB::table('publicaciones')->insert([
        //     'publi_imagen'=>'',
        //     'publi_titulo'=> '',
        //     'publi_descripcion'=>'',
        //     'proveedores_id' => '4',
        // ]);

        // DB::table('publicaciones')->insert([
        //     'publi_imagen'=>'',
        //     'publi_titulo'=> '',
        //     'publi_descripcion'=>'',
        //     'proveedores_id' => '1',
        // ]);

        // // publicaciones con Vestidos
        // DB::table('publicaciones')->insert([
        //     'publi_imagen'=>'',
        //     'publi_titulo'=> '',
        //     'publi_descripcion'=>'',
        //     'proveedores_id' => '5',
        // ]);

        // DB::table('publicaciones')->insert([
        //     'publi_imagen'=>'',
        //     'publi_titulo'=> '',
        //     'publi_descripcion'=>'',
        //     'proveedores_id' => '6',
        // ]);

        // DB::table('publicaciones')->insert([
        //     'publi_imagen'=>'',
        //     'publi_titulo'=> '',
        //     'publi_descripcion'=>'',
        //     'proveedores_id' => '5',
        // ]);

        // DB::table('publicaciones')->insert([
        //     'publi_imagen'=>'',
        //     'publi_titulo'=> '',
        //     'publi_descripcion'=>'',
        //     'proveedores_id' => '6',
        // ]);

        // DB::table('publicaciones')->insert([
        //     'publi_imagen'=>'',
        //     'publi_titulo'=> '',
        //     'publi_descripcion'=>'',
        //     'proveedores_id' => '5',
        // ]);
        
        // // publicaciones con Ceramicas

        // DB::table('publicaciones')->insert([
        //     'publi_imagen'=>'',
        //     'publi_titulo'=> '',
        //     'publi_descripcion'=>'',
        //     'proveedores_id' => '7',
        // ]);

        // DB::table('publicaciones')->insert([
        //     'publi_imagen'=>'',
        //     'publi_titulo'=> '',
        //     'publi_descripcion'=>'',
        //     'proveedores_id' => '7',
        // ]);

        // DB::table('publicaciones')->insert([
        //     'publi_imagen'=>'',
        //     'publi_titulo'=> '',
        //     'publi_descripcion'=>'',
        //     'proveedores_id' => '7',
        // ]);

        // DB::table('publicaciones')->insert([
        //     'publi_imagen'=>'',
        //     'publi_titulo'=> '',
        //     'publi_descripcion'=>'',
        //     'proveedores_id' => '7',
        // ]);

        // DB::table('publicaciones')->insert([
        //     'publi_imagen'=>'',
        //     'publi_titulo'=> '',
        //     'publi_descripcion'=>'',
        //     'proveedores_id' => '7',
        // ]);
        // // publicaciones con Souvenirs

        // DB::table('publicaciones')->insert([
        //     'publi_imagen'=>'',
        //     'publi_titulo'=> '',
        //     'publi_descripcion'=>'',
        //     'proveedores_id' => '7',
        // ]);

        // DB::table('publicaciones')->insert([
        //     'publi_imagen'=>'',
        //     'publi_titulo'=> '',
        //     'publi_descripcion'=>'',
        //     'proveedores_id' => '7',
        // ]);

        // DB::table('publicaciones')->insert([
        //     'publi_imagen'=>'',
        //     'publi_titulo'=> '',
        //     'publi_descripcion'=>'',
        //     'proveedores_id' => '7',
        // ]);

        // DB::table('publicaciones')->insert([
        //     'publi_imagen'=>'',
        //     'publi_titulo'=> '',
        //     'publi_descripcion'=>'',
        //     'proveedores_id' => '7',
        // ]);

        // DB::table('publicaciones')->insert([
        //     'publi_imagen'=>'',
        //     'publi_titulo'=> '',
        //     'publi_descripcion'=>'',
        //     'proveedores_id' => '7',
        // ]);
        // // publicaciones con Medicinales

        // DB::table('publicaciones')->insert([
        //     'publi_imagen'=>'',
        //     'publi_titulo'=> '',
        //     'publi_descripcion'=>'',
        //     'proveedores_id' => '8',
        // ]);

        // DB::table('publicaciones')->insert([
        //     'publi_imagen'=>'',
        //     'publi_titulo'=> '',
        //     'publi_descripcion'=>'',
        //     'proveedores_id' => '8',
        // ]);

        // DB::table('publicaciones')->insert([
        //     'publi_imagen'=>'',
        //     'publi_titulo'=> '',
        //     'publi_descripcion'=>'',
        //     'proveedores_id' => '8',
        // ]);

        // DB::table('publicaciones')->insert([
        //     'publi_imagen'=>'',
        //     'publi_titulo'=> '',
        //     'publi_descripcion'=>'',
        //     'proveedores_id' => '8',
        // ]);

        // DB::table('publicaciones')->insert([
        //     'publi_imagen'=>'',
        //     'publi_titulo'=> '',
        //     'publi_descripcion'=>'',
        //     'proveedores_id' => '8',
        // ]);
    }
}
