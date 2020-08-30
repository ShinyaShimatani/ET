<?php

use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1 ; $i <= 25 ; $i++) { //追加

            $shop = new \App\Shop();
            $shop->name = 'テスト店名 - '. $i;
            $shop->save();
    
        }


    }
}
