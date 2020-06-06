<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart_request;
use App\Bank;
use Illuminate\Support\Facades\DB;

class Cart_requestController extends Controller
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






            public function demandeVisa()
            {
              $reclamationNbr =  $this->getUsersForNotifications();
              
              return view('demande.demandeVisa',compact('reclamationNbr'));
            }
          





    public function demandeVisaForm()
    {
      $data = request()->validate([  
        
        'comptePaysera' => 'required',
        'image' => 'required|image',
        'adresse' => '',
      
      ]);

      $imagePath = request('image')->store('demandes','public');
        
    
        auth()->user()->demandes()->create([
          
          'image'=> $imagePath ,
          'adresse'=> $data['adresse'] ,
          'comptePaysera'=> $data['comptePaysera'] ,
        ]);

             
      return redirect()->back()->with("success","demande envoyé avec succès !");

        
    }



    public function etatDemande()
    {
      
      $reclamationNbr =  $this->getUsersForNotifications();
      
      $demandes = auth()->user()->demandes()->get();
      return view('demande.etatDemande', compact('demandes','reclamationNbr'));
    }



    
    public function demandeVisaFormValidationFinale()
    {

        $data = request()->validate([  
            'image' => 'required|image',
          
          ]);

        $dm = Cart_request::find( request('id_demande'));

        $imagePath = request('image')->store('demandes','public');
        
    
       
        $dm->image =  $imagePath;
        $dm->confirmed =  "in_validate_pay";
        $dm->save();
    
      
      
      return redirect()->back()->with("success","attend la finalisation finale!");

    }
  

    
    public function showDemandeInProgress()
    {
        $banks = $this->getBanks();
         $notif = $this->getNotif();
        $notifMinBank = $this->getNotifMinBank();
        $demandes = Cart_request::where('confirmed', '=',  "in_cheking" )->get();
        return view('demande.showDemandeInProgress', compact('demandes','banks','notif','notifMinBank')  );

    }

    public function validerDmVs()
    {



        $dm = Cart_request::find( request('id_demande'));

 
        $dm->confirmed = "in_cheking";
        $dm->save();
    
      
      
      return redirect()->back()->with("success","valide en attend drahem m seyed!");

    }
  

       
    public function showDemandeValidate()
    {
        $banks = $this->getBanks();
         $notif = $this->getNotif();
        $notifMinBank = $this->getNotifMinBank();
        $demandes = Cart_request::where('confirmed', '=',  "validate" )->get();
        return view('demande.showDemandeValidate', compact('demandes','banks','notif','notifMinBank')  );

    }
    

    public function showDemandeCalceled()
    {
        $banks = $this->getBanks();
         $notif = $this->getNotif();
        $notifMinBank = $this->getNotifMinBank();
        $demandes = Cart_request::where('confirmed', '=',  "canceled" )->get();
        return view('demande.showDemandeCalceled', compact('demandes','banks','notif','notifMinBank')  );

    }


    public function chekDemande(Cart_request $demande)
    {
        $banks = $this->getBanks();
         $notif = $this->getNotif();
        $notifMinBank = $this->getNotifMinBank();
        return view('demande.chekDemande',compact('demande','banks','notif','notifMinBank'));
    }



    public function validatedemande()
    {
      
      $data = request()->validate([  
        
        'adresseAdmin' => 'required',
       
      
      ]);
        


        $dm = Cart_request::find( request('id_demande'));

 
        $dm->confirmed = "validate";
        $dm->adresseAdmin = $data['adresseAdmin'] ;
        $dm->save();
    

       
        return redirect('/admin/showDemandeInProgress')->with("success","demande valide!") ;

     
      
    }

    public function abortdemande()
    {
        $dm = Cart_request::find( request('id_demande'));

 
        $dm->confirmed = "canceled";
        $dm->save();

     
     
        return redirect('/admin/showDemandeInProgress')->with("danger","demande annuler !!!!!!!!!") ;

     
     
    }





    
}
