<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProveedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Alimentos
        DB::table('proveedores')->insert([
            'pro_imagen'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ0V8wDG7_hAfDXJphAx7yGrELn0yrv0Hw6hEdKW_aGoXNpo2yx',
            'pro_nombre'=> 'Cafe lima SAC',
            'pro_descripcion'=>'El sabor del cafe en tu boca',
            'pro_fundacion' => '2010-12-11',
            'pro_telefono'=>'965547852',
            'pro_trabajadores'=>'1245',
            'pro_correo'=>'cafe_lima@gmail.com',
            'pro_contraseña' => bcrypt('coffe123'), 
        ]);
        DB::table('proveedores')->insert([
            'pro_imagen'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR8XxmKDG2xCl32fdYVZX-ouFxF634rVnXIH51HtDQy9KBIny4J',
            'pro_nombre'=> 'El olivar',
            'pro_descripcion'=>'Bueno por naturaleza',
            'pro_fundacion' => '2000-07-05',
            'pro_telefono'=>'988548954',
            'pro_trabajadores'=>'1457',
            'pro_correo'=>'el_olivar@gmail.com',
            'pro_contraseña' => bcrypt('123456789'), 
        ]);
        DB::table('proveedores')->insert([
            'pro_imagen'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT_l66I3rXNguDN5OU7r0ZTUzHW6lpyoVp2aW3HUBBjzuRmXmhg',
            'pro_nombre'=> 'Green Vegan Shop',
            'pro_descripcion'=>'Tiene comida vegana y vegetariana online.',
            'pro_fundacion' => '2011-12-30',
            'pro_telefono'=>'987548625',
            'pro_trabajadores'=>'7894',
            'pro_correo'=>'green_vegan_shop@gmail.com',
            'pro_contraseña' => bcrypt('123456789'), 
        ]);

        DB::table('proveedores')->insert([
            'pro_imagen'=>'http://www.greenbox.pe/wp-content/uploads/2017/02/Maca.png',
            'pro_nombre'=> 'Maca Powder',
            'pro_descripcion'=>'Productos con maca organica.',
            'pro_fundacion' => '1988-08-14',
            'pro_telefono'=>'987568451',
            'pro_trabajadores'=>'2457',
            'pro_correo'=>'maca_powder@gmail.com',
            'pro_contraseña' => bcrypt('123456789'), 
        ]);

        //Vestimentas
        DB::table('proveedores')->insert([
            'pro_imagen'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRYsc3LCv9HeUxOVEP_yWhKrSIsIIuJ12PZwqFiX2apGGbW6pGP',
            'pro_nombre'=> 'Poncho Chalan',
            'pro_descripcion'=>'Acabados muy finos lo mejor de lo mejor, se los recomiendo no se arrepentirán.',
            'pro_fundacion' => '1998-05-25',
            'pro_telefono'=>'963587895',
            'pro_trabajadores'=>'875',
            'pro_correo'=>'poncho_chalan@gmail.com',
            'pro_contraseña' => bcrypt('123456789'), 
        ]);

        DB::table('proveedores')->insert([
            'pro_imagen'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTI3aOBjMT6lw4wWsvNgkIQSX1laZY3zK_Xz66vqKUainzDgcRa',
            'pro_nombre'=> 'KALITEX',
            'pro_descripcion'=>'Somos una empresa dedicada a la fabricación de ropa industrial, uniformes de todo tipo, vestimenta en general y merchandising, que trabaja con personal calificado respetando los requisitos de la legislación nacional vigente.',
            'pro_fundacion' => '1998-05-25',
            'pro_telefono'=>'963587895',
            'pro_trabajadores'=>'875',
            'pro_correo'=>'kalitex@gmail.com',
            'pro_contraseña' => bcrypt('123456789'), 
        ]);

        //Ceramicas

        //Souvenirs

        DB::table('proveedores')->insert([
            'pro_imagen'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQvJlrcFKy7iyNV8ASevMxJu1JtBYTacAW3JHyC8p1hXD4DVgqO',
            'pro_nombre'=> 'LA FESTA',
            'pro_descripcion'=>'LLevamos los acontecimientos diarios a que sean un evento especial',
            'pro_fundacion' => '2016-05-24',
            'pro_telefono'=>'985632547',
            'pro_trabajadores'=>'7458',
            'pro_correo'=>'la_festa@gmail.com',
            'pro_contraseña' => bcrypt('123456789'), 
        ]);


        //Medicinales
        DB::table('proveedores')->insert([
            'pro_imagen'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTyS9hrwcGxMxXui10dNiXNQzEBpESdX0Sz31LR0YkP_-tTbrFg',
            'pro_nombre'=> 'Lemon Pharma',
            'pro_descripcion'=>'Lemon Pharma ofrece remedios naturales de fácil consumo para personas con un estilo de vida #saludable, #natural y #ecológico.',
            'pro_fundacion' => '1998-05-04',
            'pro_telefono'=>'968659632',
            'pro_trabajadores'=>'4257',
            'pro_correo'=>'lemon_pharma@gmail.com',
            'pro_contraseña' => bcrypt('123456789'), 
        ]);


    }
}
