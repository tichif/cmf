<!--  Navbar-->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">CMF</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item {{Request::is('/')  ? 'active' : ''}}">
          <a class="nav-link mr-3" href="{{ url('/') }}"> <i class="fa fa-home"></i> Accueil</a>
        </li>
        <li class="nav-item {{Request::is('gallerie')  ? 'active' : ''}}">
          <a class="nav-link mr-3" href="{{ url('/gallerie') }}"><i class="fa fa-picture-o"></i> Gallerie </a>
        </li>
        <li class="nav-item {{Request::is('apropos')  ? 'active' : ''}}">
          <a class="nav-link mr-3" href="{{ url('/apropos') }}"><i class="fa fa-info-circle"></i> A propos</a>
        </li>
        <li class="nav-item {{Request::is('contact')  ? 'active' : ''}}">
          <a class="nav-link mr-3" href="{{ url('/contact') }}"><i class="fa fa-paperclip"></i> Contactez-nous</a>
        </li>
      </ul>
      </ul>
      </ul>
    </div>
  </div>
</nav>
<!--  end Navbar-->