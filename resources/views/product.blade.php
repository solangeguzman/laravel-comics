<!-- la nostra vera pagina richiama "base" tramite extends -->
 @extends('templates.base') 

@section('title','Product')
<!-- section segue il collegamento su yield nella pag base --> 
@section('main')
 <!-- qui inserisco la lista dei miei prodotti nuovi -->

  <div class="container"> 
     <img src="{{$comicsIndex['thumb']}}" alt="">
     <div class="row col-12">
       <div class="col-6">
            
          <div class="row">
            <span class="section-right">{{$comicsIndex['title']}}</span> 
            <aside class="col-12 section-green">
               U.S Price: $19.99 AVAILABLE<span class="border-text">Check Availability</span>
          </div>
      </div>

      <div class="col-6">

      </div>


    </div>
      

  </div>
  si fa tutta la grafica qui 
  
@endsection 

