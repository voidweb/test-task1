<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Task;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        Comment::factory()->count(10)
//            ->has(User::factory()->count(1), 'user')
//            ->has(Task::factory()->count(1), 'task')
//            ->create();


        for ($i = 0; $i < 20; $i++) {
            Task::factory()->count(1)
                ->create();

            User::factory()->count(1)
                ->create();

            Comment::factory()->count(12)
                ->for(User::factory())
                ->for(Task::factory())
                ->create();
        }




//         User::factory()
//             ->count(10)
//             ->has(Comment::factory()->count(1)
//                 ->has(Task::factory()->count(1), 'tasks'), 'comments')
//             ->create();
    }
}
