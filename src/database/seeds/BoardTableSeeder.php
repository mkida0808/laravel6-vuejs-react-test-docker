<?php

use Illuminate\Database\Seeder;

class BoardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            ['person_id' => 1, 'title' => 'タイトル1', 'message' => 'メッセージ1',],
            ['person_id' => 2, 'title' => 'タイトル2', 'message' => 'メッセージ2',],
            ['person_id' => 3, 'title' => 'タイトル3', 'message' => 'メッセージ3',],
            ['person_id' => 4, 'title' => 'タイトル4', 'message' => 'メッセージ4',],
            ['person_id' => 5, 'title' => 'タイトル5', 'message' => 'メッセージ5',],
            ['person_id' => 6, 'title' => 'タイトル6', 'message' => 'メッセージ6',],
            ['person_id' => 7, 'title' => 'タイトル7', 'message' => 'メッセージ7',],
            ['person_id' => 8, 'title' => 'タイトル8', 'message' => 'メッセージ8',],
            ['person_id' => 9, 'title' => 'タイトル9', 'message' => 'メッセージ9',],
            ['person_id' => 10, 'title' => 'タイトル10', 'message' => 'メッセージ10',],
            ['person_id' => 11, 'title' => 'タイトル11', 'message' => 'メッセージ11',],
            ['person_id' => 12, 'title' => 'タイトル12', 'message' => 'メッセージ12',],
            ['person_id' => 13, 'title' => 'タイトル13', 'message' => 'メッセージ13',],
            ['person_id' => 14, 'title' => 'タイトル14', 'message' => 'メッセージ14',],
            ['person_id' => 15, 'title' => 'タイトル15', 'message' => 'メッセージ15',],
            ['person_id' => 16, 'title' => 'タイトル16', 'message' => 'メッセージ16',],
            ['person_id' => 17, 'title' => 'タイトル17', 'message' => 'メッセージ17',],
            ['person_id' => 18, 'title' => 'タイトル18', 'message' => 'メッセージ18',],
            ['person_id' => 19, 'title' => 'タイトル19', 'message' => 'メッセージ19',],
            ['person_id' => 20, 'title' => 'タイトル20', 'message' => 'メッセージ20',],
        ];
        foreach ($params as $param)
        {
            DB::table('boards')->insert($param);
        }
    }
}
