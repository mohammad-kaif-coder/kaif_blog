<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>kaif</title>
  
    <link rel="stylesheet" href="css/css.css">
</head>
<!---Header section start------>
<header class="header">
    <div class="user">
        <img src="images/avatar.webp" alt=""/>
        <h3>Mohd Kaif Sayyed</h3>
        <p>Back-end Developer</p>
    </div>
    <nav class="navbar bar">
        <a href="{{url('/')}}">home</a>
        <a href="{{url('/about')}}">about</a>
        <a href="{{url('/services')}}">services</a>
        <a href="{{url('/portfolio')}}">portfolio</a>
        <a href="{{url('/contact')}}">contact</a>
    </nav>
</header>
<main class="py-4">
    @yield('content')
</main>
  <script src="js/script.js"></script>