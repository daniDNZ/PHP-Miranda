@extends('layout')

@section('content')
<section class="section banner px-20">
  <h2 class="h2 banner__h2">The ultimate luxury</h2>
  <h1 class="h1">Ultimate Room</h1>
  <div class="breadcrumb">
    <a href="../index.html" class="a breadcrumb__a">Home</a><span class="breadcrumb__line">|</span><span class="breadcrumb__current">Rooms</span>
  </div>
</section>
<section class="section px-20 py-20">
  <div class="swiper rooms-page-swiper">
    <div class="swiper-wrapper rooms-page-swiper__wrapper">
      @foreach ($rooms as $room)
      <div class="swiper-slide room">
        <div class="room__image"></div>
        <div class="icon-bar icon-bar--bottom">
          <div class="icon-bar__icon icon-bar__icon--bed"></div>
          <div class="icon-bar__icon icon-bar__icon--wifi"></div>
          <div class="icon-bar__icon icon-bar__icon--car"></div>
          <div class="icon-bar__icon icon-bar__icon--ac"></div>
          <div class="icon-bar__icon icon-bar__icon--gym"></div>
          <div class="icon-bar__icon icon-bar__icon--nosmoke"></div>
          <div class="icon-bar__icon icon-bar__icon--bar"></div>
        </div>
        <h4 class="h4 home-rooms__h4">{{$room->type}}</h4>
        <p class="p section__p home-rooms__p px-20">{{$room->description}}</p>
        <div class="price price--booking">
          <div>
            <span class="price__amount price__amount--same-size">{{$room->price}}</span><span class="price__night price__night--same-size">/Night</span>
          </div>
          <a href="room-details.html" class="room__booking-now">Booking Now</a>
        </div>
      </div>
      @endforeach
    </div>
    <div class="rooms-page-swiper__button--prev px-20"></div>
    <div class="rooms-page-swiper__button--next px-20"></div>
    <div class="rooms-page-swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
    </div>
  </div>
</section>
@endsection