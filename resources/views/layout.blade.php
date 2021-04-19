<html>
    <head>
        <title>App Name - @yield('title',"Home")</title>
        <style type="text/css">
            p
            {
                background-color: red;
                padding: 10px;
            }
        </style>

    </head>
    <body>

        @section('header')
            <p>Header from Parent</p>
        @show

        <div class="container">
            <p>Parent Content</p>
            @yield('content')
        </div>

        @section('footer')
            <p>Footer from Parent</p>
        @show

    </body>
</html>