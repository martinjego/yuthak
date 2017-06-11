<?php

use Illuminate\Database\Seeder;

class StaffsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $staff = App\Staff::create([
            'department_id' => 1,
            'username' => 'staff',
            'first_name' => 'Admin',
            'last_name' => 'Yuthak',
            'email' => 'staff@yuthak.com',
            'password' => bcrypt('secret')
        ]);
    }
}
