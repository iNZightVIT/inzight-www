<?php
  $inzight_text = "<span class='col1'>i</span><span class='col2'>nz</span><span class='col1'>ight</span>";

  $wild_http = "https://www.stat.auckland.ac.nz/~wild/";

  $navitems = array(
    'Home' => 'index.html',
    'Download' => array(
      'default' => 'download.html',
      'Windows' => 'win.html',
      'Macintosh' => 'mac.html',
      'Linux/R Users' => 'ruser.html',
      'Data' => 'data.html'
    ),
    'Get Started' => array(
      'default' => 'basics.html',
      'Basics' => 'basics.html',
      'Manipulate Variables' => 'manip_vars.html',
      'Plot Options' => 'plot_buttons.html',
      'Row Operations' => 'row_operations.html'
    ),
    'Advanced' => 'advanced.html',
    'Support' => array(
      'default' => 'support.html',
      'Known Issues' => 'issues.html',
      'FAQ' => 'faq.html',
      'Email Lists' => 'email_lists.html',
      'Change History' => 'changelog.html',
      'Contact Support' => 'contact.html'
    ),
    'Related' => array(
      'default' => 'related.html',
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
