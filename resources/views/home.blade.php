<!-- la nostra vera pagina richiama "base" tramite extends-->
@extends('templates.base') 

@section('title','HomePage') 

<!-- section segue il collegamento su yield nella pag base -->
<!-- inserisco il mio main- contenuto img -->
<!-- collegamento main con base.blade  @dump($comics)-->
@section('main')
<div class="container-fluid content-foto">
     <div class="row">
       @foreach($comics as $item)
       <div class=" col-1 img-foto"> 
           <!-- <a href="/product/{{$loop->iteration}}  ">   -->
            <a href="{{ route('product',['id' => $loop->iteration])}}"> 
               <!--src -->
                  <img id="foto-comics" src="{{$item['thumb']}}" width="170px"  height="170px" alt=""> 
                  <h3>{{$item["title"]}}</h3>
            </a>
       </div>
       @endforeach
     </div>
 </div>
@endsection 

