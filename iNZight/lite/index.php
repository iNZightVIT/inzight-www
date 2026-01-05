<?php
$rel = "../";
require_once($rel . 'assets/includes/1-top_matter.php');
require_once($rel . 'assets/includes/2-header.php');
require_once($rel . 'assets/functions/filesize.php');

?>
<div class="container">
  <h3>
    <img src="<?php echo $rel; ?>img/inzight-lite.svg" alt="iNZight Lite" style="height: 3em; margin: 0;">
  </h3>

  <p>
    iNZight Lite is an online, browser-based version of the Desktop application intended for Mac and Tablet users. It is powered by Shiny and uses most of the same underlying R packages as the Desktop version.
  </p>

  <p>
    Access iNZight Lite here:
    <a href="https://lite.docker.stat.auckland.ac.nz">https://lite.docker.stat.auckland.ac.nz</a>.
  </p>

  <hr />

  <div class="panel panel-default" style="margin-bottom: 20px;">
    <div class="panel-heading">
      <strong>URL Converter</strong>
    </div>
    <div class="panel-body">
      <p>
        If you have a URL for the previous iNZight Lite instance, paste it below to generate the corresponding URL for the new Lite infrastructure.
      </p>
      <div class="form-group">
        <label for="url-input">Old iNZight Lite URL:</label>
        <input type="text" class="form-control" id="url-input" placeholder="https://lite.docker.stat.auckland.ac.nz/...">
      </div>
      <div id="url-output-container" style="display: none;">
        <div class="form-group">
          <label for="url-output">New iNZight Lite URL:</label>
          <div class="input-group">
            <input type="text" class="form-control" id="url-output" readonly>
            <span class="input-group-btn">
              <button class="btn btn-primary" type="button" id="open-url-btn">Open in new tab</button>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
    // read ticker.json
    $json = file_get_contents('ticker.json');
    $ticker = json_decode($json, true);

    // loop over ticker items, filter where today is between validFrom and validTo
    foreach ($ticker as $item) {
      if (strtotime($item['validFrom']) <= time() && strtotime($item['validTo']) >= time()) {
        ?>
        <div class="panel panel-<?php echo $item['type']; ?>">
          <div class="panel-heading">
            <strong><?php echo $item['title']; ?></strong>
          </div>
          <div class="panel-body">
            <?php echo $item['message']; ?>
          </div>
        </div>
        <?php
      }
    }
  ?>
</div>

<script>
(function() {
  var urlInput = document.getElementById('url-input');
  var urlOutput = document.getElementById('url-output');
  var urlOutputContainer = document.getElementById('url-output-container');
  var openUrlBtn = document.getElementById('open-url-btn');

  function convertUrl(inputUrl) {
    if (!inputUrl || inputUrl.trim() === '') {
      urlOutputContainer.style.display = 'none';
      return;
    }

    try {
      // Parse the URL
      var url = new URL(inputUrl.trim());

      // Check if it's the old hostname
      if (url.hostname === 'lite.docker.stat.auckland.ac.nz' ||
          url.hostname === 'www.lite.docker.stat.auckland.ac.nz') {
        // Replace hostname
        url.hostname = 'lite.inzight.nz';

        // Display the converted URL
        urlOutput.value = url.toString();
        urlOutputContainer.style.display = 'block';

        // Update button to open the new URL
        openUrlBtn.onclick = function() {
          window.open(url.toString(), '_blank');
        };
      } else {
        // Not a valid old URL
        urlOutputContainer.style.display = 'none';
      }
    } catch (e) {
      // Invalid URL format
      urlOutputContainer.style.display = 'none';
    }
  }

  // Listen for input changes
  urlInput.addEventListener('input', function() {
    convertUrl(this.value);
  });

  // Also handle paste events
  urlInput.addEventListener('paste', function() {
    setTimeout(function() {
      convertUrl(urlInput.value);
    }, 10);
  });
})();
</script>

<?php
require_once($rel . 'assets/includes/3-bottom_matter.php');
?>
