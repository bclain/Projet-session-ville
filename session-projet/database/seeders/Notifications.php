<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Notifications extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Assuming you have users with IDs 1 to 5
        $user_ids = [1, 2, 3, 4, 5];

        // Create 100 notifications in total
        for ($i = 0; $i < 100; $i++) {
            $random_user_id = $user_ids[array_rand($user_ids)];

            DB::table('notifications')->insert([
                'id_user' => $random_user_id,
                'id_user' => $random_user_id,
                'data' => json_encode(['message' => 'This is a test notification', 'type' => 'info']),
                'vu' => rand(0, 1),  // Randomly set the notification as seen or not
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
