<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD PHALCON</title>
  {{ stylesheet_link('css/bootstrap.min.css') }}
  {{ stylesheet_link('css/navbar-fixed-top.css') }}
  {{ javascript_include('js/bootstrap.min.js') }}
  {{ javascript_include('js/jquery.min.js') }}
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
             <a class="navbar-brand" href="#">Latihan</a>
         </div>
         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="navbarCollapse">
             <ul class="nav navbar-nav">
                 <li><a href="{{ url('home/index') }}">Home</a></li>
                 <li><a href="{{ url('users') }}" >User</a></li>

             </ul>
         </div>
     </div>
 </nav>
{% block content %}
{% endblock %}
</body>
</html>

<span style="font-family: Times New Roman;"><span style="white-space: normal;">
</span></span>
