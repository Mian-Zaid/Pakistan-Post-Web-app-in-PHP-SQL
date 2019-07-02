<!DOCTYPE html>
<html>
    <head>
        <title>Track</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="main.css">
        <script type="text/javascript" src="functions.js"></script>
    </head>

    <body>

        <nav class="navbar">
                  <div class="navbar-header">
                    <a >
                        <img src="wingg.png" class="icon">      
                    </a>
                </div>
                <div class="colapse navbar-colapse">
                    <ul class="nav navbar-nav navbar-right">
                        <a>
                            <img class="profile-picture img-fluid" src="rain.jpg">
                        </a> 
                    </ul>
                </div>
        </nav>
        
        
<div class="navigation">
    <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link" href="home.html">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="mail.html">New Mail</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="track.html">Track</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="funds.html">Update Track</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="reports.html">Reports</a>
      </li>
    </ul>
</div>


<div class="container">
    <div class="jumbotron">
        <div class="container">
            <h1 style="text-align: center;">Query</h1>
            <p style="text-align: center;">Enter details for serach</p>

            <div class="card search-input-box">
                <div class="card-header">
                    Track
                </div>

                <form action="track-next.html">
                    <div class="container" style="margin-top: 20px">
                        <div class="input-group mb-3 container form-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text">Tracking ID</label>
                            </div>
                            <input type="number" name="tracking_ID" class="custom-select">
                        </div>

                        <div class="container">
                            <label>Forgot tracking ID</label>
                                <input type="checkbox" id="check" onclick="myFunction2()">
                                    <div id="forgot-id" style="display:none" class="form-group insurance">
                                        <label>Enter CNIC</label>
                                        <input type="number" name="cnic" class="form-control" placeholder="142021212121">
                                    </div>
                        </div>

                        <div class="input-group mb-3 container form-group">
                            <button type="submit" name="search-button" class="btn btn-success btn-lg btn-block" style="margin-top: 20px">Search</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>   
</div>



</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
