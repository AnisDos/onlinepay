
@extends('admin.base')



@section('style')
    <!-- Bootstrap -->
    <link href="{{  asset ('styleGentella/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Datatables -->
    <link href="{{  asset ('styleGentella/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{  asset ('styleGentella/build/css/custom.min.css') }}" rel="stylesheet">

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
                


                      <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                        <div class="user-wrapper">
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

          </div>





          <br />

          <div class="row">


           

            

          </div>


          <div class="row">
          
          </div>
        </div>



 @endsection


@section('scripts')
<!-- /*     channel.bind('pusher:subscription_succeeded', function(data) {
    alert('successfully subscribed!');
});
 */
 -->

                   <!-- jqury      
                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
              
               -->   

<script src="https://js.pusher.com/5.1/pusher.min.js"></script>
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
  var pending = parseInt($('#' + data.from).find('.pending').html());


  if (pending) {
    $('#' + data.from).find('.pending').html(pending + 1);

  }else {

    $('#' + data.from).append('<span class="pending">1</span>');

  }




}
    
  }
});





    $('.user').click(function() {
      $('.user').removeClass('active');
      $(this).addClass('active');
      $(this).find('.pending').remove();

      received_id = $(this).attr('id');
     
     $.ajax({

       type:"get",
       url: "message/"+ received_id ,
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

@endsection
