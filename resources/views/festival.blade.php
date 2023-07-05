<!-- resources/views/festival.blade.php -->

@extends('layouts.app')
 
@section('title', 'Festival')

@section('content')
<section>        
<div class="container-fluid p-3" style="background-color: #242424">
    <ul class="nav nav-pills nav-justified nav-fill" id="fest-days" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all-tab-pane" type="button" role="tab" aria-controls="all-tab-pane" aria-selected="true"><h1>All</h1></button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="thursday-tab" data-bs-toggle="tab" data-bs-target="#thursday-tab-pane" type="button" role="tab" aria-controls="thursday-tab-pane" aria-selected="false"><h1>Thursday</h1></button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="friday-tab" data-bs-toggle="tab" data-bs-target="#friday-tab-pane" type="button" role="tab" aria-controls="friday-tab-pane" aria-selected="false"><h1>Friday</h1></button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="saturday-tab" data-bs-toggle="tab" data-bs-target="#saturday-tab-pane" type="button" role="tab" aria-controls="saturday-tab-pane" aria-selected="false"><h1>Saturday</h1></button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="sunday-tab" data-bs-toggle="tab" data-bs-target="#sunday-tab-pane" type="button" role="tab" aria-controls="sunday-tab-pane" aria-selected="false"><h1>Sunday</h1></button>
    </li>
    </ul>

    <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="all-tab-pane" role="tabpanel" aria-labelledby="all-tab" tabindex="0">
        @include('bandsquare', ['bands' => $thursHL])
        @include('bandsquare', ['bands' => $thursNM])
        @include('bandsquare', ['bands' => $friHL])
        @include('bandsquare', ['bands' => $friNM])
        @include('bandsquare', ['bands' => $satHL])
        @include('bandsquare', ['bands' => $satNM])
        @include('bandsquare', ['bands' => $sunHL])
        @include('bandsquare', ['bands' => $sunNM])
    </div>
    <div class="tab-pane fade" id="thursday-tab-pane" role="tabpanel" aria-labelledby="thursday-tab" tabindex="0">
        @include('bandsquare', ['bands' => $thursHL])
        @include('bandsquare', ['bands' => $thursNM])
    </div>
    <div class="tab-pane fade" id="friday-tab-pane" role="tabpanel" aria-labelledby="friday-tab" tabindex="0">
        @include('bandsquare', ['bands' => $friHL])
        @include('bandsquare', ['bands' => $friNM])
    </div>
    <div class="tab-pane fade" id="saturday-tab-pane" role="tabpanel" aria-labelledby="saturday-tab" tabindex="0">
        @include('bandsquare', ['bands' => $satHL])
        @include('bandsquare', ['bands' => $satNM])
    </div>
    <div class="tab-pane fade" id="sunday-tab-pane" role="tabpanel" aria-labelledby="sunday-tab" tabindex="0">
        @include('bandsquare', ['bands' => $sunHL])
        @include('bandsquare', ['bands' => $sunNM])
    </div>
    </div>
</div>
</section>
@endsection