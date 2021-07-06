@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if(Auth::user()->user_type=='seeker')
            @foreach($jobs as $job)
            <div class="card">
                <div class="card-header bg-info">{{$job->title}}</div>
                

                <div class="card-body">  
                    <small class="badge badge-danger"> Position : {{$job->position}}
                </small>

                   <p> {{$job->description}}</p>
                </div>
                <div class="card-footer">
                    <span><a href="{{route('jobs.show',[$job->id,$job->slug])}}">Consulter</a></span>
                    <span class="float-right">Dernier rendez-vous : {{$job->last_date}}</span>
                </div>

            </div>
            <br>
            @endforeach
            @else
            
            Vous êtes connecté


            @endif
        </div>
    </div>
</div>
@endsection
