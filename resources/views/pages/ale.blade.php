<!doctype html>
<html>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/ale.css') }}" >
  
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

        <div id="image">
            <img src="{{ asset('images/ale.jpg') }}" width = "500" height = "400" alt="tag">
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
                    <div> There are many types of Ale, but they all tend to be: <br> 
                        <ul> 
                            <li> flavorful </li>
                            <li> more robust </li>
                            <li> fruitier and more aromatic </li>
                        </ul>
                    </div>
                </article>
            </section>
        </div>

    </main>

    <footer>
        @include('includes.footer')
    </footer>

</div>

</body>
</html>
