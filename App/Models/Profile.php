<?php
namespace App\Models;

class Profile extends Model {

    protected $table      = "profiles";
    public    $requested  = ['name','last_name'];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}