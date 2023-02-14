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
                'name' => 'Ngoại ngữ',
            ],
            [
                'name' => 'Marketing',
            ],
            [
                'name' => 'Tin học văn phòng',
            ],
            [
                'name' => 'Thiết kế',
            ],
            [
                'name' => 'Kinh doanh và khởi nghiệp',
            ],
            [
                'name' => 'Kỹ năng mềm',
            ],
            [
                'name' => 'Công nghệ thông tin',
            ],
            [
                'name' => 'Sales Bán hàng',
            ],
            [
                'name' => 'Sức khoẻ giới tính',
            ],
            [
                'name' => 'Phong cách sống',
            ],
            [
                'name' => 'Nuôi dạy con',
            ],
        ];

        DB::table('categories')->insert($data);
    }
}
