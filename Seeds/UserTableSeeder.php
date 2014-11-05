<?php

namespace Tee\User\Seeds;

use Tee\User\Models\User;
use Seeder, DB, DateTime, Hash, Eloquent;

class UserTableSeeder extends Seeder {

    public function run() {
        Eloquent::unguard();
        DB::table('users')->delete();
        User::create(array(
            'name' => 'Admin',
            'email' => 'admin',
            'password' => Hash::make('admin'),
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
    }
    
}