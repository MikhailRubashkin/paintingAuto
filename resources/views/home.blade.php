@extends('layouts.app')

@section('title-block')
  Главная страница
@endsection

@section('content')
  <h2></h2>
  <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container" style="width:100%;">
  <h2>Кузовной ремонт, покраска автомобиля и полировка</h2>
  <p>Профессиональные мастера!</p>
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">Оцениваем стоимость работ по фотографиям</div>
      <div class="panel-body">Более точную цену вы можете узнать,
        прислав фото вашего автомобиля
по Вайберу и в течении 10 минут мы скажем вам цену.</div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">Держим связь, высылаем фото работ</div>
      <div class="panel-body">🔴Ответим на любые вопросы 📞.
        В нашей работе применяются материалы только ведущих производителей премиум класса, таких как: RM, Duxone, PPG, Quickline, brulex; абразивы: Mirka, 3M, Kovax.
        Это позволяет выполнять ремонты автомобилей, наших уважаемых клиентов, с заводскими параметрами качества и давать соответствующие.</div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">Гарантия на выполненные работы</div>
      <div class="panel-body">Контроль качества на каждом этапе работ!</div>
    </div>
  </div>
</div>

<div class="container">
  <h2>Наши цены</h2>
  <p></p>
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>КУЗОВНОЙ РЕМОНТ</th>
        <th>Стоимость в белорусских рублях</th>
        <th>ПОКРАСКА АВТО</th>
        <th>Стоимость в белорусских рублях</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Замена арок  задних крыльев</td>
        <td>от 90</td>
        <td>Полностью авто</td>
        <td>от 2600</td>
      </tr>
      <tr>
        <td>Замена порога</td>
        <td>от 130</td>
        <td>Капот</td>
        <td>от 240</td>
      </tr>
      <tr>
        <td>Кузовной ремонт
(двери, пороги, капот, крылья)</td>
        <td>от 230</td>
        <td>Бампер</td>
        <td>от 250</td>
      </tr>
      <tr>
        <td>Залатать сквозное отверстие</td>
        <td>от 40</td>
        <td>Переднее  крыло</td>
        <td>от 230</td>
      </tr>
      <tr>
        <td>Мелкий ремонт</td>
        <td>от 40</td>
        <td>Заднее крыло</td>
        <td>от 210</td>
      </tr>
      <tr>
        <td>Ремонт бампера</td>
        <td>от 50</td>
        <td>Крыша</td>
        <td>от 240</td>
      </tr>
      <tr>
        <td>Замена порога</td>
        <td>от 220</td>
        <td>Двери боковые</td>
        <td>от 190</td>
      </tr>
      <tr>
        <td>Покраска дисков</td>
        <td>от 60</td>
        <td>Стойки</td>
        <td>от 80</td>
      </tr>
      <tr>
        <td>Полировка кузова.</td>
        <td>от 250</td>
        <td>Боковое зеркало</td>
        <td>от 50</td>
      </tr>
      <tr>
        <td>Полировка фар</td>
        <td>от 40</td>
        <td>Покраска с переходом</td>
        <td>от 60</td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td>Порог</td>
        <td>от 120</td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td>Крышка багажника</td>
        <td>от 250</td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>

@endsection

@section('aside')
  @parent
<p>Обратившись в сервис для осуществления кузовного
  ремонта и покраски авто «Autoluxminsk», вы получите оперативно
  выполненный кузовной ремонт. Чтобы вы
   убедились в нашем профессионализме, мы высылаем фото вам!</p>
@endsection
