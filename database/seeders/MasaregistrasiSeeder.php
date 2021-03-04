<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MasaregistrasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("lipstate")->insert([
            [
                'name'=> '2021.1',
            ],
            
        ]);
    }
}
