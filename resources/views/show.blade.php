@extends('layout')

@section('content')

<div class="content3">
    <p class="created">{{ $data->created_at}}</p>
    <h1>{{$data->title ?? ''}}</h1>

    <hr>

    <p>{!! nl2br($data->main) !!}</p>
</div>
    
@endsection