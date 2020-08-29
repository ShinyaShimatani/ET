<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    // 「１：多」のリレーションシップを追加
    public function reviews() { 

        return $this->hasMany(\App\ShopReview::class, 'shop_id', 'id');

}
