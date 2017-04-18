<?php

use Illuminate\Database\Seeder;

class ConfigTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('config')->insert([
           'key' => 'App_title',
            'value' => 'U&D',
            'meta' => 'Nom du site'
        ]);
    }
}
