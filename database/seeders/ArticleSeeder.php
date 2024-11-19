<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::create([
            'name' => '名無しのプログラマ',
            'content' => "ようこそ掲示板へ！\n次スレは>>950を踏んだ方が立ててください",
        ]);

        Article::create([
            'name' => '脆弱性を突くプログラマ',
            'content' => '<b>太字</b> / <i>斜め</i> / <u>下線</u>',
        ]);
    }
}
