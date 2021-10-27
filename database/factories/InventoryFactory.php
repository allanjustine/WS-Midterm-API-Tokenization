<?php

namespace Database\Factories;

use App\Models\Inventory;
use Illuminate\Database\Eloquent\Factories\Factory;

class InventoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Inventory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ProductName' => $this->faker->word,
        'PartNumber' => $this->faker->word,
        'ProductLabel' => $this->faker->word,
        'StartingInventory' => $this->faker->word,
        'InventoryReceived' => $this->faker->word,
        'InventoryShipped' => $this->faker->word,
        'InventoryOnHand' => $this->faker->word,
        'MinimumRequired' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
