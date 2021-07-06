@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-3">
			      @include('admin.left-menu')

		</div>
		<div class="col-md-9">
			<div class="card">
				<div class="card-header bg-info">
					Ajouter une Publication
				</div>
				<div class="card-body">

					<form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">@csrf
						<div class="form-group">
							<label>Titre :</label>
							<input type="text" name="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"value="{{ old('title') }}">
							  @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
						</div>
						<div class="form-group">
							<label>Contenu :</label>
							<textarea id="editors" name="content" class="form-control{{ $errors->has('content') ? ' is-invalid' : '' }}">{{ old('content') }}</textarea>
							 @if ($errors->has('content'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                @endif
						</div>
						<div class="form-group">
							<label>Image :</label>
							<input type="file" name="image" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}">
							@if ($errors->has('image'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                            @endif
						</div>
						<div class="form-group">
							<label>Statut :</label>
							<select name="status" class="form-control">
								<option value="1">Activé</option>
								<option value="0">Desactivé</option>
							</select>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-info float-right">Valider Publication</button>
						</div>
					</form>
				</div>

		</div>



	</div>

</div>
 
@endsection


