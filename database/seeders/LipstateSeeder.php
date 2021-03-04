<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LipstateSeeder extends Seeder
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
                'name'=> 'Open',
            ],
            [
                'name'=> 'Closed',
            ],
            [
                'name'=> 'Cancelled',
            ],
        ]);
    }
}
