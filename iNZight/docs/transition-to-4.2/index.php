<?php

$rel = "../../";
require_once($rel . 'assets/includes/1-top_matter.php');
require_once($rel . 'assets/includes/2-header.php');

?>

<div class="container">
  <h3>Transitioning to iNZight 4.2</h3>

  <p>
      iNZight 4.2 includes some significant changes to the user interface,
      so here we have provided a basic guide to transitioning to the new version.
  </p>

  <img src="inzight-ui.png" width=700 />

  <hr />

  <h4>Switching between variable and spreadsheet view</h4>

  <p>
    When you load iNZight, you'll notice a more concise interface in the top-left corner of the window.
    This has allowed us to add some new features, at the cost of removing the great big "View Variables"
    and "View Dataset" buttons and replacing them with smaller icons. In the image below, the two buttons
    are highlighted:
  </p>

  <img src="inzight-switcher-buttons.png" width=400 />

  <p>
    In addition, there are some new buttons also. These allow you to show a summary of the dataset,
    and search for variables within the dataset so you can quickly find what you need:
  </p>

  <img src="inzight-new-buttons.png" width=400 />

  <h4>Pagination of the spreadsheet</h4>

  <p>
    Another big change is that iNZight no longer displays the entire dataset. This only worked for
    small datasets, and did add to the initial load time of the interface. By only displaying a subset
    of columns/rows, iNZight can now display row-level data for all datasets, no matter how large!
    The controls for pagining through rows is at the bottom of the spreadsheet,
    and&mdash;where applicable&mdash;column controls are just above the spreadsheet:
  </p>

  <img src="inzight-pagination.png" width=400 />

  <h4>Window button changes</h4>

  <p>
    In the new version of iNZight, all of the module windows (those that pop-up for additional user input)
    have been rebuilt to ensure that the buttons (OK / Cancel) are in a consistent order
    and look the same across windows. This should make using iNZight a lot more intuitive,
    but you'll have to be a little careful if there are some actions you've used quite frequently
    in case the Ok and Cancel buttons have switched places! Note: we have used the operating system default
    order for these buttons, so the main action ("OK") button is on the left on Windows, and on the
    right on Linux.
  </p>

  <img src="inzight-window-buttons.png" width=600 />

  <p>
    Some other windows have been changed slightly in their layout, but these are obvious and should
    now affect usage (for example, in some windows where two previews are shown, these are now side-by-side
    instead of one ontop of the other).
  </p>

</div>

<?php
require_once($rel . 'assets/includes/3-bottom_matter.php');
?>
