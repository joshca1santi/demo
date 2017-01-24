<?php

use Illuminate\Database\Seeder;
use App\project;
class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	      project::create([
	        	'name'=>'Proyecto A',
	        	'description'=>'Proyecto de desarrollo de un sitio web.'

	        	]);

	       project::create([
	        	'name'=>'Proyecto B',
	        	'description'=>'Proyecto de desarrollo de un aplicativo Android.'

	        	]);
    }
}
