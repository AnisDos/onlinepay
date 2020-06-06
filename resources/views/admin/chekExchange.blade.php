
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
                                <label for="from" class="control-label col-md-3 col-sm-3 col-xs-12">from </label>
    
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="from" type="text" class="form-control" value="{{ $exchange->from }}" readonly  >
    
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="fromValue" class="control-label col-md-3 col-sm-3 col-xs-12">fromValue</label>
    
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="fromValue" type="text" class="form-control"  value="{{ $exchange->fromValue }}" readonly >
    
                          
                                </div>
                            </div>
    
                            
    
                            <div class="form-group row">
                              <label for="fromAccount" class="control-label col-md-3 col-sm-3 col-xs-12">fromAccount </label>
    
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="fromAccount" type="text" class="form-control"   value="{{ $exchange->fromAccount }}" readonly  >
    
                              </div>
                          </div>
    
                          <div class="form-group row">
                              <label for="to" class="control-label col-md-3 col-sm-3 col-xs-12">to </label>
    
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="to" type="text" class="form-control"   value="{{ $exchange->to }}" readonly  >
    
                              </div>
                          </div>
    
                          <div class="form-group row">
                              <label for="toValue" class="control-label col-md-3 col-sm-3 col-xs-12">toValue </label>
    
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="toValue" type="text" class="form-control"   value="{{ $exchange->toValue }}" readonly  >
    
                              </div>
                          </div>
    
                          <div class="form-group row">
                              <label for="toAccount" class="control-label col-md-3 col-sm-3 col-xs-12">toAccount </label>
    
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="toAccount" type="text" class="form-control"   value="{{ $exchange->toAccount }}" readonly  >
    
                              </div>
                          </div>
    
                          <div class="form-group row">
                              <label for="confirmed" class="control-label col-md-3 col-sm-3 col-xs-12">confirmed </label>
    
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  @if ($exchange->confirmed == "not_yet")
    
                                  <label class="badge badge-warning">In progress</label>
                                  @elseif($exchange->confirmed == "no")
                                  <label class="badge badge-danger">canceled</label>
                                  @elseif($exchange->confirmed == "yes")
                                  <label class="badge badge-success">Completed</label>
                                  @endif
                              </div>
                          </div>
    
                 
    
                
    
    
    
                </form>






                        <div class="ln_solid"></div>
                        <div class="form-group">
                          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <form id="form_validate_data" method="POST"  action="{{ url('admin/validateExchange') }}">
                                @csrf
                            
                                <input type="hidden" name="id_exchange"  value="{{ $exchange->id }}"   >
                            
                                      <button  type="submit"  class="btn btn-success" onclick="samir();" >
                                         valider
                                      </button>
                            
                            </form>
                        </br>
                            <form id="form_validate_data_2" method="POST"  action="{{ url('admin/abortExchange') }}">
                                @csrf
                            
                                <input type="hidden" name="id_exchange"  value="{{ $exchange->id }}"   >
          
                            
                                        <button type="submit" class="btn btn-primary"  onclick="frid();">
                                           annuler
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
