@extends('layouts.main')
@section('content')
   <div class="album text-muted">
     <div class="container">
       <div class="row" id="app">
          <div class="title" style="margin-top: 20px;">
                <h2></h2> 
          </div>

    @if(empty($company->cover_photo))

        <img src="{{asset('cover/520a34e3500f4_thumb900.jpg')}}" style="width:100%;">
    @else
        <img src="{{asset('uploads/coverphoto')}}/{{$company->cover_photo}}" style="width: 100%;">
    @endif

          <div class="col-lg-12">
            
            



            <div class="col-lg-12">

            <div class="p-4 mb-8 bg-white">
                    <h3 class="h5 text-black mb-3"><i class="fa fa-eye" style="color: rgb(0, 150, 255);">&nbsp;</i>Logo Entreprise :</h3>
                  
                <div class="company-desc">	

                    @if(empty($company->logo))
        
                    <img width="100" src="{{asset('avatar/man.jpg')}}">
        
                    @else
                    <img width="100" src="{{asset('uploads/logo')}}/{{$company->logo}}">
        
        
                    @endif
                </div>
            </div>

            
                <div class="p-4 mb-8 bg-white">
                  <!-- icon-book mr-3-->
                  <h3 class="h5 text-black mb-3"><i class="fa fa-book" style="color: rgb(0, 150, 255);">&nbsp;</i>Description Entreprise :</h3>
                  <p> {{$company->description}}.</p>
                </div>
                
                <div class="p-4 mb-8 bg-white">
                  <!--icon-align-left mr-3-->
                  <h3 class="h5 text-black mb-3"><i class="fa fa-building" style="color: rgb(0, 150, 255);">&nbsp;</i>Nom Entreprise :</h3>
                  <p>{{$company->cname}} .</p>
                  
                </div>
                <div class="p-4 mb-8 bg-white">
                  <h3 class="h5 text-black mb-3"><i class="fa fa-align-justify" style="color: rgb(0, 150, 255);">&nbsp;</i>Slogan Entreprise :</h3>
                  <p>{{$company->slogan}} .</p>
                  
                </div>
                <div class="p-4 mb-8 bg-white">
                  <h3 class="h5 text-black mb-3"><i class="fa fa-map-marker" style="color: rgb(0, 150, 255);">&nbsp;</i>Adresse :</h3>
                  <p>{{$company->address}}</p>
                  
                </div>
                <div class="p-4 mb-8 bg-white">
                  <h3 class="h5 text-black mb-3"><i class="fa fa-phone" style="color: rgb(0, 150, 255);">&nbsp;</i>Téléphone :</h3>
                  <p>{{$company->phone}} </p>
                  
                </div>
                <div class="p-4 mb-8 bg-white">
                  <h3 class="h5 text-black mb-3"><i class="fa fa-at" style="color: rgb(0, 150, 255);">&nbsp;</i>Website :</h3>
                  <p>{{$company->website}}</p>
                </div>
    
              </div>

            </div>

        </div>

        <h2 class="mb-5 h3">Les offres de l'Entreprise :</h2>

        <table class="table">
            
            <tbody>
                @foreach($company->jobs as $job)
                <tr>
                    <td>
                        @if(empty($company->logo))

                    <img width="100" src="{{asset('avatar/man.jpg')}}">

                     @else
                        <img width="100" src="{{asset('uploads/logo')}}/{{$company->logo}}">


                @endif



                    </td>
                    <td>Position : {{$job->position}}
                        <br>
                        <i class="fa fa-clock-o"aria-hidden="true"></i>&nbsp;{{$job->type}}
                    </td>
                    <td><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;Adresse : {{$job->address}}</td>
                    <td><i class="fa fa-globe"aria-hidden="true"></i>&nbsp;Date de Publication : {{$job->created_at->diffForHumans()}}</td>
                    <td>
                        <a href="{{route('jobs.show',[$job->id,$job->slug])}}">
                            <button class="btn btn-info"><i class="fa fa-check-circle" style="color: #fff;">&nbsp;&nbsp;</i>Demander
                            </button>
                        </a>
                        
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
              
            </div>
          
         
          
            
          </div>

          
          
       



     </div>
   </div>
@endsection
<style>
    .fa{
        color: rgb(0, 150, 255);
    }
</style>