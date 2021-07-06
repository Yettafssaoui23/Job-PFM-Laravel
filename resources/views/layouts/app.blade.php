<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MIBY') }}</title>

    <!-- Scripts -->
    <script defer src="{{ asset('js/app.js') }}"  ></script>
   
    <script  src="https://code.jquery.com/jquery-1.12.4.js"></script>

    <script defer src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/js/fontawesome-iconpicker.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


</head>
<body>
    

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'MIBY') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Se connecter') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('employer.register') }}">{{ __('Espace Entreprise') }}</a>
                            </li>
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('   Espace Candidat') }}</a>
                                </li>
                            @endif


                        @else
                         @if(Auth::user()->user_type=='employer')

                        <li>
                            <a href="{{route('job.create')}}"><button class="btn btn-info">Publier une Offre</button></a>
                        </li>
                        @endif

                        
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                
                                @if(Auth::user()->user_type=='employer')
                                  Espace Entreprise ( {{Auth::user()->company->cname}} ) 
                                    
                                
                                @elseif(Auth::user()->user_type=='seeker')
                                   Espace Candidat ( {{Auth::user()->name}} ) 
                                    @else
                                   Espace Administrateur ( {{Auth::user()->name}} ) 
                                @endif

                                    <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                @if(Auth::user()->user_type=='employer')
                                <a class="dropdown-item" href="{{ route('company.view') }}"
                                       >
                                        {{ __('Espace Entreprise') }}
                                    </a>
                                    <a class="dropdown-item" href="{{route('my.job')}}">
                                        Nos Offres d'Emplois
                                    </a>
                                    <a class="dropdown-item" href="{{route('applicant')}}">Candidats</a>

                                @elseif(Auth::user()->user_type=='seeker')


                                    <a class="dropdown-item" href="{{route('user.profile')}}"
                                       >
                                        {{ __('Profil') }}
                                    </a>

                                    <a class="dropdown-item" href="{{route('home')}}"
                                       >
                                        {{ __('Emplois Enregistrés') }}
                                    </a>
                                    @else

                                    
                                 @endif

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Se Déconnecter') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>


