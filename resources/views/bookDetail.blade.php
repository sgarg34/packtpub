@extends('layouts.header')
@section('content')
<main class="flex-shrink-0">
<div class="container">
            
            </div>
<div class="m-3">
    <div class = "row">
        <div class = "col-md-12">
            <div class="card" style="width: 100%;padding:10px">
                <div class="card-block">
                    <h3 class="card-title">Title</h3>
                    <p class="card-text">{{ $bookDetail->title}}</p>
                    <p class="card-text"><q>{{ $bookDetail->tagline}}</q></p>
                </div>
            </div>
            <div class="card" style="width: 100%;padding:10px">
                <div class="card-block">
                    <h3 class="card-title">Length</h3>
                    <p class="card-text"><i class="fa fa-clock-o" aria-hidden="true"></i>{{ $bookDetail->length}}</p>
                </div>
            </div>
            <div class="card" style="width: 100%;padding:10px">
                <div class="card-block">
                    <h3 class="card-title">Learning Content</h3>
                    <p class="card-text">{!! $bookDetail->learn !!}</p>
                </div>
            </div>
            <div class="card" style="width: 100%;padding:10px">
                <div class="card-block">
                    <h3 class="card-title">Featured Content</h3>
                    <p class="card-text">{!! $bookDetail->features !!}</p>
                </div>
            </div>
        </div>
    </div>
</div>    
</main>    
@endsection
<!--Section: Block Content-->