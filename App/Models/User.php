<?php
namespace App\Models;

use Cac\Model\Model;


class User extends Model {

    protected $table = "users";
    use Authentication;
}