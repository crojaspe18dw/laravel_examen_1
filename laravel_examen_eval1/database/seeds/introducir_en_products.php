<?php

use Illuminate\Database\Seeder;

class introducir_en_products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i < 10; $i++) { 
    		
    	
          DB::table('products')->insert([
        	'name'=>'forum',
        	'description'=>'descripcion del producto',
        	'stock'=>300,
        	'price'=>40,
        ]);

      }
    }
}
