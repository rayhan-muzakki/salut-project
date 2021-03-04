<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MbrstateSeeder extends Seeder
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
                'name'=> 'Camaba',
            ],
            [
                'name'=> 'SRO',
            ],
            [
                'name'=> 'Brks-trkrm',
            ],
            [
                'name'=> 'NIM',
            ],
            [
                'name'=> 'LIP',
            ],
            [
                'name'=> 'Byr-ut',
            ],
            [
                'name'=> 'Byr-salut',
            ],
            [
                'name'=> 'Mbr-aktif',
            ],
            [
                'name'=> 'Btl-kuliah',
            ],
            [
                'name'=> 'Blocklist',
            ],
        ]);
    }
}
