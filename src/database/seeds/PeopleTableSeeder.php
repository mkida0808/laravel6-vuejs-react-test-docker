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
            ['name' => 'saburo', 'mail' => 'saburo@ofu.co.jp', 'age' => 73,],
            ['name' => 'kirou', 'mail' => 'kirou@rcd.net', 'age' => 18,],
            ['name' => 'hamako', 'mail' => 'hamako@music.com', 'age' => 50,],
            ['name' => 'hirai', 'mail' => 'hirai@taku.site', 'age' => 48,],
            ['name' => 'wakashi', 'mail' => 'wakashi@hiro.jp', 'age' => 80,],
            ['name' => 'taro2', 'mail' => 'taro2@yamada.jp', 'age' => 24,],
            ['name' => 'hanako2', 'mail' => 'hanako2@flower.com', 'age' => 61,],
            ['name' => 'sachiko2', 'mail' => 'sachiko2@happy.co.jp', 'age' => 82,],
            ['name' => 'jiro2', 'mail' => 'jiro2@ramen.net', 'age' => 11,],
            ['name' => 'himiko2', 'mail' => 'himiko2@kofun.ne.jp', 'age' => 72,],
            ['name' => 'saburo2', 'mail' => 'saburo2@ofu.co.jp', 'age' => 27,],
            ['name' => 'kirou2', 'mail' => 'kirou2@rcd.net', 'age' => 38,],
            ['name' => 'hamako2', 'mail' => 'hamako2@music.com', 'age' => 40,],
            ['name' => 'hirai2', 'mail' => 'hirai2@taku.site', 'age' => 58,],
            ['name' => 'wakashi2', 'mail' => 'wakashi2@hiro.jp', 'age' => 98,],
        ];
        foreach ($params as $param)
        {
            DB::table('people')->insert($param);
        }
    }
}
