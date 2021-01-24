<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // テーブルのクリア
        DB::table('books')->truncate();

        // 初期データ用意（列名をキーとする連想配列）
        $books = [
            [
                'name' => 'PHP Book',
                'price' => 'https://qiita.com/tkek321/items/f31ef446d821ab149614',
                'author' => 'PHPER'
            ],
            [
                'name' => 'Laravel Book',
                'price' => 'https://qiita.com/tkek321/items/f31ef446d821ab149614',
                'author' => null
            ],
            [
                'name' => 'Ruby Book',
                'price' => 'https://qiita.com/tkek321/items/f31ef446d821ab149614',
                'author' => 'Rubyist'
            ]
        ];

        // 登録
        foreach ($books as $book) {
            \App\Book::create($book);
        }
    }
}
