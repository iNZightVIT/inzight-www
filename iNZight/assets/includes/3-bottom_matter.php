      <div class="push"></div>
    </div>

    <hr>
    <div class="container footer">
      <div class="row">
        <div class="col-md-4 footer-content">
          <span>
            &copy; Copyright 2014&ndash;<?php echo date("Y");?> iNZight | All Rights Reserved <br>
          </span>
          <span>
            Website developed by <a href="https://www.stat.auckland.ac.nz/~tell029/">Tom Elliott</a>
          </span>
        </div>

        <div class="col-md-8 thanks">
          <a href="https://www.auckland.ac.nz/" id="UoA-logo">
            <img src="<?php echo $rel; ?>img/uoa_logo.png">
          </a>
          <a href="http://www.stats.govt.nz/" id="CaS-logo">
            <img src="<?php echo $rel; ?>img/stats_nz.png">
          </a>
          <a href="http://www.minedu.govt.nz/" id="MEd-logo">
            <img src="<?php echo $rel; ?>img/minedu_logo.png">
          </a>
        </div>
      </div>
    </div>


    <script src="<?php echo $rel; ?>js/navigation.js"></script>
    <script type='text/javascript' language="javascript">
    $("#hideMessage").click(function(){
      $.post("<?php echo $rel; ?>hideMessage.php");
      $(".top_message").slideUp();
    });

    $("#hideSupportmessage").click(function(){
      $.post("<?php echo $rel; ?>hideSupport.php");
      $(".support_message").slideUp();
    });

    // some versioning stuff ...
    //
    var url = "<?php echo ($_SERVER['HTTP_HOST'] == "localhost:8181" ? "" : "https://www.stat.auckland.ac.nz/~wild/iNZight") . "/_setversion.php"; ?>";

    $("#useDesktop").on("click", function(e) {
      e.preventDefault();
      $.post(url, {"version": "desktop"},
        function(r) {
          // console.log(r);
          location.reload();
        });
    });
    $("#useLite").on("click", function(e) {
      e.preventDefault();
      $.post(url,
        {"version": "lite"},
        function(r) {
          // console.log(r);
          location.reload();
        });
    });
    </script>
  </body>
</html>
