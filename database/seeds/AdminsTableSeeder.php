<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = App\Admin::create([
            'username' => 'admin',
            'first_name' => 'Admin',
            'last_name' => 'Yuthak',
            'email' => 'admin@yuthak.com',
            'password' => bcrypt('secret')
        ]);
    }
}
