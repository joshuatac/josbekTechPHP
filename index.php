<?php include "include/header.php";  ?>


  <div class="container bodyWrapper">
    <nav class="mt-3">
     

    <?php include "tab/tab_control.php"; ?>


    </nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="navlatest" role="tabpanel" aria-labelledby="navlatesttab">

<h2 style="color: red; font-size:1.2rem; margin-top: 2rem;">Latest Topics</h2>     
   
<?php include "tab/latest.php"; ?>

      </div>


      <!-- This is the top section -->
      <div class="tab-pane fade" id="navtop" role="tabpanel" aria-labelledby="navtoptab">
        <h2 style="color: red; font-size:1.2rem; margin-top: 2rem;">Top Topics</h2>     
  
        <?php include "tab/top.php"; ?>

      </div>
      <div class="tab-pane fade" id="navcategory" role="tabpanel" aria-labelledby="navcategorytab">
        <h2 style="color: red; font-size:1.2rem; margin-top: 2rem;">Categories</h2>     
      <?php include "tab/category.php"; ?>

      </div>


    </div>



  </div>

  </div>


  <?php include "include/modal.php"; ?>


  <?php include "include/footer.php"; ?>