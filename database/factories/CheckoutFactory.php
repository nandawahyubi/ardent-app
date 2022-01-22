<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CheckoutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'user_id'               => mt_rand(2, 10),
        'package_id'            => mt_rand(1, 3),
        'vehicle_brand'         => $this->faker->word(),
        'vehicle_color'         => $this->faker->colorName(),
        'production_year'       => $this->faker->year(),
        'number_plate'          => $this->faker->numerify('BK-####-MDN'),
        'order_schedule'        => $this->faker->date('Y-m-d'),
        'status'                => mt_rand(0, 2),
        'payment_status'        => $this->faker->randomElement(['waiting', 'pending', 'paid', 'failed']),
        'midtrans_url'          => $this->faker->url(),
        'midtrans_booking_code' => $this->faker->regexify('[A-Z]{2}[0-9]{4}'),
        ];
    }
}
