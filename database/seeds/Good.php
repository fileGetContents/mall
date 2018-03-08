<?php

use Illuminate\Database\Seeder;
use App\Models\Good as goods;

class Good extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        foreach (range(200, 201) as $value) {
            goods::create([
                'good_name' => str_random(10),
                'good_image' => asset('images/dt-if1-l-tuda5.gif'),
                'good_images' => serialize([asset('images/dt-if1-l-tuda5.gif'), asset('images/dt-if1-l-tuda5.gif'), asset('images/dt-if1-l-tuda5.gif'), asset('images/dt-if1-l-tuda5.gif'), asset('images/dt-if1-l-tuda5.gif'), asset('images/dt-if1-l-tuda5.gif'), asset('images/dt-if1-l-tuda5.gif')]),
                'good_coding' => rand(10000, 99999),
                'good_num' => rand(20, 300),
                'good_preprice' => rand(20, 50),
                'good_oriprice' => rand(50, 70),
                'good_time' => $_SERVER['REQUEST_TIME'],
                'store_id' => rand(1, 5),
                'good_info' => str_random(500)
            ]);
        }
    }
}
