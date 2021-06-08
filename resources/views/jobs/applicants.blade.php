@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Candidats</h1>
    <div class="row justify-content-center">
        <div class="col-md-12">       
          @foreach($applicants as $applicant)

            <div class="card">
                <div class="card-header"><a href="{{route('jobs.show',[$applicant->id,$applicant->slug])}}">{{$applicant->title}}</a></div>

                <div class="card-body">
                    @foreach($applicant->users as $user)
                       
            <table class="table" style="width: 100%;">
            <thead class="thead-info">
            </thead>
            <tbody>
            <tr>
                <td>
                    @if($user->profile->avatar)
                        <img src="{{asset('uploads/avatar')}}/{{$user->profile->avatar}}" width="80">
                    @else
                    <img src="{{asset('uploads/avatar/man.jpg')}}" width="80">
                    @endif
                    <br>
                     Candidature en {{ date('F d, Y', strtotime($applicant->created_at)) }}
                </td>
        <td>Nom {{$user->name}}</td>
        <td>Email {{$user->email}}</td>
        <td>Adresse  {{$user->profile->address}}</td>
        <td>Sexe  {{$user->profile->gender}}</td>
        <td>Experience :  {{$user->profile->experience}}</td>
        <td>Bio : {{$user->profile->bio}}</td>
        <td>Téléphone  {{$user->profile->phone_number}}</td>

        <td><a href="{{Storage::url($user->profile->resume)}}">CV</a></td>

        <td><a href="{{Storage::url($user->profile->cover_letter)}}">Lettre de Motivation</a></td>
      <td></td>

    </tr>
  </tbody>
</table>

                   </div><br><br>
                    @endforeach
                </div> 
                <br>
                 @endforeach


            </div>

        </div>
    </div>
</div>
@endsection