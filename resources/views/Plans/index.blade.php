
@extends('shared.master')
@section('title','lucida')
@section('content')  
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Lucida</h1>
      <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default Bootstrap components and utilities with little customization.</p>
    </div>
    
    <!-- Latest SHirts -->
    <div class="row">
        @forelse($plans->chunk(3) as $chunk)
            @foreach($chunk as $shirt)
            <div class="small-3 medium-3 large-3 columns">
                <plan :shirt="{{$shirt}}"
                         shirtlink="{{route('shirt',$shirt->id)}}"
                         shirtimagepath='{{asset("images/image.jpg")}}'
                >
                </plan>
            </div>
            @endforeach 
        @empty
            <h3>No existen experiencias</h3>
        @endforelse
    </div>



                                          
@endsection