@extends('layout.master')
@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@stop

@section('content') 
<div class="verzorgen_page">
<div class="verzorgen_page-img">
<div class="achtergrond_home"></div>
<img src="{{ asset('image/stekje verzorgen.png') }}" alt="verzorg stekje" >
</div>
<div class="verzorgen_page-info">
<h1>Planten stekken en verzorgen, hoe doe je dat? </h1>
  <p>Vetplanten hebben weinig water nodig. De jonge stekjes doen het goed op een druppel water per week. Ze houden wel van een warme,
     lichte plek. In een kweekkas, of met een plastic zak over de potjes kun je zorgen voor meer warmte. 
    Er moet wel voldoende lucht bij de stekjes komen, anders gaan ze schimmelen.</p>
     <a href="<?php echo url("overzicht_page")?>" class="Home-verzorgen_knop">Stekje ruilen?</a>
</div>
</div>
<div class="home_page-exinfo">
<div>
  <img src="{{ asset('image/herb.png') }}" alt="Stekje ruilen">
  <h2>Van klein kastje tot buffetkast</h2>
  <p>je plaatst een kast in je tuin en je ruilt je plant (of stekje) voor een andere plant. 
    Stekjesruil wordt steeds populairder in Nederland</p>
    <a href="<?php echo url("overzicht_page")?>" class="Home-knop_ruilen">Stekje ruilen?</a>
</div>
<div>
  <img src="{{ asset('image/remedy.png') }}" alt="Stekje ruilen">
  <h2>Van klein kastje tot buffetkast</h2>
  <p>je plaatst een kast in je tuin en je ruilt je plant (of stekje) voor een andere plant. 
    Stekjesruil wordt steeds populairder in Nederland </p>
    <a href="<?php echo url("verzorgen_page")?>" class="Home-knop_ruilen">Stekje verzorgen?</a>
</div>
<div>
  <img src="{{ asset('image/watering-plants.png') }}" alt="Stekje ruilen">
  <h2>Van klein kastje tot buffetkast</h2>
  <p>je plaatst een kast in je tuin en je ruilt je plant (of stekje) voor een andere plant. 
    Stekjesruil wordt steeds populairder in Nederland </p>
    <a href="<?php echo url("verzorgen_page")?>" class="Home-knop_ruilen">Stekje ruilen?</a>
</div>
</div>
@stop