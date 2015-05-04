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
      'Linux/R Users' => 'source.php',
      'Tablets' => 'lite.php',
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
      'default' => 'guides.php',
      'The Basics' => 'basics.php',
      'Plot Options' => 'plot_options.php',
      'Manipulate Variables' => 'manip_vars.php',
      'Data Options' => 'data_options.php',       // row ops, reshape, ...
      'Add-on Modules' => 'addons.php'
    ),
    'Support' => array(
      'default' => 'support.php',
      //'Known Issues' => 'issues.php',
      'FAQ' => 'faq.php',
      'Email Lists' => 'email_lists.php',
      'Version History' => 'changelog.php',
      'Contact Us' => 'contact.php',
      //'Development' => 'development.php'
    ),
    'About' => array(
      'default' => 'aboutus.php',
      'Team' => 'team.php',
      'Development' => 'development.php',
      'Privacy' => 'privacy.php'
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

  function writeList($items) {
    echo "<ul>";

    foreach($items as $text=>$link) {
      if ($text != 'default') {
        echo '<li>';
        if (is_array($link)) {
          if (array_key_exists('default', $link)) {
            $linkdef = $link['default'];
            echo "<a href='$linkdef'>$text</a>";
          } else {
            echo $text;
          }
          writeList($link);
        } else {
          echo "<a href='$link'>$text</a>";
        }
        echo '</li>';
      }
    }
    echo "</ul>";
  }

?>
