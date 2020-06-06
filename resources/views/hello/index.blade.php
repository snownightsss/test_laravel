@extends('layouts.helloapp')
@section('title','index')

@section('menubar')
@parent
インデックスページ
@endsection

@section('content')
<p>ここが本文のコンテンツです</p>

{{-- @component('components.message')
    @slot('msg_title')
        CAUTION!
    @endslot
    @slot('msg_content')
        これはメッセージの表示です。
    @endslot
    @endcomponent --}}

{{-- @include('components.message',['msg_title'=>'ok','msg_content'=>'サブビューです。']) --}}
{{-- @each('components.item', $data, 'item') --}}
<p>Controller value <br> 'message'={{$message}}</p>
<p>ViewComposer value <br>'view_messgae'={{$view_message}}</p>
@endsection

@section('footer')
copyright 2017
@endsection