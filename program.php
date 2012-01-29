<?php include 'page_head.php' ?>

<body>
  <?php $selected = "programs" ?>
  <?php include 'header.php' ?>
  
  <section>
    <div class="container_16">
      <section class="grid_5 vertical_tab_list">
        <div class="top_shadow"><h2>Training and Education</h2></div>
        <?php
          $training = array(
            array("id" => "take_flight", "name" => "Take Flight", "caption" => "A program that enhances employability of college students", "link" => "programs/take_flight.php")
          );
        ?>
        <ul>
          <?php
            foreach ($training as $i => $value) {
          ?>
          <li id="<?php echo $value["id"] ?>" data-href="<?php echo $value["link"] ?>">
            <h3><?php echo $value["name"] ?></h3>
            <span><?php echo $value["caption"] ?></span>
          </li>
          <?php
            }
          ?>
        </ul>
        <div class="bottom_shadow">&nbsp;</div>
        
        <div class="top_shadow"><h2>Consulting Services</h2></div>
        <?php
          $services = array(
            array("id" => "agile_coaching", "name" => "Agile Coaching", "caption" => "Make your leap into Agile methodology (Kanban, Scrum)", "link" => "programs/agile_coaching.php"),
            array("id" => "estimation_training", "name" => "Estimation Consulting", "caption" => "Consult with us on how to estimate your software development projects better", "link" => "programs/estimation_training.php"),
            array("id" => "iso_audit_preparation", "name" => "ISO Audit Preparation", "caption" => "Engage with us to complete your ISO audit successfully", "link" => "programs/iso_audit_preparation.php")
          );
        ?>
        <ul>
          <?php
            foreach ($services as $i => $value) {
          ?>
          <li id="<?php echo $value["id"] ?>" data-href="<?php echo $value["link"] ?>">
            <h3><?php echo $value["name"] ?></h3>
            <span><?php echo $value["caption"] ?></span>
          </li>
          <?php
            }
          ?>
        </ul>
        <div class="bottom_shadow">&nbsp;</div>
      </section>
      
      <section class="grid_11 box" id="program_details">
        Loading...
      </section>
    </div>
  </section>
  
  <?php include 'footer.php' ?>
  
  <script>
  
    $(document).ready(function(){
      
      $('.vertical_tab_list li').click(function(){
        var el = $(this);
        var target = $('#program_details').html('Loading...');
        $.ajax({
          url: $(this).attr('data-href'),
          success: function(response){
            target.html(response);
            $('.vertical_tab_list li.selected').removeClass('selected');
            el.addClass('selected');
          }
        });        
        window.location.replace('#' + el.attr('id'));
      });
      
      if(window.location.hash.length > '#'.length){
        $(window.location.hash).click();
      } else {
        $('.vertical_tab_list li:first').click();
      }
      
    });
  
  </script>
  
</body>
</html>
