



@extends('user.baseUser')




@section('style')
  
    <style>

     .x_content ul{
        margin: 0;
        padding: 0;
      }

     .x_content li {
        list-style: none;
      }
.user-wrapper, .message-werapper {
  border: 1px solid #dddddd;
  overflow-y: auto;
}

.user-wrapper{
  height: 600px;
}
.user {
  cursor: pointer;
  padding: 5px 0;
  position: relative;

}

.user:hover{

  background: #eeeeee;
}
.user:last-child{
  margin-bottom: 0;
}
.pending{
  position: absolute;
  left:13px;
  top:9px;
  background: #b600ff;
  margin:0;
  border-radius: 50%;
  width: 18px;
  height: 18px;
  line-height: 18px;
  padding-left: 5px;
  color:#ffffff;
  font-size: 12px;
}

.media-left {
  margin: 0 10px;
}
.media-left img {
  width: 64px;
  border-radius: 64px;
}

.media-body p {
  margin: 6px 0 ;
}

.message-werapper {
  padding: 10px;
  height: 536px;
  background: #eeeeee;
}

.messages .message {
  margin-bottom: 15px;
}
.messages .message:last-child {
  margin-bottom: 0;
}

.received, .sent {
  width: 45%;
  padding: 3px 10px;
  border-radius: 10px;
}
.received {
  background:#ffffff; 
}

.sent {
  background: #3bebff;
  float: right;
  text-align: right;
}
.message p {
  margin: 5px 0;
}

.date{
  color: #777777;
  font-size: 12px;
}
.x_content .active {
  background: #eeeeee;
}

input[type=text]{
  width: 100%;
  padding: 12px 20px;
  margin: 15px 0 0 0;
  display: inline-block;
  border-radius: 4px;
  box-sizing: border-box;
  outline: none;
  border: 1px solid #cccccc;
}
input[type=text];focus {
  border:1px solid #aaaaaa;
}

    </style>

@endsection


@section('content')



<div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">poster votre reclamation </h4>
    









        <div class="card-body">
        <form method="POST"  action="{{ url('user/addReclamationVisa') }}">
              @csrf
          

              <div class="form-group row">
                  <label for="text" class="col-md-4 col-form-label text-md-right"> quelle est votre proplem avec nous !? netraychou ? </label>

               
                      <textarea id="text" type="text" class="form-control @error('text') is-invalid @enderror" name="text"  required autocomplete="text" >
                    </textarea>
                      @error('text')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                 
              </div>

             

              <div class="form-group row mb-0">
                  <div class="col-md-6 offset-md-4">
                      <button type="submit" class="btn btn-primary">
                          reclamer
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
        <h4 class="card-title">{{auth()->user()->firstName}}</h4>
        <p class="card-description"> Add class <code>.table-striped</code>
        </p>
        <a href=" {{ url('user/resendEmail') }} " >   <p class="card-description"> resendEmail verification </p></a>
        <table class="table table-striped">
          <thead>
            <tr>
            
              <th> From</th>
              <th> To </th>
             
              <th> User </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($reclamations as $reclamation)
                
       
            <tr>
     
              <td>{{ $reclamation->from }}</td>
          
            
           
              <td>{{ $reclamation->to }}</td>
          
              <td> {{ $reclamation->text }}</td>
 
            </tr>

            @endforeach




































          </tbody>
        </table>
      </div>
    </div>
  </div>




































  
  <div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">ajouter une avis </h4>
    









        <div class="x_content col-md-4"  style="display: none;">
       
          






          <div class="user-wrapper"  >
            <ul class="users">

@foreach ($users as $user)
            <li class="user" id="{{ $user->id }}" >

@if ( $user->unread )

<span class="pending"> {{ $user->unread }} </span>
@endif

<div class="media">
<div class="media-left">
<img src="/storage/{{ $user->image }}" class="media-object" >
</div>
<div class="media-body">
<p class="name">{{ $user->firstName }} {{ $user->lastName }}</p>
<p class="email">{{ $user->email }}</p>
</div>
</div>
</li>

@endforeach

         





            </ul>
          </div>




     









































      </div>








      <div class="col-md-8 col-sm-8 col-xs-12" id="messages">
               

      </div>








      
      </div>
    </div>
  </div>

























@endsection





@section('scripts')
<script>
  var received_id = '';
  var my_id =  "{{auth()->user()->id}}" ;
  $(document).ready(function() {
    //ajax setup
    $.ajaxSetup({
      headers:{
        'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
      }
    });


    
       // Enable pusher logging - don't include this in production
       Pusher.logToConsole = true;

var pusher = new Pusher('5eff73df944d84937173', {
  cluster: 'ap2',
  forceTLS: true
});

var channel = pusher.subscribe('my_channel');
channel.bind('my_event', function(data) {

  if (my_id == data.from) {
    $('#' + data.to).click();
  
  } else if (my_id == data.to) {
  
  
    
if (received_id == data.from) {
  //if receiver is selected, reload the selected user..
  $('#' + data.from).click();
  
} else  {
  // if receiver is not selected add notification for that user
 
  var pending = parseInt($('#testIfNotifOfMsgWork').find('.pending count-symbol bg-warning').html());



  if (pending) {
 

  }else {
 
    //$('#testIfNotifOfMsgWork').append('<span class="pending count-symbol bg-warning"></span>');
    $("#extorpdflink").after('<span class="pending count-symbol bg-warning"></span>');


  }




}
    
  }
});





$('.user').click(function() {

      received_id = $(this).attr('id');
     
     $.ajax({

       type:"get",
       url: "messageVisa/"+ received_id ,
       data: "",
       cache: false,
       success : function (data) {
         $('#messages').html(data);
         scrollToBottomFunc();

       }


     });
     



    } );

















    $(document).on('keyup', '.input-text input', function(e) {
     var message = $(this).val();

     //chek if enter key is pressed and message not null also receiver is selected 
     if (e.keyCode == 13 && message != '' && received_id != '') 
     {
       $(this).val(''); // while press enter text box will be empty


       var datastr = "received_id=" + received_id + "&message=" + message;
     
       $.ajax({

         type:"post",
         url : "messageAdminVisa",
         data : datastr,
         cache : false,
         success : function(data) {

         },
         error: function(jqXHR, status, err){

         },
         complete: function(){
          scrollToBottomFunc();
          

         },


       });











       
     }
    }  );




  } );





// make a function to scroll down auto

function scrollToBottomFunc() {
  $('.message-werapper').animate({
    scrollTop: $('.message-werapper').get(0).scrollHeight
  }, 50 );
};




  </script>
<script>
window.onload = function() {



  $('.user').removeClass('active');
  $('#'+ 31).addClass('active');
  $('#'+ 31).find('.pending').remove();
//send messag to admin
  received_id =31;
 
 $.ajax({

   type:"get",
   url: "messageVisa/"+ received_id ,
   data: "",
   cache: false,
   success : function (data) {
     $('#messages').html(data);
     scrollToBottomFunc();

   }


 });
 



} ;


</script>



@endsection
