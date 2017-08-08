<?php
namespace App\Controllers;

use App\Models\Profile;
use App\Models\User;
use Cac\Controller\Action;
use Cac\Exception\ModelException;
use Cac\Support\Validation;

class UserController extends Action
{
    private $user,$profile;

    public function __construct()
    {
        $this->user     = new User();
        $this->profile  = new Profile();
    }

    public function index()
    {
        echo $this->render('user.index',['users' => $this->user->all()]);
    }

    public function create()
    {
        echo $this->render('user.create');
    }

    public function store()
    {
        try{

            Validation::requireModel($this->user,$_POST);
            $profile  = $this->profile->create([]);
            $new_user = array_merge($_POST,['profile_id' => $profile->id]);
            $this->user->create($new_user);
            back('Gravado');

        }catch (\Exception $e)
        {
            if ($e instanceof ModelException) {

                alert('error','Não foi possível realizar esta operação BANCO DE DADOS');
            }
            back($e->getMessage(),'warning');
        }
    }

    public function delete($id)
    {
        try{

            $user = $this->user->find($id);
            $user->delete();
            back('Excluido');

        }catch (\Exception $e)
        {
            if ($e instanceof ModelException) {

                alert('error','Não foi possível realizar esta operação BANCO DE DADOS');
            }
            back($e->getMessage(),'warning');
        }
    }
}