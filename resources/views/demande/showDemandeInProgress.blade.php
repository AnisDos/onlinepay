
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
                    <h2>Default Example <small>Users</small></h2>
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
                            <th> User </th>
                            <th> Tel</th>
                            <th> Email </th>
                           
                      
                            <th> Progress </th>
                            
                          <th> action </th>
                        </tr>
                      </thead>


                      <tbody>
                        @foreach ($demandes as $demande)
                            
                   
                        <tr>
                          <td class="py-1">
                           
                   {{ $demande->user->firstName }}
                   {{ $demande->user->lastName }}
                        </td>
               
                          <td> {{ $demande->user->tel }}</td>
                      
                        
                       
                          <td> {{ $demande->user->email }}</td>
                      
                          <td> <label class="badge badge-warning">In progress</label></td>
                      <!-- 
                          <td>
                            @if ($demande->confirmed == "in_progress")

                            <label class="badge badge-warning">In progress</label>
                            @elseif($demande->confirmed == "in_validate_pay")
                            <label class="badge badge-danger">in_validate_pay</label> 
                            @elseif($demande->confirmed == "in_cheking")
                            <label class="badge badge-danger">in_cheking</label>
                            @elseif($demande->confirmed == "validate")
                            <label class="badge badge-success">validate</label>
                            @endif
                          </td>


                          -->
                          <td>  <a class="nav-link" href="/admin/demande/{{$demande->id}}">chek</a>  </td>
                        
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


@endsection
