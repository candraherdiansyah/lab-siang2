<?php

use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sample = [
            ['nama' => 'Abdul', 'nis' => '2022202301', 'jk' => 'L',
                'tgl_lahir' => '1998-08-15', 'alamat' => 'Bandung',
            ],
            ['nama' => 'Silvanna', 'nis' => '2022202302', 'jk' => 'P',
                'tgl_lahir' => '1999-11-13', 'alamat' => 'Jakarta',
            ],
        ];

        DB::table('siswas')->insert($sample);
    }
}
