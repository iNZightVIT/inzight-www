      <div class="push"></div>
    </div>

    <div class="footer">
      <div class="footer-content">
        <div class="copyright">
          <span>
            &copy; Copyright 2015 iNZight | All Rights Reserved <br>
          </span>
          <span>
            Website developed by <a href="mailto:tom.elliott@auckland.ac.nz?subject=[iNZight Website]">Tom Elliott</a>
          </span>
        </div>

        <div class="thanks">
          <div>
            <a href="http://new.censusatschool.org.nz/" id="-logo">
              <img src="<?php echo $rel; ?>img/census_logo.png">
            </a>
            <a href="http://www.stats.govt.nz/" id="CaS-logo">
              <img src="<?php echo $rel; ?>img/stats_nz.png">
            </a>
          </div>
          <div>
            <a href="http://www.minedu.govt.nz/" id="MEd-logo">
              <img src="<?php echo $rel; ?>img/minedu_logo.png">
            </a>
            <a href="https://www.auckland.ac.nz/" id="UoA-logo">
              <img src="<?php echo $rel; ?>img/uoa_logo.png">
            </a>
          </div>
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
    </script>
  </body>
</html>
