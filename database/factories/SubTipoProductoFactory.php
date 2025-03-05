<?php
namespace Database\Factories;

use App\Models\SubTipoProducto;
use App\Models\TipoProducto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubTipoProducto>
 */
class SubTipoProductoFactory extends Factory
{
    protected $model = SubTipoProducto::class; 
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word,
            'tipo_producto_id' => TipoProducto::factory(),
        ];
    }
}
