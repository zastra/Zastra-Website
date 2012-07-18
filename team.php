<?php include 'page_head.php' ?>

<body>
  <?php $selected = "team" ?>
  <?php include 'header.php' ?>
  
  <section>
    <div class="container_16" id="the_team_page">
      <section class="grid_5 vertical_tab_list">
        <div class="top_shadow">&nbsp;</div>
        <ul>
          <li class="selected" target="#the_team">
            <h3>The Core Team</h3>
          </li>
          <li target="#partners">
            <h3>Parters</h3>
          </li>
        </ul>
        <div class="bottom_shadow">&nbsp;</div>
      </section>
      
      <section class="grid_11 box profiles_holder" id="the_team">
        <h1>The Core Team</h1>
        <div class="profiles clearfix">
          <div class="clearfix profile">
            <div class="grid_3 picture alpha">
              <img src="img/team/mahesh.jpg" />
            </div>
            <div class="grid_8 more_info alpha omega">
              <div class="profile_name"><span class="strong">Mahesh</span> Vijayaraghavan</div>
              <div class="designation">Director</div>
              <div class="bio">
                <p>Mahesh Vijayaraghavan has an overall IT industry experience of 20 years in product development and consulting organizations, which includes manufacturing, signaling, telecommunications and healthcare domains.</p>
                <p>Prior to starting Zastra Technologies, he was held senior positions as the Practice Director - Healthcare Payer Delivery Organization, HCL Technologies, India and as the Delivery Head - India Operations, The TriZetto Group, USA, a healthcare product development company.</p>
                <p>Mahesh’s passion for teaching has translated into finding Zastra Technologies, where he leverages his knowledge in technology, business expertise in creating and realizing Zastra’s Vision.</p>
                <p>Mahesh has a Masters in Computer Application from Thiagarajar College of Engineering, Madurai, INDIA and has a Bachelors in Mathematics from Vivekananda College, Chennai, INDIA.</p>
              </div>
            </div>
          </div>
          <div class="clearfix profile">
            <div class="grid_3 picture alpha">
              <img src="img/team/arun.jpg" />
            </div>
            <div class="grid_8 more_info alpha omega">
              <div class="profile_name"><span class="strong">Arun</span> Venkataraman</div>
              <div class="designation">Director</div>
              <div class="bio">
                <p>Arun Venkataraman has 18 years of IT experience in product development and consulting organizations. He was recently holding the position of Global Operations Director at HCL Technologies, Chennai, where he was the Practice Head for the Healthcare delivery team. He has worked in the capacity of senior management roles at GE Healthcare, Cerner Corporation and HCL Technologies, where he led globally dispersed delivery teams and enabled go to market for several products and solutions in the Healthcare Provider (EMR/EHR) space. </p>
                <p>Arun has successfully created and nurtured delivery teams from the ground up and is extremely passionate about technology aligned to resolve business problems. This same passion has now translated into co-founding Zastra Technologies, where he brings in all his years of experience on technology, business expertise to help create and realize the Zastra vision.</p>
                <p>Arun has an MBA in Operations from Symbiosis, Pune and has a Bachelors in Engineering from Delhi Institute of Technology, Delhi majoring in Instrumentation & Control, 1994.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <section class="grid_11 box hide profiles_holder" id="partners">
        <h1>Partners</h1>
        <div class="profiles clearfix">
          <div class="clearfix profile">
            <div class="grid_3 picture alpha">
              <img src="img/team/mahesh.jpg" />
            </div>
            <div class="grid_8 more_info alpha omega">
              <div class="profile_name"><span class="strong">Mahesh</span> Vijayaraghavan</div>
              <div class="designation">Director</div>
              <div class="bio">
                <p>Mahesh Vijayaraghavan has an overall IT industry experience of 20 years in product development and consulting organizations, which includes manufacturing, signaling, telecommunications and healthcare domains.</p>
                <p>Prior to starting Zastra Technologies, he was held senior positions as the Practice Director - Healthcare Payer Delivery Organization, HCL Technologies, India and as the Delivery Head - India Operations, The TriZetto Group, USA, a healthcare product development company.</p>
                <p>Mahesh’s passion for teaching has translated into finding Zastra Technologies, where he leverages his knowledge in technology, business expertise in creating and realizing Zastra’s Vision.</p>
                <p>Mahesh has a Masters in Computer Application from Thiagarajar College of Engineering, Madurai, INDIA and has a Bachelors in Mathematics from Vivekananda College, Chennai, INDIA.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </section>
  
  <?php include 'footer.php' ?>

  <script>

    $(document).ready(function(){
      
      $('.vertical_tab_list li').click(function(){
        $('.profiles_holder').hide();
        $($(this).attr('target')).show();
      });

    });

  </script>
  
</body>
</html>