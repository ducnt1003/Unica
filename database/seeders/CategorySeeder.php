<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();

        $data = [
            [
                'name' => 'Sale/Bán hàng',
                'photo' => 'https://drive.google.com/file/d/1qY3mq9V7zaJlW2N2Ce0uvelKLNCC2qoJ',
            ],
            [
                'name' => 'Thiết kế',
                'photo' => 'https://drive.google.com/file/d/13bFbRgDnWm5gkK9tnFBLKHOhyQgJI0Ly',
            ],
            [
                'name' => 'Dựng video',
                'photo' => 'https://drive.google.com/file/d/1Aj2eMpHUYFxJkCJIZA8vWXO695pPBTnY',
            ],[
                'name' => 'Kỹ năng mềm',
                'photo' => 'https://drive.google.com/file/d/1Aj2eMpHUYFxJkCJIZA8vWXO695pPBTnY',
            ],
            [
                'name' => 'Ngoại ngữ',
                'photo' =>'',
            ],
            [
                'name' => 'Marketing',
                'photo' =>'',
            ],
            [
                'name' => 'Tin học văn phòng',
                'photo' =>'',
            ],
            
            [
                'name' => 'Kinh doanh và khởi nghiệp',
                'photo' =>'',
            ],
            [
                'name' => 'Công nghệ thông tin',
                'photo' =>'',
            ],
            [
                'name' => 'Sales Bán hàng',
                'photo' =>'',
            ],
            [
                'name' => 'Sức khoẻ giới tính',
                'photo' =>'',
            ],
            [
                'name' => 'Phong cách sống',
                'photo' =>'',
            ],
            [
                'name' => 'Nuôi dạy con',
                'photo' =>'',
            ],
        ];

        DB::table('categories')->insert($data);
    }
}
