<?php

use Illuminate\Database\Seeder;
use App\User;
class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //admin
        User::create([
        	'name'=>'Administrador',
        	'email'=>'jose@santi.com.ve',
        	'password'=>bcrypt('123456'),
        	'role'=>0

        	]);
        //Support
        User::create([
        	'name'=>'Soporte',
        	'email'=>'soporte@santi.com.ve',
        	'password'=>bcrypt('123456'),
        	'role'=>1

        	]);
        //Cliente
        User::create([
        	'name'=>'Cliente',
        	'email'=>'cliente@santi.com.ve',
        	'password'=>bcrypt('123456'),
        	'role'=>2

         	]);
    }
}
