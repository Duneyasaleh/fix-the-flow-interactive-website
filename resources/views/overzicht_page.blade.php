@extends('layout.master')
@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@stop

@section('content')
<div class="overzicht_page-container">
<div class="overzicht_page-stekjes_lijs">
    <h2>Steks</h2>
    <input type="text" id="the-filter" placeholder="Search For..."/>
    <ul id="the-list" class="list-group">
        <li class="list-group-item">
            <img src="{{ asset('image/Philodendron.jpeg') }}" alt="Philodendron">
            <div>
            <h4>hoi</h4>
            <p>heeft langwerpige bladeren met groene en gele vlekken en behoort tot de aronskelkfamilie (Araceae). Een bijnaam voor deze plant</p>
            <a href="<?php echo url("verzorgen_page")?>" aria-label="meer weten over de verzorgen van deze plant">meer..</a>
            </div>
        </li>
        <li class="list-group-item">
            <img src="{{ asset('image/Philodendron.jpeg') }}" alt="Philodendron">
            <div>
            <h4>kkkfkgk</h4>
            <p>heeft langwerpige bladeren met groene en gele vlekken en behoort tot de aronskelkfamilie (Araceae). Een bijnaam voor deze plant</p>
            <a href="<?php echo url("verzorgen_page")?>" aria-label="meer weten over de verzorgen van deze plant">meer..</a>
            </div>
        </li>
        <li class="list-group-item">
            <img src="{{ asset('image/Philodendron.jpeg') }}" alt="Philodendron">
            <div>
            <h4>Philodendron Paraiso Verde</h4>
            <p>heeft langwerpige bladeren met groene en gele vlekken en behoort tot de aronskelkfamilie (Araceae). Een bijnaam voor deze plant</p>
            <a href="<?php echo url("verzorgen_page")?>" aria-label="meer weten over de verzorgen van deze plant">meer..</a>
            </div>
        </li>
        <li class="list-group-item">
            <img src="{{ asset('image/Philodendron.jpeg') }}" alt="Philodendron">
            <div>
            <h4>Philodendron Paraiso Verde</h4>
            <p>heeft langwerpige bladeren met groene en gele vlekken en behoort tot de aronskelkfamilie (Araceae). Een bijnaam voor deze plant</p>
            <a href="<?php echo url("verzorgen_page")?>" aria-label="meer weten over de verzorgen van deze plant">meer..</a>
            </div>
        </li>
        <li class="list-group-item">
            <img src="{{ asset('image/Philodendron.jpeg') }}" alt="Philodendron">
            <div>
            <h4>Philodendron Paraiso Verde</h4>
            <p>heeft langwerpige bladeren met groene en gele vlekken en behoort tot de aronskelkfamilie (Araceae). Een bijnaam voor deze plant</p>
            <a href="<?php echo url("verzorgen_page")?>" aria-label="meer weten over de verzorgen van deze plant">meer..</a>
            </div>
        </li>
        <li class="list-group-item">
            <img src="{{ asset('image/Philodendron.jpeg') }}" alt="Philodendron">
            <div>
            <h4>Philodendron Paraiso Verde</h4>
            <p>heeft langwerpige bladeren met groene en gele vlekken en behoort tot de aronskelkfamilie (Araceae). Een bijnaam voor deze plant</p>
            <a href="<?php echo url("verzorgen_page")?>" aria-label="meer weten over de verzorgen van deze plant">meer..</a>
            </div>
        </li>
        
    </ul>
