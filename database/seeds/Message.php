<?php

use Illuminate\Database\Seeder;
use App\Models\Message as Mes;

class Message extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 200) as $value) {
            Mes::create([
                'message_title' => str_random(10),
                'message_text' => str_random(100),
                'message_time' => $_SERVER['REQUEST_TIME'],
                'message_form' => '小赵说事',
                'user_id' => 1,
                'admin_id' => rand(10, 30)
            ]);
        }
    }
}
