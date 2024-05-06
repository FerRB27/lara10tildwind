<?php

namespace Database\Factories;
/**
 * Illuminate\Support\Str 
 * es un helper para los Slugs, que nos ayuda a crear rutas amigables.
 */
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Curso;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        /**
         * Creamos la variable name por aparte ya que la necesitamos para el campo
         * nombre y el campo slug
         */
        $name = $this->faker->sentence();
        return [
            //
            'name' => $name,
            'slug' => Str::slug($name, '-'),
            'description' => $this->faker->paragraph(),
            'category' => $this->faker->randomElement(['Desarrollo', 'Diseño'])
        ];
    }
}
