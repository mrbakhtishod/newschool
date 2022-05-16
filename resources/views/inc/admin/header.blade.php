<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="admin/css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

        <title>@yield('title')</title>
    </head>
    <body>
        <div class="main-container">
            <div class="main-container-1 mc-1">
                <!-- ----------------------------------------------
                        START SIDEBAR
                ------------------------------------------------ -->
                <div id="sidebar" class="sidebar">
                <div id="trigger" class="trigger">
                    <i class="fa fa-bars"></i>
                </div>
          
                <div class="sidebar-position">
                    <i class="fa fa-user"></i>
                    <span title="Position 1 with looooong name"><a href="index.html">Home</a></span>
                </div>
                <div class="sidebar-position">
                    <i class="fa fa-cogs"></i>
                    <span><a href="about.html">About</a></span>
                </div>
            </div>
            <!-- ----------------------------------------------
                    END SIDEBAR
            ------------------------------------------------ -->
        </div>
        <div class="main-container-1 mc-2">
            <section>
                <div class="container">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-danger" type="button">LongOut</button>
                    </div>