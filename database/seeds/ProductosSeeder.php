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
            'prod_imagen'=>'data:image/jpeg;base64,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',
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
            'prod_imagen'=>'data:image/jpeg;base64,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',
            'prod_nombre'=>'Cortaviento',
            'prod_precio'=>'50',
            'prod_stock'=>'100',
            'prod_descripcion'=>'Ideal para trabajos en campo donde existe obviamente  demasiado viento',
            'categorias_id'=>'2',
            'proveedores_id'=>'6'
        ]);

        DB::table('productos')->insert([
            'prod_imagen'=>'data:image/jpeg;base64,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',
            'prod_nombre'=>'Blusa',
            'prod_precio'=>'40',
            'prod_stock'=>'120',
            'prod_descripcion'=>'Excelente para la utilizacion en las calles al ser de alta calidad',
            'categorias_id'=>'2',
            'proveedores_id'=>'6'
        ]);

        //La FESTA

        DB::table('productos')->insert([
            'prod_imagen'=>'data:image/jpeg;base64,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',
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
