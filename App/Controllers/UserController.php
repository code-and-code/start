<?php
namespace App\Controllers;

use App\Models\User;
use Cac\Controller\Action;
use Cac\Exception\ModelException;
use Cac\Support\Validation;

class UserController extends Action
{
    private $user;

    public function __construct()
    {
        $this->user = new User();
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
            $this->user->create($_POST);
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