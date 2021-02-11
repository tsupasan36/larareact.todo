<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title" => $this->faker->realText(rand(15,40)),/* fakerを使ってランダムなテキストを15から40文字で入力 */
            "is_done" => $this->faker->boolean(10),/* 10%の確率でtrueになる */
            "created_at" => now(),/* 作成した時間 */
            "updated_at" => now(),/* 更新した時間 */

        ];
    }
}
