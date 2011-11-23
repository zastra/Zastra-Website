<?php include 'page_head.php' ?>

<body>
  <?php include 'header.php' ?>
  
  <section id="home_page_banner">
    <div class="container_16 content">
      <div class="big_text">
        <div>
          Zastra is a ipsum erat, sollicitudin accumsan mattis sit amet, condimentum venenatis sem. Nulla lacus magna, convallis id laoreet eu, cursus id mauris.
        </div>
        <a href="javascript: void(0);" class="special_link">Read More</a>
      </div>
    </div>
  </section>
  
  <section id="home_page_primary_content">
    <div class="container_16">
      <div class="grid_6 content">
        <h2>Training and Education</h2>
        <div>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ipsum erat, sollicitudin accumsan mattis sit amet, condimentum venenatis sem. Nulla lacus magna, convallis id laoreet eu, cursus id mauris. Ut rhoncus ipsum sed nisi hendrerit congue. Morbi lobortis odio quis purus interdum ac rhoncus ante ultricies. Cras euismod dolor a.
        </div>
        <div class="green_button">
          Know More
          <div class="end"></div>
        </div>
      </div>
      <div class="grid_6 content">
        <h2>Consulting Services</h2>
        <div>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ipsum erat, sollicitudin accumsan mattis sit amet, condimentum venenatis sem. Nulla lacus magna, convallis id laoreet eu, cursus id mauris. Ut rhoncus ipsum sed nisi hendrerit congue. Morbi lobortis odio quis purus interdum ac rhoncus ante ultricies. Cras euismod dolor a.
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


  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>


  <!-- scripts concatenated and minified via ant build script-->
  <script defer src="js/plugins.js"></script>
  <script defer src="js/script.js"></script>
  <!-- end scripts-->
  
  <!--[if lt IE 7]>
    <script type="text/javascript" src="js/libs/unitpngfix.js"></script>
  <![endif]-->

	
  <!-- Change UA-XXXXX-X to be your site's ID -->
  <script>
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>


  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
</body>
</html>
