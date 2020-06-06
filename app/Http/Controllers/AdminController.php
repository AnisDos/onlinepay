<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exchange;
use App\Comment;
use App\Bank;
use App\User;
use Image;
use Illuminate\Support\Facades\DB;

use Intervention\Image\Exception\NotReadableException;

//use Illuminate\Support\Facades\Schema;      Schema::drop('notifs');


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



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
    

     
            
 

    
    public function index()
    {/*nrmlment hadou mates7a9hpmch les variables hadou */
        #$banks= Bank::where('confirmed', '=',  true )->get();
        $banks= Bank::all();
        $comments = Comment::all();
        $exchanges = Exchange::where('confirmed', '!=',  "yes" )->get();
        $exchangesConfiemed = Exchange::where('confirmed', '=',  "yes" )->get();

        $totalUsers = User :: all()->count();
        $date = \Carbon\Carbon::today()->subDays(7);
        $lastWeek = User::where('created_at','>=',$date)->count();
        $notif = $this->getNotif();
        $notifMinBank = $this->getNotifMinBank();
       /* return view('admin.index', compact('exchanges','exchangesConfiemed','comments','banks','notif','notifMinBank')  );*/
        return view('admin.indexGT', compact('exchanges','exchangesConfiemed','comments','banks','totalUsers','lastWeek','notif','notifMinBank')  );
    }

    public function showExchangeInProgress()
    {
        $banks = $this->getBanks();
             $notif = $this->getNotif();
$notifMinBank = $this->getNotifMinBank();
        $exchanges = Exchange::where('confirmed', '!=',  "yes" )->get();
        return view('admin.showExchangeInProgress', compact('exchanges','banks','notif','notifMinBank')  );

    }


    public function showExchangeValidated()
    {
        $banks = $this->getBanks();
             $notif = $this->getNotif();
$notifMinBank = $this->getNotifMinBank();
        $exchanges = Exchange::where('confirmed', '=',  "yes" )->get();
        return view('admin.showExchangeValidated', compact('exchanges','banks','notif','notifMinBank')  );

    }



    public function chekExchange(Exchange $exchange)
    {
        $banks = $this->getBanks();
             $notif = $this->getNotif();
$notifMinBank = $this->getNotifMinBank();
        return view('admin.chekExchange',compact('exchange','banks','notif','notifMinBank'));
    }


    public function validateExchange()
    {
        

        $ex = Exchange::find( request('id_exchange'));
      
        $ex->confirmed = "yes";
        $ex->save();


        
         
        $bankFrom = Bank::where('name', '=', $ex->from)->first();
        $bankFrom->credit = $bankFrom->credit + $ex->fromValue ;
        $bankFrom->save();

        $bankTo = Bank::where('name', '=', $ex->to)->first();
        $bankTo->credit = $bankTo->credit + $ex->toValue ;
        $bankTo->save();

       
        return redirect('/admin/showExchangeInProgress') ;

     
      
    }

    public function abortExchange()
    {
       
        $ex = Exchange::find( request('id_exchange'));
      
        $ex->confirmed = "no";
        $ex->save();
       
        return redirect('/admin') ;

     
    }

    
    
    public function showCommentInProgress()
    {

        $comments = Comment::where('public', '=',  false )->get();
        $banks = $this->getBanks();
             $notif = $this->getNotif();
$notifMinBank = $this->getNotifMinBank();
        return view('admin.showCommentInProgress', compact('comments','banks','notif','notifMinBank')  );

    }


        
    public function showCommentApprouved()
    {

        $comments = Comment::where('public', '=',  true )->get();
        $banks = $this->getBanks();
             $notif = $this->getNotif();
$notifMinBank = $this->getNotifMinBank();
        return view('admin.showCommentApprouved', compact('comments','banks','notif','notifMinBank')  );

    }

    public function approuveComment()
    {
     
       
        $ex = Comment::find( request('id_comment'));
      
      
        $ex->public = true;
        $ex->save();
       
        return redirect()->back()->with("success","avis approuver avec succès !");
  
     
    }
    
    
    public function addNewBankForm()
    {
        $banks = $this->getBanks();
        $notif = $this->getNotif();
$notifMinBank = $this->getNotifMinBank();


        return view('admin.addNewBankForm',compact('banks','notif','notifMinBank') );

    }















    public function storeBank() 
    {
        $data = request()->validate([
            'name' => 'required',
            'value' => 'required',
            'credit' => ['required', 'max:10'],
            'minToCommand' => 'required',
            'minCriditInSolde' => 'required',
        ]);

        
        if (request('logo')){

            $imagePath = request('logo')->store('banks','public');
            
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(120,120);
           
            $image->save();
           
        }

        $bank = Bank::create([
        
             'name'=> $data['name'] ,
             'value'=> $data['value'],
             'credit'=>  $data['credit'],
             'minToCommand'=>  $data['minToCommand'],
             'minCriditInSolde'=>  $data['minCriditInSolde'],
             'logo'=>  $imagePath,
         
             ]);
     
    
            
         return redirect()->back()->with("success"," Banque créée avec succès !");

    }


    public function showBank(Bank $bank)
    {
        $banks = $this->getBanks();
             $notif = $this->getNotif();
$notifMinBank = $this->getNotifMinBank();
        $exchangesFrom = Exchange::where('from', '=',  $bank->name )->get();
        $exchangesTo = Exchange::where('to', '=',  $bank->name )->get();
     
        return view('admin.showBank',compact('bank','exchangesFrom','exchangesTo','banks','notif','notifMinBank'));

    }


    public function updateBankInfo()
    {
        $data = request()->validate([
            
            'value' => 'required',
            'credit' => ['required', 'max:10'],
            'minToCommand' => 'required',
            'minCriditInSolde' => 'required',
        ]);
        $bank = Bank::find( request('id_Bank'));
      
      
        $bank->value = $data['value'] ;
        $bank->credit = $data['credit'] ;
        $bank->minToCommand = $data['minToCommand'] ;
        $bank->minCriditInSolde = $data['minCriditInSolde'] ;
        $bank->save();


        return redirect()->back()->with("success","Info Bank updated avec succès !");
  
    }

    public function bloquerBank()
    {
              
        $bank = Bank::find( request('id_Bank'));
      
      
        $bank->confirmed = false;
        $bank->save();


        return redirect()->back()->with("success","Bank bloqué avec succès !");
  
    }

    public function debloquerBank()
    {
              
        $bank = Bank::find( request('id_Bank'));
      
      
        $bank->confirmed = true;
        $bank->save();
       
        return redirect()->back()->with("success","Bank debloqué avec succès !");
  
    }


    


    public function chartBank()
    {
   

        $banks = $this->getBanks();
             $notif = $this->getNotif();
$notifMinBank = $this->getNotifMinBank();

/*
     $exchangesFrom = Exchange::where('from', '=', 'dollar')->get();
        $exchangesTo = Exchange::where('to', '=',  'dahmanous')->get();
        $stack = array("orange", "banana");
        array_push($stack, "apple", "raspberry");

        
        $les_plus=array();
        $num=0
        $wila = Exchange::values('wilaya_user').annotate(num=Count('wilaya_user')).order_by('-num')[:5]
        $wila = Exchange::values('wilaya_user').annotate(num=Count('wilaya_user')).order_by('-num')[:5]
        for i in wila:
            $r = array();
            r.append(i['wilaya_user'])
            r.append(i['num'])
            num=num+i['num']

        les_plus.append(r)
    r = []
    r.append('autre')
    r.append(User.objects.all().count() - num)
    les_plus.append(r)

    $users = DB::table('users')
                     ->select(DB::raw('count(*) as user_count, id'))
                     ->where('id', '=', 1)
                     ->groupBy('id')
                     ->get();




                     
    $users = DB::table('exchanges')
    ->select(DB::raw(' sum(fromValue) as totFrom, confirmed '))
    ->where('confirmed', '=', 'not_yet')
    ->groupBy('confirmed')
    ->get();



   $users = DB::table('exchanges')
    ->select(DB::raw(' sum(fromValue) as totFrom, from '))
   
    ->groupBy('from')
    ->get();




*/


 

    $exchangeFrom = DB::table('exchanges')
    ->select('from', DB::raw('sum(fromValue) as totFrom'))
    ->groupBy('from')
    ->get();

 


        return view('admin.chartBank',compact('exchangeFrom','banks','notif','notifMinBank'));

    }

}
