<style type="text/css">
  a.nav-link{
    color: #000;
  }
</style>

<header id="header" class="fixed-top bg-danger">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php"><img src="../images/logo-tu3.png" width="100%" alt=""></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><b> ยินดีต้อนรับ : <u><?= $_SESSION['prename'];?> <?= $_SESSION['firstnameTH'];?> <?= $_SESSION['lastnameTH'];?> (<?= $_SESSION['pid'];?>)</u></b></li>
          <li><a class="nav-link scrollto" href="index.php">หน้าหลัก</a></li>
          <li><a class="nav-link scrollto" href="../help/wl_aptu.pdf" target="_blank">ช่วยเหลือ <i class="fa fa-question-circle"></i></a></li>
          <li><a class="nav-link scrollto" href="../logout.php" onclick="return confirm('กรุณาตรวจสอบข้อมูลให้เรียบร้อยก่อนออกจากระบบ !!')">ออกจากระบบ <i class="fa fa-sign-out" style="font-size: 16px;"></i></a></li>
          <!-- <li><a class="nav-link scrollto o" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="#about">Get Started</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
