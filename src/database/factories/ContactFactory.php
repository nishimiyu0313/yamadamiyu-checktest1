<?php

namespace Database\Factories;

use App\Models\Cantact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'last_name' => '山田',
            'first_name' => '太郎',
            'gender' => '1',
            'email' => 'text@example.com',
            'tel' => '080-1234-5678',
            'address' => '東京都渋谷区千駄ヶ谷1-2-3', 
            'building' => '千駄ヶ谷マンション101',
            'detail' => '届いた商品が注文した商品ではありませんでした。商品の交換をお願いします'
        ];
    }
}
