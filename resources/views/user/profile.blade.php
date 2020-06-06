



@extends('user.baseUser')


@section('content')

              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">{{auth()->user()->firstName}}</h4>
                    <p class="card-description"> Add class <code>.table-striped</code>
                    </p>
                 
                    













                    

      <form id="form_ex_send" method="POST" action="{{ url('/user/exchange') }}" >
        @csrf
 
             <div class="row">
                 <div class="col-12 grid-margin">
                     <div class="card">
                         <div class="card-body">
                        
                             <h4 class="card-title">Recent Tickets</h4>
             
                             <div style="float:left;">
                                 <!-- image   -->
                                 <div style="float:left;">
                                     <img id="imgList1" src="{{  asset ('styleTestAdmin/assets/images/faces/face2.jpg') }}" class="mr-2" alt="image">
                                 </div>
             
                                 <!-- les inputs   -->
                                 <div style="float:right;">
                                     <div>
                                         <select name="from" onchange="showSelect2(event)" id="selectNum1" class="form-control-lg form-control-sm ">
                                           @foreach ($comptes as $compte)
                                           <option   @if ($loop->first) selected @endif  value="{{$compte['name']}}">{{$compte['name']}}</option>
                                           @endforeach
                                      
                                         </select>
                                     </div>
             
                                     <div>
                                         <input type="number" name="fromValue"  id="Input1NoDisabled" class="form-control-lg form-control-sm "
                                         @error('fromValue') is-invalid @enderror" value="{{ old('fromValue') }}" >
                                         @error('fromValue')
                                         <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                     @enderror
                                     </div>

                                     <h6> Exchange rate : 1 <span id="diivi1" ></span> = <span id="diivi2" ></span><span id="diivi3" ></span>  </h6>
                                     <h6> min a commander:  <input type="number"  id="diivi4" readonly style="  border: none;
                                      display: inline;
                                      font-family: inherit;
                                      font-size: inherit;
                                      padding: none;
                                      width: auto; margin:0;
  padding:0;width:30px;" > <span id="diivi5" ></span> </h6>
                                 </div>
                             </div>
             
                             <div style="float:right;">
                                 <!-- les inputs   -->
                                 <div style="float:left;">
                                     <div>
                                         <select id="selectNum2" name="to"  onchange="changeHandler2()" class="form-control-lg form-control-sm ">
                                     
                                          
                                         </select>
             
                                     </div>
             
                                     <div>
                                         <input type="text" name="toValue" id="Input2Disabled"class="form-control-lg form-control-sm " readonly  >
                                  
                                     </div>
                                 </div>
             
                                 <!-- image   -->
                                 <div style="float:right;">
                                     <img id="imgList2"  src="{{  asset ('styleTestAdmin/assets/images/faces/face2.jpg') }}" class="mr-2" alt="image">
                                 </div>
                             </div>
 
 
 
                             <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                                 <div class="modal-dialog" role="document">
                                   <div class="modal-content">
                                     <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       <h4 class="modal-title" id="exampleModalLabel"></h4>
                                     </div>
                                     <div class="modal-body khta">
                                       <form>
                                         <div class="form-group">
                                           <label for="recipient-name" id="labelFrom"  class="control-label">:</label>
                                           <input type="text" name="fromAccount"  class="form-control" id="recipient-name"
                                           @error('fromAccount') is-invalid @enderror" value="{{ old('fromAccount') }}">
                                           @error('fromAccount')
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                           </span>
                                       @enderror
                                         </div>
                                         <div class="form-group">
                                           <label for="message-text" id="labelTo"  class="control-label">:</label>
                                           <input type="text" name="toAccount"  class="form-control" id="message-text"
                                           @error('toAccount') is-invalid @enderror" value="{{ old('toAccount') }}">
                                           @error('toAccount')
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                           </span>
                                       @enderror
                                        
                                         </div>
                                       </form>
                                     </div>
                                     <div class="modal-footer">
                                       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                               
                                       <button type="submit" class="btn btn-primary" id="regitEx" disabled="disabled" onclick="event.preventDefault();
                                       document.getElementById('form_ex_send').submit();"  > exchange now</button>
 
 
 

 
 
 
                                    
                                     </div>
                                   </div>
                                 </div>
                               </div>
   
 
                          
 
 
 
 
 
                         
                         </div>
 
 
                     
 
                       
                     </div>
                 </div>
             </div>
 
 
 
             <div id="myDiv" >
                            
 
                 @guest
   
                 <button class="btn btn-gradient-danger btn-icon-text" type="submit" onclick="event.preventDefault();
                 document.getElementById('form_ex_send').submit();"  > <i class="mdi mdi-upload btn-icon-prepend" ></i> exchange</button>
 
 
                      @else
                 
                 <button id="exNoForm" class="btn btn-gradient-danger btn-icon-text" disabled="disabled" onclick="changeTextOfLabelInCOnfermationAlert()" type="button" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" > <i class="mdi mdi-upload btn-icon-prepend" ></i> exchange</button>
                 @endguest
 
 
               </div>
 
 
 
             </form>
 



























                  </div>
                </div>
              </div>































































              <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

              

            <script type="text/javascript">




