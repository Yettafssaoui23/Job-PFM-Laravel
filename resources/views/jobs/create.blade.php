@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center">


            <div class="col-md-8">
                @if (Session::has('message'))
                    <div class="alert alert-success">
                        {{ Session::get('message') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header bg-info">Créer un emploi</div>
                    <div class="card-body">

                        <form action="{{ route('job.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="title">Titre :</label>
                                <input type="text" name="title"
                                    class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}"
                                    value="{{ old('title') }}">
                                @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="form-group">
                                <label for="description">Description :</label>
                                <textarea name="description" id="description"
                                    class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}">{{ old('description') }}</textarea>
                                @if ($errors->has('description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="role">Rôle :</label>
                                <textarea name="roles" id="roles" class="form-control {{ $errors->has('roles') ? ' is-invalid' : '' }}">{{ old('roles') }}</textarea>
                                @if ($errors->has('roles'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('roles') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="category">Catégorie :</label>
                                <select name="category" class="form-control">
                                    @foreach (App\Models\Category::all() as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="form-group">
                                <label for="position">Position :</label>
                                <input type="text" name="position"
                                    class="form-control {{ $errors->has('position') ? ' is-invalid' : '' }}"
                                    value="{{ old('position') }}">
                                @if ($errors->has('position'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('position') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="address">Adresse :</label>
                                <input type="text" name="address"
                                    class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}"
                                    value="{{ old('address') }}">
                                @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="number_of_vacancy">Nombre de postes vacants :</label>
                                <input type="text" name="number_of_vacancy"
                                    class="form-control{{ $errors->has('number_of_vacancy') ? ' is-invalid' : '' }}"
                                    value="{{ old('number_of_vacancy') }}">
                                @if ($errors->has('number_of_vacancy'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('number_of_vacancy') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="experience">Année d'expérience :</label>
                                <input type="text" name="experience"
                                    class="form-control{{ $errors->has('experience') ? ' is-invalid' : '' }}"
                                    value="{{ old('experience') }}">
                                @if ($errors->has('experience'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('experience') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="gender">Sexe :</label>
                                <select class="form-control" name="gender">
                                    <option value="mâle">mâle</option>
                                    <option value="femelle">femelle</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="type">Salaire Par An :</label>
                                <select class="form-control" name="salary">
                                    <option value="negotiable">Négociable</option>
                                    <option value="2000-5000">2000-5000</option>
                                    <option value="5000-10000">5000-10000</option>
                                    <option value="10000-20000">10000-20000</option>
                                    <option value="30000-40000">30000-40000</option>
                                    <option value="50000-60000">50000-60000</option>
                                    <option value="60000 plus">60000 et plus</option>
                                </select>
                            </div>



                            <div class="form-group">
                                <label for="type">Type :</label>
                                <select class="form-control" name="type">
                                    <option value="fulltime">Temps Plein</option>
                                    <option value="parttime">temps partiel</option>
                                    <option value="casual">Pas de Contrat</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="status">Status:</label>
                                <select class="form-control" name="status">
                                    <option value="1">Activé</option>
                                    <option value="0">Brouillon</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="lastdate">Dernier rendez-vous :</label>
                                <input type="text" id="datepicker" name="last_date"
                                    class="form-control {{ $errors->has('last_date') ? ' is-invalid' : '' }}"
                                    value="{{ old('last_date') }}">
                                @if ($errors->has('last_date'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last_date') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-info">Valider</button>
                            </div>




                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
