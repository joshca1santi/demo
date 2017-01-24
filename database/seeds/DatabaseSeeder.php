<?php

use Illuminate\Database\Seeder;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(users::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
    }
}
