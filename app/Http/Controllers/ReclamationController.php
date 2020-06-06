<?php

namespace App\Http\Controllers;
use App\User;
use App\Bank;
use App\Reclamation;
use Illuminate\Broadcasting\Channel;
use Illuminate\Support\Facades\DB;
use Pusher\Pusher;

use Illuminate\Http\Request;

class ReclamationController extends Controller
{
    public function getBanks(){
        #return Bank::where('confirmed', '=',  true )->get();
        return Bank::all();
        }




        public function getNotif(){
            

               
        $notif = array();

        $bankBloquer = Bank::where('confirmed', '=',  false )->get();
        foreach ($bankBloquer as $b) {

            if (Exchange::where('from', '=', $b->name)->exists()) {
                
        $tt = array("text" => "tu a de transensation en attent de la bank supprimer", "name" => $b->name);
     
        
        array_push($notif, $tt);


             }
            
            }

            return $notif ;
            }

            public function getNotifMinBank(){
          
              $notifMinBank = Bank:: whereColumn('credit', '<',  'minToCommand' )->get();
    
                  return $notifMinBank ;
                  }



            public function getUsersForNotificationsProfilMSG(){

              $id_admin= User::where('is_admin', '=',  true )->first();
              $reclamationNbr = DB::table('reclamations')
              ->select('id')
              ->where('vu', '=',  false )
              ->where('from', '=',  $id_admin->id )
              ->where('to', '=',   auth()->user()->id )
              ->count();
            
            
                return $reclamationNbr;
                }

            public function getUsersForNotifications(){
              $users = DB::select("select users.id, users.firstName, users.lastName, users.image,  users.email , count(vu) as unread
              from users LEFT JOIN reclamations ON users.id = reclamations.from and vu = false and reclamations.to =  " . auth()->user()->id ."
              where users.id != " . auth()->user()->id ." 
              group by users.id, users.firstName,users.lastName, users.image, users.email "
              
            );


              return $users;
              }
      





            


            public function ReclamationVisa()
            {
                
            $reclamationNbr = $this->getUsersForNotificationsProfilMSG();
        
              $users = DB::select("select users.id, users.firstName, users.lastName, users.image,  users.email , count(vu) as unread
              from users LEFT JOIN reclamations ON users.id = reclamations.from and vu = false and reclamations.to =  " . auth()->user()->id ."
              where users.id != " . auth()->user()->id ." 
              group by users.id, users.firstName,users.lastName, users.image, users.email "
            );


              

            $reclamations = DB::table('reclamations')
            ->where('type', '=', "visa")
            ->where(function ($query) {
                $query->where('from', '=' , auth()->user()->id )
                      ->orWhere('to', '=' ,auth()->user()->id);
            })
            ->get();
         

              return view('reclamation.ReclamationVisa' ,compact('reclamations','users','reclamationNbr'));
            }
          

            public function ReclamationExchange()
            {

              $reclamationNbr = $this->getUsersForNotificationsProfilMSG();
        
              $users = DB::select("select users.id, users.firstName, users.lastName, users.image,  users.email , count(vu) as unread
              from users LEFT JOIN reclamations ON users.id = reclamations.from and vu = false and reclamations.to =  " . auth()->user()->id ."
              where users.id != " . auth()->user()->id ." 
              group by users.id, users.firstName,users.lastName, users.image, users.email "
            );


              
            $reclamations = DB::table('reclamations')
            ->where('type', '=', "exchange")
            ->where(function ($query) {
                $query->where('from', '=' , auth()->user()->id )
                      ->orWhere('to', '=' ,auth()->user()->id);
            })
            ->get();
         

              return view('reclamation.ReclamationExchange' ,compact('reclamations','users','reclamationNbr'));
            }



            public function addReclamationVisa()
            {
              $data = request()->validate([  
                'text' => 'required',
              
              ]);
          
              $id_admin= User::where('is_admin', '=',  true )->first();
            
              //from authontificated user to admin 
              $rec = Reclamation::create([  
                'from' => auth()->user()->id ,
                'to' => $id_admin->id ,
                'text'=> $data['text'] ,
                'type' => "visa" ,
              ]);
          
              return redirect()->back()->with("success","votre reclamation est ajoute! nrigliwek nchlh!!!");
          
          
            }




