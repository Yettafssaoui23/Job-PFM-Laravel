@extends('layouts.app')
@section('content')

<div class="container">
	 @if(Session::has('message'))

          <div class="alert alert-success">{{Session::get('message')}}</div>
          @endif
	<div class="row">
		<div class="col-md-4">
			      @include('admin.left-menu')

		</div>
		<div class="col-md-8">
			<div class="card">
				<div class="card-header bg-info">
					Ajouter Témoignage
				</div>
				<div class="card-body">

					<form action="{{route('testimonial.store')}}" method="POST">
						@csrf
						
						<div class="form-group">
							<label>Contenu</label>
							<textarea id="editors" name="content" class="form-control{{ $errors->has('content') ? ' is-invalid' : '' }}">{{ old('content') }}</textarea>
							 @if ($errors->has('content'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>Nom</label>
							<input type="text" name="name" class="form-control {{ $errors->has('content') ? ' is-invalid' : '' }}"> 
							 @if ($errors->has('content'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
						</div>

						<div class="form-group">
							<label>Profession</label>
								<input type="text" name="profession" class="form-control{{ $errors->has('content') ? ' is-invalid' : '' }}"> 

							 @if ($errors->has('profession'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('profession') }}</strong>
                                    </span>
                                @endif
						</div>
						<div class="form-group">
							<label>Vimeo Identifiant vidéo</label>
							<input type="text" name="video_id" class="form-control {{ $errors->has('content') ? ' is-invalid' : '' }}"> 

							 @if ($errors->has('video_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('video_id') }}</strong>
                                    </span>
                                @endif
						</div>
						
						<div class="form-group">
							<button type="submit" class="btn btn-info">Valider</button>
						</div>
					</form>
				</div>

		</div>



	</div>

</div>
 
@endsection


