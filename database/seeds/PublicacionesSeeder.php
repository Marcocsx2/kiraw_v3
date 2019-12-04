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
            'publi_descripcion'=>'El cafe con el Mejor sabor del Peru para el mundo',
            'proveedores_id' => '1',
        ]);

        DB::table('publicaciones')->insert([
            'publi_imagen'=>'https://wongfood.vteximg.com.br/arquivos/ids/163829-230-230/MIXTURA-ACEITUNA--VERDE-PICCASTA%C3%91-PASAS-MIXACEITOLIVAR-1-29594.jpg?v=636409954448000000',
            'publi_titulo'=> 'Aceituna Olivar',
            'publi_descripcion'=>'Las aceitunas de Gonzalo',
            'proveedores_id' => '2',
        ]);
        
         DB::table('publicaciones')->insert([
             'publi_imagen'=>'https://www.observatorioambiental.net/es/download_file.cfm?file=281&entry=1883',
             'publi_titulo'=> 'Juan Bullejos',
             'publi_descripcion'=>'Suministro Especializado en alimentos',
             'proveedores_id' => '3',
         ]);
        
         DB::table('publicaciones')->insert([
             'publi_imagen'=>'http://www.ecowasi.com/images/logo_big.png',
             'publi_titulo'=> 'Ecowasi',
             'publi_descripcion'=>'Los productos naturales elaborados por nosostros mismos',
             'proveedores_id' => '4',
         ]);

         DB::table('publicaciones')->insert([
             'publi_imagen'=>'https://goya.es/wp-content/uploads/2017/05/logo_goya.png',
             'publi_titulo'=> 'Goya',
             'publi_descripcion'=>'Si es Goya ...tiene que ser bueno',
             'proveedores_id' => '1',
         ]);

         // publicaciones con Vestidos
         DB::table('publicaciones')->insert([
             'publi_imagen'=>'https://fabricantes.gamarra.com.pe/wp-content/uploads/2010/01/LOGO-OKEY-UNIFORMES.jpg',
             'publi_titulo'=> 'Okey',
             'publi_descripcion'=>'Una empresa especializada en la confeccion de ropa industrial',
             'proveedores_id' => '5',
         ]);

         DB::table('publicaciones')->insert([
             'publi_imagen'=>'https://fabricantes.gamarra.com.pe/wp-content/uploads/2018/10/ASC.jpeg',
             'publi_titulo'=> 'CONFETEXTILES PERU SAC',
             'publi_descripcion'=>'Empresa Peruana en la cual nos dedicamos a la confección de artículos textiles',
             'proveedores_id' => '6',
         ]);

         DB::table('publicaciones')->insert([
             'publi_imagen'=>'http://perupymes.com/pymes/img/5bc468_PT9.jpg',
             'publi_titulo'=> 'Peru Textil',
             'publi_descripcion'=>'Empresa Dinámica, conocedora de la diversidad de nuestra material prima para la elaboración de nuestros Productos Textiles',
             'proveedores_id' => '5',
         ]);

         DB::table('publicaciones')->insert([
             'publi_imagen'=>'https://fabricantes.gamarra.com.pe/wp-content/uploads/2018/09/Vintex-Confecciones.jpg',
             'publi_titulo'=> 'Vintex',
             'publi_descripcion'=>'Dedicada a la fabricación y confección de uniformes',
             'proveedores_id' => '6',
         ]);

         DB::table('publicaciones')->insert([
             'publi_imagen'=>'https://media-cdn.tripadvisor.com/media/photo-s/0e/6e/0c/cb/tienda-en-calle-palacio.j',
             'publi_titulo'=> 'Alpaca Hand Knitwear Montse Badell',
             'publi_descripcion'=>'diseño único y especial, y al mismo tiempo de la mejor calidad y agradables',
             'proveedores_id' => '5',
         ]);
        
        // // publicaciones con Ceramicas

         DB::table('publicaciones')->insert([
             'publi_imagen'=>'https://iberartesanias.com/wp-content/uploads/2017/12/logo2.png',
             'publi_titulo'=> 'Iberartesanias',
             'publi_descripcion'=>'Mejoramos los productos de los artesanos iberoamericanos.',
             'proveedores_id' => '7',
         ]);

         DB::table('publicaciones')->insert([
             'publi_imagen'=>'http://www.kunan.com.pe/wp-content/uploads/2018/01/Kani.png',
             'publi_titulo'=> 'Kunan',
             'publi_descripcion'=>'La artesanía como una herramienta de cambio social.',
             'proveedores_id' => '7',
         ]);

         DB::table('publicaciones')->insert([
             'publi_imagen'=>'http://naguska.com/app/img/inicio/logo2.jpg',
             'publi_titulo'=> 'Naguska',
             'publi_descripcion'=>'los más finos productos hechos a mano por diseñadores y artesanos peruanos.',
             'proveedores_id' => '7',
         ]);

         DB::table('publicaciones')->insert([
             'publi_imagen'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTyCSTUVAKCLLRrl0485YpdUoDjKBPihS08nICQ_CgckU9DtIHk&s',
             'publi_titulo'=> 'Qala',
             'publi_descripcion'=>'Espacio dedicado a la exposición de nuestro maravilloso arte peruano,',
             'proveedores_id' => '7',
         ]);

         DB::table('publicaciones')->insert([
             'publi_imagen'=>'https://www.larcomar.com/wp-content/uploads/2016/05/logo-tienda-26.png',
             'publi_titulo'=> 'Dedalo',
             'publi_descripcion'=>'Galería de arte y diseño con propuestas de artesania contemporánea.',
             'proveedores_id' => '7',
         ]);
        
        // // publicaciones con Souvenirs

         DB::table('publicaciones')->insert([
             'publi_imagen'=>'https://pbs.twimg.com/profile_images/629682964582891522/KNmlMNEC.jpg',
             'publi_titulo'=> 'Quiyara',
             'publi_descripcion'=>'Tus recuerdos lo llevarás da donde vas',
             'proveedores_id' => '7',
         ]);

        //  DB::table('publicaciones')->insert([
        //      'publi_imagen'=>'',
        //      'publi_titulo'=> '',
        //      'publi_descripcion'=>'',
        //      'proveedores_id' => '7',
        //  ]);

        //  DB::table('publicaciones')->insert([
        //      'publi_imagen'=>'',
        //      'publi_titulo'=> '',
        //      'publi_descripcion'=>'',
        //      'proveedores_id' => '7',
        //  ]);

        //  DB::table('publicaciones')->insert([
        //      'publi_imagen'=>'',
        //      'publi_titulo'=> '',
        //      'publi_descripcion'=>'',
        //      'proveedores_id' => '7',
        //  ]);

        //  DB::table('publicaciones')->insert([
        //      'publi_imagen'=>'',
        //      'publi_titulo'=> '',
        //      'publi_descripcion'=>'',
        //      'proveedores_id' => '7',
        //  ]);
        // // publicaciones con Medicinales

         DB::table('publicaciones')->insert([
             'publi_imagen'=>'http://cuponpe.s3-website-us-east-1.amazonaws.com/uploads/logos_empresas/56a0c93eb392f418192cbe06eeb59093b67a219c.png',
             'publi_titulo'=> 'Fitosana',
             'publi_descripcion'=>'Medicina hecho a base de productos natural',
             'proveedores_id' => '8',
         ]);

         DB::table('publicaciones')->insert([
             'publi_imagen'=>'http://plusempresarial.com/wp-content/uploads/2015/07/La-historia-de-Kaita-y-el-%C3%A9xito-saludable.jpg',
             'publi_titulo'=> 'Kaita',
             'publi_descripcion'=>'Productos hechos para el cuidado de la salud, belleza y bienestar.',
             'proveedores_id' => '8',
         ]);

         DB::table('publicaciones')->insert([
             'publi_imagen'=>'http://agustinoplaza.pe/wp-content/uploads/2018/04/santa-natura.png',
             'publi_titulo'=> 'Santa Natura',
             'publi_descripcion'=>'Productos NAturalmente Peruanos',
             'proveedores_id' => '8',
         ]);

         DB::table('publicaciones')->insert([
             'publi_imagen'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTyNbj9oZdZ2PJXZMIrbDVgcVRKye39Lja-fXjmkuOxHWSiV01-&s',
             'publi_titulo'=> 'Bella Natura',
             'publi_descripcion'=>' Empresa agroindustrial procesadora de alimentos naturales',
             'proveedores_id' => '8',
         ]);

         DB::table('publicaciones')->insert([
             'publi_imagen'=>'https://s3.amazonaws.com/storage.wobiz.com/69/69730/images/Original/1571013991_aa1a5ab282432645a4ef93ba28b833cd.69730.png',
             'publi_titulo'=> 'Yauvana',
             'publi_descripcion'=>'Equilbrio y Sabuduría ancestral para el mundo moderno',
             'proveedores_id' => '8',
         ]);
    }
}
