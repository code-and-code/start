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
    private $path;

    /**
     * ProfileController constructor.
     */
    public function __construct()
    {
        $this->profile = new Profile();
        $this->path    = config('app.file.folder').'/avatar';
    }

    public function edit()
    {
        $user = auth();
        if($user->Profile())
        {
            echo $this->render('profile.edit',['profile' => $user->Profile()]);
        }
        else
        {
            $profile = $this->profile->create([]);
            $user->update(['profile_id' => $profile->id]);
            echo $this->render('profile.edit',['profile' => $profile]);
        }
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

        try{

            $profile = $this->profile->find($id);

            if($profile != null)
            {
                unlink("{$this->path}/$profile->file");
            }

            $file       = new File($_FILES['file'],$this->path);

            $nameFile   = md5(date('H:m:s:'));
            $file->setName($nameFile)
                 ->mimeType(['image/png','image/jpeg', 'image/jpg'])
                 ->maxSize('1MB')
                 ->upload();

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
        try{
            $profile = $this->profile->find($id);
            unlink("{$this->path}/$profile->file");
            back('Enviado');
        }catch (\Exception $e)
        {
            back($e->getMessage(),'warning');
        }
    }
}