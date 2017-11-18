<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        {{ Html::style('css/style.css') }}
    </head>
    <body>
        <header>
            <div class="logo">
                <a href=""><img src="http://via.placeholder.com/115x25" alt=""></a>
            </div>
            <nav>
                <ul>
                    <li><a href="{{ url('/') }}">main</a></li>
                    <li><a href="">about</a></li>
                    <li><a href="{{ url('contacts') }}">contacts</a></li>
                </ul>
            </nav>
            <div class="login">
                <a href="{{ url('login') }}">login</a>
            </div>
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            <small>Copyright © <time datetime="2017">2017</time></small>
        </footer>
    </body>
</html>
