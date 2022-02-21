<html>
    <head>
        <title>@yeld('title')</title>
        <style>
            body {font-size: 16px; color: #999; margin: 5px;}
            h1 {font-size: 50pt; text-align: right; }
            ul {font-size: 12pt; }
            hr {margin: 25px 100px; border-top: 1px dashed #ddd;}
            .menutitle{ font-size: 14px; font-weight: bold; margin: 0px;}
            .content { margin: 10px;}
            .footer { text-align: right; font-size: 10pt; margin: 10px; border-bottom: solod 1px color: #ccc;}
        </style>
    </head>
    <body>
        <h1>@yield('title')</h1>
        @section('menubar')
        <h2 class="menutitle">*menu</h2>
        <ul>
            <li>@show</li>
        </ul>
        <hr size="1">
        <div>
            @yield('content')
        </div>
        <div class="footer">
            @yield('footer')
        </div>
    </body>
</html>