//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
$(document).ready(function() {
  $('.khta input').on('keyup', function() {
    let empty = false;

    $('.khta input').each(function() {
      
      if ($(this).val() == '') {
        empty = true;
    }
    });

    if (empty)
      $('#regitEx').attr('disabled', 'disabled');
    else
      $('#regitEx').attr('disabled', false);
  });
});



//--------------------------------------------------------------------------
            
function changeImageOfBank(){
  //get select selected

  var ex = document.getElementById("selectNum2");
  var elementSelectedIn2 = ex.options[ex.selectedIndex].value;
                                          
  var ex1 = document.getElementById("selectNum1");
  var elementSelectedIn1 = ex1.options[ex1.selectedIndex].value;
              

       //Create array of options to be added
       var array = {!! json_encode($comptes ) !!};


              
              //Create and append the options   
              var first_iteration = true;
              array.forEach(myFunction2);
              
              function myFunction2(value) {
                if (  value['name'] === elementSelectedIn1  ) {
                  document.getElementById("imgList1").src="/storage/" +  value['logo'];
                  document.getElementById('diivi1').innerHTML =  value['name'];
                  document.getElementById('diivi5').innerHTML =  value['name'];
                  document.getElementById('diivi4').value =  value['minToCommand'];
                  
              }
              if (  value['name'] === elementSelectedIn2  ) {
                document.getElementById("imgList2").src="/storage/" +  value['logo'];
                document.getElementById('diivi3').innerHTML =  value['name'];
           
          }
              
              }



};




