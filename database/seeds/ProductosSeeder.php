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

        //Cafe Lima SAC

        DB::table('productos')->insert([
            'prod_imagen'=>'https://static.wixstatic.com/media/f13586_f78b48be705441f191fd33871a4fed81~mv2.png/v1/crop/x_0,y_119,w_727,h_485/fill/w_872,h_582,al_c,lg_1,q_85/f13586_f78b48be705441f191fd33871a4fed81~mv2.webp',
            'prod_nombre'=>'Cafe puro',
            'prod_precio'=>'12',
            'prod_stock'=>'124',
            'prod_descripcion'=>'Cafe elaborado con los granos de cafe, producidos en el Perú.',
            'categorias_id'=>'1',
            'proveedores_id'=>'1'
        ]);

        DB::table('productos')->insert([
            'prod_imagen'=>'https://static.wixstatic.com/media/6fb7a82098b749b8bd98773dc3bf6aea.jpg/v1/fill/w_900,h_600,al_c,q_85,usm_0.66_1.00_0.01/6fb7a82098b749b8bd98773dc3bf6aea.webp',
            'prod_nombre'=>'Pan selecto',
            'prod_precio'=>'2',
            'prod_stock'=>'200',
            'prod_descripcion'=>'Riquisima y crocante realizado por manos expertas,con una coccion en su punto',
            'categorias_id'=>'1',
            'proveedores_id'=>'1'
        ]);

        DB::table('productos')->insert([
            'prod_imagen'=>'https://media-cdn.tripadvisor.com/media/photo-s/18/c7/a0/05/photo1jpg.jpg',
            'prod_nombre'=>'Desayuno consistente',
            'prod_precio'=>'15',
            'prod_stock'=>'30',
            'prod_descripcion'=>'Consta de huevo,palta y tostada excelente para comenzar el día',
            'categorias_id'=>'1',
            'proveedores_id'=>'1'
        ]);

        DB::table('productos')->insert([
            'prod_imagen'=>'https://media-cdn.tripadvisor.com/media/photo-l/17/25/a8/f7/photo0jpg.jpg',
            'prod_nombre'=>'Riquisimo pastel de chocolate',
            'prod_precio'=>'14',
            'prod_stock'=>'40',
            'prod_descripcion'=>'Que  mejor para complementar tu cafe que con nosotros',
            'categorias_id'=>'1',
            'proveedores_id'=>'1'
        ]);

        DB::table('productos')->insert([
            'prod_imagen'=>'https://media-cdn.tripadvisor.com/media/photo-l/16/8c/1d/b3/cafe-de-lima.jpg',
            'prod_nombre'=>'Desayuno natural',
            'prod_precio'=>'18',
            'prod_stock'=>'20',
            'prod_descripcion'=>'Una rica mezcla de verduras para el comienzo del dia ',
            'categorias_id'=>'1',
            'proveedores_id'=>'1'
        ]);

        DB::table('productos')->insert([
            'prod_imagen'=>'https://media-cdn.tripadvisor.com/media/photo-f/17/b3/3a/c1/pratos-com-boa-apresentacao.jpg',
            'prod_nombre'=>'Wafles gigante',
            'prod_precio'=>'17',
            'prod_stock'=>'30',
            'prod_descripcion'=>'Riquisimos wafles con una riquisima mezcla de frutas y postres',
            'categorias_id'=>'1',
            'proveedores_id'=>'1'
        ]);

        // El Olivar

        DB::table('productos')->insert([
            'prod_imagen'=>'https://wongfood.vteximg.com.br/arquivos/ids/223685-1000-1000/32783-01-7489.jpg?v=636625980787200000',
            'prod_nombre'=>'Aceite de oliva extra virgen',
            'prod_precio'=>'40',
            'prod_stock'=>'100',
            'prod_descripcion'=>'Lo mejor para acompañar a las ensaladas',
            'categorias_id'=>'1',
            'proveedores_id'=>'2'
        ]);

        DB::table('productos')->insert([
            'prod_imagen'=>'https://wongfood.vteximg.com.br/arquivos/ids/276408-750-750/Aceite-Ajonjoli-Olivos-Del-Sur-100-ml-1-117144.jpg?v=636862176333300000',
            'prod_nombre'=>'Aceite de ajonjoli',
            'prod_precio'=>'50',
            'prod_stock'=>'30',
            'prod_descripcion'=>'Aceite bajo en grasas y con nutrientes para tu salud',
            'categorias_id'=>'1',
            'proveedores_id'=>'2'
        ]);

        DB::table('productos')->insert([
            'prod_imagen'=>'https://wongfood.vteximg.com.br/arquivos/ids/223686-1000-1000/244633-01-7491.jpg?v=636625980790900000',
            'prod_nombre'=>'Aceite de oliva extravirgen intenso',
            'prod_precio'=>'50',
            'prod_stock'=>'100',
            'prod_descripcion'=>'Aceite que ya conoces pero con una concentracion mas al ta',
            'categorias_id'=>'1',
            'proveedores_id'=>'2'
        ]);

        DB::table('productos')->insert([
            'prod_imagen'=>'https://wongfood.vteximg.com.br/arquivos/ids/226269-750-750/44067-1.jpg?v=636637212025600000',
            'prod_nombre'=>'Aceite de oliva virgen extra suave',
            'prod_precio'=>'50',
            'prod_stock'=>'200',
            'prod_descripcion'=>'Aceite de manera natural y no dañina para tu salud ,pero con suave concentracion',
            'categorias_id'=>'1',
            'proveedores_id'=>'2'
        ]);

        DB::table('productos')->insert([
            'prod_imagen'=>'https://wongfood.vteximg.com.br/arquivos/ids/231949-750-750/253823004-1.jpg?v=636670996553270000',
            'prod_nombre'=>'Aceite de oliva extravirgen con ajos',
            'prod_precio'=>'60',
            'prod_stock'=>'120',
            'prod_descripcion'=>'Este aceite te ayudara en gran medida para tus ensaladas y con un toque de ajo para brindar mas sabor',
            'categorias_id'=>'1',
            'proveedores_id'=>'2'
        ]);

        DB::table('productos')->insert([
            'prod_imagen'=>'https://wongfood.vteximg.com.br/arquivos/ids/231897-750-750/18703-1.jpg?v=636670910610430000',
            'prod_nombre'=>'Aceite de oliva virgen',
            'prod_precio'=>'40',
            'prod_stock'=>'300',
            'prod_descripcion'=>'Este el aceite en su presentacion estandar ya conocido por nuestros clientes',
            'categorias_id'=>'1',
            'proveedores_id'=>'2'
        ]);

        //Green Vegan Shop

        DB::table('productos')->insert([
            'prod_imagen'=>'https://www.hogarmania.com/archivos/201207/tofu-2-xl-156x125x80xX.jpg',
            'prod_nombre'=>'Tofu',
            'prod_precio'=>'15',
            'prod_stock'=>'300',
            'prod_descripcion'=>'El tofu es una buena fuente de proteínas de calidad, calcio y minerales',
            'categorias_id'=>'1',
            'proveedores_id'=>'3'
        ]);

        DB::table('productos')->insert([
            'prod_imagen'=>'https://www.hogarmania.com/archivos/201105/tempeh-xl-156x125x80xX.jpgj ',
            'prod_nombre'=>'Tempeh',
            'prod_precio'=>'20',
            'prod_stock'=>'150',
            'prod_descripcion'=>'Posee bastante fibra y vitaminas para tu salud',
            'categorias_id'=>'1',
            'proveedores_id'=>'3'
        ]);

        DB::table('productos')->insert([
            'prod_imagen'=>'https://www.hogarmania.com/archivos/201207/seitan-156x125x80xX.jpg',
            'prod_nombre'=>'Seitan',
            'prod_precio'=>'15',
            'prod_stock'=>'120',
            'prod_descripcion'=>'Mas conocido como carne vegetal ayuda mucho a la nutricion de quienes la consumen',
            'categorias_id'=>'1',
            'proveedores_id'=>'3'
        ]);

        DB::table('productos')->insert([
            'prod_imagen'=>'https://www.hogarmania.com/archivos/201204/tahini-perejil-xl-156x125x80xX.jpg',
            'prod_nombre'=>'Tahini',
            'prod_precio'=>'15',
            'prod_stock'=>'30',
            'prod_descripcion'=>'Crema de sésamo rica en calcio y hierro',
            'categorias_id'=>'1',
            'proveedores_id'=>'3'
        ]);

        DB::table('productos')->insert([
            'prod_imagen'=>'https://www.hogarmania.com/archivos/201207/agar-agar-156x125x80xX.jpg',
            'prod_nombre'=>'Agar agar',
            'prod_precio'=>'30',
            'prod_stock'=>'120',
            'prod_descripcion'=>'Es una rica gelatina nutritiva hecha a partir de restos oseos ',
            'categorias_id'=>'1',
            'proveedores_id'=>'3'
        ]);

        DB::table('productos')->insert([
            'prod_imagen'=>'https://www.hogarmania.com/archivos/201207/algarroba1-xl-156x125x80xX.jpg',
            'prod_nombre'=>'Algarrobina',
            'prod_precio'=>'15',
            'prod_stock'=>'130',
            'prod_descripcion'=>'Sustituto de los azucares dañinos para la salud y nos produce la misma sensacion de sabor',
            'categorias_id'=>'1',
            'proveedores_id'=>'3'
        ]);

        // Maca Powder

        DB::table('productos')->insert([
            'prod_imagen'=>'https://cdn.shortpixel.ai/spai2/w_300+q_lossy+ret_img+to_webp/https://top10supps.com/wp-content/uploads/2016/11/Navitas-Naturals-Organic-Raw-Maca-1.jpg',
            'prod_nombre'=>'Maca navitas naturals',
            'prod_precio'=>'100',
            'prod_stock'=>'120',
            'prod_descripcion'=>'Producto nutritivo y facil de digerir',
            'categorias_id'=>'1',
            'proveedores_id'=>'4'
        ]);

        DB::table('productos')->insert([
            'prod_imagen'=>'https://cdn.shortpixel.ai/spai2/w_300+q_lossy+ret_img+to_webp/https://top10supps.com/wp-content/uploads/2016/11/HealthWorks-Maca-Root-Powder.jpg',
            'prod_nombre'=>'Maca healts works',
            'prod_precio'=>'120',
            'prod_stock'=>'200',
            'prod_descripcion'=>'Producto sin gluten y certificado',
            'categorias_id'=>'1',
            'proveedores_id'=>'4'
        ]);

        DB::table('productos')->insert([
            'prod_imagen'=>'https://cdn.shortpixel.ai/spai2/w_300+q_lossy+ret_img+to_webp/https://top10supps.com/wp-content/uploads/2016/11/The-Maca-Team-Organic-Red-Maca-Root-Powder.jpg',
            'prod_nombre'=>'Maca roja ',
            'prod_precio'=>'120',
            'prod_stock'=>'150',
            'prod_descripcion'=>'Producto orgánico alto en vitaminas y minerales',
            'categorias_id'=>'1',
            'proveedores_id'=>'4'
        ]);

        DB::table('productos')->insert([
            'prod_imagen'=>'https://cdn.shortpixel.ai/spai2/w_300+q_lossy+ret_img+to_webp/https://top10supps.com/wp-content/uploads/2016/11/Gaia-Herbs-Gelatinized-Maca-Powder-1.jpg',
            'prod_nombre'=>'Maca gelatinizada',
            'prod_precio'=>'300',
            'prod_stock'=>'3000',
            'prod_descripcion'=>'Producto vegeterariano y sin gluten',
            'categorias_id'=>'1',
            'proveedores_id'=>'4'
        ]);

        DB::table('productos')->insert([
            'prod_imagen'=>'https://cdn.shortpixel.ai/spai2/w_300+q_lossy+ret_img+to_webp/https://top10supps.com/wp-content/uploads/2016/11/Gaia-Herbs-Maca-Root-Capsules.jpg',
            'prod_nombre'=>'Maca en capsula',
            'prod_precio'=>'250',
            'prod_stock'=>'200',
            'prod_descripcion'=>'Sin gluten ,vegetariano y acequible',
            'categorias_id'=>'1',
            'proveedores_id'=>'4'
        ]);

        DB::table('productos')->insert([
            'prod_imagen'=>'https://cdn.shortpixel.ai/spai2/w_300+q_lossy+ret_img+to_webp/https://top10supps.com/wp-content/uploads/2016/11/Solaray-Maca.jpg',
            'prod_nombre'=>'Maca solaray',
            'prod_precio'=>'150',
            'prod_stock'=>'250',
            'prod_descripcion'=>'Capsulas libre de aditivos y con proteinas y minerales',
            'categorias_id'=>'1',
            'proveedores_id'=>'4'
        ]);

        //Poncho Chalan

        DB::table('productos')->insert([
            'prod_imagen'=>'https://http2.mlstatic.com/color-bloque-aquilea-mujer-revisar-cuadros-poncho-chal-ca-D_NQ_NP_639428-MPE32060750111_092019-V.webp',
            'prod_nombre'=>'Poncho chalan plomo',
            'prod_precio'=>'50',
            'prod_stock'=>'300',
            'prod_descripcion'=>'Poncho de color plomo con linea roja',
            'categorias_id'=>'2',
            'proveedores_id'=>'5'
        ]);
        DB::table('productos')->insert([
            'prod_imagen'=>'https://http2.mlstatic.com/poncho-chalan-marinera-nortena-D_NQ_NP_997123-MPE32216313294_092019-V.webp',
            'prod_nombre'=>'Poncho chalan rojo',
            'prod_precio'=>'60',
            'prod_stock'=>'100',
            'prod_descripcion'=>'Poncho de buena calidad de color rojo y con franjan beig',
            'categorias_id'=>'2',
            'proveedores_id'=>'5'
        ]);
        DB::table('productos')->insert([
            'prod_imagen'=>'https://http2.mlstatic.com/ponchos-alpaca-D_NQ_NP_732706-MPE31861959010_082019-V.webp',
            'prod_nombre'=>'Poncho de alpaca',
            'prod_precio'=>'50',
            'prod_stock'=>'400',
            'prod_descripcion'=>'Decolorado de lineas de varios colores,hecho de alpaca',
            'categorias_id'=>'2',
            'proveedores_id'=>'5'
        ]);
        DB::table('productos')->insert([
            'prod_imagen'=>'https://http2.mlstatic.com/ponchos-capas-chompas-de-alpaca-para-mujer-D_NQ_NP_921531-MPE27237644742_042018-V.webp',
            'prod_nombre'=>'Poncho capa para mujer',
            'prod_precio'=>'100',
            'prod_stock'=>'400',
            'prod_descripcion'=>'Poncho tipo abrigo de color plomo y otros colores',
            'categorias_id'=>'2',
            'proveedores_id'=>'5'
        ]);
        DB::table('productos')->insert([
            'prod_imagen'=>'https://http2.mlstatic.com/chompas-y-ponchos-alpaca-D_NQ_NP_725424-MPE25824635010_072017-V.webp',
            'prod_nombre'=>'Poncho beige',
            'prod_precio'=>'120',
            'prod_stock'=>'300',
            'prod_descripcion'=>'Poncho de color beige con adornos de franja  color rojo',
            'categorias_id'=>'2',
            'proveedores_id'=>'5'
        ]);
        DB::table('productos')->insert([
            'prod_imagen'=>'https://http2.mlstatic.com/chompas-ponchos-para-mujer-D_NQ_NP_711525-MPE25441534794_032017-V.webp',
            'prod_nombre'=>'Poncho negro',
            'prod_precio'=>'30',
            'prod_stock'=>'100',
            'prod_descripcion'=>'Poncho color negro de alta calidad',
            'categorias_id'=>'2',
            'proveedores_id'=>'5'
        ]);

        // KALITEX

        DB::table('productos')->insert([
            'prod_imagen'=>'https://http2.mlstatic.com/ropa-industrial-uniformes-ropa-de-trabajo-D_NQ_NP_835309-MPE32058181288_092019-F.jpg',
            'prod_nombre'=>'Uniforme en drill',
            'prod_precio'=>'30',
            'prod_stock'=>'3000',
            'prod_descripcion'=>'Uniforme utilizado especialmente para el trabajo en el plano industrial',
            'categorias_id'=>'2',
            'proveedores_id'=>'6'
        ]);

        DB::table('productos')->insert([
            'prod_imagen'=>'https://http2.mlstatic.com/confeccion-de-casacas-ropa-industrial-uniformes-D_NQ_NP_958857-MPE32058830648_092019-Q.jpg',
            'prod_nombre'=>'Casaca industrial',
            'prod_precio'=>'40',
            'prod_stock'=>'5000',
            'prod_descripcion'=>'Casaca excelente para evitar cualquier daño en alguna empresa',
            'categorias_id'=>'2',
            'proveedores_id'=>'6'
        ]);

        DB::table('productos')->insert([
            'prod_imagen'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTm9-TZPVCY8A7Z2Qb8adxGn8rVvHn2mf_bZyT-H8-GYxMidv3l',
            'prod_nombre'=>'Polos de trabajo',
            'prod_precio'=>'30',
            'prod_stock'=>'4000',
            'prod_descripcion'=>'Especial para reconocer a que empresa pertence y aque seccion de la misma',
            'categorias_id'=>'2',
            'proveedores_id'=>'6'
        ]);

        DB::table('productos')->insert([
            'prod_imagen'=>'https://images-na.ssl-images-amazon.com/images/I/61IKduwVXtL._SY355_.jpg',
            'prod_nombre'=>'Chaleco de seguridad',
            'prod_precio'=>'20',
            'prod_stock'=>'1000',
            'prod_descripcion'=>'Chaleco para la utilizacion del personal de seguridad',
            'categorias_id'=>'2',
            'proveedores_id'=>'6'
        ]);

        DB::table('productos')->insert([
            'prod_imagen'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTC8SwsKtvT5y0yYscf4P1BpFAxQ5a0Pdwfr8MPJvbrgl6oaCmD',
            'prod_nombre'=>'Cortaviento',
            'prod_precio'=>'50',
            'prod_stock'=>'100',
            'prod_descripcion'=>'Ideal para trabajos en campo donde existe obviamente  demasiado viento',
            'categorias_id'=>'2',
            'proveedores_id'=>'6'
        ]);

        DB::table('productos')->insert([
            'prod_imagen'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRh1l7kpUkn3MOjooILS6VEyuhZlDf5jNKqNANAI4ibYAMMNF-D',
            'prod_nombre'=>'Blusa',
            'prod_precio'=>'40',
            'prod_stock'=>'120',
            'prod_descripcion'=>'Excelente para la utilizacion en las calles al ser de alta calidad',
            'categorias_id'=>'2',
            'proveedores_id'=>'6'
        ]);

        //La FESTA

        DB::table('productos')->insert([
            'prod_imagen'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSgyW3Gz4NFYIH8NlRVO2cbL11jsHYrMHBqrUBsBTyqyQCw1298',
            'prod_nombre'=>'Casita artesanal peruana',
            'prod_precio'=>'15',
            'prod_stock'=>'100',
            'prod_descripcion'=>'Muestra la interelación entre peruanos',
            'categorias_id'=>'4',
            'proveedores_id'=>'7'
        ]);

        DB::table('productos')->insert([
            'prod_imagen'=>'http://4.bp.blogspot.com/-DjL7KRKjrQE/Vai9KFQZo9I/AAAAAAAAgAM/huvwn3E3cl0/s1600/01%2Bretalo.jpg',
            'prod_nombre'=>'Casita artesanal',
            'prod_precio'=>'100',
            'prod_stock'=>'1000',
            'prod_descripcion'=>'Casita con  miembros  de las tres regiones costa,sierra y selva',
            'categorias_id'=>'3',
            'proveedores_id'=>'7'
        ]);

        DB::table('productos')->insert([
            'prod_imagen'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSedz0QbiirnAN8lGmnrVGlBpilEVGalUIML2PphUrhcM0E8fUL&s',
            'prod_nombre'=>'Piedras adornadas con figuras de las lineas de nazca',
            'prod_precio'=>'5',
            'prod_stock'=>'1000',
            'prod_descripcion'=>'Piezas de recuerdo que nos muestra el arte existenete en el antiguo Perú',
            'categorias_id'=>'4',
            'proveedores_id'=>'7'
        ]);

        DB::table('productos')->insert([
            'prod_imagen'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSMYOzhlDhNQ5VHHAxdjkJNUEP1fOzbPbeGJe2eND9CshORCRzG&s',
            'prod_nombre'=>'Botijitas Catacaos',
            'prod_precio'=>'80',
            'prod_stock'=>'100',
            'prod_descripcion'=>'Artesanía peruana para que lleves a tu casa y marca Peru.',
            'categorias_id'=>'4',
            'proveedores_id'=>'7'
        ]);

        DB::table('productos')->insert([
            'prod_imagen'=>'https://live.staticflickr.com/8323/8133097652_37525cd2c5_b.jpg',
            'prod_nombre'=>'Pequeños pecebres',
            'prod_precio'=>'40',
            'prod_stock'=>'500',
            'prod_descripcion'=>'Para que siempre lleves la navidad en un recuerdo',
            'categorias_id'=>'4',
            'proveedores_id'=>'7'
        ]);

        DB::table('productos')->insert([
            'prod_imagen'=>'https://portal.andina.pe/EDPfotografia3/Thumbnail/2018/03/14/000489270W.jpg',
            'prod_nombre'=>'Familia calabera',
            'prod_precio'=>'25',
            'prod_stock'=>'450',
            'prod_descripcion'=>'EL recuerdo de un viaje largo.',
            'categorias_id'=>'4',
            'proveedores_id'=>'7'
        ]);

        //Lemon Pharma

        DB::table('productos')->insert([
            'prod_imagen'=>'https://www.lemonpharma.com/wp-content/uploads/2018/04/LEM_Ginjer_Products_Range_B.jpg',
            'prod_nombre'=>'GINJER',
            'prod_precio'=>'20',
            'prod_stock'=>'200',
            'prod_descripcion'=>'Producto hecho a base de jengibre',
            'categorias_id'=>'5',
            'proveedores_id'=>'8'
        ]);

        DB::table('productos')->insert([
            'prod_imagen'=>'https://www.original-bachblüten.de/wp-content/uploads/2017/09/LEM_BB-Products_Range-1024x474.jpg',
            'prod_nombre'=>'Flores de bach',
            'prod_precio'=>'35',
            'prod_stock'=>'390',
            'prod_descripcion'=>' Las esencias florales de Bach actúan con mimo y de forma saludable restableciendo el equilibrio emocional.',
            'categorias_id'=>'5',
            'proveedores_id'=>'8'
        ]);

        DB::table('productos')->insert([
            'prod_imagen'=>'http://www.origenvegetal.com/3235-large_default/apropolis-lemon-pharma-50-comprimidos.jpg',
            'prod_nombre'=>'Apropolis',
            'prod_precio'=>'24',
            'prod_stock'=>'430',
            'prod_descripcion'=>'El conocimiento acumulado y refinado de este producto natural altamente eficiente',
            'categorias_id'=>'5',
            'proveedores_id'=>'8'
        ]);

        DB::table('productos')->insert([
            'prod_imagen'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRosie_naVr_ReqrTjEmwAjRwkVoDJUWG-MMfCZgG2fg7NWS4C4&s',
            'prod_nombre'=>'Cumacure',
            'prod_precio'=>'90',
            'prod_stock'=>'300',
            'prod_descripcion'=>'el ingrediente activo de la raíz de cúrcuma, que ha estado en el centro de la investigación en salud durante varios años.',
            'categorias_id'=>'5',
            'proveedores_id'=>'8'
        ]);

        DB::table('productos')->insert([
            'prod_imagen'=>'https://images-na.ssl-images-amazon.com/images/I/61p-YoLJghL._SX425_.jpg',
            'prod_nombre'=>'Hypergy',
            'prod_precio'=>'36',
            'prod_stock'=>'540',
            'prod_descripcion'=>'HYPERGY es un complemento alimenticio energético extremadamente eficiente y saludable de calidad farmacéutica.',
            'categorias_id'=>'5',
            'proveedores_id'=>'8'
        ]);

        DB::table('productos')->insert([
            'prod_imagen'=>'https://www.lemonpharma.com/wp-content/uploads/2017/02/Steviagum_Gruppe_02_frontal_DE_FR-1024x463.jpg',
            'prod_nombre'=>'STEVIAGUM',
            'prod_precio'=>'54',
            'prod_stock'=>'100',
            'prod_descripcion'=>'Steviagum es un chicle de Lemon Pharma para la higiene dental ocasional para una dentadura sana.',
            'categorias_id'=>'5',
            'proveedores_id'=>'8'
        ]);



    }
}
