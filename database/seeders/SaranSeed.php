<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SaranSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $saran = [
            [
                "name" => "Ricky",
                "email" => "Ricky@test.com",
                "subject" => "test 1",
                "message" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis erat in tellus eleifend tincidunt. Maecenas congue neque tellus, at porttitor mauris efficitur eu. Donec consectetur nunc nec magna gravida feugiat. Vestibulum hendrerit, mi ac aliquet pellentesque, elit odio sagittis nunc, eget laoreet massa arcu ut lacus. Quisque rhoncus massa sed consequat malesuada. Sed imperdiet purus et auctor vehicula. Praesent a venenatis sem. Nunc dignissim ornare elit sed auctor. Vestibulum ultricies tempus ullamcorper. Donec porta purus id sodales mattis.",
            ]
        ];

        DB::table('sarans')->insert($saran);
    }
}
