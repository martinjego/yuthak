<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $deparments = ["Police Station 1", "Hospital 1", "Fireman 1"];
        for ($i = 0; $i < count($deparments); $i++ ){
            $user = App\Department::create([
                'name' => $deparments[$i]
            ]);
        }
    }
}
