<?php
  $inzight_text = "<span class='col1'>i</span><span class='col2'>nz</span><span class='col1'>ight</span>";

  $wild_http = "https://www.stat.auckland.ac.nz/~wild/";

  $navitems = array(
    //'Home' => 'index.php',
    //'Explore' => 'explore.php',
    'Get iNZight' => array(
      'default' => 'getinzight.php',
      'Desktop' => 'getinzight.php',
      //'Windows' => 'win.php',
      //'Macintosh' => 'mac.php',
      'Linux/R Users' => 'https://www.stat.auckland.ac.nz/~wild/iNZight/ruser.php',
      'Tablets' => 'http://docker.stat.auckland.ac.nz/',
      'Data' => 'data.php'
    ),
    // 'Get Started' => array(
    //   'default' => 'basics.php',
    //   'Basics' => 'basics.php',
    //   'Manipulate Variables' => 'manip_vars.php',
    //   'Plot Options' => 'plot_buttons.php',
    //   'Row Operations' => 'row_operations.php'
    // ),
    // 'Add-on Modules' => array(
    //   'default' => 'advanced.php',
    //   '3D Plot' => '3d_plot.php',
    //   'Time Series' => 'time_series.php',
    //   'Model Fitting' => 'model_fitting.php',
    //   'Maps' => 'maps.php'
    // ),

    // Alternative option:
    'User Guides' => array(
      'default' => 'user_guides/',
      'The Basics' => 'basics/',
      'Interface' => 'interface/',
      'Plot Options' => 'plot_options/',
      'Manipulate Variables' => 'manipulate_variables/',
      'Data Options' => 'data_options/',       // row ops, reshape, ...
      'Additional Modules' => 'add_ons/'
    ),
    'Support' => array(
      'default' => 'support/',
      //'Known Issues' => 'issues.php',
      'FAQ' => 'faq/',
      'Email Lists' => 'email_lists/',
      'Version History' => 'changelog/',
      'Contact Us' => 'contact/',
      //'Development' => 'development.php'
    ),
    'About' => array(
      'default' => 'about/',
      'Team' => 'team/',
      'Development' => 'development/',
      'Privacy' => 'privacy/'
    ),
    'Related' => array(
      'default' => 'related.php',
      'VIT' => $wild_http . 'VIT/index.html',
      'BootAnim' => $wild_http . 'BootAnim/index.html',
      'StatThink' => $wild_http . 'StatThink/index.html',
      'WPRH' => $wild_http . 'WPRH/index.html',
      'Chris Wild' => $wild_http . 'index.html',
      'Talks' => $wild_http . 'talks/index.html'
    )
  );

  function writeList($items, $rel, $prefix = "") {
    echo "<ul>";

    foreach($items as $text=>$link) {
      if ($text != 'default') {
        echo '<li>';
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
          writeList($link, $rel, $prefix);
        } else {
          if (preg_match("/^http/", $link)) {
            $rel = "";
          }
          echo "<a href='$rel$prefix$link'>$text</a>";
        }
        echo '</li>';
      }
    }
    echo "</ul>";
  }

?>
