@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
                <div class="col-md-3">
                        @include('admin.left-menu')
                </div>

                <div class="col-md-9">
                    <div class="card">

                        <div class="card-body">

                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="card" style="background-color: royalblue; color: #fff; margin:10px;">
                                            <div class="card-body text-center">
                                                <i class="fa fa-users"></i>
                                                <p class="lead">Utilisateurs</p>
                                                <p class="lead">{{App\Models\User::count()}}</p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="card" style="background-color: royalblue; color: #fff; margin:10px;">
                                            <div class="card-body text-center">
                                                <i class="fa fa-building"></i>
                                                <p class="lead">Entreprises</p>
                                                <p class="lead">{{App\Models\Company::count()}}</p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="card" style="background-color: royalblue; color: #fff; margin:10px;">
                                            <div class="card-body text-center">
                                                <i class="fa fa-address-card"></i>
                                                <p class="lead">Candidats</p>
                                                <p class="lead">{{App\Models\Profile::count()}}</p>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-md-4">
                                        <div class="card" style="background-color: royalblue; color: #fff; margin:10px;">
                                            <div class="card-body text-center">
                                                <i class="fa fa-briefcase"></i>
                                                <p class="lead">Offres d'emploi</p>
                                                <p class="lead">{{App\Models\Job::count()}}</p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="card" style="background-color: royalblue; color: #fff; margin:10px;">
                                            <div class="card-body text-center">
                                                <i class="fa fa-certificate"></i>
                                                <p class="lead">Catégories</p>
                                                <p class="lead">{{App\Models\Category::count()}}</p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="card" style="background-color: royalblue; color: #fff; margin:10px;">
                                            <div class="card-body text-center">
                                                <i class="fa fa-comments"></i>
                                                <p class="lead">Publications</p>
                                                <p class="lead">{{App\Models\Post::count()}}</p>
                                            </div>
                                        </div>
                                    </div>


                                </div>

        


                        </div>
                    </div>
                </div>


        </div>
    </div>


@endsection