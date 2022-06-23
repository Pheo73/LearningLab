<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\BookingModel;
use Mail;

class BookingController extends Controller
{
    public $subject='Reservation learninglab';

  public function storeForm(Request $request) {
      $this->validate($request, [
        'name' => 'required',
        'firstname' => 'required',
        'email' => 'required|email',
        'date' => 'required',
        'message' => 'required'
     ]);

     BookingModel::create($request->all());

    \Mail::send('booking-email-template', array(
        'name' => $request->get('name'),
        'firstname' => $request->get('firstname'),
        'email' => $request->get('email'),
        'date' => $request->get('date'),
        'form_message' => $request->get('message'),

    ), function($message) use ($request){
        $message->from($request->email);
        $message->to('learninglab73@gmail.com', )->subject('LearningLab Reservation');
    });

    return back()->with('success', 'Votre demande de réservation à été transmise, vous recevrez un mail de confirmation dans les prochains jours !');
  }

  public function render()
  {
      return view('back.pages.booking');
  }

}