//---------------------------------------------------------------------

              function changeTextOfLabelInCOnfermationAlert(){
                                  var ex = document.getElementById("selectNum2");
                                  var elementSelectedIn2 = ex.options[ex.selectedIndex].value;
                                          
                                  var ex1 = document.getElementById("selectNum1");
                                  var elementSelectedIn1 = ex1.options[ex1.selectedIndex].value;
              
                                  document.getElementById('labelFrom').innerHTML = 'votre compte de '  + elementSelectedIn1 + ':';
              
                                  document.getElementById('labelTo').innerHTML = 'votre compte de '  + elementSelectedIn2 + ':';
              
              
              
              };
              
              
                              window.onload = function hasin() {
                                
                                showSelect2();
                                changeImageOfBank();
              
              
                                     };
              
                                     function showSelect2(e){
                                  
              
              //Create array of options to be added
              var array = {!! json_encode($comptes ) !!};
              
              //select list
              var selectList = document.getElementById('selectNum2');
              
              
              //delet all option 
              while (selectList.firstChild) {
                  selectList.removeChild(selectList.firstChild);
                }
              
              //elemnt celected n first list
              var ex12 = document.getElementById("selectNum1");
              var theElementSelectedIn1 = ex12.options[ex12.selectedIndex].value;


           
              
              //Create and append the options
              var first_iteration = true;
              array.forEach(myFunction);
              
              function myFunction(value) {
                if (  value['name'] !== theElementSelectedIn1  ) {
                  if (first_iteration) {


                 
                 
                       
                        first_iteration = false;
                  
                var option = document.createElement("option");
                  option.value = value['name'];
                  option.text = value['name'];
                  option.setAttribute('selected', 'selected');
                  selectList.appendChild(option);
                }else{   
              
              
                var option = document.createElement("option");
                  option.value = value['name'];
                  option.text = value['name'];
                  selectList.appendChild(option);
              
              
                }
              }
              
              }
              
              changeHandler(e);  
              
              changeImageOfBank();
              
                                     };
              
              
                     function changeHandler2(e){ changeHandler(e);
                      changeImageOfBank();  };
              
              
              
                           
                                function changeHandler(e){
                                  // list of bank
                                  var dt = {!! json_encode($comptes ) !!};
                                  var input287798798798 = document.getElementById('diivi2');
                
                                  var input2 = document.getElementById('Input2Disabled');
                                  var ex = document.getElementById("selectNum2");
                                  var elementSelectedIn2 = ex.options[ex.selectedIndex].value;
                                          
                                  var ex1 = document.getElementById("selectNum1");
                                  var elementSelectedIn1 = ex1.options[ex1.selectedIndex].value;
                              
                                  var vlv2 = [] ;
                                  var vlv1 = [] ;
                                 
                                   dt.forEach(myFunction);
              
                                         function myFunction(value) {
              
                                         
                                          if (  value['name'] === elementSelectedIn2  ) {
              
                                           vlv2 =value;
              
                                                    }
                                      
                                         
                                          if (  value['name'] === elementSelectedIn1  ) {
              
                                             vlv1 =value;
              
                                          }
                                           
              
                                             };
                                        
                                                  input2.value =  (vlv1['value'] / vlv2['value']).toFixed(2) ;
                                                  var input1 = document.getElementById('Input1NoDisabled');
                                                  input1.value = 1 ;
                                                  input287798798798.innerHTML  =(vlv1['value'] / vlv2['value']).toFixed(2) ;
                                                  

                                                  if (input1.value < vlv1['minToCommand'] ) {
                                                    $('#exNoForm').attr('disabled', 'disabled');

                                                  } else {
                                                    $('#exNoForm').attr('disabled', false);

                                                  }
                                                 
                                               



                                                  changeInputValue();
                                                  
              
              
                               
                                  
                                };
              
              
                                
                  
                            </script>
              
                            <script type="text/javascript">
                            function changeInputValue () {
              
              
              
              
              
                              var input1 = document.getElementById('Input1NoDisabled');
                              var input2 = document.getElementById('Input2Disabled');
                            
                 
                                var dt = {!! json_encode($comptes ) !!};
                                  var input2 = document.getElementById('Input2Disabled');
                                  var ex = document.getElementById("selectNum2");
                                  var elementSelectedIn2 = ex.options[ex.selectedIndex].value;
                                          
                                  var ex1 = document.getElementById("selectNum1");
                                  var elementSelectedIn1 = ex1.options[ex1.selectedIndex].value;
                                 
                                  var vlv2 = [] ;
                                  var vlv1 = [] ;
                                 
                                 
                                   dt.forEach(myFunction);
              
                                         function myFunction(value) {
                                           
                                         
              
                                         
                  
                 
                  if (  value['name'] === elementSelectedIn2  ) {
              
                    vlv2 =value;
              
                            }
              
                 
                  if (  value['name'] === elementSelectedIn1  ) {
              
                vlv1 =value;
              
                  }
                };
               
                input2.value  = (( input1.value  * vlv1['value']) / vlv2['value']).toFixed(2) ;
                
            
                if (input1.value < vlv1['minToCommand'] ) {
                                                    $('#exNoForm').attr('disabled', 'disabled');

                                                  } else {
                                                    $('#exNoForm').attr('disabled', false);

                                                  }

                             };
              
              
                              var input1 = document.getElementById('Input1NoDisabled');
                            
                            
                              input1.addEventListener('input', function() {
              
              
              
                                changeInputValue ();
              
                                
                              });
                            </script>
              
              
              
              



























































































































































              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">{{auth()->user()->firstName}}</h4>
                    <p class="card-description"> Add class <code>.table-striped</code>
                    </p>
                    <a href=" {{ url('user/resendEmail') }} " >   <p class="card-description"> resendEmail verification </p></a>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> User </th>
                          <th> From</th>
                          <th> To </th>
                         
                          <th> Amount from </th>
                          <th> Amount to </th>
                          <th> Progress </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($exchanges as $exchange)
                            
                   
                        <tr>
                          <td class="py-1">
                            <img src="{{  asset ('styleTestAdmin/assets/images/faces-clipart/pic-1.png') }}" alt="image" />
                          </td>
               
                          <td>{{ $exchange->from }}</td>
                      
                        
                       
                          <td>{{ $exchange->to }}</td>
                      
                          <td> {{ $exchange->fromValue }}</td>
                          <td> {{ $exchange->toValue }}</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                        </tr>

                        @endforeach
























                        <tr>
                          <td class="py-1">
                            <img src="{{  asset ('styleTestAdmin/assets/images/faces-clipart/pic-1.png') }}" alt="image" />
                          </td>
                          <td> Herman Beck </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td> $ 77.99 </td>
                          <td> May 15, 2015 </td>
                        </tr>




















                        <tr>
                          <td class="py-1">
                            <img src="{{  asset ('styleTestAdmin/assets/images/faces-clipart/pic-2.png') }}" alt="image" />
                          </td>
                          <td> Messsy Adam </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td> $245.30 </td>
                          <td> July 1, 2015 </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="{{  asset ('styleTestAdmin/assets/images/faces-clipart/pic-3.png') }}" alt="image" />
                          </td>
                          <td> John Richards </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td> $138.00 </td>
                          <td> Apr 12, 2015 </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="{{  asset ('styleTestAdmin/assets/images/faces-clipart/pic-4.png') }}" alt="image" />
                          </td>
                          <td> Peter Meggik </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td> $ 77.99 </td>
                          <td> May 15, 2015 </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="{{  asset ('styleTestAdmin/assets/images/faces-clipart/pic-1.png') }}" alt="image" />
                          </td>
                          <td> Edward </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td> $ 160.25 </td>
                          <td> May 03, 2015 </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="{{  asset ('styleTestAdmin/assets/images/faces-clipart/pic-2.png') }}" alt="image" />
                          </td>
                          <td> John Doe </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td> $ 123.21 </td>
                          <td> April 05, 2015 </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="{{  asset ('styleTestAdmin/assets/images/faces-clipart/pic-3.png') }}" alt="image" />
                          </td>
                          <td> Henry Tom </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td> $ 150.00 </td>
                          <td> June 16, 2015 </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


























































































              
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">update info</h4>
                    <p class="card-description"> Add class <code>.table-bordered</code>
                    </p>


















                    <div class="card-body">
                    <form method="POST"  action="{{ url('user/update') }}" enctype="multipart/form-data">
                          @csrf
                      
                          <img src="/storage/{{auth()->user()->image}}"   >
                          
                          




                          <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('image') }}</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{auth()->user()->image}}"  autocomplete="image" >

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



