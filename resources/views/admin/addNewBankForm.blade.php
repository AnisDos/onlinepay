
@extends('admin.base')



@section('style')

@endsection



@section('content')



    <div class="right_col" role="main">


        <script type="text/javascript" > 
            setTimeout(function() {
         $('#successalert').fadeOut('fast');
       }, 8000); // <-- time in milliseconds
       </script>
      
     
          
          @if (session('success'))
        <div class="x_content bs-example-popovers" id="successalert" >
            <div class="alert alert-success alert-dismissible fade in" role="alert" style="text-align: center;">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <strong>{{ session('success') }}</strong> 
              </div>
            </div>
            @endif

         

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
                





                      <div class="card-body">
                        <h4 class="card-title">ajouter une bank</h4>
                        <p class="card-description"> be carful <code> ih matebdach ...</code>
                        </p>
                        
    
    
    
    
    
                        <div class="card-body">
                   
                          <form method="POST"  action="{{ url('admin/addBank') }}" enctype="multipart/form-data"
                          id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                @csrf
                            
         
      
      
                                <div class="form-group row">
                                  <label for="logo" class="control-label col-md-3 col-sm-3 col-xs-12">{{ __('logo') }}</label>
      
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input id="logo" type="file" class="form-control @error('logo') is-invalid @enderror" name="logo"  autocomplete="logo"  required >
      
                                      @error('logo')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>
                              </div>
      
      
                                <div class="form-group row">
                                    <label for="name" class="control-label col-md-3 col-sm-3 col-xs-12">{{ __('name') }}</label>
        
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"  required autocomplete="name" >
        
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
      
      
                                <div class="form-group row">
                                  <label for="value" class="control-label col-md-3 col-sm-3 col-xs-12">{{ __('value') }}</label>
      
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input id="value" type="number" min="0"  step=".01" class="form-control @error('value') is-invalid @enderror" name="value" required autocomplete="value" >
      
                                      @error('value')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>
                              </div>
      
      
      
      
                              
      
                              <div class="form-group row">
                                <label for="credit" class="control-label col-md-3 col-sm-3 col-xs-12">{{ __('credit') }}</label>
      
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="credit" type="number" class="form-control @error('credit') is-invalid @enderror" name="credit"  required autocomplete="credit" >
      
                                    @error('credit')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                              
      
        
                                <div class="form-group row">
                                    <label for="minToCommand" class="control-label col-md-3 col-sm-3 col-xs-12">minToCommand</label>
        
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="minToCommand" type="number" class="form-control @error('minToCommand') is-invalid @enderror" name="minToCommand" required autocomplete="minToCommand">
        
                                        @error('minToCommand')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                  <label for="minCriditInSolde" class="control-label col-md-3 col-sm-3 col-xs-12">minCriditInSolde</label>
      
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input id="minCriditInSolde" type="number" class="form-control @error('minCriditInSolde') is-invalid @enderror" name="minCriditInSolde" required autocomplete="minCriditInSolde">
      
                                      @error('minCriditInSolde')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>
                              </div>
    
      
        
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
      
    
    
    
    
    
    
    
    
                      </div>








               



                        <div class="ln_solid"></div>
                        <div class="form-group">
                          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                   

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
