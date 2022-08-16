<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            ['name' => 'taro', 'mail' => 'taro@yamada.jp', 'age' => 12,],
            ['name' => 'hanako', 'mail' => 'hanako@flower.com', 'age' => 34,],
            ['name' => 'sachiko', 'mail' => 'sachiko@happy.co.jp', 'age' => 56,],
            ['name' => 'jiro', 'mail' => 'jiro@ramen.net', 'age' => 25,],
            ['name' => 'himiko', 'mail' => 'himiko@kofun.ne.jp', 'age' => 65,],
        ];
        foreach ($params as $param)
        {
            DB::table('people')->insert($param);
        }
    }
}
