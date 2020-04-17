<?php
  $inzight_text = "<span class='col1'>i</span><span class='col2'>nz</span><span class='col1'>ight</span>";

  $wild_http = "https://www.stat.auckland.ac.nz/~wild/";

  $navitems = array(
    'Get iNZight' => array(
      'default' => 'getinzight.php',
      'Desktop' => 'getinzight.php',
      // 'Linux/R Users' => 'getinzight.php?os=Linux',
      'Tablets' => 'http://docker.stat.auckland.ac.nz/spawn/?application=lite',
      'Data' => 'data.php'
    ),
    'User Guides' => array(
      'default' => 'user_guides/',
      'The Basics' => 'basics/',
      'Interface' => 'interface/',
      'File Menu' => 'file_options/',
      'Dataset Menu' => 'data_options/',
      'Variables Menu' => 'variables/',
      'Plot Menu' => 'plot_options/',
      'Advanced (Modules) Menu' => 'add_ons/',
      'Extra Features' => 'advanced/'
    ),
    'Support' => array(
      'default' => 'support/',
      'FAQ' => 'faq/',
      'Email Lists' => 'email_lists/',
      'Newsletters' => '../newsletters/index.php',
      'Version History' => 'changelog/',
      'Contact Us' => 'contact/'
    ),
    'About' => array(
      'default' => 'about/',
      'Team' => 'team/',
      'Development' => 'development/'
      // 'Privacy' => 'privacy/'
    ),
    'Related' => array(
      'default' => 'related/',
      'VIT' => $wild_http . 'VIT/index.html',
      'Wild About Statistics Channel' => $wild_http . 'wildaboutstatistics/index.html',
      'StatThink' => $wild_http . 'StatThink/index.html',
      'BootAnim' => $wild_http . 'BootAnim/index.html',
      'WPRH' => $wild_http . 'WPRH/index.html',
      'Chris Wild' => $wild_http . 'index.html',
      'Talks' => $wild_http . 'talks/index.html'
    )
  );

  function writeList($items, $rel, $prefix = "", $class="nav navbar-nav") {
    echo "<ul class='" . $class . "'>";

    foreach($items as $text=>$link) {
      if ($text != 'default') {
        echo '<li class="default dropdown">';
        if (is_array($link)) {
          $prefix = "";
          if (array_key_exists('default', $link)) {
            $linkdef = $link['default'];
            echo "<a href='$rel$prefix$linkdef' class='defaultLink'>$text</a>";

            $parts = pathinfo($linkdef);
            if (!array_key_exists("extension", $parts)) {
              $prefix = $linkdef;
            }
          } else {
            echo $text;
          }
          writeList($link, $rel, $prefix, $class = "dropdown-menu");
        } else {
          if (preg_match("/^http/", $link)) {
		    $pre = "";
          } else {
		    $pre = $rel.$prefix;
		  }

          echo "<a href='$pre$link'>$text</a>";
        }
        echo '</li>';
      }
    }
    echo "</ul>";
  }

?>
