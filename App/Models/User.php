<?php
namespace App\Models;

use Cac\Model\Model;


class User extends Model {

    protected $table      = "users";


    public function Profile()
    {
        return $this->hasOne(Profile::class);
    }

}