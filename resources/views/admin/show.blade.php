@extends('layouts.admin')
@include('partials.navbar')
@section('content')
<section class="d-flex flex-wrap my-5">
    <h1 class="m-3 text-center col-12">
        {{ $project->title }}
    </h1>
    <h2 class="col-12 text-center">
        {{$project->type->name}} 
    </h2>
    <p class="col-12 px-5 text-center">
       <i class="{{$project->type->icon}}" style="font-size: 50px"></i>
    </p>
    <div class="col-12 d-flex p-3" style="border-bottom:2px solid whitesmoke; border-right: 15px solid whitesmoke ">
        <div class="text-center col-6" style="font-size: 40px">{{ $project->description }}   {{$project->type->description}} </div>
        <div class="col-6 text-center">
            <img style="object-fit:contain" src="{{ $project->img }}" alt="">
        </div>
    </div>
</section>
@endsection
