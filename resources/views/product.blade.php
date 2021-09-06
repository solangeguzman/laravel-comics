<!-- la nostra vera pagina richiama "base" tramite extends -->
 @extends('templates.base') 

@section('title','Product')
<!-- section segue il collegamento su yield nella pag base --> 
@section('main')
 <!-- qui inserisco la lista dei miei prodotti nuovi -->

  <div class="container-full bg-color"> 
     <img src="{{$comicsIndex['thumb']}}" alt="">
     <div class="row col-12 margin-content">
       <div class="col-6">  
          <div class="row">
            <h1 class="section-right"><strong>{{$comicsIndex['title']}}</strong></h1> 
            <aside class="col-12 section-green">
               U.S Price: $19.99 AVAILABLE <span class="border-text">  Check Availability</span>
           </div>
          <div class="section-text">
          {{$comicsIndex['description']}}
          </div>
      </div>

      <div class="col-6 section-left">
         <div><strong>ADVERTISEMENT</strong></div>
         <span><img src="/img/adv.jpg" width="300px" height="290" alt="superman"></span>
      </div>
    </div>
  </div>
  <!-- si fa tutta la grafica  della seconda pagina qui  -->
<div class="container-full section-talent">
 <div class="row">
    <div class="col-12">
      <div class="col-6">
        <ul><span class="title"><strong>Talent</strong></span> 
          <li>Art by:    </li>
          <li>Written by:</li>
        </ul>
      </div>
      <!-- --------- -->
      <div class="col-6">
          <ul><span class="title"><strong>Specs</strong></span> 
            <li>Series:<span class="color-blue"> {{$comicsIndex['series']}}</span> </li>
            <li>U.S. Price: {{$comicsIndex['price']}}</li>
            <li>On Sale Date: {{$comicsIndex['sale_date']}}</li>
          </ul>
      </div>

    </div>
 </div>

  

  <div class="container bg-section-img">
     <div class="row col-12">
       <span class="section-img" ></span>
       <span class="section-img">Digital Comics <img src="/img/digital.png" width="30px" alt=""></span>
       <span class="section-img">SHOP DC <img src="/img/carte.png" width="30px" height="55" alt=""></span>
       <span class="section-img">COMICSHOPLOCATOR <img src="/img/locator.png" width="25px" alt=""></span>
       <span class="section-img">SUBSCRIPTIONS <img src="/img/remera.png" width="40px"  alt=""></span>
      <span class="section-img"></span>
     </div>
  </div>
</div>  


  
  
@endsection 

