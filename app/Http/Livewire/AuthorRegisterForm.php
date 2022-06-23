<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthorRegisterForm extends Component
{
    public $name,$email,$password;

    private function resetInputFields(){
          $this->name = '';
          $this->email = '';
          $this->password = '';
      }


    public function RegisterHandler(){
      $this->validate([
        'name'=>'required',
        'email'=>'required|email',
        'password'=>'required|min:5',

      ],[
        'name.required'=>'Le champ Pseudo est requis',
        'email.required'=>'Le champ email est requis',
        'email.email'=>'Email invalide' ,
        'password.required'=>'Entrez un mot de passe',
        'password.min'=>'Le nombre minimum de caractère est 5',
      ]);

      $this->password = Hash::make($this->password);

      $data = [ 'name' => $this->name,
                'username' => $this->name,
                'email' => $this->email,
                'password' => $this->password,
              ];

          User::create($data);

      session()->flash('success','Votre compte à été créer, vous pouvez vous connectez !');
      $this->redirectRoute('author.login');

    }


    public function render()
    {
        return view('livewire.author-register-form');
    }
}
