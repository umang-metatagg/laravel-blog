@extends('layouts.app')
@section('content')
<section class="section">
<div class="container">    
    <h1> {{$title}}</h1>
    <p>this is the service page</p>
    @if(count($services) > 0)
    <ul class="list-group">
    @foreach ($services as $service)
        <li class="list-group-item">{{ $service }}</li>
    @endforeach
    </ul>
    @endif
</div>    
</section>
@endsection