<?php

namespace Tee\User\Models;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Tee\System\Traits\CurrentSiteTrait;
use Eloquent, URL, Hash;

class User extends Eloquent implements UserInterface, RemindableInterface
{
    use CurrentSiteTrait;
	use UserTrait, RemindableTrait, SoftDeletingTrait;

	protected $dates = ['deleted_at'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

    /**
     * Return groups relation that user are in
     * @return Illuminate\Database\Eloquent\Relations\Relation
     */
	public function groups()
    {
        return $this->belongsToMany(__NAMESPACE__.'\\Group');
    }

    /**
     * Return user image
     * @return string
     */
    public function getImageAttribute()
    {
    	return moduleAsset('user', '/images/user.png');
    }

    /**
     * Getter for $user->first-name
     * Return first name of user
     */
    public function getFirstNameAttribute()
    {
        $aux = explode(' ', $this->name);
        return $aux[0];
    }

    /**
     * Getter for $user->confirm_key
     * Return confirm key used in email confirmation
     * @return string
     */
    public function getConfirmKeyAttribute()
    {
        return base64_encode(Hash::make($this->id . 'confirm'));
    }

    /**
     * Getter for $user->confirm_url
     * Return url for email confirmation
     * @return string
     */
    public function getConfirmUrlAttribute()
    {
        return route('user.confirm', [
            'user' => $this->id,
            'key' => $this->confirm_key
        ]);
    }
}
