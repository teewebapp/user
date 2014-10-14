<?php

namespace Tee\User\Models;

use Illuminate\Auth\UserInterface;
use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Eloquent;

class Group extends Eloquent {

    const ADMIN = 1;

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

    public function users() {
        return $this->belongsToMany('App\\Modules\\User\\Models\\User');
    }

}