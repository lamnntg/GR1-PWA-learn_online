<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $d = [

            [
                'subject_id' => '2',
                'name' => 'Toán Lớp 1',
                'description' => 'Cô Nguyễn Thị Ngô',
                'img_url' => 'https://i.ytimg.com/vi/MKefZWtFHkE/maxresdefault.jpg',
                'video_url' => 'https://www.youtube.com/watch?v=DTYBwqd110c',
            ],

            [
                'subject_id' => '2',
                'name' => 'Toán Lớp 2',
                'description' => 'Cô Nguyễn Thị Bảnh',
                'img_url' => 'https://i.vdoc.vn/data/image/2020/12/03/tron-bo-bai-tap-toan-co-ban-lop-1.jpg',
                'video_url' => 'https://www.youtube.com/watch?v=DTYBwqd110c',
            ],

            [
                'subject_id' => '2',
                'name' => 'Toán Lớp 3',
                'description' => 'Cô Nguyễn Thị Khá',
                'img_url' => 'https://i.ytimg.com/vi/MKefZWtFHkE/maxresdefault.jpg',
                'video_url' => 'https://www.youtube.com/watch?v=DTYBwqd110c',
            ],

            [
                'subject_id' => '1',
                'name' => 'Tiếng Việt Lớp 1',
                'description' => 'Cô Nguyễn Thị Ngô',
                'img_url' => 'https://i.ytimg.com/vi/3F_S8KIlIz4/maxresdefault.jpg',
                'video_url' => 'https://www.youtube.com/watch?v=DTYBwqd110c',
            ],

            [
                'subject_id' => '1',
                'name' => 'Tiếng Việt Lớp 2',
                'description' => 'Cô Nguyễn Thị Bảnh',
                'img_url' => 'https://i.ytimg.com/vi/3F_S8KIlIz4/maxresdefault.jpg',
                'video_url' => 'https://www.youtube.com/watch?v=DTYBwqd110c',
            ],

            [
                'subject_id' => '1',
                'name' => 'Tiếng Việt Lớp 3',
                'description' => 'Cô Nguyễn Thị Khá',
                'img_url' => 'https://i.ytimg.com/vi/3F_S8KIlIz4/maxresdefault.jpg',
                'video_url' => 'https://www.youtube.com/watch?v=DTYBwqd110c',
            ],
        ];
        DB::table('courses')->insert($d);
    }
}
