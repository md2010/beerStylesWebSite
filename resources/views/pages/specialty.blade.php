<!doctype html>
<html>
<link rel="stylesheet" type="text/css" href="{{ asset('css/specialty.css') }}" >
<head>
@include('includes.head')
</head>

<body>
<div class="container">

    <header>
        @include('includes.header')
    </header>

    <main id="main">

        <div class="col1">
            <p> Specialty beers are typically regular beers brewed to a classic style (such as Porter, Stout, or Pale Ale) but with some new flavor added. 
                Others beers in this category are made from unusual fermented foods. 
                ... In many ways, specialty beers are the most fun to try.
            </p>
        </div>

        <div class="col2">
          @include('includes/table')
        <div>

    </main>

    <footer>
        @include('includes.footer')
    </footer>

</div>

</body>
</html>



