<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        $data = [
            [
                'name' => 'Admin',
                'birthday' => '1999-01-01',
                'email' => 'admin@sample.com',
                'isAdmin' => '1',
                'isTeacher' => '0',
                'password' => Hash::make('123123123'),
                'created_at'        => new \dateTime,
                'updated_at'        => new \dateTime,
            ],
            [
                'name' => 'Phạm Thành Long',
                'birthday' => '1999-01-01',
                'email' => 'teacher1@sample.com',
                'isAdmin' => '0',
                'isTeacher' => '1',
                'password' => Hash::make('123123123'),
                'created_at'        => new \dateTime,
                'updated_at'        => new \dateTime,
            ],
            [
                'name' => 'Phan Trần Hải Mây',
                'birthday' => '1999-01-01',
                'email' => 'teacher2@sample.com',
                'isAdmin' => '0',
                'isTeacher' => '1',
                'password' => Hash::make('123123123'),
                'created_at'        => new \dateTime,
                'updated_at'        => new \dateTime,
            ],
            [
                'name' => 'Cấn Mạnh Linh',
                'birthday' => '1999-01-01',
                'email' => 'teacher3@sample.com',
                'isAdmin' => '0',
                'isTeacher' => '1',
                'password' => Hash::make('123123123'),
                'created_at'        => new \dateTime,
                'updated_at'        => new \dateTime,
            ],
        ];
    User::insert($data);
    }
}
