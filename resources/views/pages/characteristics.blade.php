<!doctype html>
<html>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/characteristics.css') }}" >
<head>
@include('includes.head')
</head>

<body>
    
<div class="container">

    <header>
        @include('includes.header')
    </header>

    <main id="main">

    <p id="intro"> There are many more characteristics that determine beer style. Here are shown only those 2 
        that are required to input in app <a href="https://play.google.com/store/apps?hl=hr&gl=US"> 
        <i> Let the beer chooses you </i> </a>. 
        For more information about characteristics: <a href="https://www.craftbeer.com/beer/beer-styles-guide">
            Beer Styles Study Guide </a> 
    </p>

    <article class="srm">
        <img id="srmImg" src="{{ asset('images/srm.jpg')}}" width="700" height="600">
        <div id="srmDiv"> 
            <h1> Standard Reference Method (SRM) </h1>
            <p id="srmText"> {{ $data[10] }}</p>
        </div>       
    </article>

    <article class="ibu">

        <div id="ibuDiv">
            <h1> International Bitterness Units (IBUs) </h1>
            <p id="ibuText"> {{ $data[11] }} <br><br> On the right you can 
            see a chart which can help you understand connection between IBUs and beer styles.</p>
        </div>
        <img id="ibuImg" src="{{ asset('images/ibu.jpg')}}" width="600" height="1300">
    </main>

    <footer>
        @include('includes.footer')
    </footer>

</div>

</body>
</html>
