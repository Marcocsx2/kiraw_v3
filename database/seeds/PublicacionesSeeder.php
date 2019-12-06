<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
             'publi_imagen'=>'https://inkamillenium.com/wp-content/uploads/2015/12/banner_1_web.jpg',
             'publi_titulo'=> 'Inka Millennium ',
             'publi_descripcion'=>'Los mejores productos naturales',
             'proveedores_id' => '3',
         ]);

         DB::table('publicaciones')->insert([
             'publi_imagen'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTj-dXiDy87TEAo0TgOf87J9NJ0dDT6HW4nEur10j8N-TMyBClT&s',
             'publi_titulo'=> 'Nutrishake Andino',
             'publi_descripcion'=>'Batidos hechos de productos naturales',
             'proveedores_id' => '4',
         ]);

         DB::table('publicaciones')->insert([
             'publi_imagen'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTQSJuCpUf53z-hZyhravFk-gT7VGu0rOWsCTSehMUCXy_bh65&s',
             'publi_titulo'=> 'Qayna',
             'publi_descripcion'=>'Snacks gourmet peruanos.Es mas que rico.',
             'proveedores_id' => '1',
         ]);

         // publicaciones con Vestidos
         DB::table('publicaciones')->insert([
             'publi_imagen'=>'https://c8.alamy.com/compes/dac3wh/mujer-inca-proveedor-textil-tiende-vende-productos-de-lana-tejida-ropa-ropa-tienda-de-calado-en-el-mercado-local-en-el-centro-de-cusco-peru-dac3wh.jpg',
             'publi_titulo'=> 'Alamy',
             'publi_descripcion'=>'Mujer Inca proveedor textil tiende vende productos de lana tejida ropa',
             'proveedores_id' => '5',
         ]);

         DB::table('publicaciones')->insert([
             'publi_imagen'=>'https://arcoiristurmanye.com/tejidos/img/slideshow/1.jpg',
             'publi_titulo'=> 'TEJIDOS TURMANYÉ ',
             'publi_descripcion'=>'Prendas Que Abrigan Esperanza',
             'proveedores_id' => '6',
         ]);

         DB::table('publicaciones')->insert([
             'publi_imagen'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRILpSXLjnv2MRj1DvbbMvr4zNifGbs22WgCAtpNApz2j6dDsEH&s',
             'publi_titulo'=> 'Peru Textil',
             'publi_descripcion'=>'Empresa Dinámica, conocedora de la diversidad de nuestra material prima para la elaboración de nuestros Productos Textiles',
             'proveedores_id' => '5',
         ]);

         DB::table('publicaciones')->insert([
             'publi_imagen'=>'https://www.mundoalpaca.com.pe/mundoalpacaimages/images/tienda2.jpg',
             'publi_titulo'=> 'Sol Alpaca',
             'publi_descripcion'=>'Sol Alpaca representa una marca exclusiva de Michell & Cia.',
             'proveedores_id' => '6',
         ]);

         DB::table('publicaciones')->insert([
             'publi_imagen'=>'https://media-cdn.tripadvisor.com/media/photo-s/0d/08/db/09/algunos-de-los-disenos.jpg',
             'publi_titulo'=> 'Alpaca Hand Knitwear Montse Badell',
             'publi_descripcion'=>'diseño único y especial, y al mismo tiempo de la mejor calidad y agradables',
             'proveedores_id' => '5',
         ]);

        // // publicaciones con Ceramicas

         DB::table('publicaciones')->insert([
             'publi_imagen'=>'https://i.ytimg.com/vi/Tlt667tgiMU/maxresdefault.jpg',
             'publi_titulo'=> 'Iberartesanias',
             'publi_descripcion'=>'Mejoramos los productos de los artesanos iberoamericanos.',
             'proveedores_id' => '7',
         ]);

         DB::table('publicaciones')->insert([
             'publi_imagen'=>'http://intercraftsperu.com/export/wp-content/uploads/2015/10/visita-dies%C3%B1o-700x441.jpg',
             'publi_titulo'=> 'Intercrafts',
             'publi_descripcion'=>'La artesanía como una herramienta de cambio social.',
             'proveedores_id' => '7',
         ]);

         DB::table('publicaciones')->insert([
             'publi_imagen'=>'https://www.pqs.pe/sites/default/files/styles/852x479/public/2016/04/actualidad/pig_0.jpg?itok=BT6y1CuB',
             'publi_titulo'=> 'Naguska',
             'publi_descripcion'=>'los más finos productos hechos a mano por diseñadores y artesanos peruanos.',
             'proveedores_id' => '7',
         ]);

         DB::table('publicaciones')->insert([
             'publi_imagen'=>'http://www.qala.com.pe/galeria/artesania1g.jpg',
             'publi_titulo'=> 'Qala',
             'publi_descripcion'=>'Espacio dedicado a la exposición de nuestro maravilloso arte peruano,',
             'proveedores_id' => '7',
         ]);

         DB::table('publicaciones')->insert([
             'publi_imagen'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRmL_uOuSARLxtoFaVZ-isAI_fmlIw1MfsWGKgXTDrB7-zqnjJd&s',
             'publi_titulo'=> 'Dedalo',
             'publi_descripcion'=>'Galería de arte y diseño con propuestas de artesania contemporánea.',
             'proveedores_id' => '7',
         ]);

        // // publicaciones con Souvenirs

         DB::table('publicaciones')->insert([
             'publi_imagen'=>'http://picpanzee.com/media/2018579158040600909_1352669056',
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
             'publi_imagen'=>'https://fitosanaperu.com/wp-content/uploads/2017/11/capsula-moringa.jpg',
             'publi_titulo'=> 'Fitosana',
             'publi_descripcion'=>'Medicina hecho a base de productos natural',
             'proveedores_id' => '8',
         ]);

         DB::table('publicaciones')->insert([
             'publi_imagen'=>'https://http2.mlstatic.com/colageno-kaita-D_NQ_NP_815091-MPE25822051884_072017-F.jpg',
             'publi_titulo'=> 'Kaita',
             'publi_descripcion'=>'Productos hechos para el cuidado de la salud, belleza y bienestar.',
             'proveedores_id' => '8',
         ]);

         DB::table('publicaciones')->insert([
             'publi_imagen'=>'https://www.paginasamarillas.com.pe/dbimages/3287824/146885.jpg',
             'publi_titulo'=> 'Santa Natura',
             'publi_descripcion'=>'Productos NAturalmente Peruanos',
             'proveedores_id' => '8',
         ]);

         DB::table('publicaciones')->insert([
             'publi_imagen'=>'http://www.bellanaturaperu.com/images/aceites-de-oliva-bella-natura.jpg',
             'publi_titulo'=> 'Bella Natura',
             'publi_descripcion'=>' Empresa agroindustrial procesadora de alimentos naturales',
             'proveedores_id' => '8',
         ]);

         DB::table('publicaciones')->insert([
             'publi_imagen'=>'https://image.jimcdn.com/app/cms/image/transf/dimension=1820x1280:format=png/path/s87b01a904e649b95/image/i3d3524a25ddc867a/version/1520458181/image.png',
             'publi_titulo'=> 'Yauvana',
             'publi_descripcion'=>'Equilbrio y Sabuduría ancestral para el mundo moderno',
             'proveedores_id' => '8',
         ]);
    }
}
