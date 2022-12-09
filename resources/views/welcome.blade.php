@extends('layout.master')
@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@stop

@section('content')
<div class="home_page-container">
  <div class="groene_achter-img">
  <div class="achtergrond_home"></div>
  <img src="{{ asset('image/stekjesdelen.png') }}" alt="homepage img">
  
  </div>
<div class="home_page_text">

     <h1>Hoe werkt het?</h1>
     <p>Heb jij een of meerdere plantenstekjes over en zou je die graag willen ruilen voor een nieuw plantje?  
Meld je stekje hier aan en ruil ‘m via de app. Schrijf de Latijnse naam van je plant en eventuele verzorgingstips op een labeltje en neem ‘m mee naar de OBA Linnaeusstraat in Amsterdam.  
</p>
     <a href="<?php echo url("aanmelden")?>" class="Home-aanmelden_knop">Aanmelden</a>
</div>
</div>
<div class="home_page-exinfo">
<div>
  <img src="{{ asset('image/save-plants.png') }}" alt="Stekje ruilen">
  <h2>Van klein kastje tot buffetkast</h2>
  <p>je plaatst een kast in je tuin en je ruilt je plant (of stekje) voor een andere plant. 
    Stekjesruil wordt steeds populairder in Nederland</p>
    <a href="<?php echo url("overzicht_page")?>" class="Home-knop_ruilen">Stekje ruilen?</a>
</div>
<div>
  <img src="{{ asset('image/care.png') }}" alt="Stekje ruilen">
  <h2>De verzorging van een bladstek.</h2>
  <p>je plaatst een kast in je tuin en je ruilt je plant (of stekje) voor een andere plant. 
    Stekjesruil wordt steeds populairder in Nederland Stekjesruil wordt steeds</p>
    <a href="<?php echo url("verzorgen_page")?>" class="Home-knop_ruilen">Stekje verzorgen?</a>
</div>
<div>
  <img src="{{ asset('image/growth.png') }}" alt="Stekje ruilen">
  <h2>Relatief milieuvriendelijk</h2>
  <p>je plaatst een kast in je tuin en je ruilt je plant (of stekje) voor een andere plant. 
    Stekjesruil wordt steeds populairder in Nederland </p>
    <a href="<?php echo url("overzicht_page")?>" class="Home-knop_ruilen">Duurzaamheid</a>
</div>
</div>
<div class="home_page-container about-us">
  <div class="groene_achter-img">
  <div class="achtergrond_home"></div>
  <img src="{{ asset('image/over_buurtcampus.png') }}" alt="meer over buurtcampus oost img">
  
  </div>
<div class="home_page_text">
  <h2>Meer over De Buurtcampus Oost </h2>
  <p>De Buurtcampus Oost heeft als doel Amsterdam-Oost duurzamer, inclusiever en gezonder te maken. Plant Swap Amsterdam zorgt ervoor dat plantenliefhebbers elkaar ontmoeten in de bibliotheek. Daarnaast hebben planten in huis een positief effect op je lichamelijke en geestelijke gezondheid. Veel mensen weten niet goed hoe ze voor planten moeten zorgen en kopen nieuwe als ze dood gaan. In het kader van duurzaamheid, gezondheid en meer sociale connectie, 
    is PlantSwap Amsterdam een plek van sociale ontmoeting, waar mensen samen leren over planten.</p>
     <a href="<?php echo url("aanmelden")?>" class="Home-aanmelden_knop">Aanmelden</a>
</div>
</div></div>




@stop

