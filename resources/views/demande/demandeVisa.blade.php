



@extends('user.baseUser')

@section('content')



              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">vous devez confirmer ce formulaire avec vos information personnel svp</h4>
                    <p class="card-description"> Add class <code>.table-bordered</code>
                    </p>










                    <div class="card-body">
             




                          <div class="form-group row">
                              <label for="firstName" class="col-md-4 col-form-label text-md-right">{{ __('firstName') }}</label>
  
                              <div class="col-md-6">
                                  <input id="firstName" type="text" class="form-control @error('firstName') is-invalid @enderror" name="firstName" value="{{auth()->user()->firstName}}" required autocomplete="firstName" readonly >
  
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
                                <input id="lastName" type="text" class="form-control @error('lastName') is-invalid @enderror" name="lastName" value="{{auth()->user()->lastName}}" required autocomplete="lastName"  readonly>

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
                              <input id="tel" type="number" class="form-control @error('tel') is-invalid @enderror" name="tel" value="{{auth()->user()->tel}}" required autocomplete="tel" readonly >

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
                                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{auth()->user()->email}}" required autocomplete="email" readonly>
  
                                  @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <form id="form_dm_visa" method="POST"  action="{{ url('user/demandeVisaForm') }}" enctype="multipart/form-data" >
                            @csrf



                            <div class="form-group row">
                              <label for="comptePaysera" class="col-md-4 col-form-label text-md-right">{{ __('comptePaysera') }}</label>
  
                              <div class="col-md-6">
                                  <input id="comptePaysera" type="text" class="form-control @error('comptePaysera') is-invalid @enderror" name="comptePaysera" value="{{auth()->user()->comptePaysera}}" required  autocomplete="comptePaysera"  >
  
                                  @error('comptePaysera')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>



                          <div class="form-group row">
                            <label for="adresse" class="col-md-4 col-form-label text-md-right">{{ __('adresse') }}</label>

                            <div class="col-md-6">
                                <input id="adresse" type="text" class="form-control @error('adresse') is-invalid @enderror" name="adresse" value="{{auth()->user()->adresse}}"  autocomplete="adresse"  >

                                @error('adresse')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

           
                          
                        <div class="form-group row">
                          <label for="image" class="col-md-4 col-form-label text-md-right">teswira ta3 drahem</label>
  
                          <div class="col-md-6">
                              <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{auth()->user()->image}}"  autocomplete="image" required >
  
                              @error('image')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>


                          
                        <input type="hidden" name="id_user" value="{{auth()->user()->id}}" >
                          <div class="form-group row mb-0">
                              <div class="col-md-6 offset-md-4">
                                  <button type="submit" class="btn btn-primary" onclick="demandeVs();">
                                  Valider la demande
                                  </button>
                              </div>
                          </div>
                      </form>
                  </div>

















                  
                  </div>
                </div>
              </div>
          




























              <script type="text/javascript">


                function   demandeVs(){
                 
                 $("#form_dm_visa").submit(function(event){
               
                   event.preventDefault();
                  
               swal({
                 title: "Voulez-vous valider la demande?",
                 text: "Si oui, vous devez la suivi apres la validation",
                 icon: "warning",
                 buttons: true,
                 dangerMode: true,
               })
               .then((willDelete) => {
                 if (willDelete) {
               
                   swal("La demande a ete valide", {
                     icon: "success",
                   })
                   .then((parpase) => {
                     if (parpase) {
                   if ( event.isDefaultPrevented()) { event.currentTarget.submit();}
                  
               }
                   });
                 } else {
                  swal("La demande n'est pas valide", {
                     icon: "error",
                   });
                   
                 }
               });
               
               
                 });
             }
                      
                  
                   </script>










































              

@endsection






