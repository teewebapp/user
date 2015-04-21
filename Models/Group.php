<?php

namespace Tee\User\Models;

use Illuminate\Auth\UserInterface;
use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Eloquent;
use Tee\System\Traits\CurrentSiteTrait;

class Group extends Eloquent
{
    const ADMIN = 1;

    use CurrentSiteTrait;
    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

    public function users() {
        return $this->belongsToMany(__NAMESPACE__.'\\User');
    }

}