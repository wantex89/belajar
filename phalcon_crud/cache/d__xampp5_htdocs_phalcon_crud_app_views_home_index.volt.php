<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHALCON CRUD</title>
  <?= $this->tag->stylesheetLink('css/bootstrap.min.css') ?>
  <?= $this->tag->stylesheetLink('css/navbar-fixed-top.css') ?>
  <?= $this->tag->javascriptInclude('js/bootstrap.min.js') ?>
  <?= $this->tag->javascriptInclude('js/jquery.min.js') ?>
 </head>
 <body>

 <nav class="navbar navbar-inverse navbar-fixed-top" >
     <!-- Brand and toggle get grouped for better mobile display -->
     <div class="container-fluid">
         <div class="navbar-header">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                 <span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
             </button>
             <a class="navbar-brand" href="#">CRUD</a>
         </div>
         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="navbarCollapse">
             <ul class="nav navbar-nav">
                 <li><a href="<?= $this->url->get('home/index') ?>">Home</a></li>
                 <li><a href="<?= $this->url->get('users') ?>" >User</a></li>

             </ul>
         </div>
     </div>
 </nav>

  
 
<div class="container">
  <div class="jumbotron">
    <div class="container-fluid">
        <h1>Selamat Datang</h1>
        <p>Tutorial memadukan Template bootstrap dengan phalcon. Untuk dokumentasi lebih jelas mengenai bootstrap silahkan klik link di bawah ini : </p>
        <p><a href="http://getbootstrap.com/" target="_blank" class="btn btn-success btn-lg">Flying to bootstrap</a></p>
    </div>
  </div>
</div>

<div class="container-fluid">  
    <hr>
    <div class="row">
        <div class="col-xs-12">
            <footer>
                <p>&copy; Tutorial Memadukan Template Bootstrap dengan Phalcon </p>
            </footer>
        </div>
    </div>
</div>

</body>
</html>

<span style="font-family: Times New Roman;"><span style="white-space: normal;">
</span></span>
