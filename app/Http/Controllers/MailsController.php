<?php

namespace App\Http\Controllers;

use App\Contact;
use App\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class MailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {
        $mail = Contact::orderBy('id','desc')->paginate(3);

        return view('admin.mail.show')->with('mails',$mail);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'subject'=>'required|max:150',
            'text'=> 'required',
            'file'=>'mimes:jpeg,bmp,png,jpg,pdf,docx'
        ]);
        $file = 'temp';

        $user = User::all()->first();

        $email = $user->email;
        $subject = $request->subject;
        $text = $request->text;

        if($request->hasFile('file')) {

            $filename = $request->file;


            $file_new_name = time() . $filename->getClientOriginalName();
            $filename->move('uploads/attachments/', $file_new_name);


            $file = 'uploads/attachments/'.$file_new_name;



        }
        if(file_exists($file)) {
            Mail::to($request->email)->send(new \App\Mail\ReplyMail($email, $subject, $text, $file));
            unlink($file);
        }
        else{
            Mail::to($request->email)->send(new \App\Mail\ReplyMail($email,$subject,$text,$file=NULL));
        }






        Session::flash('success','You sent the reply');

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function read($id)
    {
        $contact = Contact::find($id);
        $contact->read =1;
        $contact->save();
        Session::flash('success','Marked as a read');
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contact::destroy($id);
        Session::flash('success','You Delete an Email');
        return redirect()->back();
    }
}
