
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


        <script type="text/javascript" > 
            setTimeout(function() {
         $('#successalert').fadeOut('fast');
       }, 15000); // <-- time in milliseconds
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
                    <h2 >Default Example <small>Users</small></h2>







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
                    <p class="text-muted font-13 m-b-30">
                      DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                            <th> image </th>
                          
                            <th> User </th>
                            <th> text</th>
                            <th> date </th>
                            <th> action </th>
                           
                        </tr>
                      </thead>


                      <tbody>
                     
                        


                        @foreach ($comments as $comment)
                            
                   
                        <tr>
                          <td class="py-1">
                            <img src="/storage/{{$comment->user->image}}"  alt="image" />
                          </td>
                          <td>{{ $comment->user->firstName }}</td>
                          <td>{{ $comment->text }}</td>
                      
                        
                       
                          <td>{{ $comment->updated_at }}</td>

                          
                          <td>

                            
                            <form id="form_validate_data_18" method="POST"  action="{{ url('admin/approuveComment') }}">
                                @csrf
                            
                                <input type="hidden" name="id_comment"  value="{{ $comment->id }}"   >
    
                            
                                    
                                        <button type="submit" class="btn btn-success"  onclick="approuveComment();">
                                            approuver
                                        </button>
                                   
            
                        
    
                          
                        </form>




                            <form id="form_validate_data_26" method="POST"  action="{{ url('user/deleteComment') }}">
                              @csrf
                          
                              <input type="hidden" name="id_comment"  value="{{ $comment->id }}"   >
  
                          
                                  
                                      <button type="submit" class="btn btn-inverse-danger"  onclick="deletComment();">
                                         supprimer
                                      </button>
                                 
          
                      
  
                        
                      </form>







                          </td>
                      
                        
                        </tr>

                        @endforeach

                     
                      
          
                     
                      </tbody>
                    </table>
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


  <!-- Datatables -->
<script src="{{  asset ('styleGentella/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{  asset ('styleGentella/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>


    <!-- js for sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



<script type="text/javascript">


    function   deletComment(){
     
     $("#form_validate_data_26").submit(function(event){
   
       event.preventDefault();
      
   swal({
     title: "Voulez-vous supprimer se commentaire?",
     text: "Si oui, vous ne pouvez pas le récupérer",
     icon: "warning",
     buttons: true,
     dangerMode: true,
   })
   .then((willDelete) => {
     if (willDelete) {
   
       swal("Le commentaire a été supprimé", {
         icon: "success",
       })
       .then((parpase) => {
         if (parpase) {
       if ( event.isDefaultPrevented()) { event.currentTarget.submit();}
      
   }
       });
     } else {
      swal("Le commentaire n'est pas supprimer", {
         icon: "error",
       });
       
     }
   });
   
   
     });
 }
          












 function   approuveComment(){
     
     $("#form_validate_data_18").submit(function(event){
   
       event.preventDefault();
      
   swal({
     title: "Voulez-vous approuver cette avis?",
     text: "Si oui, vous ne pouvez pas la récupérer",
     icon: "warning",
     buttons: true,
     dangerMode: true,
   })
   .then((willDelete) => {
     if (willDelete) {
   
       swal("L'avis a été supprimé", {
         icon: "success",
       })
       .then((parpase) => {
         if (parpase) {
       if ( event.isDefaultPrevented()) { event.currentTarget.submit();}
      
   }
       });
     } else {
      swal("L'avis n'est pas supprimer", {
         icon: "error",
       });
       
     }
   });
   
   
     });
 }
          









      
       </script>

@endsection
