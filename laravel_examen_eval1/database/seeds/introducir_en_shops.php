<?php

use Illuminate\Database\Seeder;

class introducir_en_shops extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
        	'name'=>'forum',
        	'description'=>'descripcion del producto',
        	'password'=>'micontraseña',
        	'email'=>'forum@forum.com',
            'likes'=>32,
        ]);
        DB::table('shops')->insert([
            'name'=>'decathlon',
            'description'=>'descripcion del producto',
            'password'=>'micontraseña',
            'email'=>'decathlon@decathlon.com',
            'likes'=>12,
        ]);
        DB::table('shops')->insert([
            'name'=>'alcampo',
            'description'=>'descripcion del producto',
            'password'=>'micontraseña',
            'email'=>'alcampo@alcampo.com',
            'likes'=>320,
        ]);
        

    }
}
