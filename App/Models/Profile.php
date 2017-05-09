<?php
namespace App\Models;

use Cac\Model\Model;

class Profile extends Model {

    protected $table      = "profiles";

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}