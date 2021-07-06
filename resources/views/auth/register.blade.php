@extends('layouts.main')
@section('content')
   <div class="album text-muted">
     <div class="container">
       <div class="row">
         <h1>Inscription des demandeurs des emplois</h1>   
         
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
       @if(Session::has('message'))
                 <div class="alert alert-success">
                    {{Session::get('message')}}
                </div>
            @endif

          <div class="col-md-12 col-lg-8 mb-5">
          
            <form method="POST" action="" class="p-5 bg-white">
                    @csrf

                    <input type="hidden" value="seeker" name="user_type">

                        <div class="form-group row">
                    
                            <div class="col-md-12">Nom Complet</div>

                            <div class="col-md-12">
                                <input id="name" type="text" placeholder="Veuillez saisir votre nom complet..." class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                    
                            <div class="col-md-12">Adresse Email</div>

                            <div class="col-md-12">
                                <input id="email" type="text" placeholder="Veuillez saisir l'adresse email de l'entreprise..." class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                    
                            <div class="col-md-12">Date de Naissance</div>

                            <div class="col-md-12">
                                <input type="text" id="datepicker" class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" name="dob" value="{{ old('dob') }}" required>

                                @if ($errors->has('dob'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                    
                            <div class="col-md-12">Mot de Passe</div>

                            <div class="col-md-12">
                                <input id="password" type="password" placeholder="Veuillez saisir un mot de passe ..." class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" required autofocus>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">Confirmer Mot de Passe</div>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" placeholder="Veuillez confirmer votre mot de passe ..." class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                    
                            <div class="col-md-12">Sexe </div>

                            <div class="col-md-12">
                                <input type="radio" name="gender" value="male" required=""> Mâle
                                <input type="radio" name="gender" value="female" > Femelle 

                                @if ($errors->has('gender'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="S'inscrire en tant qu'un candidat" class="btn btn-info  py-2 px-5">
                </div>
              </div>

  
            </form>
          </div>

          <div class="col-lg-4">
            
            
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Plus d'informations</h3>
              <p>Une fois votre compte créé, un lien de vérification vous sera envoyé par e-mail.</p>
              <p><a href="#" class="btn btn-info py-2 px-4">Consulter</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>



     </div>
   </div>
@endsection

<script>
    $( function() {
        $( "#datepicker" ).datepicker();
    });
</script>