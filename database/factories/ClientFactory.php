<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
use faker\Generator as faker;

class ClientFactory extends Factory
{
    // use HasFactory;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'mobile'=>$this->faker->e164PhoneNumber,
            'email'=>$this->faker->email,
            'password'=>$this->faker->password,
            'address'=>$this->faker->address
        ];
    }
}
