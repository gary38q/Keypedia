<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    body {-ms-overflow-style: none; scrollbar-width: none; overflow-y: scroll; }
    body::-webkit-scrollbar {display: none; }
    </style>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>@yield('Title')</title>
</head>
<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg navbar-light shadow p-3 mb-5 bg-white rounded" style="margin: 0;width:100%">
        <a class="navbar-brand" href="/"><img width="150" height="70" src="{{ url('storage/image/Logo.PNG') }}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
          </ul>
          <span class="navbar-text mr-5">
             <?php

             if (session_status() === PHP_SESSION_NONE) {
            session_start();
              }
            // session_start();
            if(isset($_SESSION['User']) && !empty($_SESSION['User'])){
              $UserN = $_SESSION['User'];
              }
              $Role = $_SESSION['Role'];
            ?>
            @if ($Role == 'Admin')
            <ul class="navbar-nav mr-3">
                <li class="nav-item mr-2">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Categories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      @php
                    $Cat = App\Http\Controllers\CategoryController::Cat_Nav();
                  @endphp
                      @foreach ($Cat as $Cat)
                      <a class="dropdown-item" href="/Category/{{ $Cat->Category_Name }}">{{ $Cat->Category_Name }}</a>
                      @endforeach
                  </li>
                </li>
              <li class="nav-item mr-3">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Manager
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="/AddKeyboard">Add Keyboard</a>
                      <a class="dropdown-item" href="/ManageCat">Manage Categories</a>
                      <a class="dropdown-item" href="/ChangePass">Change Password</a>
                      <a class="dropdown-item" href="/Logout">Logout</a>
                </li>
              </li>
              <li class="nav-item mt-2 ml-3">
                  <?php
                  $mytime = Carbon\Carbon::now();
                  echo $mytime->format('D, d-M-Y');
                  ?>
              </li>
            </ul>

            @elseif ($Role == 'User')
            <ul class="navbar-nav mr-3">
              <li class="nav-item mr-2">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categories
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @php
                    $Cat = App\Http\Controllers\CategoryController::Cat_Nav();
                  @endphp
                    @foreach ($Cat as $Cat)
                    <a class="dropdown-item" href="/Category/{{ $Cat->Category_Name }}">{{ $Cat->Category_Name }}</a>
                    @endforeach
                </li>
              </li>
            <li class="nav-item mr-3">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?php echo $UserN; ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/MyCart">My Cart</a>
                  <a class="dropdown-item" href="/History">Transaction History</a>
                  <a class="dropdown-item" href="/ChangePass">Change Password</a>
                  <a class="dropdown-item" href="/Logout">Logout</a>
              </li>
            </li>
            <li class="nav-item mt-2 ml-3">
                <?php
                $mytime = Carbon\Carbon::now();
                echo $mytime->format('D, d-M-Y');
                ?>
            </li>
          </ul>
          
            @else
            <ul class="navbar-nav mr-auto">
                <li class="nav-item mr-2">
                  <a class="nav-link" href="/Login">Login</a>
                </li>
                <li class="nav-item mr-2">
                  <a class="nav-link" href="/Register">Register</a>
                </li>
                <li class="nav-item mt-2">
                    <?php
                    $mytime = Carbon\Carbon::now();
                    echo $mytime->format('D, d-M-Y');
                    ?>
                </li>
              </ul> 
            @endif
          </span>
        </div>
      </nav>

      <div class="mb-5">
        @section('Isi')  @show
      </div>

      <footer class="bg-primary mt-auto">
        <h5 class="text-center py-2" style="color: white">Keypedia By Gary &copy; Copyright 2021</h5>
    </footer>
    <script>
      $(document).ready(function(){
        $("#myInput").on("keyup", function() {
          var value = $(this).val().toLowerCase();
          $("#Keyboard #IsiKey").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });
      });
      </script>
</body>
</html>