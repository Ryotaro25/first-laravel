<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    public function run()
    {
        $param = [
            'name' => 'taros',
            'mail' => 'taros@example.com',
            'age' => 10,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'hiro',
            'mail' => 'hiro@example.com',
            'age' => 34,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'mieko',
            'mail' => 'mieko@example.com',
            'age' => 34,
        ];
        DB::table('people')->insert($param);
    }
}
