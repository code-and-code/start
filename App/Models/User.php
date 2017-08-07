<?php
namespace App\Models;

class User extends Model {

    protected $table      = "users";

    public function Profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function Friends()
    {
        return $this->hasMany(Friend::class);
    }

}