@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            @if(Session::has('message'))
                <div class="alert alert-success">
                    {{Session::get('message')}}
                </div>
            @endif
            <div class="card">
                <div class="card-header bg-info">Titre du Poste : {{$job->title}}</div>

                <div class="card-body">
                    <p><h3>Description :</h3>
                     {{$job->description}}
                    <p>
                    <p>
                         <h3>Fonctions :</h3>{{$job->roles}}
                    </p>
                </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-info">Brèves Informations :</div>

                <div class="card-body">
                    <p>Entreprise : <a href="{{route('company.index',[$job->company->id,$job->company->slug])}}"> {{$job->company->cname}}</a><p>
                    <p>Adresse : {{$job->address}}</p>
                    <p>Type d'emploie : {{$job->type}}</p>
                    <p>Position : {{$job->position}}</p>
                    <p>Publié : {{$job->created_at->diffForHumans()}}</p>
                    <p>Dernière Date : {{ date('F d, Y', strtotime($job->last_date)) }}</p>
                        
                </div>
            </div>
            <br>
        @if(Auth::check()&&Auth::user()->user_type=='seeker')


        @if (!$job->checkApplication())
        
                    <apply-component :jobid={{$job->id}}></apply-component>

        @endif
        <br>

            <favorite-component :jobid={{$job->id}} :favorited={{$job->checkSaved()?'true':'false'}}></favorite-component>



        @endif


    </div>
</div>



    </div>
</div>
@endsection
