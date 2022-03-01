<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $project = [
            [
                "name" => "Template 1",
                "photo" => "https://drive.google.com/file/d/1PyxaJb-Fs5I76xQ4zAsj4UrpDBOhmixJ/view?usp=sharing",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis erat in tellus eleifend tincidunt. Maecenas congue neque tellus, at porttitor mauris efficitur eu. Donec consectetur nunc nec magna gravida feugiat. Vestibulum hendrerit, mi ac aliquet pellentesque, elit odio sagittis nunc, eget laoreet massa arcu ut lacus. Quisque rhoncus massa sed consequat malesuada. Sed imperdiet purus et auctor vehicula. Praesent a venenatis sem. Nunc dignissim ornare elit sed auctor. Vestibulum ultricies tempus ullamcorper. Donec porta purus id sodales mattis.",
                "tanggal_selesai" => new \DateTime,
                "author" => "puji",
                "link_download" => "https://github.com/nurpuji97/Personal_web_ver_1.0.git",
                'created_at' => new \DateTime
            ]
        ];

        DB::table('projects')->insert($project);

    }
}
