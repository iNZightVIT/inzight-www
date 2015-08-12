<?php
  $user_agent     =   $_SERVER['HTTP_USER_AGENT'];

  function getOS($simple = true) {

      global $user_agent;

      $os_platform    =   "Unknown OS Platform";

      $os_array       =   array(
                              '/windows nt 10/i'      =>  array('Windows', '10'),
                              '/windows nt 6.3/i'     =>  array('Windows', '8.1'),
                              '/windows nt 6.2/i'     =>  array('Windows', '8'),
                              '/windows nt 6.1/i'     =>  array('Windows', '7'),
                              '/windows nt 6.0/i'     =>  array('Windows', 'Vista'),
                              '/windows nt 5.2/i'     =>  array('Windows', 'Server 2003/XP x64'),
                              '/windows nt 5.1/i'     =>  array('Windows', 'XP'),
                              '/windows xp/i'         =>  array('Windows', 'XP'),
                              '/windows nt 5.0/i'     =>  array('Windows', '2000'),
                              '/windows me/i'         =>  array('Windows', 'ME'),
                              '/win98/i'              =>  array('Windows', '98'),
                              '/win95/i'              =>  array('Windows', '95'),
                              '/win16/i'              =>  array('Windows', '3.11'),
							  '/macintosh|mac os x/i' =>  array('Mac', 'OS X'),
                              '/mac_powerpc/i'        =>  array('Mac', 'OS 9'),
                              '/linux/i'              =>  array('Linux'),
                              '/ubuntu/i'             =>  array('Linux', 'Ubuntu'),
                              '/iphone/i'             =>  array('iPhone'),
                              '/ipod/i'               =>  array('iPod'),
                              '/ipad/i'               =>  array('iPad'),
                              '/android/i'            =>  array('Android'),
                              '/blackberry/i'         =>  array('BlackBerry'),
                              '/webos/i'              =>  array('Mobile')
                          );

      foreach ($os_array as $regex => $value) {

          if (preg_match($regex, $user_agent)) {
            if ($simple) {
              $os_platform    =   $value[0];
            } else {
              $os_platform    =   $value;
            }
          }

      }

      return $os_platform;

  }
?>
