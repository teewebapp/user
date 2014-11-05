<?php

namespace Tee\User\Seeds;

use Tee\User\Models\GroupUser;
use Seeder, DB, DateTime;

use Tee\User\Models\User;
use Tee\User\Models\Group;

class GroupUserTableSeeder extends Seeder {

    public function run() {
        DB::table('group_user')->delete();
        $user = User::whereEmail('admin')->firstOrFail();
        $group = Group::whereType(Group::ADMIN)->firstOrFail();
        $group->users()->attach($user);
    }
    
}