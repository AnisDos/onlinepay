<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mail\SendMail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     /*    */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }


    public function mailsend() {
   
        $data = request()->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255',],
              
        ]);
    
        $details = [
            'email' => $data['email'],
            'title' => $data['full_name'],
            'body' => $data['message']
        ];
       
        \Mail::to('anis.fellani@gmail.com')->send(new SendMail($details));
       
    
        return redirect('/');
    }




}
