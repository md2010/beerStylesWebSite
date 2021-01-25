<!doctype html>
<html>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}" >

<head>
    @include('includes.head')
</head>

<body>
<div class="container">

    <header class="row">
        @include('includes.header')    
        <div id="images" class="rowimg">
            <div id="img1" class="colimg">
                <img src="{{ asset('images/homePage.jpg') }}" width = "500" height = "400" alt="tag">
            </div>
            <div id="img2" class="colimg">
                <img src="https://media1.giphy.com/media/cNDlnilnnPjOAIZsxl/giphy.gif" width = "500" height = "400" alt="tag">
            </div>
            <div id="img3" class="colimg">
                <img src="{{ asset('images/homePage1.jpg') }}" width = "500" height = "400" alt="tag">
            </div>
        </div>  
    </header>

    <main class="main">   
        <div class="intro">          
            <aside id="note"> *Beer is not guilty of a beer belly!* 
                <br><br> {{ $data[8] }}
            </aside>
            <div id="intro">       
                <article> {{ $data[0] }} </article>
            </div>
        </div>

        <div id="difference">
            <h2> Beer Categorization </h2>
            <article> {{ $data[1] }} </article>
        </div>

        <div id="lagerVsAle">
            <h1 id="vs"> Lager vs. Ale <h1>
            <img id="vsimg" src="{{ asset('images/lagervsale.png') }}" width = "700" height = "400" alt="tag">      
            <div class="rowvs">
                <aside id="note"> *NOTE: <br><br> {{ $data[2] }} </aside>
                <article id="vstext"> 
                    <p> {{ $data[3] }} </p>
                    <p> {{ $data[4] }} </p>
                </article>
            </div>
        </div>

        <div id="benefits">
            <h1 id="hbenefits"> Healthy benefits for Beer Drinkers </h2>
            <ol class="benefitList">
                <li> Beer is more nutritious than other alcoholic drinks.
                    <p> {{ $data[5] }} </p>
                </li>
                <li> Beer can help protect your heart.
                    <p> {{ $data[6] }} </p>
                </li>
                <li> Beer improves your cholesterol.
                    <p> {{ $data[7] }} </p>
                </li>
                <li> BEER MAKES YOU CHILL!
                    <p> {{ $data[9] }} </p>
                </li>
        </div>       
    </main>

    <footer>
        @include('includes.footer')
    </footer>

</div>
</body>

</html>
