<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => 1,
            'role_id' => 1,
            'gender_id' => 1,
            'first_name' => 'John',
            'middle_name' => 'Peter',
            'last_name' => 'Doe',
            'email' => 'john@gmail.com',
            'password' => '12345678',
            'display_picture_link' => '',
            'delete_flag' => 0,
            'modified_at' => '2022-02-13',
            'modified_by' => 'John'
        ]);

        User::create([
            'id' => 2,
            'role_id' => 2,
            'gender_id' => 2,
            'first_name' => 'Jane',
            'middle_name' => 'Janet',
            'last_name' => 'Doe',
            'email' => 'jane@gmail.com',
            'password' => '12345678',
            'display_picture_link' => '',
            'delete_flag' => 0,
            'modified_at' => '2022-02-13',
            'modified_by' => 'Jane'
        ]);
    }
}
