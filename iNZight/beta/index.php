<?php
$rel = "../";
require_once($rel . 'assets/includes/1-top_matter.php');
require_once($rel . 'assets/includes/2-header.php');
?>

<div class="container--beta">
  <h2>iNZight 3.0 Beta</h2>

  <p class="lead">
    Get an advanced preview of the latest version of <b>iNZight 3.0</b>,
    which includes the new <b>maps module</b>,  a
    vastly improved <b>Add to Plot</b> interface,
    and many other great new features!
  </p>

  <p>
    We've been developing iNZight a lot since the last update,
    and we think it's time to let you tell us what you think.
    In most places,
    we've left what you know alone and simply added more features around it;
    in others, we've completely redesigned them to make them
    more intuitive and easier to use.
  </p>

  <p>
    The most obvious change we've made is the break up of iNZight and VIT.
    Now, instead of a single "START iNZightVIT" icon,
    you get two launch icons&mdash;one for iNZight, and the other for VIT.
    The advantage: <b>iNZight loads so much faster!</b>
  </p>

  <div class="beta-panel">
    <h3>Changes</h3>

    <ul>
      <li>
        <b>Add to Plot:</b>
        Completely redesigned to make customising plots
        easier, along more features including
        choice of <b>color palettes</b>,
        <b>plotting symbol</b> control,
        <b>color coding of hexbins</b>, and loads more!
      </li>

      <li>
        <b>Plot Toolbar:</b>
        A slight reordering of buttons to group similar ones,
        and conversion of the Add to Plot,
        Remove Additions, and Inference Information buttons
        into icons.
        It's also now <b>responsive to the active module</b> (such as Maps).
      </li>

      <li>
        <b>Subset Play Timer:</b>
        Not only can you stop playing through subsets,
        you can also <b>adjust the play speed</b> by clicking the clock
        icon.
      </li>

     <li>
       <b>Improved Plot Saving:</b>
       Saving plots has been made easier, and should give you better looking
       JPEG, GIF, or PDF output.
       The default save location is now the <code>Saved Plots</code>
       folder in Documents/iNZightVIT.
     </li>

      <li>
        <b>Multiple Response Module:</b>
        It's almost a new feature, because the previous version
        was not intuitive at all! The updated version makes
        analysis of multiple response data easy and as intuitive
        as the rest of iNZight.
      </li>
    </ul>
  </div>


  <div class="beta-panel">
    <h3>New Features</h3>

    <ul>
      <li>
        <b>Dual-window Mode:</b>
        Especially useful on Windows, where iNZight's built-in
        graphics device can "flicker" between plots,
        you can now switch iNZight to dual-window mode and have the
        <b>control panel separate from the graphics device</b>.
      </li>
      <li>
        <b>Maps Module:</b>
        Got geographical data? Now you can plot it!
        If your data has <b>co-ordinates</b>, they can be drawn onto a map,
        and <b>colour, size, and opacity</b> coded
        using other variables in the dataset.
        If you've got country names associated with observations
        (such as the Gap Minder data), a world map can be <b>coloured
        according to values</b> in the data.
        We'll be bringing more flexibility to this in the future.
      </li>

      <li>
        <b>Example Datasets:</b>
        We've done away with the Data folder contained with iNZight,
        and instead made it easy to load example datasets right from
        within iNZight! There's not many yet, but we will be adding
        more when the release version is ready.
      </li>

      <li>
        <b>Switch Variables:</b>
        Click the down arrow to the right of a variable to switch it with the variable below.
      </li>
    </ul>
  </div>

  <div style="clear:both;"></div>
  <h2>Installer</h2>

  <p class="lead">
    Not only is iNZight getting some big updates, but we've
    created an installer for Windows to make download and
    installation easy.
  </p>

  <p>
    <b>No more dealing with ZIP files!</b>
    Many users were having trouble with ZIP files, mainly because
    in Windows 8 and 10, you can open a ZIP archive without extracting it.
    But iNZight can't be run without extracting it first, so users
    were getting unhelpful error messages.
  </p>

  <p>
    <b>Full installation:</b>
    The Windows installer will install iNZight
    onto your machine, so everything should run smoothly without
    permissions and access errors.
    Desktop shortcuts will be created automatically.
    In both cases, an iNZightVIT folder will be placed in your Documents
    so iNZight has a place to save data sets and plots,
    as well as a place to install add-on modules (such as Maps).
  </p>

  <h3>Download Now!</h3>
  <p class="center" style="margin-bottom: 50px">
    <a class='button' href="<?php echo $rel.'downloads/iNZightVIT-installer_latest.exe'; ?>">
      Windows Installer
    </a>

  </p>

  <p>
    <b>NOTE:</b> you may get a security warning from your web browser that the publisher
    cannot be verified and could harm your computer. It's safe to ignore this, so long
    as you are downloading directly from the link above.
  </p>

  <p>
    iNZightVIT will be installed to <code>C:\Program Files\iNZightVIT</code> on Windows
    by default (although it can be changed).
  </p>

  <p>
    If you prefer the old way of doing things,
    <a href="<?php echo $rel.'downloads/iNZightVIT-win.zip'; ?>">you can get the Windows ZIP file here</a>.
  </p>

  <p>
    <b>Mac Users</b>: We're working on an R installer, but its not quite ready.
    If you have a mac and would like to test it for us, please email
    <a href="mailto:inzight_support@stat.auckland.ac.nz?subject=iNZight Beta">
      inzight_support@stat.auckland.ac.nz
    </a>.
  </p>

  <p>
    <b>R and Linux Users:</b> To install the beta version of iNZight on Linux,
    you'll need to <a href="../about/development/">download from GitHub</a>.
  </p>

  <h4>Uninstalling</h4>

  <p>
    If you decide you no longer want iNZight, on Windows just go to <b>Start</b> &gt;
    <b>iNZightVIT</b> &gt; <b>Uninstall</b>. This will completely remove iNZight from the install
    location, although the iNZightVIT folder in your Documents might need to be manually deleted, in
    case you have saved data or plots there.
  </p>
<!--
  <p>
    On Mac, it's a little more complicated. You can simply delete the iNZightVIT folder from Applications,
    but this will still leave R, GTK and XQuartz on your machine. However, in the event you need these for
    something else, I'm reluctant to write a script that deletes everything.
    <a href="mailto:inzight_supports@stat.auckland.ac.nz">Email me</a> if you would like to completely
    remove everything if you're sure you don't need GTK, XQuartz or R for anything else.
  </p>
-->
  <div style="height:30px"></div>
  <h3>Let us know what you think</h3>

  <p class="lead">
    If there's anything you like, or don't, or maybe
    something we've missed that you think would be useful,
    let us know by emailing
    <a href="mailto:inzight_support@stat.auckland.ac.nz?subject=iNZight Beta">
      inzight_support@stat.auckland.ac.nz
    </a>, or if you prefer, you can
    <a href="http://freesuggestionbox.com/pub/tartrjp">
      add an anonymous suggestion to our box
    </a>!
  </p>

  <p>
    <b>Bugs:</b>
    This is a beta release. Expect to find bugs. Let us know about them too by emailing
    <a href="mailto:inzight_support@stat.auckland.ac.nz?subject=iNZight Beta">
      inzight_support@stat.auckland.ac.nz
    </a>.
  </p>

  <div style="margin-bottom: 50px"></div>
</div>


<?php
require_once($rel.'assets/includes/3-bottom_matter.php');
?>
