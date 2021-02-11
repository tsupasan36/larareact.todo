<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;/* タスクモデルを使う */

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::factory()->count(10)->create(); /* TaskModelのファクトリーを使う 10件 createメソッドで実行 */
    }
}
