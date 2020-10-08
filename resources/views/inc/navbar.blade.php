
<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-5">
    <a class="navbar-brand" href="#">Acme</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item {{Request::is('/') ? 'active': ''}}">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item {{Request::is('about') ? 'active': ''}}">
          <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item {{Request::is('contact') ? 'active': ''}}">
            <a class="nav-link" href="/contact">Contact</a>
        </li>
      </ul>
    </div>
  </nav>