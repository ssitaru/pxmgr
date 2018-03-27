<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/admin">Admin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php if($menuitem == 'index'){echo 'active';} ?>">
        <?=$this->Html->link('<i class="material-icons">settings</i>General', '/admin/', ['class' => 'nav-link', 'escape'=>false]);?>
      </li>
      <li class="nav-item <?php if($menuitem == 'users'){echo 'active';} ?>">
        <?=$this->Html->link('<i class="material-icons">account_circle</i>Users', '/admin/users', ['class' => 'nav-link', 'escape'=>false]);?>
      </li>
      <li class="nav-item <?php if($menuitem == 'groups'){echo 'active';} ?>">
        <?=$this->Html->link('<i class="material-icons">people</i>Groups', '/admin/groups', ['class' => 'nav-link', 'escape'=>false]);?>
      </li>
      <li class="nav-item <?php if($menuitem == 'patients'){echo 'active';} ?>">
        <?=$this->Html->link('<i class="material-icons">contacts</i>Patients', '/admin/patients', ['class' => 'nav-link', 'escape'=>false]);?>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>