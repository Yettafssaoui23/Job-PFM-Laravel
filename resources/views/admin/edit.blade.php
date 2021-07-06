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
					Modifier Publication
				</div>
				<div class="card-body">

					<form action="{{route('post.update',[$post->id])}}" method="POST" enctype="multipart/form-data">@csrf
						<div class="form-group">
							<label>Titre</label>
							<input type="text" name="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"value="{{$post->title}}">
							  @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
						</div>
						<div class="form-group">
							<label>Contenu</label>
							<textarea name="content" class="form-control{{ $errors->has('content') ? ' is-invalid' : '' }}">{{ ($post->content) }}</textarea>
							 @if ($errors->has('content'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                @endif
						</div>
						<div class="form-group">
							<label>Image</label>
							<input type="file" name="image" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}">
							<img src="{{asset('storage/'.$post->image)}}" style="width: 100%;"> 
							
							 @if ($errors->has('image'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
						</div>
						<div class="form-group">
							<label>Statut</label>
							<select name="status" class="form-control">
								<option value="0"{{$post->staus=='0'?'selected':''}}>Desactivé</option>
								<option value="1"{{$post->staus=='1'?'selected':''}}>Activé</option>
							</select>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-success">Modifier</button>
						</div>
					</form>
				</div>

		</div>



	</div>

</div>

@endsection