</div>
<div class="overzicht_page-userPost">
   <div class="user_post-card">
    <div class="user-info">
      <img src="{{ asset('image/user_img.png') }}" alt="user" style="width: 20%;"><br>
      <p>Jone Dou</p>
      <p>04-10-2022</p>
      <p>jonedou@gmail.com</p>
    </div>
    <div class="user_post">
    <div class="user_post-img">
    <img src="{{ asset('image/Philodendron.jpeg') }}" alt="Philodendron">
    </div>
    <div class="user_post-text">
        <h4>Van klein kastje tot buffetkast</h4>
        <p>Het principe van stekjesruil is simpel. “Je plaatst een kast of rek voor je huis en geeft de kast een naam”, 
            legt Marjolijn uit. “Mijn kast heet The Greenhouse. Het kan van alles zijn: van een klein kastje tot een grote buffetkast. </p>
    </div>
 
    </div>
   </div>
   <div class="user_post-card">
    <div class="user-info">
      <img src="{{ asset('image/user_img.png') }}" alt="user" style="width: 20%;"><br>
      <p>Jone Dou</p>
      <p>04-10-2022</p>
      <p>jonedou@gmail.com</p>
    </div>
    <div class="user_post">
    <div class="user_post-img">
    <img src="{{ asset('image/Philodendron.jpeg') }}" alt="Philodendron">
    </div>
    <div class="user_post-text">
        <h4>Van klein kastje tot buffetkast</h4>
        <p>Het principe van stekjesruil is simpel. “Je plaatst een kast of rek voor je huis en geeft de kast een naam”, 
            legt Marjolijn uit. “Mijn kast heet The Greenhouse. Het kan van alles zijn: van een klein kastje tot een grote buffetkast. </p>
    </div>
 
    </div>
   </div>
   <div class="user_post-card">
    <div class="user-info">
      <img src="{{ asset('image/user_img.png') }}" alt="user" style="width: 20%;"><br>
      <p>Jone Dou</p>
      <p>04-10-2022</p>
      <p>jonedou@gmail.com</p>
    </div>
    <div class="user_post">
    <div class="user_post-img">
    <img src="{{ asset('image/Philodendron.jpeg') }}" alt="Philodendron">
    </div>
    <div class="user_post-text">
        <h4>Van klein kastje tot buffetkast</h4>
        <p>Het principe van stekjesruil is simpel. “Je plaatst een kast of rek voor je huis en geeft de kast een naam”, 
            legt Marjolijn uit. “Mijn kast heet The Greenhouse. Het kan van alles zijn: van een klein kastje tot een grote buffetkast. </p>
    </div>
 
    </div>
   </div>
   <div class="user_post-card">
    <div class="user-info">
      <img src="{{ asset('image/user_img.png') }}" alt="user" style="width: 20%;"><br>
      <p>Jone Dou</p>
      <p>04-10-2022</p>
      <p>jonedou@gmail.com</p>
    </div>
    <div class="user_post">
    <div class="user_post-img">
    <img src="{{ asset('image/Philodendron.jpeg') }}" alt="Philodendron">
    </div>
    <div class="user_post-text">
        <h4>Van klein kastje tot buffetkast</h4>
        <p>Het principe van stekjesruil is simpel. “Je plaatst een kast of rek voor je huis en geeft de kast een naam”, 
            legt Marjolijn uit. “Mijn kast heet The Greenhouse. Het kan van alles zijn: van een klein kastje tot een grote buffetkast. </p>
    </div>
 
    </div>
   </div>
   <div class="user_post-card">
    <div class="user-info">
      <img src="{{ asset('image/user_img.png') }}" alt="user" style="width: 20%;"><br>
      <p>Jone Dou</p>
      <p>04-10-2022</p>
      <p>jonedou@gmail.com</p>
    </div>
    <div class="user_post">
    <div class="user_post-img">
    <img src="{{ asset('image/Philodendron.jpeg') }}" alt="Philodendron">
    </div>
    <div class="user_post-text">
        <h4>Van klein kastje tot buffetkast</h4>
        <p>Het principe van stekjesruil is simpel. “Je plaatst een kast of rek voor je huis en geeft de kast een naam”, 
            legt Marjolijn uit. “Mijn kast heet The Greenhouse. Het kan van alles zijn: van een klein kastje tot een grote buffetkast. </p>
    </div>
 
    </div>
   </div>

   <nav aria-label="Page navigation example overzicht_page-userPost-pagenaitg">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#" aria-label="terug naar de vorige page">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#" aria-label="pagina 1">1</a></li>
    <li class="page-item"><a class="page-link" href="#" aria-label="pagina 2">2</a></li>
    <li class="page-item"><a class="page-link" href="#" aria-label="pagina 3">3</a></li>
    <li class="page-item"><a class="page-link" href="#" aria-label="naar de volgende pagina">Next</a></li>
  </ul>
</nav>
</div>
</div>
@stop
 