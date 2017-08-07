<?php
namespace App\Models;

class Profile extends Model {

    protected $table      = "profiles";

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}