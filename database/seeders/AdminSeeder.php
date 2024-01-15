<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $admin = User::create([
            'first_name' => 'Admin',
            'last_name' => 'User',
            'email' => 'admin@gmail.com',
            'secondary_email'=> null,
            'password' => bcrypt('Admin@123'),
            'address' => 'raiya road rajkot',
            'suite' => 'test',
            'city' => 'Rajkot',
            'state' => 'Gujrat',
            'country' => 'India',
            'zip_code' => 360007,
            'phone_number' => '+911234567890',
            'fax' => '1-888-473-2963',
            'home_number' => '+911234567890',
            'is_verified' => 1,
            'type' =>'admin',
            'agency' => null,
            'arc' => null,
            'remarks' => null,
        ]);
    }
}
