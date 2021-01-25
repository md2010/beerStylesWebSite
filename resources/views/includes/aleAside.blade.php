<link rel="stylesheet" type="text/css" href="{{ asset('css/sidebar.css') }}" >
<aside>
    <a class="{{ Request::is('porter') ? 'active' : '' }}" href="porter">Porter</a>
    <a class= "{{ Request::is('stout') ? 'active' : '' }}" href="stout">Stout</a>
    <a class="{{ Request::is('paleAle') ? 'active' : '' }}" href="paleAle">Pale Ale</a> 
    <a class="{{ Request::is('IPA') ? 'active' : '' }}" href="IPA">India Pale Ale</a>
    <a class="{{ Request::is('brownAle') ? 'active' : '' }}" href="brownAle">Brown Ale</a>
    <a class="{{ Request::is('wildAle') ? 'active' : '' }}" href="wildAle">Wild/Sour Ale</a>
    <a class="{{ Request::is('wheatBeer') ? 'active' : '' }}" href="wheatBeer">Wheat Beer</a>
    <a class="{{ Request::is('belgianStyle') ? 'active' : '' }}" href="belgianStyle">Belgian Style</a>
    <a class="{{ Request::is('strongAle') ? 'active' : '' }}" href="strongAle">Strong Ale</a>
    <a class="{{ Request::is('scotishStyle') ? 'active' : '' }}" href="scotishStyle">Scottish-Style Ale</a>

</aside>

