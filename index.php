<?php include 'page_head.php' ?>

<body>
  <?php $selected = "home" ?>
  <?php include 'header.php' ?>
  
  <section id="home_page_banner">
    <div class="container_16 content">
      <div id="slidedeck_frame" class="skin-slidedeck">
  			<dl class="slidedeck">
				  <dt>Graduate Students</dt>
          <dd>
            <img class="img_bg" src="img/slidedeck/slides/graduates.jpg" />
            <div class="tagline">Make yourself job-ready with our Domain oriented training!</div>
            <div class="info">Domains offered: Healthcare, Retail, Banking, Manufacturing, etc.</div>
          </dd>
          <dt>Final Year Projects</dt>
          <dd>
            <img class="img_bg" src="img/slidedeck/slides/final-year-projects.jpg" />
            <div class="tagline">Make your Final year project stand out!</div>
            <div class="info">Experience true Software Development Life cycle with our domain oriented projects!</div>
          </dd>
          <dt>College Management</dt>
          <dd>
            <img class="img_bg" src="img/program-detail-banner-bg" />
            <div class="tagline">Make your students stand out from others.</div>
            <div class="info">Make them more job ready! Enroll your students with the Take Flight program.</div>
          </dd>
          <dt>Corporates</dt>
          <dd>
            <img class="img_bg" src="img/program-detail-banner-bg" />
            <div class="tagline">Your shortcut to Domain-Ready skills</div>
            <div class="info">Access a domain-ready, IT life skills and soft skill trained talent pool which you can deploy faster on your billable projects!</div>
          </dd>
          <dt>Placement Officers</dt>
          <dd>
            <img class="img_bg" src="img/program-detail-banner-bg" />
            <div class="tagline">Avail of our Take Flight program.</div>
            <div class="info">Partner with our organization, train your team and increase your placement percentages!</div>
          </dd>
  			</dl>
  		</div>
    </div>
  </section>
  
  <section id="home_page_primary_content">
    <div class="container_16">
      <div class="grid_6 content">
        <h2>Training and Education</h2>
        <div>
          Zastra’s training and education offerings span across educational institutes like Engineering colleges, Arts and Science colleges and Management schools. We also offer specialized training offerings for corporates.
        </div>
        <div class="green_button">
          Know More
          <div class="end"></div>
        </div>
      </div>
      <div class="grid_6 content">
        <h2>Consulting Services</h2>
        <div>
          Zastra’s consulting offerings are in niche areas that create value for any organization. Leverage our 50+ man years of delivery and consulting experience to take your organization to the next level.
        </div>
        <div class="green_button">
          Know More
          <div class="end"></div>
        </div>
      </div>
      <div class="grid_4" id="home_page_marketing">
        2 Lakh Engineering Graduates per year
        <br/><br/>
        20,000 get employed
        <br/><br/>
        Are you equiped to crack it?
        <br/><br/>
        <a href="javascript: void(0);" class="special_link">Read More</a>
      </div>
    </div>
  </section>
  
  <?php include 'footer.php' ?>
  
  <script type="text/javascript">
		$('.slidedeck').slidedeck({
      autoPlay: true,
      cycle: true, 
      autoPlayInterval: 5000 
    });
	</script>
  
</body>
</html>
