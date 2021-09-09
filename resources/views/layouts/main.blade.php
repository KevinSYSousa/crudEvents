<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <! -- Fonte -->

        <link href="https://fonts.googleapis.com/css2?family=Hina+Mincho&display=swap" rel="stylesheet">

        <! -- Css -->

        <link rel="stylesheet" href="/css/styles.css">

        <title>@yield('title')</title>

        
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div id="navbar">
                    <a href="/" class="navbar-brand">
                        <ion-icon name="home-outline"></ion-icon>
                    </a>
                    <ul>
                        <li >
                            <a href="/">Events</a>
                        </li>
                    </ul>
                    <ul>
                        <li >
                            <a href="/events/create" >Create</a>
                        </li>
                    </ul>
                    <ul>
                        <li >
                            <a href="/">Sign in</a>
                        </li>
                    </ul>
                    <ul>
                        <li >
                            <a href="/">Sign up</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <main>
        @if(session('msg'))
            <p class="eventMsg">{{ session('msg')  }}</p>
        @endif
        @yield('content')
        </main>
        <script src="/js/script.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <footer>
            <p>Crud Events &copy; 2021, Kevin Sousa. &#129488</p>
        </footer>
    </body>
</html>