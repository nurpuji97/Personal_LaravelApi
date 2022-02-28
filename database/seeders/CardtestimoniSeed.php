<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardtestimoniSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $card = [
            [
                'nama' => "Richard",
                'photo' => "https://drive.google.com/file/d/1QBXK8ZARiwX_C-EeaSjNnOZgLEirz7k9/view?usp=sharing",
                'jabatan' => "Mahasiswa",
                'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tortor arcu, commodo molestie.",
                'rating' => 5,
                'created_at' => new \DateTime
            ],
            [
                'nama' => "Rina",
                'photo' => "https://drive.google.com/file/d/1eZ9K8brkw6d-EzI4JGAetFB3OMGYJ7zS/view?usp=sharing",
                'jabatan' => "Unknown",
                'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tortor arcu, commodo molestie.",
                'rating' => 3,
                'created_at' => new \DateTime
            ],
            [
                'nama' => "Budi",
                'photo' => "https://drive.google.com/file/d/1V0nvhHzTpPyRHeaLbGJstZUJZ_4G26s1/view?usp=sharing",
                'jabatan' => "Manager",
                'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tortor arcu, commodo molestie.",
                'rating' => 3,
                'created_at' => new \DateTime
            ],
        ];

        DB::table('card_testimonis')->insert($card);
    }
}
