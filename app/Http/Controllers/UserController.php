<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Exchange;
use App\Comment;
use App\Bank;
use Socialite;
use Hash;
use Auth;
use Image;
use File;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{

  
  public function getUsersForNotifications(){

  $reclamationNbr = DB::table('reclamations')
  ->select('id')
  ->where('vu', '=',  false )
  ->where('from', '=',  31 )
  ->where('to', '=',   auth()->user()->id )
  ->count();


    return $reclamationNbr;
    }

  public function store()
  {
   
      $data = request()->validate([
          'from' => 'required',
          'to'=>'required',
          'fromValue'=>'required',
          'toValue'=>'',
          'fromAccount'=>'required',
          'toAccount'=>'required',
      ]);

    
/*
      $from = Bank::where('name', $data['from'])->first()->id;
      $to = Bank::where('name', $data['to'])->first()->id;
*/
      auth()->user()->exchanges()->create([
        
        'from'=> $data['from'] ,
         'to'=> $data['to'],
         'fromValue'=>  $data['fromValue'],
         'toValue'=>  $data['toValue'],
         'fromAccount'=>  $data['fromAccount'],
         'toAccount'=>  $data['toAccount'],
     
         ]);


 

         return redirect()->back()->with("success","votre zxchange est valide la3ziz!!!");

    
    }

    public function profile()
    {
      $reclamationNbr =  $this->getUsersForNotifications();
      $user = auth()->user()->get();
      $exchanges = auth()->user()->exchanges()->get();
      $comments = auth()->user()->comments()->get();
      $comptes= Bank::where('confirmed', '=',  true )->get();
        return view('user.profile', compact('user', 'exchanges', 'comments','reclamationNbr','comptes') );
    }

    public function transactions()
    {
      $reclamationNbr =  $this->getUsersForNotifications();

      $exchanges = auth()->user()->exchanges()->get();

        return view('user.transactions', compact( 'exchanges', 'reclamationNbr') );
    }


    
    public function index()
    {
      
        return view('user.index');
    }
    

 
    public function index1()
    {
        return view('user.index1');
    }
    

    public function test()
    {
       
      
      $dtt= ['name' => 'dollar', 'img' => 'hgkjhfhgkjhg'  , 'value' => 1];
      $dtt1= ['name' => 'Neteller', 'img' => 'hgkjhfhgkjhg'  , 'value' => 0.65 ];
      $dtt2= ['name' => 'PAYSERA ', 'img' => 'hgkjhfhgkjhg'  , 'value' => 0.80 ];
      $dtt3= ['name' => 'dinar', 'img' => 'hgkjhfhgkjhg'  , 'value' => 0.09 ];
      $dtt4= ['name' => 'bitcoin', 'img' => 'hgkjhfhgkjhg'  , 'value' => 0.4 ];
      $dtt5= ['name' => 'lira', 'img' => 'hgkjhfhgkjhg'  , 'value' => 0.23 ];
      $dtt7= ['name' => 'CCP ', 'img' => 'hgkjhfhgkjhg'  , 'value' => 0.08 ];

      

        $dt= ['name' => 'dollar', 'img' => 'hgkjhfhgkjhg'  , 'taux' => 
      [  ['name' => 'fekous', 'ex' => 284 ],
        
        ['name' => 'dinar', 'ex' => 26 ],
        ['name' => 'dinar', 'ex' => 26 ],
        ['name' => 'bitcoin', 'ex' => 24 ],
        ['name' => 'lira', 'ex' => 22 ] ]  ];
        $dt1= ['name' => 'dinar', 'img' => 'hgkjhfhgkjhg1' , 'taux' =>  
      [  ['name' => 'fekous', 'ex' => 1 ],
        ['name' => 'dollar', 'ex' => 2.3 ],
     
        ['name' => 'euro', 'ex' => 245 ],
        ['name' => 'bitcoin', 'ex' => 246 ],
        ['name' => 'lira', 'ex' => 22 ] ]  ];
        $dt2= ['name' => 'euro', 'img' => 'hgkjhfhgkjhg23' ,  'taux' => 
      [  ['name' => 'fekous', 'ex' => 242 ],
        ['name' => 'dollar', 'ex' => 72 ],
        ['name' => 'dinar', 'ex' => 27 ],
      
        ['name' => 'bitcoin', 'ex' => 72 ],
        ['name' => 'lira', 'ex' => 12 ] ]  ];
        $dt3= ['name' => 'bitcoin', 'img' => 'hgkjhfhgkjhg3'  ,  'taux' =>  
      [  ['name' => 'fekous', 'ex' => 32 ],
        ['name' => 'dollar', 'ex' => 122 ],
        ['name' => 'dinar', 'ex' => 992 ],
        ['name' => 'euro', 'ex' => 882 ],
    
        ['name' => 'lira', 'ex' => 742 ] ]];
        $dt4= ['name' => 'lira', 'img' => 'hgkjhfhgkjhg4' ,  'taux' => 
      [  ['name' => 'fekous', 'ex' => 102 ],
        ['name' => 'dollar', 'ex' => 412 ],
        ['name' => 'dinar', 'ex' => 732 ],
        ['name' => 'euro', 'ex' => 122 ],
        ['name' => 'bitcoin', 'ex' => 882 ]
      ]  ];
        $dt5= ['name' => 'fekous', 'img' => 'hgkjhfhgkjhg5' ,  'taux' => 
      [ 
        ['name' => 'dollar', 'ex' => 452 ],
        ['name' => 'dinar', 'ex' => 255 ],
        ['name' => 'euro', 'ex' => 296 ],
        ['name' => 'bitcoin', 'ex' => 212 ],
        ['name' => 'lira', 'ex' => 223 ] ] ];

        
        $comptes_test= [ $dtt,$dtt1,$dtt2,$dtt3,$dtt4,$dtt5,$dtt7];
        $comptes= Bank::where('confirmed', '=',  true )->get();
        
        $comments = Comment::all();
        

        return view('user.test',compact('comptes','comments'));
    }




    public function showUpdateInfo()
    {
      
      $reclamationNbr =  $this->getUsersForNotifications();
      
      return view('user.showUpdateInfo',compact('reclamationNbr'));
    }



    public function update()
    { 
      $data = request()->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'tel' => ['required', 'max:10'],
            'email' => 'required|email',
            'id_user' => 'required',
        ]);

   
          $user = User::find($data['id_user']);
      
       
