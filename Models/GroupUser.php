<?php

namespace Tee\User\Models;

use Illuminate\Auth\UserInterface;
use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Eloquent;

class GroupUser extends Eloquent {

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
}