   <html>
    <head>
        <title>Signup page</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
       
        <?php require 'includes/Header.php';?>
        <div class="container-fluid" style="margin-top: 100px;" >
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h2>Sign up</h2>
                        </div>
                        <div class="panel-body">
                            <form method="post" action="Signup_submit.php">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name">

                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>
                                 <div class="form-group">
                                    <input type="number" name="contact" class="form-control" placeholder="Contact">
                                </div>
                                 <div class="form-group">
                                    <input type="text" name="city" class="form-control" placeholder="City">
                                </div>
                                 <div class="form-group">
                                    <input type="text" name="address" class="form-control" placeholder="Address">
                                <center>
                                    <div class="form-group" style="margin-top: 15px;">
                                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                    </div>
                                </center>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        </body>
        </html>
