<header id="page_header">
  <hgroup class="container_16">
    <img src="img/zastra-logo.jpg" />
    <nav>
      <?php
        $links = array( 
          "home" => array("name" => "Home", "link" => "index.php"),
          "what_is_zastra" => array("name" => "What is Zastra", "link" => "index.php"),
          "programs" => array("name" => "Programs Offered", "link" => "program.php"),
          "team" => array("name" => "The Team", "link" => "team.php") 
        );
      ?>
      <ul>
        <?php
          foreach ($links as $i => $value) {
            print("<li" . ($selected == $i ? " class=\"selected\"" : "") ."><a href=\"" . $value["link"] . "\">" . $value["name"] . "</a></li>");
          }
        ?>
      </ul>
    </nav>
  </hgroup>
</header>