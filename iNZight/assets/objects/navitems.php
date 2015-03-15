<?php
  $inzight_text = "<span class='col1'>i</span><span class='col2'>nz</span><span class='col1'>ight</span>";

  $wild_http = "https://www.stat.auckland.ac.nz/~wild/";

  $navitems = array(
    //'Home' => 'index.php',
    'Explore' => 'explore.php',
    'Download' => array(
      'default' => 'download.php',
      'Windows' => 'win.php',
      'Macintosh' => 'mac.php',
      'Linux/R Users' => 'ruser.php',
      'Data' => 'data.php'
    ),
    'Get Started' => array(
      'default' => 'basics.php',
      'Basics' => 'basics.php',
      'Manipulate Variables' => 'manip_vars.php',
      'Plot Options' => 'plot_buttons.php',
      'Row Operations' => 'row_operations.php'
    ),
    'Advanced' => 'advanced.php',
    'Support' => array(
      'default' => 'support.php',
      'Known Issues' => 'issues.php',
      'FAQ' => 'faq.php',
      'Email Lists' => 'email_lists.php',
      'Change History' => 'changelog.php',
      'Contact Support' => 'contact.php'
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
          // if (array_key_exists('default', $link)) {
          //   $linkdef = $link['default'];
            echo "<a href='#'>$text</a>";
          // } else {
          //   echo $text;
          // }
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
