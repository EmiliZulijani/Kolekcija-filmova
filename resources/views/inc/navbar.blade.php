
    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="{{Request::is('index')? 'active':''}}"><a href="/index">Kolekcija filmova</a></li>
            <li class="{{Request::is('unos')? 'active':''}}"><a href="/unos">Unos filma</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
