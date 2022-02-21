<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Restdata;

class RestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'message' => 'google japan',
            'url' => 'https://www.google.co.jp',
        ];
        $restdata = new Restdata;
        $restdata->fill($param)->save();

        $param = [
            'message' => 'yahoo japan',
            'url' => 'https://yahoo.co.jp',
        ];
        $restdata = new Restdata;
        $restdata->fill($param)->save();

        $param = [
            'message' => 'MSN japan',
            'url' => 'http://www.msn.com/ja-jp',
        ];
        $restdata = new Restdata;
        $restdata->fill($param)->save();
    }
}
