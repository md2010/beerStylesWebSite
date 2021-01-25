<link rel="stylesheet" type="text/css" href="{{ asset('css/sidebar.css') }}" >
<aside>
    <a class="{{ Request::is('pilsnersAndPaleLager') ? 'active' : '' }}" href="pilsnersAndPaleLager">Pilsners and Pale Lager</a>
    <a class="{{ Request::is('darkLager') ? 'active' : '' }}" href="darkLager">Dark Lager</a>
    <a class="{{ Request::is('bock') ? 'active' : '' }}" href="bock">Bock</a>
</aside>