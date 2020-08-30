<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index() {

        return view('shop.index');

    }

    public function list() {

        return \App\Shop::with('reviews.user')->get();

    }

    public function review(Request $request) {

        $result = false;

        // バリデーション
        $request->validate([
            'shop_id' => [
                'required',
                'exists:shop,id',
                function($attribute, $value, $fail) use($request) {

                    // ログインしてるかチェック
                    if(!auth()->check()) {

                        $fail('レビューするにはログインしてください。');
                        return;

                    }

                    // すでにレビュー投稿してるかチェック
                    $exists = \App\ShopReview::where('user_id', $request->user()->id)
                        ->where('shop_id', $request->shop_id)
                        ->exists();

                    if($exists) {

                        $fail('すでにレビューは投稿済みです。');
                        return;

                    }

                }
            ],
            'stars' => 'required|integer|min:1|max:5',
            'comment' => 'required'
        ]);

        $review = new \App\ShopReview();
        $review->shop_id = $request->shop_id;
        $review->user_id = $request->user()->id;
        $review->stars = $request->stars;
        $review->comment = $request->comment;
        $result = $review->save();
        return ['result' => $result];

    }
}
