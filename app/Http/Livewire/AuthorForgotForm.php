<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;



class AuthorForgotForm extends Component
{
    public $email;

    public function ForgotHandler(){
      $this->validate([
        'email'=>'required|email|exists:users,email'
      ],[
        'email.required'=>'Votre :attribute est requis',
        'email.email'=>':attribute est invalide',
        'email.exists'=>'Votre :attribute n\'existe pas'
      ]);

      $token = base64_encode(Str::random(64));
      DB::table('password_resets')->insert([
        'email'=>$this->email,
        'token'=>$token,
        'created_at'=>Carbon::now(),
      ]);
      $user = User::where('email',$this->email)->first();
      $link = route('author.reset-form',['token'=>$token,'email'=>$this->email]);
      $body_message = "Nous avons reçu une demande de réinitialisation du mot de passe pour le compte associé à ".
      $this->email.".<br> Vous pouvez réinitialiser votre mot de passe en cliquant sur le bouton ci-dessous.";
      $body_message.='<br>';
      $body_message.='<a href="'.$link.'" target="_blank" style="color:#FFF;border-color:#22bc66;border-style:solid;
      border-width:10px 180px; background-color:#22bc66;display:inline-block;text-decoration:none;border-radius:3px;
      box-shadow:0 2px 3px rgba(0,0,0,0.16);-webkit-text-size-adjust:none;box-sizing:border-box">Reset Password</a>';
      $body_message.='<br>';
      $body_message.='Si vous n\'avez pas demandé la réinitialisation de votre mot de passe, veuillez ignorer cet e-mail.';

      $data = array(
        'name' => $user->name,
        'body_message'=>$body_message,
      );

      Mail::send('forgot-email-template', $data, function($message) use ($user){
        $message->from('learninglab73@gmail.com','Larablog');
        $message->to($user->email, $user->name)
                ->subject('Reset Password');
      });

      $this->email = null;
      session()->flash('success','Le lien pour changer votre mot de passe à bien été envoyé. Si vous ne trouvez pas le mail, vérifiez dans votre boite de spam.');

    }
    public function render()
    {
        return view('livewire.author-forgot-form');
    }
}
