<?php
$rel = "../";
require_once($rel . 'assets/includes/1-top_matter.php');
require_once($rel . 'assets/includes/2-header.php');
?>

<div class="container--beta">
  <h2>iNZight Beta</h2>

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

  <div class="beta-panel">
    <h3>Changes</h3>

    <ul>
      <li>
        <b>Add to Plot:</b>
        Completely redesigned to make customising plots
        easier, and more features including
        better <em>color palettes</em>,
        <em>plotting symbol</em> control,
        <em>color coding of hexbins</em>, and loads more!
      </li>

      <li>
        <b>Plot Toolbar:</b>
        We've modified this to make it reactive to modules,
        for example Maps, and converted the Add to Plot,
        Remove Additions, and Inference Information buttons
        from text to icons, so the entire toolbar can be
        displayed vertically in <b>Dual-window mode</b>.
      </li>

      <li>
        <b>Subset Play Timer:</b>
        Not only can you now stop playing through subsets,
        you can also adjust the delay by clicking the clock
        icon after selecting a subsetting variable.
      </li>

     <li>
       <b>Improved Plot Saving:</b>
       The 'Save Plot' interface (accessed through either the Plot Toolbar or the Plot menu)
       has been rewritten, and should now give you better looking saved plots,
       as well as make the process easier.
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
        Especially useful on Windows, where the graphics device used
        within iNZight is slower than the alternative,
        you can switch iNZight to dual-window mode and have the control
        panel separate from the graphics device
        (the same as in VIT, if you're familiar with that).
      </li>
      <li>
        <b>Maps Module:</b>
        Got geographical data? Now you can visualise it!
        If you have coordinate data, we can plot the points on a map,
        and code colour, size, and opacity using other variables
        in the dataset.
        Alternatively, if you have country data (such as Gap Minder),
        you can colour countries by their values of other variables.
        <b>Note:</b> this is still in beta, so we only provide a world map;
        however, we hope to add new maps in future, such as New Zealand
        regions and US states.
      </li>

      <li>
        <b>Example Datasets:</b>
        We've done away with the Data folder contained with iNZight,
        and instead made it easy to load example datasets right from
        within iNZight! There's not many yet, but we will be adding
        more when the release version is ready.
      </li>
    </ul>
  </div>

  <div style="clear:both;"></div>
  <h2>Windows and Mac Installers</h2>

  <p class="lead">
    Not only is iNZight getting some big updates, but we've
    created installers for Windows and Mac to make download and
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
    <b>Proper installation (and Windows uninstaller):</b>
    The Windows and Mac installers will install iNZight
    onto your machine, so everything should run smoothly without
    permissions and access errors.
    On Windows, desktop shortcuts will be created automatically.
    In both cases, an iNZightVIT folder will be placed in your Documents
    so iNZight has a place to save data sets and plots,
    as well as add on modules (such as Maps).
    The Windows version comes with an uninstaller, so you can
    remove it easily. A Mac uninstaller will be coming if we can figure out
    how to do so safely.
  </p>

  <h3>Download Now!</h3>
  <p class="center" style="margin-bottom: 50px">
    <a class='button' href="<?php echo $rel.'downloads/iNZightVIT-installer_latest.exe'; ?>">
      Windows Installer
    </a>
    or
    <a class='button' href="<?php echo $rel.'downloads/iNZightVIT-installer_latest.dmg'; ?>">
      Mac Installer
    </a>
  </p>

  <p>
    In both cases, iNZightVIT will be installed to <code>C:\Program Files\iNZightVIT</code> (on Windows,
    by default, although it can be changed) and <code>Applications/iNZightVIT</code> on Mac.
  </p>

  <p>
    If you prefer the old way of doing things, 
    <a href="<?php echo $rel.'downloads/iNZightVIT-win.zip'; ?>">you can get the Windows ZIP file here</a>.
  </p>

  <h4>Uninstalling</h4>

  <p>
   If you decide you no longer want iNZight, on Windows just find the iNZightVIT folder in your Start menu, 
   and click "Uninstall". This will completely remove iNZight from the install location, although
   the iNZightVIT folder in your Documents might need to be manually deleted, in case you have saved data
   or plots there.
  </p>

  <p>
    On Mac, it's a little more complicated. You can simply delete the iNZightVIT folder from Applications,
    but this will still leave R, GTK and XQuartz on your machine. However, in the event you need these for
    something else, I'm reluctant to write a script that deletes everything.
    <a href="mailto:inzight_supports@stat.auckland.ac.nz">Email me</a> if you would like to completely 
    remove everything if you're sure you don't need GTK, XQuartz or R for anything else.
  </p>

  <div style="height:30px"></div>
  <h3>Let us know what you think</h3>

  <p class="lead">
    If there's anything you like, or don't, or maybe
    something we've missing that you think would be useful,
    let us know by emailing
    <a href="mailto:inzight_support@stat.auckland.ac.nz?subject=iNZight Beta">
      inzight_support@stat.auckland.ac.nz
    </a>.
  </p>

  <p>
    <b>Bugs:</b>
    This is a beta release. Expect to find bugs. Let us know about them too.
  </p>
</div>


<?php
require_once($rel.'assets/includes/3-bottom_matter.php');
?>
