<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Book Store</title>
    <link href="bootstrap/css/style.css" type="text/css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <script src="jquery/jquery-3.2.0.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="Js/pullData.js"></script>
</head>
<body>
<div class="collapse bg-inverse" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 py-4">
            <h4 class="text-white">About Us</h4>
            <p class="text-muted">Widest Range of Mobile & Tablets, Home Appliances, Tv, Audio,Home & Best Prices. Free Returns · Quality Products Categories: Electronics, Fashion, Toys and more</p>
          </div>
          <div class="col-sm-4 py-4">
            <h4 class="text-white">Contact</h4>
            <ul class="list-unstyled">
              <li><a href="#" class="text-white">Follow on Twitter</a></li>
              <li><a href="#" class="text-white">Like on Facebook</a></li>
              <li><a href="#" class="text-white">Email me</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-inverse bg-inverse">
      <div class="container d-flex justify-content-between">
        <a href="#" class="navbar-brand">BeautyCup</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">BeautyCup</h1>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
          <form class="form-inline suscribe">
                <div class="input-group">
                <div class="input-group-addon">@</div>
                    <input type="Email" class="form-control" id="email" placeholder="email@example.com">
                </div>
                <button type="submit" class="btn btn-primary submit">Submit</button>
            </form>
      </div>
    </section>
 <div class="product text-muted">
     <div class="container">
       <div class="row" style="margin-left: 50px;margin-right: 50px;">
       <div id="product_list"></div>
     </div>
     </div>
     <div class="container">
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-end" id="pagi">
        <li class="page-item">
          <a class="page-link" href="#" tabindex="-1">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">4</a></li>
        <li class="page-item"><a class="page-link" href="#">5</a></li>
        <li class="page-item"><a class="page-link" href="#">6</a></li>
        <li class="page-item"><a class="page-link" href="#">...</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav>
         </div>
    </div>
    <footer class="text-muted">
      <div class="container">
          <hr class="mr-4" />
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>Elenix &copy;</p>
      </div>
    </footer>
</body>
</html>