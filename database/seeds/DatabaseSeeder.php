<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
                DB::table('genre')->insert([
        	['nombre'=>'Accion'],
        	['nombre'=>'Ciencia ficcion'],
        	['nombre'=>'Comedia'],
        	['nombre'=>'Drama'],
        	['nombre'=>'Romance'],
        	['nombre'=>'Terror']
        
        ]);
    }
}
