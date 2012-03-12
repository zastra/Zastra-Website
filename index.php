<?php include 'page_head.php' ?>

<body>
  <?php $selected = "home" ?>
  <?php include 'header.php' ?>
  
  <section id="home_page_banner">
    <div class="container_16 content">
      <div id="slidedeck_frame" class="skin-slidedeck invisible">
  			<dl class="slidedeck">
				  <dt>Graduate Students</dt>
          <dd>
            <img class="img_bg" src="img/slidedeck/slides/graduates.jpg" />
            <a href="program.php#take_flight" style="left: 441px; top: 187px;">
              <div class="green_button">Know More<div class="end"></div></div>
            </a>
          </dd>
          <dt>Final Year Projects</dt>
          <dd>
            <img class="img_bg" src="img/slidedeck/slides/final-year-projects.jpg" />
            <a href="program.php?target=finalyr#take_flight" style="left: 441px; top: 200px;">
              <div class="green_button">Know More<div class="end"></div></div>
            </a>
          </dd>
          <dt>College Management</dt>
          <dd>
            <img class="img_bg" src="img/slidedeck/slides/college-management.jpg" />
            <a href="program.php?target=eduinst#take_flight" style="left: 21px; top: 163px;">
              <div class="green_button">Know More<div class="end"></div></div>
            </a>
          </dd>
          <dt>Placement Officers</dt>
          <dd>
            <img class="img_bg" src="img/slidedeck/slides/placement-officers.jpg" />
            <a href="program.php?target=eduinst#take_flight" style="left: 432px; top: 180px;">
              <div class="green_button">Know More<div class="end"></div></div>
            </a>
          </dd>
          <dt>Corporates</dt>
          <dd>
            <img class="img_bg" src="img/slidedeck/slides/corporates.jpg" />
            <a href="program.php?target=itites#take_flight" style="left: 432px; top: 180px;">
              <div class="green_button">Know More<div class="end"></div></div>
            </a>
          </dd>
  			</dl>
  			<ul>
  			</ul>
  		</div>
    </div>
  </section>
  
  <section id="home_page_primary_content">
    <div class="container_16">
      <div class="grid_6 content">
        <h2>Training and Education</h2>
        <div>
          Zastra’s training and education offerings span across educational institutes like Engineering colleges, Arts and Science colleges and Management schools. We also offer specialized training offerings for corporates.
		  <a href="javascript: void(0);" class="contact_us_dialog">Know More</a>
        </div>
      </div>
      <div class="grid_6 content">
        <h2>Consulting Services</h2>
        <div>
          Zastra’s consulting offerings are in niche areas that create value for any organization. Leverage our 50+ man years of delivery and consulting experience to take your organization to the next level.
		  <a href="program.php#agile_coaching">Know More</a>
        </div>
      </div>
      <div class="grid_4" id="home_page_marketing">
        <script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
		<script>
		new TWTR.Widget({
		  version: 2,
		  type: 'profile',
		  rpp: 2,
		  interval: 30000,
		  width: 200,
		  height: 200,
		  theme: {
			shell: {
			  background: '#363636',
			  color: '#838383'
			},
			tweets: {
			  background: '#ffffff',
			  color: '#838383',
			  links: '#366795'
			}
		  },
		  features: {
			scrollbar: false,
			loop: true,
			live: false,
			behavior: 'default'
		  }
		}).render().setUser('ZastraTech').start();
		</script>
      </div>
    </div>
  </section>
  
  <?php include 'footer.php' ?>
  
  <?php include 'contact_us/take_flight.php' ?>
  
  <script type="text/javascript">
  	$('.slidedeck').slidedeck({
      autoPlay: true,
      cycle: true, 
      autoPlayInterval: 7000,
      hideSpines: true,
      complete: function(deck){
        var ul = $('#slidedeck_frame ul');
        ul.find('li').removeClass('selected').eq(deck.current - 1).addClass('selected');
      }
    });
    var s = $('#slidedeck_frame');
    var l = s.find('ul');
    for(var i=0; i<s.find('dl dd').length; i++){
      l.append('<li></li>');
    }
    l.find('li:first').addClass('selected');
    l.find('li').each(function(index, el){
      $(this).text(index + 1).click(function(){
        $('.slidedeck').slidedeck().goTo(index + 1);
      });
    });
    s.removeClass('invisible');
  </script>
  
</body>
</html>
