<?php

use Illuminate\Database\Seeder;
use App\Models\User as Users;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 200) as $value) {
            Users::create(['user_nickname' => strlen(10), 'user_telephone' => '1828019' . rand(1000, 9999), 'user_time' => $_SERVER['REQUEST_TIME'], 'user_password' => encrypt('admin')]);
        }
    }
}
