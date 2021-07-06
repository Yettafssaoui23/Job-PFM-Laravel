<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Projet Architecture Client/Serveur </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('partials.head')
    
  </head>
  <body>
  
    @include('partials.nav')

    @include('partials.hero')
    

    @include('partials.category')


    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="100">
            <h2 class="mb-5 h3">Emplois récents</h2>
            <div class="rounded border jobs-wrap">
                @foreach($jobs as $job)

              <a href="{{route('jobs.show',[$job->id,$job->slug])}}" class="job-item d-block d-md-flex align-items-center  border-bottom @if($job->type=='parttime') partime @elseif($job->type=='fulltime')fulltime @else freelance   @endif;">
                <div class="company-logo blank-logo text-center text-md-left pl-3">
                  @if(!empty($job->company->logo))
                  <img src="{{asset('uploads/logo')}}/{{$job->company->logo}}" alt="Image" class="img-fluid mx-auto">
                  @else
              <img src="{{asset('avatar/man.jpg')}}" alt="Image" class="img-fluid mx-auto">
                  @endif
                </div>
                <div class="job-details h-100">
                  <div class="p-3 align-self-center">
                    <h3>{{$job->position}}</h3>
                    <div class="d-block d-lg-flex">
                      <div class="mr-3"><span class="icon-suitcase mr-1"></span> {{$job->company->cname}}</div>
                      <div class="mr-3"><span class="icon-room mr-1"></span> {{str_limit($job->address,20)}}</div>
                      <div><span class="icon-money mr-1"></span>{{$job->salary}}</div>
                    </div>
                  </div>
                </div>
                <div class="job-category align-self-center">
                  @if($job->type=='fulltime')
                  <div class="p-3">
                    <span class="text-info p-2 rounded border border-info">{{$job->type}}</span>
                  </div>
                  @elseif($job->type=='parttime')
                  <div class="p-3">
                    <span class="text-danger p-2 rounded border border-danger">{{$job->type}}</span>
                  </div>
                  @else
                   <div class="p-3">
                    <span class="text-warning p-2 rounded border border-warning">{{$job->type}}</span>
                  </div>
                  @endif

                </div>  
              </a>

            @endforeach


            </div>

            <div class="col-md-12 text-center mt-5">
              <a href="{{route('alljobs')}}" class="btn btn-info rounded py-3 px-5"><span class="icon-plus-circle"></span> Afficher plus d'emplois</a>
            </div>
          </div>
          
        </div>
      </div>
    </div>

   @include('partials.testimonial')

    <div class="site-blocks-cover overlay inner-page" style="background-image: url('external/images/hero_1.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6 text-center" data-aos="fade">
            <h1 class="h3 mb-0">Votre travail de rêve </h1>
            <p class="h3 text-white mb-5">est entrain de t'attendre </p>
            <p><a href="/register" class="btn btn-info py-3 px-4"><i class="fa fa-users" style="color: #fff;">&nbsp;</i> Espace Demandeur</a> <a href="{{route('employer.register')}}" class="btn btn-info py-3 px-4"><i class="fa fa-building" style="color: #fff;">&nbsp;</i> Espace Employeur</a></p>
            
          </div>
        </div>
      </div>
    </div>

    

    <div class="site-section site-block-feature bg-light">
      <div class="container">
        
        <div class="text-center mb-5 section-heading">
          <h2>Comment ça marche ?</h2>
        </div>

        <div class="d-block d-md-flex border-bottom">
          <div class="text-center p-4 item border-right" data-aos="fade">
            <span class="flaticon-worker display-3 mb-3 d-block text-info"></span>
            <h2 class="h4">Je crée un nouveau compte</h2>
            <p>J'entre toutes les informations me concernant pour améliorer ma visibilité.</p>
           
          </div>
          <div class="text-center p-4 item" data-aos="fade">
            <span class="flaticon-wrench display-3 mb-3 d-block text-info"></span>
            <h2 class="h4">Je joins mes documents</h2>
            <p>Je joins mes documents à mon profil et je remplis tous les champs manquantes.</p>
   
          </div>
        </div>
        <div class="d-block d-md-flex">
          <div class="text-center p-4 item border-right" data-aos="fade">
            <span class="flaticon-wrench display-3 mb-3 d-block text-info"></span>
            <h2 class="h4">Je choisis l'offre d'emploi</h2>
            <p>Je postule et je sauvegarde l'offre d'emploi qui me correspond.</p>
           
          </div>
          <div class="text-center p-4 item" data-aos="fade">
            <span class="flaticon-worker display-3 mb-3 d-block text-info"></span>
            <h2 class="h4">Je choisis l'offre d'emploi qui me correspond</h2>
            <p>Je postule et j'envoie ma candidature.</p>
          </div>
        </div>
      </div>
    </div>


    @include('partials.blog')

    <br><br>
    

    @include('partials.footer')

        @include('partials.map')
    
  </body>
</html>