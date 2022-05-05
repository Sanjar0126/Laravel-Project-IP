<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    

    <title>Admin panel</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/css/mdb.min.css" rel="stylesheet"> 
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark elegant-color">
            <a class="navbar-brand" href="{{route('adminIndex')}}">Admin panel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item pl-5">
                  <a class="nav-link" href="{{route('adminIndex')}}">Users</a>
                </li>
                <li class="nav-item pl-2">
                  <a class="nav-link" href="{{route('allOrders')}}">Orders</a>
                </li>
                <li class="nav-item pl-2">
                  <a class="nav-link" href="{{route('allContacts')}}">Messages</a>
                </li>
                <li class="nav-item pl-2">
                    <a class="nav-link" href="{{ route('catIndex')}}">Categories</a>
                  </li>
                <li class="nav-item pl-2">
                  <a class="nav-link" href="{{ route('foodIndex')}}">Food</a>
                </li>
              </ul>
            </div>

            <!--Dropdown primary-->
            <a href="{{ route('createNewCat')}}"><button class="btn btn-info" type="button">New Category</button></a>
            <a href="{{ route('createNewFood')}}"><button class="btn btn-info" type="button">New Food</button></a>
            <div class="dropdown">

            <!--Trigger-->
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</button>


            <!--Menu-->
            <div class="dropdown-menu dropdown-primary">
                <a class="dropdown-item" href="{{ route('logout') }}" 
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
            </div>
            <!--/Dropdown primary-->
          </nav>
          @if(Session::has('info'))
          <div class="row justify-content-md-center">
              <div class="alert alert-info">
                  {{ Session::get('info') }}
              </div>
          </div>
          @endif
        <main class="py-4">
          
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
        <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/js/mdb.min.js"></script>
    <script>
      
      $(document).ready(function() {
            $('.deleteButton').on('click', function() {
                var id = $(this).attr('jsId');
                req = $.ajax({
                    url: 'admin/user/delete/'+id,
                    success: function() {
                        $('#ajax' + id).remove();
                    }
                });                
            });
            $('.deleteOrderButton').on('click', function() {
                var id = $(this).attr('jsOrderId');
                req = $.ajax({
                    url: 'orders/delete/'+id,
                    success: function() {
                        $('#book' + id).remove();
                    }
                });                
            });
            $('.updateOrderButton').on('click', function() {
                var id = $(this).attr('jsOrderId');
                var len = id.length;
                var e = document.getElementById("order"+id);
                var role = e.options[e.selectedIndex].value;
                req = $.ajax({
                    url: 'orders/edit/'+id+role+len,
                    success: function() {
                        $("order"+ id +' option:selected').removeAttr('selected');
                        $("order"+ id + " option[value='"+ role +"']").attr("selected","selected");
                        $(this).fadeIn(1000).fadeOut(1000);
                    }
                });                
            });
            $('.deleteContactButton').on('click', function() {
                var id = $(this).attr('jsId');
                req = $.ajax({
                    url: 'contacts/delete/'+id,
                    success: function() {
                        $('#ajaxContact' + id).remove();
                    }
                });                
            });
            $('.deleteFoodButton').on('click', function() {
                var id = $(this).attr('jsFoodId');
                req = $.ajax({
                    url: 'delete/'+id,
                    success: function() {
                        $('#ajaxFood' + id).remove();
                    }
                });                
            });
            $('.deleteCatButton').on('click', function() {
                var id = $(this).attr('jsId');
                req = $.ajax({
                    url: 'categories/delete/'+id,
                    success: function() {
                        $('#ajaxCat' + id).remove();
                    }
                });
            });
            
        });
    </script>
</body>
</html>
