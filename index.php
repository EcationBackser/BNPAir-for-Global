
<?php
// Banned Upload PHP Files!
?>
<!doctype html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>BNPAir for Global | The code in Github</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/@bootcss/v3.bootcss.com@1.0.18/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="https://cdn.jsdelivr.net/npm/@bootcss/v3.bootcss.com@1.0.18/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/@bootcss/v3.bootcss.com@1.0.18/examples/offcanvas/offcanvas.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="https://cdn.jsdelivr.net/npm/@bootcss/v3.bootcss.com@1.0.18/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="https://cdn.jsdelivr.net/npm/@bootcss/v3.bootcss.com@1.0.18/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">BNPAir for Global</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="https://github.com/EcationBackser/">My Github</a></li>
            <li><a href="https://github.com/EcationBackser/BNPAir-for-Global/blob/main/README.md">About</a></li>
            <li><a href="mailto:info@bnpo.xyz">联系</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">See More</button>
          </p>
          <div class="jumbotron">
            <h1>BNPAir for Global</h1>
            <p>How to use: Uploading files in this form and we'll redirect you to upload.php. In this page, you'll see the down-link.</p>
          </div>
          
          <form method="post" action="upload.php" enctype="multipart/form-data">
              <h2>Uploading Form</h2>
            <input type="file" name="file" /> <br/>
            <button type="submit">SUBMIT</button>
          </form>
          
        </div><!--/.col-xs-12.col-sm-9-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
            <center><h1>NOTICE</h1></center>
          <p>Hello, we have already open the code in Github, you can check <a href="https://github.com/EcationBackser/BNPAir-for-Global/">https://github.com/EcationBackser/BNPAir-for-Global/</a></p>
            <center><h2>Donate</h2></center>
            <img src="https://cdn.jsdelivr.net/gh/EcationBackser/cdn/wechatpay.png" alt="WECHAT PAY" width="168" height="195">
            <img src="https://cdn.jsdelivr.net/gh/EcationBackser/cdn/alipay.png" alt="ALIPAY" width="168" height="195">
            
        </div><!--/.sidebar-offcanvas-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>Copyright &copy; <?php
            if (date('Y')==2021) {
                echo '2021';
            } else {
                echo '2021-'.data('Y');
            }
            ?> BNPAir for Global, All Rights Reserved.</p>
      </footer>
        
    </div><!--/.container-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="https://cdn.jsdelivr.net/npm/@bootcss/v3.bootcss.com@1.0.18/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdn.jsdelivr.net/npm/@bootcss/v3.bootcss.com@1.0.18/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="https://cdn.jsdelivr.net/npm/@bootcss/v3.bootcss.com@1.0.18/assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@bootcss/v3.bootcss.com@1.0.18/examples/offcanvas/offcanvas.js"></script>
  </body>
</html>
