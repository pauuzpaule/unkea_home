<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Unkea</title>
    <link rel="stylesheet" type="text/css" href="public/css/app.css">

</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
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

    <div class="container">
        <div class="row p-5 mt-5">
            <div class="col-md-4 offset-md-2">
                <div class="card">
                    <div class="card-body">
                        <h4>M&E System</h2>
                        <hr>
                        <p>Monitoring and Evalution System</p>
                        <p ><small>v1.0.4 @<?=date('Y/M/d', strtotime('03/01/2020'))?></small> <a href="https://moneva.unkeadatabase.org" class="btn btn-primary btn-sm float-right">Continue</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Procument System</h2>
                        <hr>
                        <p>Comming soon...</p>
                        <p><small><?=date('Y/M/d')?></small> <button href="#" class="btn btn-outline-dark float-right btn-sm" disabled>Continue</button></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script type="text/javascript" src="public/js/app.js"></script>
</body>
</html>