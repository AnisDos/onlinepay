
@extends('admin.base')



@section('style')
    <!-- Bootstrap -->
    <link href="{{  asset ('styleGentella/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Datatables -->
    <link href="{{  asset ('styleGentella/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{  asset ('styleGentella/build/css/custom.min.css') }}" rel="stylesheet">

@endsection



@section('content')



    <div class="right_col" role="main">
         

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              


                <div class="x_panel">
                    <div class="x_title">
                      <h2>Form Design <small>different form elements</small></h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                          </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <br />
                



                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
  
                            <div class="form-group row">
                                <label for="from" class="control-label col-md-3 col-sm-3 col-xs-12">user </label>
    
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="from" type="text" class="form-control" value="{{ $demande->user->firstName }} {{ $demande->user->lastName }}" readonly  >
    
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="fromValue" class="control-label col-md-3 col-sm-3 col-xs-12">telephone</label>
    
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="fromValue" type="text" class="form-control"  value="{{ $demande->user->tel }}" readonly >
    
                          
                                </div>
                            </div>
    
                            
    
                            <div class="form-group row">
                              <label for="fromAccount" class="control-label col-md-3 col-sm-3 col-xs-12">email </label>
    
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="fromAccount" type="text" class="form-control"   value="{{ $demande->user->email }}" readonly  >
    
                              </div>
                          </div>


                          
                          <div class="form-group row">
                            <label for="comptePaysera" class="control-label col-md-3 col-sm-3 col-xs-12">comptePaysera </label>
  
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="comptePaysera" type="text" class="form-control"   value="{{ $demande->comptePaysera }}" readonly  >
  
                            </div>
                        </div>
  
    
       
    
    
                          <div class="form-group row">
                              <label for="confirmed" class="control-label col-md-3 col-sm-3 col-xs-12">confirmed </label>
    
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <label class="badge badge-danger">in_validate_pay</label> 
                              </div>
                          </div>


                          <div class="form-group row">
                            <label for="image" class="control-label col-md-3 col-sm-3 col-xs-12">email </label>
  
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              
                    <img id="image" src="/storage/{{$demande->image}}" alt="image" style="width:500px;height:500px"  >
                            </div>
                        </div>
    
                 
    
                
    
    
    
                </form>






                        <div class="ln_solid"></div>
                        <div class="form-group">
                          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <form id="form_validate_data" method="POST"  action="{{ url('admin/validatedemande') }}">
                                @csrf



                                <div class="form-group row">
                                  <label for="adresseAdmin" class="col-md-4 col-form-label text-md-right">{{ __('adresseAdmin') }}</label>
      
                                  <div class="col-md-6">
                                      <input id="adresseAdmin" type="text" class="form-control @error('adresseAdmin') is-invalid @enderror" name="adresseAdmin" value="{{$demande->adresseAdmin}}" required  autocomplete="adresseAdmin"  >
      
                                      @error('adresseAdmin')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>
                              </div>
    
                                  
                  
                                <input type="hidden" name="id_demande"  value="{{ $demande->id }}"   >
                            
                                      <button  type="submit"  class="btn btn-success" onclick="samir();" >
                                         valider
                                      </button>
                            
                            </form>
                        </br>
                            <form id="form_validate_data_2" method="POST"  action="{{ url('admin/abortdemande') }}">
                                @csrf
                            
                                <input type="hidden" name="id_demande"  value="{{ $demande->id }}"   >
          
                            
                                        <button type="submit" class="btn btn-primary"  onclick="frid();">
                                           suprimer
                                        </button>
                              
                                </form>

                          </div>
                        </div>
  
            











                    </div>
                  </div>






              </div>

          </div>





          <br />

          <div class="row">


           

            

          </div>


          <div class="row">
          
          </div>
        </div>



 @endsection


@section('scripts')


    <!-- js for sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>





     <script type="text/javascript">
                        function   samir(){
                        
                           $("#form_validate_data").submit(function(event){
                         
                             event.preventDefault();
                            
                         swal({
                           title: "Voulez-vous valider cette demande?",
                           text: "Si oui, verifier que vous avez ajoueter ladresse correct",
                           icon: "warning",
                           buttons: true,
                           dangerMode: true,
                         })
                         .then((willDelete) => {
                           if (willDelete) {
                         
                             swal("La demmande a ete valider", {
                               icon: "success",
                             })
                             .then((parpase) => {
                               if (parpase) {
                             if ( event.isDefaultPrevented()) { event.currentTarget.submit();}
                            
                         }
                             });
                           } else {
                            swal("La demande n'est pas valider", {
                               icon: "error",
                             });
                             
                           }
                         });
                         
                         
                           });
                       }










                       function   frid(){
                        
                        $("#form_validate_data_2").submit(function(event){
                      
                          event.preventDefault();
                         
                      swal({
                        title: "Voulez-vous supprimer se produit?",
                        text: "Si oui, vous ne pouvez pas le récupérer",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                      })
                      .then((willDelete) => {
                        if (willDelete) {
                      
                          swal("Le produit a été supprimé", {
                            icon: "success",
                          })
                          .then((parpase) => {
                            if (parpase) {
                          if ( event.isDefaultPrevented()) { event.currentTarget.submit();}
                         
                      }
                          });
                        } else {
                         swal("Le produit n'est pas supprimer", {
                            icon: "error",
                          });
                          
                        }
                      });
                      
                      
                        });
                    }
                             
                         
                          </script>
                      


@endsection
