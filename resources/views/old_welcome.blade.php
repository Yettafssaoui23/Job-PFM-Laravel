@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <search-component></search-component>
            </div>

            <br><br><br>
            <h1>Emplois récents</h1>

            <table class="table">

                <tbody>
                    @foreach ($jobs as $job)
                        <tr>
                            <td><img src="{{ asset('uploads/logo') }}/{{ $job->company->logo }}" width="90"></td>
                            <td>{{ $job->position }}
                                <br>
                                <i class="fa fa-clock-o"aria-hidden="true"></i>&nbsp;{{ $job->type }}
                            </td>
                            <td><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;{{ $job->address }}</td>
                            <td><i class="fa fa-globe"aria-hidden="true"></i>&nbsp;{{ $job->created_at->diffForHumans() }}
                            </td>
                            <td>
                                <a href="{{ route('jobs.show', [$job->id, $job->slug]) }}">
                                    <button class="btn btn-info btn-sm"> Demander
                                    </button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

        <div>
            <a href="{{ route('alljobs') }}"> <button class="btn btn-primary btn-lg" style="width: 100%;">Parcourir tous les
                    Emplois</button></a>
        </div>
        <br><br>
        <h1>Entreprises en Vedette</h1>

    </div>

    <div class="container">
        <div class="row">

            @foreach ($companies as $company)
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        @if ($company->logo)
                            <img src="{{ asset('uploads/logo') }}/{{ $company->logo }}" width="60%">
                        @else
                            <img src="{{ asset('uploads/logo/man.jpg') }}" width="60%">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $company->cname }}</h5>
                            <p class="card-text">{{ str_limit($company->description, 20) }}</p>
                            <a href="{{ route('company.index', [$company->id, $company->slug]) }}"
                                class="btn btn-outline-info ">Visiter Entreprise</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
<style>
    .fa {
        color: #4183D7;
    }
</style>
