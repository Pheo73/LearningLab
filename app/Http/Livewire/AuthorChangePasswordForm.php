<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthorChangePasswordForm extends Component
{
    public $current_password,$new_password,$confirm_new_password;

    public function changePassword(){
      $this->validate([
        'current_password'=>[
          'required', function($attribute, $value, $fail){
            if(!Hash::check($value, User::find(auth('web')->id())->password)){
              return $fail(_('Le mot de passe actuel est invalide'));
            }
          },
        ],
        'new_password'=>'required|min:5|max:25',
        'confirm_new_password'=>'same:new_password'
      ],[
        'current_password.required'=>'Entrez votre mot de passe actuel',
        'new_password.required'=>'Entrez le nouveau mot de passe',
        'new_password.min'=>'Le nouveau mot de passe doit contenir minimum 5 caractères',
        'confirm_new_password.same'=>'Les mots de passes ne correspondent pas'
      ]);

      $query = User::find(auth('web')->id())->update([
        'password'=>Hash::make($this->new_password)

      ]);

        if($query){
          $this->showToastr('Votre mot de passe à correctement été modifié','success');
          $this->current_password = $this->new_password = $this->confirm_new_password = null;
        }else{
          $this->showToastr('Tout ne s\'est pas passé comme prévu :/','error');
        }

    }






    public function showToastr($message, $type){
      return $this->dispatchBrowserEvent('showToastr',[
        'type'=>$type,
        'message'=>$message
      ]);
    }

    public function render()
    {
        return view('livewire.author-change-password-form');
    }
}
