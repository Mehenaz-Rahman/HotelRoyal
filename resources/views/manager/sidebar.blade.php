
<div class="d-flex align-items-stretch">
  <nav id="sidebar" class="sticky-top">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
      <div class="avatar"><img src="Admin/img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
      <div class="title">
        <h1 class="h5">Manager</h1>
        <p>Manager</p>
      </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    <ul class="list-unstyled">
      <li class="active"><a href="/home"> <i class="icon-home"></i>Home </a></li>
      <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i
            class="icon-windows"></i>Restaurant Menu</a>
        <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
          <li><a href="{{url('add_menu')}}">Add Menu</a></li>
          <li><a href="{{url('view_menu')}}">View Menu</a></li>
        </ul>
      </li>
      <li class=""><a href="{{url('view_reservation')}}"><i class="bi bi-calendar-check"></i></i>Reservation</a></li>

      <li class=""><a href="{{url('add_food_gallery')}}"><i class="bi bi-image"></i>Food Gallery</a></li>
    </ul>
  </nav>