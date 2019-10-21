<style>
  nav{
    font-size: 20px;
    background-image: linear-gradient(to right, rgb(50,50,50),rgb(150,150,150))
  }
.navbar-dark .navbar-nav .nav-link{
  color:white;
}

.navbar-dark .navbar-nav .nav-link:hover{
  color:aqua;
}
</style>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  {{-- <a class="navbar-brand" href="">WDL-PROJECT</a> --}}
  <a class="navbar-brand" href="/"><img src="img/logo.png" alt="logo" style="height: 60px; width: 60px; border-radius:50%;"></a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/studentLogin">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/studentRegister">Register</a>
      </li>
    </ul>
    
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="/login"><strong>Admin</strong></a>
      </li>
    </ul>
  </div>
</nav>

