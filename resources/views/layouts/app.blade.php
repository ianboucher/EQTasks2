<!DOCTYPE html>

    <head lang="en">
        <meta charset="UTF-8">
        <title>EquiniTasks2 - The Laravel Way</title>

        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400,800,600,700,300">
        <link rel="stylesheet" type="text/css" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="/css/normalize.css">

        <title>Equinitasks</title>

    </head>

    <body>
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">

                <div class="navbar-header">
                        <a class="navbar-brand" href="landing">EquiniTasks</a>
                </div>

                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Pending Tasks</a></li>
                        <li><a href="#">Completed Tasks</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Sign-up</a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </div>

            </div>
        </nav>

        @yield('content')
    </body>
</html>
