<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    //
    public function contact()
    {
        return view('contact.contact');
    }

    public function SendMail(Request $request)
    {




                Mail::send('deelnemers.show', ['deelnemerslijst' => $deelnemers], function ($message) {
                    $actieveAdmin = User::where('role_id', 1)->get();
                    $activeAdminEmail = $actieveAdmin[0]->email;

                    $message->to($activeAdminEmail)->subject('Deelnemerslijst');
                });
                $request->session()->flash('flash_message', 'Mail Send Successfully');



        return redirect()->back();
    }
}