<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" type="" href="frontend/first.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <header>

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="banner" style="background-image: url(https://i.imgur.com/K7A78We.jpg)"></div>
                    <div class="carousel-caption">
                        <h2 class="animated bounceInRight" style="animation-delay: 1s">Welcome To <span>বণিক বার্তা</span></h2>
                        <h3 class="animated bounceInLeft" style="animation-delay: 2s; color: #edbb00">তথ্যেই অগ্রগতি</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <form action="<?php echo base_url(); ?>home-page" method="post">
                                    <button type="submit" class="btn btn-warning">Home Page</button>
                                </form>
                            </div>

                            <div class="col-md-6">
                                <form action="<?php echo base_url(); ?>login" method="post">
                                    <button type="submit" class="btn btn-warning">Admin Login</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <br>

                </div>
            </div>
    </header>
</body>

</html>