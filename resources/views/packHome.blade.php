@extends('layouts.header')
@section('content')
    <main class="flex-shrink-0">
    
        <div class="text-center m-3">
            <div class = "row books">
            @if(!empty($bookData))
            @foreach($bookData->products as $key=>$value)
            <div class = "col-md-3">
                <h3>
                    {{ $value->title }}
                </h3>
                <a href= "{{ URL::current()}}/getRecordDetails/{{$value->id}}"><button type = "button" class = "btn btn-info">Browse</button></a>
            </div>

            
            @endforeach
            
            </div>
            <button class="btn btn-primary" id="load-more" data-paginate="{{ $bookData->current_page+1 }}">Load more...</button>
            @endif
            
            <p class="invisible">No more posts...</p>
        </div>
    </main>
@endsection
