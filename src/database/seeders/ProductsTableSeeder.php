<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Storage\App;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'キウイ',
            'price' => '800',
            'image' => 'kiwi.png',
            'description'=> 'キウイは甘みと酸味のバランスが絶妙なフルーツです。ビタミンCなどの栄養素も豊富なため、びはふぁ効果や疲労回復効果も期待できます。もぎたてフルーツのスムージーをお召し上がりください！'
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'ストロベリー',
            'price' => '1200',
            'image' => 'strawberry.png',
            'description'=> '大人から子供まで大人気のストロベリー。当店では鮮度抜群の完熟イチゴを使用しています。ビタミンCはもちろん食物繊維も豊富なため、腸内環境の改善も期待できます。もぎたてフルーツのスムージーをお召し上がりください！'
        ];
        DB::table('products')->insert($param);
        $param = [
            'name'  => 'オレンジ',
            'price' => '850',
            'image' => 'orange.png',
            'description'=> '当店では酸味と甘みのバランスが抜群のネーブルオレンジを使用しています。酸味は控えめで、甘さと濃厚な果汁が魅力の商品です。もぎたてフルーツのスムージーをお召し上がりください！'
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'スイカ',
            'price' => '700',
            'image' => 'watermelon.png',
            'description'=> '甘くてシャリシャリ触感が魅力のスイカ。全体の９０％が水分のため、暑い日の水分補給や熱中症予防、カロリーが気になる方にもおすすめの商品です。もぎたてフルーツのスムージーをお召し上がりください！'
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'ピーチ',
            'price' => '1000',
            'image' => 'peach.png',
            'description'=> '芳醇な香りととろけるような甘さが魅力のピーチ。美味しさはもちろん見た目の可愛さも抜群の商品です。ビタミンEが豊富なため、生活習慣の予防にもおすすめです。もぎたてフルーツのスムージーをお召し上がりください！'
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'シャインマスカット',
            'price' => '1400',
            'image' => 'muscat.png',
            'description'=> 'さわやかな香りと上品な甘みが特徴的な社員マスカットは大人から子供まで大人気のフルーツです。疲れた脳や体のエネルギー補給にも最適な商品です。もぎたてフルーツのスムージーをお召し上がりください！'
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'パイナップル',
            'price' => '800',
            'image' => 'pineapple.png',
            'description'=> '甘酸っぱさとトロピカルな香りが特徴のパイナップル。当店では甘さと酸味のバランスが絶妙なk六さんのパイナップルを使用しております。もぎたてフルーツのスムージーをお召し上がりください！'
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'ブドウ',
            'price' => '1100',
            'image' => 'grape.png',
            'description'=> 'ブドウの中でも人気の高い国産の「巨峰」を使用しております。高い糖度と適度な酸味が魅力で、さわやかなパープルで見た目もかわいい商品です。もぎたてフルーツのスムージーをお召し上がりください！'
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'バナナ',
            'price' => '600',
            'image' => 'banana.png',
            'description'=> '低カロリーでありながら栄養満点のため、ダイエット中にもおすすめの商品です。1杯でバナナの濃厚な甘みを存分に堪能出来ます。もぎたてフルーツのスムージーをお召し上がりください！'
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'メロン',
            'price' => '900',
            'image' => 'melon.png',
            'description'=> '香りがよくジューシーで品のある甘さが人気のメロンスムージー。カリウムが多く含まれているためむくみ解消効果も抜群です。もぎたてフルーツのスムージーをお召し上がりください！'
        ];
        DB::table('products')->insert($param);
    }
}
