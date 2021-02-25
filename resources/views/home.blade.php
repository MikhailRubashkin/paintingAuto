@extends('layouts.app')

@section('title-block')
  Главная страница
@endsection

@section('content')
  <h1>Главная страница</h1>
  <div class="wrapper">
    <div class="cube">
      <b class="front">front</b>
      <b class="back">back</b>
      <b class="top">top</b>
      <b class="bottom">bottom</b>
      <b class="left">left</b>
      <b class="right">right</b>
      <i class="front"></i>
      <i class="back"></i>
      <i class="top"></i>
      <i class="bottom"></i>
      <i class="left"></i>
      <i class="right"></i>
    </div>
  </div>
@endsection

@section('aside')
  @parent
<p>Дополнительный текст</p>
@endsection
