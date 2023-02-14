<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        DB::table('courses')->truncate();
        $data = [
            [
                'user_id' => '4',
                'name' => '30 Tuyệt chiêu gia tăng doanh số',
                'category_id' => '4',
                'description' => 'Khóa học triệu đô',
                'photo' => '/img/course-13.jpg',
                'price' => '999000',
                'duration' => '1 giờ 20 phút'
            ],
            [
                'user_id' => '3',
                'name' => 'Piano Solo Căn Bản Cho Mọi Lứa Tuổi',
                'category_id' => '4',
                'description' => 'Khóa học triệu đô',
                'photo' => '/img/course-12.jpg',
                'price' => '999000',
                'duration' => '1 giờ 20 phút'
            ],
            [
                'user_id' => '5',
                'name' => 'TikTok : Tiếp cận khách hàng',
                'category_id' => '4',
                'description' => 'Khóa học triệu đô',
                'photo' => '/img/course-11.jpg',
                'price' => '999000',
                'duration' => '1 giờ 20 phút'
            ],
            [
                'user_id' => '4',
                'name' => 'Tiếp cận khách hàng',
                'category_id' => '4',
                'description' => 'Khóa học triệu đô',
                'photo' => '/img/course-11.jpg',
                'price' => '999000',
                'duration' => '1 giờ 20 phút'
            ],
            [
                'user_id' => '4',
                'name' => 'Khách hàng',
                'category_id' => '4',
                'description' => 'Khóa học triệu đô',
                'photo' => '/img/course-11.jpg',
                'price' => '999000',
                'duration' => '1 giờ 20 phút'
            ],
            [
                'user_id' => '4',
                'name' => 'TikTok',
                'category_id' => '4',
                'description' => 'Khóa học triệu đô',
                'photo' => '/img/course-11.jpg',
                'price' => '999000',
                'duration' => '1 giờ 20 phút'
            ],
            [
                'user_id' => '4',
                'name' => 'Bán hàng',
                'category_id' => '4',
                'description' => 'Khóa học triệu đô',
                'photo' => '/img/course-11.jpg',
                'price' => '999000',
                'duration' => '1 giờ 20 phút'
            ],
        ];
        DB::table('courses')->insert($data);
    }
}
