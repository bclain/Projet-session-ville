<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Notifications extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $notifications = [
            [
                'id_user' => 1,
                'data' => json_encode(['message' => 'Notification 1']),
                'vu' => false
            ],
            [
                'id_user' => 2,
                'data' => json_encode(['message' => 'Notification 2']),
                'vu' => false
            ],
            // Ajoutez autant de notifications que vous le souhaitez
        ];

        foreach ($notifications as $notification) {
            DB::table('notifications')->insert([
                'id_user' => $notification['id_user'],
                'data' => $notification['data'],
                'vu' => $notification['vu'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
    }
}
