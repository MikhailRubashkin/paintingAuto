<?php require_once('C:\Projects Laravel\paintingAuto\resources\views\layouts\openWeatherMap.blade.php'); ?>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <p class="h3 my-0 me-md-auto fw-normal">Autoluxminsk</p>
  <nav class="my-2 my-md-0 me-md-3">
    <a class="p-2 text-dark" href="{{route('home')}}">Главна страница</a>
    <a class="p-2 text-dark" href="{{route('about')}}">О нас</a>
    <a class="p-2 text-dark" href="{{route('contact')}}">Контакты</a>
    <a class="p-2 text-dark"> {{$data->name}}</a>
    <a class="p-2 text-dark">Погода: {{$data->main->temp_min}} °C</a>
    <a class="p-2 text-dark">Влажность: {{$data->main->humidity}} %</a>
    <a class="p-2 text-dark">Ветер: {{$data->wind->speed}} км/ч></a>
  </nav>
</div>
