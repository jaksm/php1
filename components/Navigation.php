<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark py-4">
  <a class="navbar-brand" href="#">Web2Shop</a>
  <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu"
      aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="menu">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Top ponuda <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Akcije</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="proizvodi" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Proizvodi</a>
        <div class="dropdown-menu" aria-labelledby="proizvodi">
          <a class="dropdown-item" href="#">Kompijuteri</a>
          <a class="dropdown-item" href="#">Bela Tehnika</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Pretraga">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pretrazi</button>
    </form>
    <a href="login.php" class="btn btn-success ml-2 my-2 my-sm-0" type="submit">Moj Nalog</a>
    <a href="pages/register.php" class="btn btn-success ml-2 my-2 my-sm-0" type="submit">Registruj se</a>
  </div>
</nav>
