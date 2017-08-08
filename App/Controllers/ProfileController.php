<?php
namespace App\Controllers;

use App\Models\Profile;
use Cac\Controller\Action;
use Cac\Exception\ModelException;
use Cac\Support\File;
use Cac\Support\Validation;

class ProfileController extends Action
{
    private $profile;

    public function __construct()
    {
        $this->profile = new Profile();
    }

    public function edit($id)
    {
        echo $this->render('profile.edit',['profile' => $this->profile->find($id)]);
    }

    public function update($id)
    {
        try{

            Validation::requireModel($this->profile,$_POST);
            $profile = $this->profile->find($id);
            $profile->update($_POST);
            back('Atualizado');

        }catch (\Exception $e)
        {
            if ($e instanceof ModelException) {

                alert('error','Não foi possível realizar esta operação BANCO DE DADOS');
            }
            back($e->getMessage(),'warning');
        }
    }

    public function sendImage($id)
    {
        echo $this->render('profile.upload',['profile' => $this->profile->find($id)]);
    }

    public function uploadImage($id)
    {
        $path = config('app.file.folder');
      try{

            $file       = new File($_FILES['file'],"$path/avatar");
            $nameFile   = md5(date('H:m:s:'));
            $file->setName($nameFile)->mimeType(['image/png','image/jpeg', 'image/jpg'])->maxSize('3MB')->upload();
            $profile = $this->profile->find($id);
            $profile->update(['file' => "{$nameFile}.{$file->getData()->extension}"]);
            back('Enviado');

        }catch (\Exception $e)
        {
            if ($e instanceof ModelException) {

                alert('error','Não foi possível realizar esta operação BANCO DE DADOS');
            }
            back($e->getMessage(),'warning');
        }

    }

    public function deleteImage($id)
    {
        unlink();
    }
}