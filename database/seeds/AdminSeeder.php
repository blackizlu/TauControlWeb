<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $id = DB::table('users')->insertGetId([
            'email' => 'blackizlu@hotmail.com',
            'password' => bcrypt('admin'),
            'type' => 'superadmin',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('profile')->insert([
            'user_id' => $id,
            'name' => 'Luis',
            'last_name' => 'Martinez Castellanos',
            'phone_number' => '(961) 225-3275',
            'image' => 'img.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
