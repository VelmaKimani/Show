@extends('layouts.app')


@section('content')
<div class="container">

    <div class="row pt-5 pb-3"> <h1>{{ $user ?? ''->username ?? '' }}</h1></div> 
     <div>
          <h2 style="text-align: center; font-weight: bold"> Welcome!!! We deal in online sales of electronics.
           We deliver at your doorstep as requested by the client.</h2>
     </div>
     
     <div>

            {{-- {{json_encode($profile)}} --}}
                       {{-- @foreach ($user ?? ''->profile ?? ''->get() as $item )
                  <div class="row pt-2">{{$item ?? ''->title }}</div>

                  <div class="row pt-2">{{$item->description }}</div>
      
                  <div class="row pt-2 pb-2">{{$item->email}}</div>
            @endforeach --}}

            {{-- <div class="row pt-2">{{$user ?? ''->profile->title}}</div>

            <div class="row pt-2">{{$user ?? ''->profile->description}}</div>

            <div class="row pt-2 pb-2">{{$user ?? ''->profile->email ?? 'Not Available' }}</div> --}}
           
     
     </div>
    <div class="row d-flex justify-content-between align-items-baseline"> 
    
         <div class="col-3 p-2">
         <img src="https://images.freeimages.com/images/small-previews/a61/vikingland-1316664.jpg" alt="">
         <div style=" font-size:20px"> This is a bike.
                 </div>
                 </div>
                 
    <div class="col-3 p-2">
         <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT4GpiyqH-O1tHdOsfA_9eZ_5t2pcgKJiPEg3kBuHz7bvHVxQxc&usqp=CAU" alt="">

         <div style=" font-size:20px">Some coffee while coding overnight.
    </div>
    </div>
    
    <div class="col-3 p-2">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT4-wpkRrum2KZdQDoCuwgtwEYOwA6G2TgxATSFlTU5WoWW_Frl&usqp=CAU" alt="">

    <div style=" font-size:20px"> Dreams are made of gold. 
    </div>
    </div>
    
    
    </div>

          <div class="row d-flex pt-5"> 
          <div class="col">
          <a href="/p/create" class="post"> <h5>Add a New Post </h5></a>
          </div>
          <div class="col">
          <a href="#" class="edit"> <h5> Edit a post </h5></a>
          </div>
          </div>

</div>
@endsection
