<?php

namespace Database\Factories;

use App\Models\Dosen;
use Illuminate\Database\Eloquent\Factories\Factory;

class DosenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Dosen::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nip' => $this -> faker->numberBetween(101, 121),
            'nmk' => $this -> faker->numberBetween(10001, 10050),
            'name' => $this -> faker->name,
            'matakuliah' => $this -> faker->randomElement(['KI','PIS','KCB','Sister','TBO']),
            'alamat' => $this -> faker->address,
        ];
    }
}
