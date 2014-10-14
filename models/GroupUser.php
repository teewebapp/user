<?php

namespace Tee\User\Models;

use Illuminate\Auth\UserInterface;
use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Eloquent;

class UserGroup extends Eloquent {

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
}