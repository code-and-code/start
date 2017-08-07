<?php
namespace App\Models;

class Friend extends Model {

    protected $table      = "friends";

    public function User()
    {
        return $this->belongsTo(User::class,'id','user_id');
    }

    public function Friend()
    {
        return $this->belongsTo(User::class,'id','friend_id');
    }
}