// how to chek befor deleting old image from folder 
        if (request('image')){

          $op = "storage/" . $user->image;
         

          if (File::exists( $op )) {
            
          
          // delete old image from the folder
          $oldfileexists = File::exists( $op );
     
          //Delete old avatar
          if($op != 'storage/users/dft.jpg' and $oldfileexists){
         
          File::delete($op);
         

          } 
        } 


          $imagePath = request('image')->store('users','public');
        
          $image = Image::make(public_path("storage/{$imagePath}"))->fit(120,120);
        
          $image->save();
    
         
          $user->image =  $imagePath;

          
         
      }
   

        

        $user->firstName =  $data['firstName'];
        $user->lastName =  $data['lastName'];
        $user->tel =  $data['tel'];
        $user->email =  $data['email'];
        
        $user->save();
        /*
        Flash::message('Your account has been updated!');
        return back();
        +*/

        return redirect()->back()->with("success","modification appliquée avec succes !");;



    }

    



    public function showUpdatePassword()
    {
      
      $reclamationNbr =  $this->getUsersForNotifications();
      return view('user.showUpdatePassword', compact('reclamationNbr'));
    }



    #try fonction of changing password 
    public function changePassword(Request $request){

      if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
          // The passwords matches
          return redirect()->back()->with("error","Votre mot de passe actuel ne correspond pas au mot de passe que vous avez fourni. Veuillez réessayer.");
      }

      if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
          //Current password and new password are same
          return redirect()->back()->with("error","Le nouveau mot de passe ne peut pas être identique à votre mot de passe actuel. Veuillez choisir un mot de passe différent.");
      }

      $validatedData = $request->validate([
          'current-password' => 'required',
          'new-password' => 'required|string|min:6|confirmed',
      ]);

      //Change Password
      $user = Auth::user();
      $user->password = bcrypt($request->get('new-password'));
      $user->save();

      return redirect()->back()->with("success","Le mot de passe a été changé avec succès !");

  }


  
  

  public function posterAvis()
  {
    
    $reclamationNbr =  $this->getUsersForNotifications();
    return view('user.posterAvis', compact('reclamationNbr'));
  }


  public function mesAvis()
  {
   $reclamationNbr =  $this->getUsersForNotifications();
    $comments = auth()->user()->comments()->get();
    return view('user.mesAvis', compact('comments','reclamationNbr'));
  }




  public function addComment()
  {
    $data = request()->validate([  
      'text' => 'required',
    
    ]);

    auth()->user()->comments()->create([  
      'text'=> $data['text'] ,
    ]);

    return redirect()->back()->with("success","votre avis est ajoute! merci infiniment!!!");


  }



  public function deleteComment()
  {
   
     
      $ex = Comment::find( request('id_comment'));
    
      $ex->delete();
     
      return redirect()->back()->with("success","avis supprimée avec succès !");

   
  }



  public function resendEmail(){

    auth()->user()->sendEmailVerificationNotification();
    
    return redirect()->back()->with("success","Email resended successfully !");
  }








  public function redirect()
  {
      return Socialite::driver('facebook')->redirect();
  }
  public function callback()
  {
    $getInfo = Socialite::driver('facebook')->user(); 
    $user = $this->createUser($getInfo); 
    
    auth()->login($user); 
    return redirect()->to('/');
  }
  function createUser($getInfo){
  $user = User::where('provider_id', $getInfo->id)->first();
  if (!$user) {
       $user = User::create([
          'firstName'     => $getInfo->name,
          'lastName'     => $getInfo->name,
          'tel'     => '06589655',
          'email'    => $getInfo->email,
          'password'    => bcrypt(123456789),
          'provider' => 'facebook',
          'provider_id' => $getInfo->id
      ]);
    }
    return $user;
  }





//google


public function redirectGoogle()
{
    return Socialite::driver('google')->redirect();
}
public function callbackGoogle()
{
  $getInfo = Socialite::driver('google')->user(); 
  $user = $this->createUserGoogle($getInfo); 
  
  auth()->login($user); 
  return redirect()->to('/');
}
function createUserGoogle($getInfo){
$user = User::where('provider_id', $getInfo->id)->first();
if (!$user) {
     $user = User::create([
        'firstName'     => $getInfo->name,
        'lastName'     => $getInfo->name,
        'tel'     => '06589655',
        'email'    => $getInfo->email,
        'password'    => bcrypt(123456789),
        'provider' => 'facebook',
        'provider_id' => $getInfo->id
    ]);
  }
  return $user;
}








}
