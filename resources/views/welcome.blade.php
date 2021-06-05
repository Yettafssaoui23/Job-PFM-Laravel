@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h1>Recent Jobs</h1>
            <table class="table table-striped ">
                <thead>
                    <th>logo</th>
                    <th>Position</th>
                    <th>Address</th>
                    <th>Date</th>
                    <th>Action</th>
                </thead>
                <tbody>
                @foreach ($jobs as $job)
                    <tr>
                        <td><img src="{{asset('avatar/man.png')}}" width="80"></td>
                        <td>{{$job->position}}
                            <br><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;{{$job->type}}
                        </td>
                        <td><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;{{$job->address}}</td>
                        <td><i class="fa fa-globe" aria-hidden="true"></i>&nbsp;{{$job->created_at->diffForHumans()}}</td>
                        <td>
                            <a href="{{route('jobs.show',[$job->id,$job->slug])}}">
                                <button class="btn btn-success btn-sm">Afficher</button>
                            </a>
                        </td>
                    </tr>      
                @endforeach
                </tbody>
            </table>
    </div>
</div>
@endsection

<style>
    .fa{
        color: #e06100;
    }
</style>
