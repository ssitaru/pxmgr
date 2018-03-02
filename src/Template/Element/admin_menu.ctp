  <nav class="nav">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">PXMgr Admin</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
	    <li><?=$this->Html->link('<i class="material-icons left">settings</i>General', '/admin/', ['escape' => false]);?></li> 
        <li><?=$this->Html->link('<i class="material-icons left">person</i>Users', '/admin/users/', ['escape' => false]);?></li>
        <li><?=$this->Html->link('<i class="material-icons left">folder_shared</i>Patients', '/admin/patients/', ['escape' => false]);?></li>
      </ul>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="#test1">Test 1</a></li>
        <li class="tab"><a class="active" href="#test2">Test 2</a></li>
        <li class="tab disabled"><a href="#test3">Disabled Tab</a></li>
        <li class="tab"><a href="#test4">Test 4</a></li>
      </ul>
    </div>
  </nav>