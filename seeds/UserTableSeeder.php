<?php

namespace Tee\User\Seeds;

use Tee\User\Models\User;
use Seeder, DB, DateTime, Hash, Eloquent;

class UserTableSeeder extends Seeder {

    public function run() {
        Eloquent::unguard();
        DB::table('users')->delete();
        User::create(array(
            //'id' => 1,
            'email' => 'admin',
            'password' => Hash::make('az09an'),
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
    }
    
}