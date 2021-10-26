@extends('layout')
@section('content')

@foreach($data as $datas)
<div class="content">
    <h1><a href="/show/{{$datas->id}}">{{$datas->title}}</a></h1>
    {{-- <h1>{{$datas->title}}</h1> --}}
    <hr>
    <p>{!! nl2br($datas->main) !!}</p>
    {{-- <p>{{$datas->main}}</p> --}}
    {{-- 拡張子の確認 --}}
    @if(file_exists(public_path().'storage/post_img/'.$datas->id.'jpg'))
        <img src="storage/post_img/{{$datas->id}}.jpg">
    @elseif(file_exists(public_path().'storage/post_img/'.$datas->id.'jpeg'))
        <img src="storage/post_img/{{$datas->id}}.jpeg">
    @elseif(file_exists(public_path().'storage/post_img/'.$datas->id.'png'))
        <img src="storage/post_img/{{$datas->id}}.png">
    @elseif(file_exists(public_path().'storage/post_img/'.$datas->id.'gif'))
        <img src="storage/post_img/{{$datas->id}}.gif">
    @endif
</div>
@endforeach
{{ $data->onEachSide(2)->links() }}
{{-- <h1>記事タイトル</h1>
<hr>
<p>本文</p>
<p>本文</p>
<p>本文</p>
<p>本文</p>
<p>本文</p>
<p>本文</p> --}}

@endsection
