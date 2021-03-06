<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JAGO URL Shortener</title>

    <!-- Bootstrap -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/app.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  

  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-link" aria-hidden="true"></span> URL Shortened</a>
        </div>
      </div>
    </nav>
    
    <div class="jumbotron">
      <div class="container">
          
      </div>
    </div>
</div>


    <div class="main">
        <div class="container">
            
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="short">
                        <div class="input-group input-group-lg">
                            <input type="text" class="form-control" id="short" placeholder="Enter the link to be shortened">
                            <span class="input-group-btn">
                                <button class="btn btn-info" id="short-btn"><span class="glyphicon glyphicon-link" aria-hidden="true"></span> Short</button>
                            </span>
                        </div><!-- /input-group -->
                        <div id="loading"></div>
                        <div class="short-results"></div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="col-sm-6 col-md-6">
                            <div class="thumbnail">
                                <div class="caption">Today Shortened URL</div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="thumbnail">
                                <div class="caption">Total Shortened URL</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/app.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../assets/js/bootstrap.min.js"></script>
  </body>
</html>