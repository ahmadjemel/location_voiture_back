<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Gestion de Location
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route("voiture.create")}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Ajouter Voiture</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route("voiture.index")}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Liste de voiture</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('marque.create')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Ajouter Marques</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route("marque.index")}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Liste des marques</p>
            </a>
          </li>

        </ul>
    <!--gestion client-->
              <li class="nav-item">
             <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
               Client
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route("client.index")}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Liste Client</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route("client.create")}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajout Client</p>
                </a>
              </li>
            </ul>
    <!--gestion de reservation-->
    <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Reservation
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route("reservation.store")}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Ajouter Reservation</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route("reservation.index")}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Liste de Reservation</p>
            </a>
          </li>
        </ul>
<!--GEstion emploie-->
    <li class="nav-item">
     <a href="#" class="nav-link">
      <i class="nav-icon fas fa-tachometer-alt"></i>
      <p>
        Employeur
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{route("employe.create")}}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Ajouter employeur</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{route("employe.index")}}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Liste d'employeur'</p>
        </a>
      </li>
    </ul>
    <!--boutton de déconnection-->
<li class="nav-item">
     <button class="w-100 btn btn-danger">Déconnection</button>
  </li>
    </ul>
  </nav>
