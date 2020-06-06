
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
                            <th> From</th>
                            <th> To </th>
                           
                            <th> Amount from </th>
                            <th> Amount to </th>
                            <th> Progress </th>
                            
                          <th> action </th>
                        </tr>
                      </thead>


                      <tbody>
                        @foreach ($exchanges as $exchange)
                            
                   
                        <tr>
                          <td class="py-1">
                           
                            <img src="{{  asset ('styleTestAdmin/assets/images/faces-clipart/pic-1.png') }}" alt="image" />
                   {{ $exchange->user->firstName }}
                        </td>
               
                          <td>{{ $exchange->from }}</td>
                      
                        
                       
                          <td>{{ $exchange->to }}</td>
                      
                          <td> {{ $exchange->fromValue }}</td>
                          <td> {{ $exchange->toValue }}</td>
                          <td>
                            @if ($exchange->confirmed == "not_yet")

                            <label class="badge badge-warning">In progress</label>
                            @elseif($exchange->confirmed == "no")
                            <label class="badge badge-danger">canceled</label>
                            @elseif($exchange->confirmed == "yes")
                            <label class="badge badge-success">Completed</label>
                            @endif
                          </td>
                          <td>  <a class="nav-link" href="/admin/exchange/{{$exchange->id}}">chek</a>  </td>
                        </tr>

                        @endforeach

                     
                      
                        <tr>
                          <td>Shad Decker</td>
                          <td>Regional Director</td>
                          <td>Edinburgh</td>
                          <td>51</td>
                          <td>2008/11/13</td>
                          <td>$183,000</td>
                          <td>$183,000</td>
                        </tr>
                        <tr>
                          <td>Michael Bruce</td>
                          <td>Javascript Developer</td>
                          <td>Singapore</td>
                          <td>29</td>
                          <td>2011/06/27</td>
                          <td>$183,000</td>
                          <td>$183,000</td>
                        </tr>
                        <tr>
                          <td>Donna Snider</td>
                          <td>Customer Support</td>
                          <td>New York</td>
                          <td>27</td>
                          <td>2011/01/25</td>
                          <td>$112,000</td>
                          <td>$183,000</td>
                        </tr>
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
