<style>
  .logout-btn{
    font-family: "Lora", serif;
    background: transparent;
    color: #fff !important;
    font-weight: 600;
    padding: 10px 20px;
    font-size: 16px;
    border: none;
    transition: all 0.3s ease;
    opacity: 1;
  }
</style>
<header class="header">
  <nav class="navbar navbar-expand-lg">
    <div class="search-panel">
      <div class="search-inner d-flex align-items-center justify-content-center">
        <div class="close-btn">Close <i class="fa fa-close"></i></div>
        <form id="searchForm" action="#">
          <div class="form-group">
            <input type="search" name="search" placeholder="What are you searching for...">
            <button type="submit" class="submit">Search</button>
          </div>
        </form>
      </div>
    </div>
    <div class="container-fluid d-flex align-items-center justify-content-between">
      <div class="navbar-header">
        <!-- Navbar Header--><a href="index.html" class="navbar-brand">
          <div class="brand-text brand-big visible text-uppercase"><strong
              class="text-primary">Dark</strong><strong>Admin</strong></div>
          <div class="brand-text brand-sm"><strong class="text-primary">D</strong><strong>A</strong></div>
        </a>
        <!-- Sidebar Toggle Btn-->
        <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
      </div>


      <!-- Log out               -->
      <form method="POST" action="<?php echo e(route('logout')); ?>">
        <?php echo csrf_field(); ?>
        <button class="logout-btn"  type="submit" class="dropdown-link">
          <?php echo e(__('Log Out')); ?>

        </button>
      </form>

    </div>
    </div>
  </nav>
</header><?php /**PATH /Users/mithilarahman/Desktop/LARAVEL/Hotel_Managment/resources/views/manager/header.blade.php ENDPATH**/ ?>