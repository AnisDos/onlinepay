



@extends('user.baseUser')

@section('content')



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




@endsection






