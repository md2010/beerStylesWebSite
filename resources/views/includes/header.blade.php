<link rel="stylesheet" type="text/css" href="{{ asset('css/header.css') }}" >

<div class="header">
    <img src="{{ asset('images/header.jpg') }}" width = "800" height = "200" alt="tag">
    <h1 id="title"> How well do you know beer styles? </h1>
</div>

<navbar>
    <div>
        <ul class="nav">
            <li><a class="{{ Request::is('/') ? 'active' : '' }}" href="/">Home</a></li>
            <li><a class="{{ Request::is('ale') ? 'active' : '' }}" href="/ale">Ale</a></li>
            <li><a class="{{ Request::is('lager') ? 'active' : '' }}" href="/lager">Lager</a></li>
            <li><a class="{{ Request::is('specialty') ? 'active' : '' }}" href="/specialty">Specialty Beers</a></li>
            <li><a class="{{ Request::is('characteristics') ? 'active' : '' }}" href="/characteristics">Characteristics of beer style</a></li>      
        </ul>
    </div>
</navbar>

