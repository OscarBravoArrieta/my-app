@extends('layout')
@section('title', 'About')
@section('content')
<div class="container">
         <div class="row">
             <div class="col-12 col-lg-6">
                 <img class = "img-fluid mb-4" src="/img/about.svg" alt="">
             </div>
             <div class="col-12 col-lg-6">
                 <h1 class = "display-4 text-primary">Quienes somos</h1>
                 <p class="lead text-seondary">
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum enim praesentium quae, pariatur laudantium inventore expedita libero! Quisquam, sapiente similique accusamus dolorum, officiis sit ab asperiores omnis labore deserunt magnam?
                 </p>
                 <a class = " btn btn-lg btn-block btn-primary" href="{{ route('contact')}}">Contactanos</a>
                 <a class = " btn btn-lg btn-block btn-outline-primary" href="{{ route('projects.index')}}">Portafolio</a>
             </div>
         </div>

     </div>

@endsection
