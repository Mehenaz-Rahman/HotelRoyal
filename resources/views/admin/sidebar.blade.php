<div class="d-flex align-items-stretch">
  <nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
      <div class="avatar"><img src="Admin/img/avatar-5.jpg" alt="..." class="img-fluid rounded-circle"></div>
      <div class="title">
        <h1 class="h5">Mehenaz Rahman</h1>
        <p>Web Developer</p>
      </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    <ul class="list-unstyled">
      <li class="active"><a href="/home"> <i class="icon-home"></i>Home </a></li>
      <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i
            class="icon-windows"></i>Hotel Rooms</a>
        <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
          <li><a href="{{url('create_room')}}">Add Room</a></li>
          <li><a href="{{url('view_room')}}">View Room</a></li>
        </ul>
      </li>
      <li class=""><a href="{{url('bookings')}}"><i class="bi bi-calendar-check"></i></i>Bookings</a></li>

      <li class=""><a href="{{url('view_gallery')}}"><i class="bi bi-image"></i> Gallery</a></li>
      <li class=""><a href="{{url('all_messages')}}"><i class="bi bi-envelope"></i> Messages</a></li>
      <li class=""><a href="{{url('add_offer')}}"><i class="icon-windows"></i>Discount</a></li>
    </ul>
  </nav>