<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>UNKEA</title>
    <link rel="stylesheet" type="text/css" href="public/css/app.css">
    <link rel="stylesheet" type="text/css" href="public/css/custom.css">
    <link rel="icon" href="public/image/unkea.png" type="image/x-icon" />
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container" style="color:white;">
                <img src="public/image/unkea.png" style="height: 40px; width: 40px;" />
                <a class="navbar-brand" href="">
               UNKEA
            </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="">
                <span class="navbar-toggler-icon"></span>
            </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->

                    </ul>
                </div>
            </div>
        </nav>

        <div class="container cards">
            <div class="row p-5 mt-5">
                <div class="col-md-4 offset-md-2">
                    <div class="card">
                        <div class="card-body">
                            <h4>M&E Database</h2>
                                <hr>
                                <p>Monitoring and Evalution Database</p>
                                <p> <a href="https://moneva.unkeadatabase.org" class="btn btn-success btn-sm float-right">Continue</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4>Procument Database</h2>
                                <hr>
                                <p>Coming soon...</p>
                                <p><small><?=date('Y/M/d')?></small> <button href="#" class="btn btn-outline-dark float-right btn-sm" disabled>Continue</button></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <p>Copyright &copy; UNKEA
            <?date("Y ")?>
        </p>
    </footer>

    <script type="text/javascript " src="public/js/app.js "></script>
</body>

</html>