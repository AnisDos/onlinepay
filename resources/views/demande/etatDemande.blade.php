



@extends('user.baseUser')

@section('content')


<div class="col-lg-12 grid-margin stretch-card" style="margin-top:50px;">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">{{auth()->user()->firstName}}</h4>
        <p class="card-description"> Ma demande
        </p>



        @forelse ($demandes as $demande)

        @if ($demande->confirmed == "in_progress")
        rahi f progress
        <div class="stretch-card grid-margin">
            <div class="card bg-gradient-danger card-img-holder text-white">
                <div class="card-body">
                    <img src="{{  asset ('styleTestAdmin/assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
                    <h1 class="font-weight-normal mb-3">Votre demande est en traitment asber yvalidiha ladmin <i class="mdi mdi-diamond mdi-24px float-right"></i>
                    </h1>
                 


                    <h2 class="mb-5">95,5741</h2>
                    <h6 class="card-text">Increased by 5%</h6>
                  </div>
            </div>
          </div>
            
        @elseif($demande->confirmed == "validate")
        validaha ladmin 


        <div class="stretch-card grid-margin">
            <div class="card bg-gradient-info card-img-holder text-white">
                <div class="card-body">
                    <img src="{{  asset ('styleTestAdmin/assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
                    <h1 class="font-weight-normal mb-3">Votre demande est accepter svp hak ladresse hadi 3amerha 3andek <i class="mdi mdi-diamond mdi-24px float-right"></i>
                    </h1>
                    <form id="form_dm_visa" >
                       
                    <div class="form-group row">
                        <label for="image" class="col-md-4 col-form-label text-md-right">L'adresse</label>

                        <div class="col-md-6">
                            <input id="image" type="text" class="form-control @error('image') is-invalid @enderror" name="image" value="{{$demande->adresseAdmin}}"  readonly autocomplete="image" >

                       
                        </div>
                    </div>


                 
                  </form>


                    <h2 class="mb-5">95,5741</h2>
                    <h6 class="card-text">Increased by 5%</h6>
                  </div>
            </div>
          </div>





        
        @elseif($demande->confirmed == "in_validate_pay")
            asber yvalider drahem


            <div class="stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                    <div class="card-body">
                        <img src="{{  asset ('styleTestAdmin/assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
                        <h1 class="font-weight-normal mb-3">Votre demande est en traitment asber yvalidi ladmin drahem <i class="mdi mdi-diamond mdi-24px float-right"></i>
                        </h1>
                     
    
    
                        <h2 class="mb-5">95,5741</h2>
                        <h6 class="card-text">Increased by 5%</h6>
                      </div>
                </div>
              </div>

              @elseif($demande->confirmed == "validated")
            valider




            <div class="stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                    <div class="card-body">
                        <img src="{{  asset ('styleTestAdmin/assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
                        <h1 class="font-weight-normal mb-3">Votre demande est accepter nlivriwhalk nchlh <i class="mdi mdi-diamond mdi-24px float-right"></i>
                        </h1>
                     
    
    
                        <h2 class="mb-5">95,5741</h2>
                        <h6 class="card-text">Increased by 5%</h6>
                      </div>
                </div>
              </div>

           
        @endif

     

   
      
        @empty
            
        ma3endekch demande

        @endforelse
       
     
      </div>
    </div>
  </div>




@endsection






