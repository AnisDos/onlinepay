



@extends('user.baseUser')

@section('content')



              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">modifier les paramètres du compte</h4>
                    <p class="card-description"> Add class <code>.table-bordered</code>
                    </p>










                    <div class="card-body">
                    <form method="POST"  action="{{ url('user/update') }}" enctype="multipart/form-data">
                          @csrf
           


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
           
                          <img src="/storage/{{auth()->user()->image}}"   >
                          
                          


  
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
          






































































              

@endsection






