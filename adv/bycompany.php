<!DOCTYPE html>
<html>
  <head>
    <title>Add Client</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css" />
  </head>
  <body>


<nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php">Advocate Diary</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li><a href="addclient.php">Add Client</a></li>
      <li><a href="viewrecords.php">View Reccords</a></li>
      <li><a href="profile.html">My Profile</a></li>
      <li><a href="dispose.php">Dispose Case</a></li>
      <li><a href="payment.php">Payment</a></li>
      <li><a href="delete.php">Delete Case</a></li>
      <li><a href="update.php">Update Record</a></li>
      <li><a href="disposeall.php">View All Dispose Cases</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
    </div>
  </nav>






 <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Search Record </h1>
          </div>
          <div class="panel-body">
            <form action="retrive.php" method="post">
              <div class="form-group">
                
                <label for="cname">Company Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="cname"
                  name="cname"
                  required
                />
              </div>
              
              </div>
              <input type="submit" class="btn btn-primary" />
            </form>
          </div>
          <div class="panel-footer text-right">
            <small>&copy; RB Works Developers</small>
          </div>
        </div>
      </div>
    </div>
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  
</div>
  </body>
</html>