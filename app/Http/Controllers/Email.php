<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Email extends Controller
{
//    use Mail;
    //
    public function sendEmail(Request $request)
    {
        try{
            Mail::send('email', ['nama' => $request->nama, 'pesan' => $request->pesan], function ($message) use ($request)
            {
                $message->subject($request->judul);
                $message->from('portgaz77@gmail.com', 'Kiddy');
                $message->to($request->email);
            });
            return back()->with('alert-success','Berhasil Kirim Email');
        }
        catch (Exception $e){
            return response (['status' => false,'errors' => $e->getMessage()]);
        }
    }
}