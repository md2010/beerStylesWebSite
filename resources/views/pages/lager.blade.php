<!DOCTYPE html>
<html>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/ale.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}" >
    
<head>
@include('includes.head')
</head>

<body>
<div class="container">

    <header>
        @include('includes.header')
    </header>

    <main class="main">
        <nav>
            @include('includes.lagerAside')
        </nav>

        <div id="image">
            <img src="{{ asset('images/lager.jpg') }}" width = "600" height = "400" alt="tag">
        </div>

        <div id="content">
            <section id="info">
                <article id="Description">
                    <h2> Description </h2>
                    <p> {{ $data[0]->article }}</p>
                </article>

                <article id="Brewing">
                <h2> Brewing </h2>
                    <p> {{ $data[0]->text }} </p>

                <article id="characs">
                    <h2> Characteristics </h2>
                    <div> Most lagers have: <br> 
                        <ul> 
                            <li> high carbonation level </li>
                            <li> lower alcohol content </li>
                            <li> special ability to quench thirst </li>
                        </ul>
                    </div>
                </article>
            </section>
        </div>

    </main>

    <footer>
        @include('includes.footer')
    </footer>