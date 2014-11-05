<?php

namespace Tee\User\Seeds;

use Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(__NAMESPACE__.'\\UserTableSeeder');
        $this->call(__NAMESPACE__.'\\GroupTableSeeder');
        $this->call(__NAMESPACE__.'\\GroupUserTableSeeder');
    }

}