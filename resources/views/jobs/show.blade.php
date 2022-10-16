@extends('layouts.main')
@section('content')
    <div class="album text-muted">
        <div class="container">
            @if (Session::has('message'))
                <div class="alert alert-success">{{ Session::get('message') }}</div>
            @endif
            @if (Session::has('err_message'))
                <div class="alert alert-danger">{{ Session::get('err_message') }}</div>
            @endif
            @if (isset($errors) && count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row" id="app">
                <div class="title" style="margin-top: 20px;">
                    <h2>{{ $job->title }}</h2>

                </div>

                <img src="{{ asset('external/images/pexels-energepiccom.jpg') }}" style="width: 100%;">

                <div class="col-lg-8">


                    <div class="p-4 mb-8 bg-white">
                        <!-- icon-book mr-3-->
                        <h3 class="h5 text-black mb-3"><i class="fa fa-book"
                                style="color: rgb(0, 150, 255);">&nbsp;</i>Description :<a href="#"data-toggle="modal"
                                data-target="#exampleModal1"><i class="fa fa-envelope-square"
                                    style="font-size: 34px;float:right;color:rgb(0, 255, 179);"></i></a></h3>
                        <p> {{ $job->description }}.</p>
                    </div>

                    <div class="p-4 mb-8 bg-white">
                        <!--icon-align-left mr-3-->
                        <h3 class="h5 text-black mb-3"><i class="fa fa-user"
                                style="color: rgb(0, 150, 255);">&nbsp;</i>Rôles et responsabilités :</h3>
                        <p>{{ $job->roles }}.</p>

                    </div>
                    <div class="p-4 mb-8 bg-white">
                        <h3 class="h5 text-black mb-3"><i class="fa fa-users"
                                style="color: rgb(0, 150, 255);">&nbsp;</i>Nombre de postes vacants :</h3>
                        <p>{{ $job->number_of_vacancy }}&nbsp;Postes Vacants.</p>

                    </div>
                    <div class="p-4 mb-8 bg-white">
                        <h3 class="h5 text-black mb-3"><i class="fa fa-clock-o"
                                style="color: rgb(0, 150, 255);">&nbsp;</i>Nombre des Années d'Expérience :</h3>
                        <p>{{ $job->experience }}&nbsp;Ans d'expérience</p>

                    </div>
                    <div class="p-4 mb-8 bg-white">
                        <h3 class="h5 text-black mb-3"><i class="fa fa-venus-mars"
                                style="color: rgb(0, 150, 255);">&nbsp;</i>Sexe :</h3>
                        <p>{{ $job->gender }}</p>

                    </div>
                    <div class="p-4 mb-8 bg-white">
                        <h3 class="h5 text-black mb-3"><i class="fa fa-dollar"
                                style="color: rgb(0, 150, 255);">&nbsp;</i>Salaire :</h3>
                        <p>{{ $job->salary }}&nbsp;DHS</p>
                    </div>

                </div>


                <div class="col-md-4 p-4 site-section bg-light">
                    <h3 class="h5 text-black mb-3 text-center">Brèves Informations</h3>
                    <p><b>Nom Entreprise :</b> {{ $job->company->cname }}</p>
                    <p><b>Adresse :</b> {{ $job->address }}</p>
                    <p><b>Type d'emploi :</b> {{ $job->type }}</p>
                    <p><b>Position :</b> {{ $job->position }}</p>
                    <p><b>Publié :</b> {{ $job->created_at->diffForHumans() }}</p>
                    <p><b>Date limite pour postuler :</b> {{ date('F d, Y', strtotime($job->last_date)) }}</p>

                    <p><a href="{{ route('company.index', [$job->company->id, $job->company->slug]) }}"
                            class="btn btn-warning" style="width: 100%;">Visitez la page de l'entreprise</a></p>
                    <p>

                        @if (Auth::check() && Auth::user()->user_type == 'seeker')
                            @if (!$job->checkApplication())
                                <apply-component :jobid={{ $job->id }}></apply-component>
                            @else
                                <center><span style="color: red;">Vous avez déja demandé cette offre</span></center>
                            @endif
                            <br>
                            <favorite-component :jobid={{ $job->id }}
                                :favorited={{ $job->checkSaved() ? 'true' : 'false' }}></favorite-component>
                        @else
                            Veuillez vous connecter pour postuler à cette offre
                        @endif

                    </p>
                </div>

                @foreach ($jobRecommendations as $jobRecommendation)
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <p class="badge badge-info">{{ $jobRecommendation->type }}</p>
                            <h5 class="card-title">{{ $jobRecommendation->position }}</h5>
                            <p class="card-text">{{ str_limit($jobRecommendation->description, 90) }}
                                <center> <a
                                        href="{{ route('jobs.show', [$jobRecommendation->id, $jobRecommendation->slug]) }}"
                                        class="btn btn-info">Apply</a></center>

                        </div>
                    </div>
                @endforeach


                <!-- Modal -->
                <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Envoyez le travail à votre proche</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="#" method="POST">
                                @csrf

                                <div class="modal-body">
                                    <input type="hidden" name="job_id" value="{{ $job->id }}">
                                    <input type="hidden" name="job_slug" value="{{ $job->slug }}">

                                    <div class="form-goup">
                                        <label>Votre Nom * </label>
                                        <input type="text" name="your_name" placeholder="Veuillez saisir votre Nom .."
                                            class="form-control" required="">
                                    </div>
                                    <div class="form-goup">
                                        <label>Votre Adresse E-mail *</label>
                                        <input type="email" name="your_email"
                                            placeholder="Veuillez saisir votre Adresse E-mail .." class="form-control"
                                            required="">
                                    </div>
                                    <div class="form-goup">
                                        <label>Nom de la Personne *</label>
                                        <input type="text" name="friend_name"
                                            placeholder="Veuillez saisir le Nom de votre proche .." class="form-control"
                                            required="">
                                    </div>
                                    <div class="form-goup">
                                        <label>Adresse E-mail de la personne *</label>
                                        <input type="email" name="friend_email"
                                            placeholder="Veuillez saisir l'Adresse E-mail de votre proche .."
                                            class="form-control" required="">
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                                    <button type="submit" class="btn btn-info">Envoyer cette offre d'emploi</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <br>
            <br>
            <br>

        </div>
    </div>
@endsection
