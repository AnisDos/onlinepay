



@extends('user.baseUser')

@section('content')


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






