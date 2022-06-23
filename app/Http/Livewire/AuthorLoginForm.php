<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthorLoginForm extends Component
{
    public $login_id, $password;

    public function LoginHandler(){

        $fieldType = filter_var($this->login_id, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        if($fieldType == 'email'){
            $this->validate([
                'login_id'=>'required|email|exists:users,email',
                'password'=>'required|min:5',
            ],[
                'login_id'=>'Email ou Pseudo requis',
                'login_id.email'=>'Email Invalide',
                'login_id.exists'=>'Email Inconnue',
                'password.required'=>'Mot de passe requis',
            ]);
        }else{
            $this->validate([
                'login_id'=>'required|exists:users,username',
                'password'=>'required|min:5',
            ],[
                'login_id.required'=>'Email ou Pseudo requis',
                'login_id.exists'=>'Email Inconnue',
                'password.required'=>'Mot de passe requis',
            ]);
        }

        $creds = array($fieldType=>$this->login_id,'password'=>$this->password);

        if( Auth::guard('web')->attempt($creds)){
            $checkUser = User::where($fieldType,$this->login_id)->first();
            if($checkUser->blocked == 1){
                Auth::guard('web')->logout();
                return redirect()->route('author.login')->with('fail','Votre compte à été bloqué');
            }else{
                return redirect()->route('author.home');
            }
        }else{
            session()->flash('fail','Email/Pseudo ou Mot de passe incorrect');
        }


    /*   $this->validate([
            'email'=>'required|email|exists:users,email',
            'password'=>'required|min:5',
        ],[
            'email.required'=>'Entrez votre adresse mail',
            'email.email'=>'Email invalide',
            'email.exists'=>'Cette email n\'existe pas dans notre base de donnée',
            'password.required'=>'Entrez votre mot de passe'
        ]);

        $creds = array('email'=>$this->email, 'password'=>$this->password);

        if( Auth::guard('web')->attempt($creds) ){

            $checkUser = User::where('email',$this->email)->first();
            if($checkUser->blocked == 1){
                Auth::guard('web')->logout();
                return redirect()->route('author.login')->with('fail','Votre compte a été bloqué');
            }else{
                return redirect()->route('author.home');
            }

        }else{
            session()->flash('fail','Email ou mot de passe incorrect');
        }*/

    }

    public function render()
    {
        return view('livewire.author-login-form');
    }
}
