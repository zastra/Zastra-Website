<?php include 'page_head.php' ?>

<body>
  <?php $selected = "team" ?>
  <?php include 'header.php' ?>
  
  <section>
    <div class="container_16" id="the_team_page">
      <section class="grid_5 vertical_tab_list">
        <div class="top_shadow">&nbsp;</div>
        <ul>
          <li class="selected">
            <h3>The Core Team</h3>
            <span>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</span>
          </li>
          <li>
            <h3>Telecommunication</h3>
            <span>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</span>
          </li>
        </ul>
        <div class="bottom_shadow">&nbsp;</div>
      </section>
      
      <section class="grid_11 box" id="the_team">
        <h1>The Core Team</h1>
        <p class="abstract">
          Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.
        </p>
        <div class="profiles clearfix">
          <?php for($i=1; $i<=2; $i++){ ?>
            <div class="clearfix profile">
              <div class="grid_3 picture alpha">
                <img src="img/team/praveen.jpg" />
              </div>
              <div class="grid_8 more_info alpha omega">
                <div class="profile_name"><span class="strong">Mahesh</span> Last</div>
                <div class="designation">Director</div>
                <div class="bio">
                  <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
                  <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </section>
    </div>
  </section>
  
  <?php include 'footer.php' ?>
  
</body>
</html>
