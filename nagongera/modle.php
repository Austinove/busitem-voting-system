<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="image/favicon.ico">
	<title>modle</title>
	    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    <script src="js/myjs.js"></script>
    <script src="js/bootstrap.min.js"></script>

  <script src="vendor/jquery.min.js">
  </script>
</head>
<body>

<div class="container">

	<button type="button" class="btn btn-success" data-toggle="modal" data-target="#popUpWindow">Open Log In Window</button>
        <div class="modal fade" id="popUpWindow">
          <div class="modal-dialog">
            <div class="modal-content">
              
              <!-- header -->
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
               
              </div>

              <!-- body(form) -->
              <div class="modal-body">
                <form role ="form">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="BU/ UP or UG/ Year">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" placeholder="eg. 001110">
                  </div>
                </form>
              </div>

              <!-- button -->
              <div class="modal-footer">
                <button class="btn btn-primary btn-block">Log In</button>
              </div>

            </div>
          </div>
        </div>
 </div>


</body>
</html>