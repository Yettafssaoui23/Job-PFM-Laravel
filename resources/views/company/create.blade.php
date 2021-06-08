@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">

    @if(empty(Auth::user()->company->logo))
            <img src="{{asset('avatar/man.jpg')}}"style="width: 100%;">
    @else
            <img src="{{asset('uploads/logo')}}/{{Auth::user()->company->logo}}" style="width: 100%;">
    @endif
            <br><br>

             <form action="{{route('company.logo')}}" method="POST" enctype="multipart/form-data">@csrf
            <div class="card">
                <div class="card-header bg-info">Mettre à jour le logo</div>
                <div class="card-body">
                    <input type="file" class="form-control" name="company_logo"><br>
                    <button class="btn btn-info float-right" type="submit">Mettre à jour</button>
                </div>
            </div>
        </form>
        
    </div>



        <div class="col-md-5">
                @if(Session::has('message'))
                    <div class="alert alert-success">
                        {{Session::get('message')}}
                    </div>
                @endif
            <div class="card">
                <div class="card-header bg-info">Mettre à jour les informations de votre entreprise</div>


                <form action="{{route('company.store')}}" method="POST">@csrf


                <div class="card-body">
                    <div class="form-group">
                        <label for="">Adresse</label>
                        <input type="text" class="form-control" name="address" value="{{Auth::user()->company->address}}">
                    </div>
                    <div class="form-group">
                        <label for="">Numéro de Téléphone</label>
                        <input type="text" class="form-control" name="phone"  value="{{Auth::user()->company->phone}}" >
                    </div>
                    <div class="form-group">
                        <label for="">Website</label>
                        <input type="text" class="form-control" name="website"  value="{{Auth::user()->company->website}}">
                    </div>
                    <div class="form-group">
                        <label for="">Slogan</label>
                        <input type="text" class="form-control" name="slogan"  value="{{Auth::user()->company->slogan}}">
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                            <textarea name="description" class="form-control"> {{Auth::user()->company->description}}</textarea>
                        </div>

                

                    <div class="form-group">
                        <button class="btn btn-info" type="submit">Mettre à jour</button>
                    </div>

                </div>
            </div>
        </div>


</form>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-info">À propos de votre entreprise</div>
                <div class="card-body">

                    <p>Nom Entreprise : {{Auth::user()->company->cname}}</p>

                    <p>Adresse :{{Auth::user()->company->address}}</p>

                    <p>Téléphone : {{Auth::user()->company->phone}}</p>

                    <p>Website:<a href="{{Auth::user()->company->website}}"> {{Auth::user()->company->website}}</a></p>

                    <p>Slogan Entreprise : {{Auth::user()->company->website}}</p>

                    <p>Page Entreprise : <a href="company/{{Auth::user()->company->slug}}">Visiter</a></p>
                    
                </div>
            </div>
        <br>
        <form action="{{route('cover.photo')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-header bg-info">Update coverletter</div>
                <div class="card-body">
                    <input type="file" class="form-control" name="cover_photo"><br>
                    <button class="btn btn-info float-right" type="submit">Update</button>
                </div>
            </div>
        </form>



        </div>

    </div>
</div>
@endsection

