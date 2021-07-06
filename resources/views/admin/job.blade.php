@extends('layouts.app')
@section('content')
<div class="container">
	
	  @if(Session::has('message'))

          <div class="alert alert-success">{{Session::get('message')}}</div>
          @endif

	<div class="row">
<div class="col-md-12">
	<div class="card">
		<div class="card-header bg-info">
			<h3>Tous les Offres d'emploi</h3>
		</div>
		<div class="card-body">

<table class="table table-striped bg-light">
  <thead>
    <tr>
        <th scope="col">Date Création</th>
        <th scope="col">Position</th>
        <th>Entreprise</th>
        <th scope="col">Statut</th>
        <th scope="col">Consulter</th>
    </tr>
  </thead>
  <tbody>
  	  	@foreach($jobs as $job)

    <tr>
      <th scope="row">{{date('d-m-Y',strtotime($job->created_at))}}</th>
      <td>{{$job->position}}</td>
      <td>{{$job->company->cname}}</td>
      <td>
           @if($job->status=='0')
                   <a href="{{route('job.status',[$job->id])}}" class="badge badge-danger" style="font-size: 14px;"> Desactivé</a>
                    @else
                   <a href="{{route('job.status',[$job->id])}}" class="badge badge-warning" style="font-size: 14px;"> Activé</a>
                @endif
      </td>
                <td>
                    <a href="{{route('jobs.show',[$job->id,$job->slug])}}" target="_blank"><button class="btn btn-info">Consulter</button></a>
                </td>
    </tr>
      @endforeach

  </tbody>
</table>

{{$jobs->links()}}
		</div>
	</div>
</div>

</div>
</div>

@endsection