            public function addReclamationExchange()
            {
              $data = request()->validate([  
                'text' => 'required',
              
              ]);
          
              $id_admin= User::where('is_admin', '=',  true )->first();
            
              //from authontificated user to admin 
              $rec = Reclamation::create([  
                'from' => auth()->user()->id ,
                'to' => $id_admin->id ,
                'text'=> $data['text'] ,
                'type' => "exchange" ,
              ]);
          
              return redirect()->back()->with("success","votre reclamation est ajoute exchange! nrigliwek nchlh!!!");
          
          
            }
          

          




//partie admin 










public function adminReclamationVisa()
{
    
/* 
$reclamations = DB::table('reclamations')
->where('type', '=', "visa")
->where(function ($query) {
    $query->where('from', '=' , auth()->user()->id )
          ->orWhere('to', '=' ,auth()->user()->id);
})
->get();

$banks = $this->getBanks();
$notif = $this->getNotif();
        $notifMinBank = $this->getNotifMinBank();
 */

  // $users = User::where('id', '!=', auth()->user()->id )->get();
$banks = $this->getBanks();
$notif = $this->getNotif();
        $notifMinBank = $this->getNotifMinBank();


//count how many message are unread from selected user
$users = DB::select("select users.id, users.firstName, users.lastName, users.image,  users.email , count(vu) as unread
from users LEFT JOIN reclamations ON users.id = reclamations.from and reclamations.type = 1 and vu = false and reclamations.to =  " . auth()->user()->id ."
where users.id != " . auth()->user()->id ." 
group by users.id, users.firstName,users.lastName, users.image ,  users.email "

);
  return view('reclamation.adminReclamationVisa' ,compact('banks','notif','notifMinBank','users'));
}





public function adminReclamationExchange()
{
    

/* 

$reclamations = DB::table('reclamations')
->where('type', '=', "visa")
->where(function ($query) {
    $query->where('from', '=' , auth()->user()->id )
          ->orWhere('to', '=' ,auth()->user()->id);
})
->get();
$banks = $this->getBanks();
$notif = $this->getNotif();
        $notifMinBank = $this->getNotifMinBank();
 */
 // $users = User::where('id', '!=', auth()->user()->id )->get();
 $banks = $this->getBanks();
 $notif = $this->getNotif();
        $notifMinBank = $this->getNotifMinBank();

 
 //count how many message are unread from selected user
 $users = DB::select("select users.id, users.firstName, users.lastName, users.image, reclamations.type,  users.email , count(vu) as unread
 from users LEFT JOIN reclamations ON users.id = reclamations.from  and reclamations.type = 2 and vu = false and reclamations.to =  " . auth()->user()->id ."
 where users.id != " . auth()->user()->id ." 
 group by users.id, users.firstName,users.lastName, users.image, reclamations.type, users.email "
 
 );
  return view('reclamation.adminReclamationExchange' ,compact('banks','notif','notifMinBank','users'));
}




      
public function reclamationMessenger()
{

 // $users = User::where('id', '!=', auth()->user()->id )->get();
$banks = $this->getBanks();
$notif = $this->getNotif();
        $notifMinBank = $this->getNotifMinBank();

//count how many message are unread from selected user
$users = DB::select("select users.id, users.firstName, users.lastName, users.image,  users.email , count(vu) as unread
from users LEFT JOIN reclamations ON users.id = reclamations.from and vu = false and reclamations.to =  " . auth()->user()->id ."
where users.id != " . auth()->user()->id ." 
group by users.id, users.firstName,users.lastName, users.image, users.email "

);


  return view('reclamation.reclamationMessenger' ,compact('banks','notif','notifMinBank','users'));
}


public function getMessageVisa($user_id){

$my_id = auth()->user()->id;
//when click to see selected user's message will be read
  Reclamation::where(['from' => $user_id, 'to' => $my_id])->update(['vu'=> true]);
  
  $messages = DB::table('reclamations')
  
  ->where(function ($query) use($user_id) {
      $query->where('from', '=' , auth()->user()->id )
            ->Where('to', '=' , $user_id )
            ->where('type', '=', "visa");
  })->orWhere(function ($query) use($user_id) {
    $query->where('to', '=' , auth()->user()->id )
          ->Where('from', '=' , $user_id )
          ->where('type', '=', "visa");
})
  ->get();



  return view('reclamation.message' ,compact('messages'));



}


public function getMessageExchange($user_id){

  $my_id = auth()->user()->id;
  //when click to see selected user's message will be read
    Reclamation::where(['from' => $user_id, 'to' => $my_id])->update(['vu'=> true]);
    
    $messages = DB::table('reclamations')
    
    ->where(function ($query) use($user_id) {
        $query->where('from', '=' , auth()->user()->id )
              ->Where('to', '=' , $user_id )
              ->where('type', '=', "exchange");
    })->orWhere(function ($query) use($user_id) {
      $query->where('to', '=' , auth()->user()->id )
            ->Where('from', '=' , $user_id )
            ->where('type', '=', "exchange");
  })
    ->get();
  
  
  
    return view('reclamation.message' ,compact('messages'));
  
  
  
  }




public function sendMessageAdminVisa(){

  
  $from = auth()->user()->id;
  $to =  request('received_id');
  $message =  request('message');

  $data = Reclamation::create([  
    'from' =>  $from ,
    'to' => $to,
    'text'=>  $message,
    'type' => "visa" ,
  ]);
  
  //pusher


/*   $options = array(
    'cluster' => 'ap2',
    'useTLS' => true
  );

  $pusher = new Pusher(
    env( 'PUSHER_APP_KEY' ),
    env( 'PUSHER_APP_SECRET' ),
    env(  'PUSHER_APP_ID' ),
    $options
  );
 */
$app_id = '952963';
$app_key = '5eff73df944d84937173';
$app_secret = '01a0015e81622e6fd152';
$app_cluster = 'ap2';

$pusher = new Pusher( $app_key, $app_secret, $app_id, array('cluster' => $app_cluster, 'useTLS' => true) );

   $data = [ 'from' => $from, 'to' => $to ];
 
  $pusher->trigger( 'my_channel','my_event', $data);

  
}
      

          


public function sendMessageAdminExchange(){

  
  $from = auth()->user()->id;
  $to =  request('received_id');
  $message =  request('message');

  $data = Reclamation::create([  
    'from' =>  $from ,
    'to' => $to,
    'text'=>  $message,
    'type' => "exchange" ,
  ]);
  
  //pusher


/*   $options = array(
    'cluster' => 'ap2',
    'useTLS' => true
  );

  $pusher = new Pusher(
    env( 'PUSHER_APP_KEY' ),
    env( 'PUSHER_APP_SECRET' ),
    env(  'PUSHER_APP_ID' ),
    $options
  );
 */
$app_id = '952963';
$app_key = '5eff73df944d84937173';
$app_secret = '01a0015e81622e6fd152';
$app_cluster = 'ap2';

$pusher = new Pusher( $app_key, $app_secret, $app_id, array('cluster' => $app_cluster, 'useTLS' => true) );

   $data = [ 'from' => $from, 'to' => $to ];
 
  $pusher->trigger( 'my_channel','my_event', $data);

  
}












}