<input type="hidden" name="id_user" value="{{auth()->user()->id}}" >
                          <div class="form-group row">
                              <label for="firstName" class="col-md-4 col-form-label text-md-right">{{ __('firstName') }}</label>
  
                              <div class="col-md-6">
                                  <input id="firstName" type="text" class="form-control @error('firstName') is-invalid @enderror" name="firstName" value="{{auth()->user()->firstName}}" required autocomplete="firstName" >
  
                                  @error('firstName')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>


                          <div class="form-group row">
                            <label for="lastName" class="col-md-4 col-form-label text-md-right">{{ __('lastName') }}</label>

                            <div class="col-md-6">
                                <input id="lastName" type="text" class="form-control @error('lastName') is-invalid @enderror" name="lastName" value="{{auth()->user()->lastName}}" required autocomplete="lastName" >

                                @error('lastName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                        

                        <div class="form-group row">
                          <label for="tel" class="col-md-4 col-form-label text-md-right">{{ __('tel') }}</label>

                          <div class="col-md-6">
                              <input id="tel" type="number" class="form-control @error('tel') is-invalid @enderror" name="tel" value="{{auth()->user()->tel}}" required autocomplete="tel" >

                              @error('tel')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                        

  
                          <div class="form-group row">
                              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
  
                              <div class="col-md-6">
                                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{auth()->user()->email}}" required autocomplete="email">
  
                                  @error('email')
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
                </div>
              </div>
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Inverse table</h4>
                    <div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>
                    <p class="card-description"> Add class <code>.table-dark</code>
                    </p>
                   


































                    <div class="panel panel-default">
                      <div class="panel-heading">Change password</div>
      
                      <div class="panel-body">
                          @if (session('error'))
                              <div class="alert alert-danger">
                                  {{ session('error') }}
                              </div>
                          @endif
                              @if (session('success'))
                                  <div class="alert alert-success">
                                      {{ session('success') }}
                                  </div>
                              @endif
                          <form class="form-horizontal" method="POST" action="{{ url('user/changePassword') }}">
                              @csrf
      
                              <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                                  <label for="new-password" class="col-md-4 control-label">Current Password</label>
      
                                  <div class="col-md-6">
                                      <input id="current-password" type="password" class="form-control" name="current-password" required>
      
                                      @if ($errors->has('current-password'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('current-password') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>
      
                              <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                                  <label for="new-password" class="col-md-4 control-label">New Password</label>
      
                                  <div class="col-md-6">
                                      <input id="new-password" type="password" class="form-control" name="new-password" required>
      
                                      @if ($errors->has('new-password'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('new-password') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>
      
                              <div class="form-group">
                                  <label for="new-password-confirm" class="col-md-4 control-label">Confirm New Password</label>
      
                                  <div class="col-md-6">
                                      <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                                  </div>
                              </div>
      
                              <div class="form-group">
                                  <div class="col-md-6 col-md-offset-4">
                                      <button type="submit" class="btn btn-primary">
                                          Change Password
                                      </button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>


























                  







































                  </div>
                </div>
              </div>



























              <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ajouter une avis </h4>
                









                    <div class="card-body">
                    <form method="POST"  action="{{ url('user/addComment') }}">
                          @csrf
                      
  
                          <div class="form-group row">
                              <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('text') }}</label>
  
                              <div class="col-md-6">
                                  <input id="text" type="text" class="form-control @error('text') is-invalid @enderror" name="text"  required autocomplete="text" >
  
                                  @error('text')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>
  
                         
  
                          <div class="form-group row mb-0">
                              <div class="col-md-6 offset-md-4">
                                  <button type="submit" class="btn btn-primary">
                                      commenter
                                  </button>
                              </div>
                          </div>
                      </form>
                  </div>

















                  
                  </div>
                </div>
              </div>

















































              <div class="col-lg-12 grid-margin stretch-card" style="margin-top:50px;">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">{{auth()->user()->firstName}}</h4>
                    <p class="card-description"> mes commentaires 
                    </p>
                    <table class="table table-striped">
                      <thead>
                        <tr>
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
                            <img src="{{  asset ('styleTestAdmin/assets/images/faces-clipart/pic-1.png') }}" alt="image" />
                          </td>
               
                          <td>{{ $comment->text }}</td>
                      
                        
                       
                          <td>{{ $comment->updated_at }}</td>

                          
                          <td>




                            <form id="form_validate_data_26" method="POST"  action="{{ url('user/deleteComment') }}">
                              @csrf
                          
                              <input type="hidden" name="id_comment"  value="{{ $comment->id }}"   >
  
                              <div class="form-group row mb-0">
                                  
                                      <button type="submit" class="btn btn-inverse-danger btn-fw"  onclick="frid();">
                                         supprimer
                                      </button>
                                 
          
                              
                              </div>
  
                        
                      </form>







                          </td>
                      
                        
                        </tr>

                        @endforeach




































                      </tbody>
                    </table>
                  </div>
                </div>
              </div>




              

@endsection





