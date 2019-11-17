@extends('layouts.master')

@section('content')
    @foreach($blogs as $blog)
    <!-- Projects Section -->
     <section id="projects" class="projects-section bg-light">
     <div class="container">

       <!-- Featured Project Row -->
       <div class="row align-items-center no-gutters mb-4 mb-lg-5">
         <div class="col-xl-8 col-lg-7">
           <img class="img-fluid mb-3 mb-lg-0" src="img/bg-masthead.jpg" alt="">
         </div>
         <div class="col-xl-4 col-lg-5">
           <div class="featured-text text-center text-lg-left">
             <h4>{{ $blog->title}}</h4>
             <p class="text-black-50 mb-0">{{ $blog->body}}</p>
             <p class="text-black-50 mb-0">Created at {{ $blog->created_at->diffForHumans()}}</p>
           </div>
         </div>
       </div>

       <!-- Project One Row -->
       <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
         <div class="col-lg-6">
           <img class="img-fluid" src="img/demo-image-01.jpg" alt="">
         </div>
         <div class="col-lg-6">
           <div class="bg-black text-center h-100 project">
             <div class="d-flex h-100">
               <div class="project-text w-100 my-auto text-center text-lg-left">
                 <h4 class="text-white">Misty</h4>
                 <p class="mb-0 text-white-50">An example of where you can put an image of a project, or anything else, along with a description.</p>
                 <hr class="d-none d-lg-block mb-0 ml-0">
               </div>
             </div>
            </div>
         </div>
       </div>
     </section>

  
    @endforeach
@endsection