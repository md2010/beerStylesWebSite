<!doctype html>
<html>
<link rel="stylesheet" type="text/css" href="{{ asset('css/beerStyles.css') }}" >
<head>
@include('includes.head')
</head>

<body>
<div class="container">

    <header>
        @include('includes.header')
    </header>

    <main id="main">

        <nav>
            @include('includes.aleAside')
        </nav>

            @include('includes/table')
    </main>

    <footer>
        @include('includes.footer')
    </footer>

</div>

</body>
</html>



