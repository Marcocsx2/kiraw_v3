<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
                'imagen'=>'https://elconferencista.net/wp-content/uploads/2018/01/mitos-programador.jpg', 
                'fondo'=>'https://cdn.computerhoy.com/sites/navi.axelspringer.es/public/media/image/2019/06/lenguaje-programacion.jpg', 
                'name'=>'Marco Vizcarra', 
                'descripcion'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.", 
                'profesion'=>'Programador',
                'nacimiento'=>'2000-12-29',
                'email'=>'marcocsx30@gmail.com',    
                'password'=>bcrypt('123456789'),    
            ]);
        
    }
}
