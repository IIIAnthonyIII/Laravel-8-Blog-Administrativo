<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('public/posts');
        Storage::makeDirectory('public/posts');
        User::create([
            'name' => 'Victor Arana Flores',
            'email' => 'victor.aranaf92@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        User::factory(99)->create();
    }
}