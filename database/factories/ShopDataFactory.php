<?php

namespace Database\Factories;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ShopData>
 */
class ShopDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sn'=>fake()->company(),
            'user_id' => User::factory(),
            'site_email'=>fake()->companyEmail(),
            'site_phone'=>fake()->phoneNumber(),
            'site_phone2'=>fake()->e164PhoneNumber(),
            'site_address'=>fake()->address(),
            'site_description'=> 'Your site Description goes here!!'
        ];
    }
}
