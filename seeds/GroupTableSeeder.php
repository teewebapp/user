<?php

namespace Tee\User\Seeds;

use Tee\User\Models\Group;
use Seeder, DB, DateTime, Eloquent;

class GroupTableSeeder extends Seeder {

    public function run() {
        Eloquent::unguard();
        DB::table('groups')->delete();
        Group::create(array(
            'id' => 1,
            'name' => 'Administrador',
            'type' => Group::ADMIN
        ));
    }
    
}