<div class="site-wrap">

  <div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div> <!-- .site-mobile-menu -->
  
  <div class="site-navbar-wrap js-site-navbar bg-white">
    
    <div class="container">
      <div class="site-navbar bg-light">
        <div class="py-1">
          <div class="row align-items-center">
            <div class="col-2">
              <h2 class="mb-0 site-logo"><a href="/">MI<strong class="font-weight-bold">BY</strong> </a></h2>
            </div>
            <div class="col-10">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container">
                  <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                  <ul class="site-menu js-clone-nav d-none d-lg-block">
                     @if(!Auth::check())
                    <li><a href="/register">Espace Demandeur</a></li>
                    <li>
                      <a href="{{route('employer.register')}}">Espace Employeur</a>
                      
                    </li>
                    @else
                    <li><a href="/home">Dashboard</li>
                    @endif
                      <li><a href="{{route('company')}}">Nos Entreprises</a></li>

                    <li>
    @if(!Auth::check())

        <button type="button" class="btn btn-info text-white py-3 px-4 rounded" data-toggle="modal" data-target="#exampleModal">
          <i class="fa fa-sign-in" style="color: #fff;">&nbsp;</i> Se Connecter
      </button>
      @else
        <a  href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
          {{ __('Se Déconnecter') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

      @endif
                    </li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!--modal-->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Se Connecter</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
              <form method="POST" action="{{ route('login') }}">
                      @csrf
                      <div class="form-group row">
                          <label for="email" class="col-md-12 col-form-label text-md-left">{{ __('Adresse E-Mail') }}</label>

                          <div class="col-md-12">
                              <input id="email" type="email" placeholder="Veuillez saisir votre Adresse E-mail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                              @if ($errors->has('email'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="password" class="col-md-12 col-form-label text-md-left">{{ __('Mot de Passe') }}</label>

                          <div class="col-md-12">
                              <input id="password" placeholder="Veuillez saisir votre Mot de Passe" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                              @if ($errors->has('password'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('password') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group row">
                          <div class="col-md-8 offset-md-4">
                              <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                  <label class="form-check-label" for="remember">
                                      {{ __('Souviens de Moi') }}
                                  </label>
                              </div>
                          </div>
                      </div>

                      <div class="form-group row mb-0">
                          <div class="col-md-8 offset-md-4">
                              

                              @if (Route::has('password.request'))
                                  <a class="btn btn-link" href="{{ route('password.request') }}">
                                      {{ __('Mot de Passe Oublié ?') }}
                                  </a>
                              @endif
                          </div>
                      </div>
                  </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times" style="color: #fff;">&nbsp;</i>Fermer</button>
      <button type="submit" class="btn btn-info">
        <i class="fa fa-sign-in" style="color: #fff;">&nbsp;</i> {{ __('Se Connecter') }}
      </button>
    </form>

    </div>
  </div>
</div>
</div>