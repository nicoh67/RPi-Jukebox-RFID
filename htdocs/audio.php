<?php

include("inc.header.php");

/*******************************************
* START HTML
*******************************************/

html_bootstrap3_createHeader("en","Audio | Phoniebox",$conf['base_url']);

?>
<body>
  <div class="container">

<?php
include("inc.navigation.php");

if($debug == "true") {
    print "<pre>";
    print "_POST:\n";
    print_r($_POST);
    print "</pre>";
}

?>


<div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title"><a name="audioOutputs"></a>
        <i class='mdi mdi-music-note'></i> <?php print $lang['globalAudioOutputs']; ?>
      </h4>
    </div><!-- /.panel-heading -->

    <div class="panel-body">
      <div class="col-md-12 col-xs-12">
        
        <form name='AudioOutput' method='post' action='<?php print $_SERVER['PHP_SELF']; ?>'>
          <div class="input-group my-group">
            <?php
            $audio_outputs = getAudioOutputs();
            ?>
            <select id="AudioOutput" name="AudioOutput" class="selectpicker form-control" size=5 multiple>
            <?php
              foreach($audio_outputs as $ao) {
                echo('<option'. ($ao['enabled'] ? ' selected' : '') .' device-dev="'. (isset($ao['device']['DEV']) ? $ao['device']['DEV'] : "") .'" value="'. $ao['output'] .'"> '. $ao['output'] .' - '. $ao['name'] .' '. ($ao['device']['raw'] ? " &nbsp; &nbsp; &nbsp; &nbsp; (". $ao['device']['raw'] .")" : "") .'</option>');
              }
            ?>
            </select> 
            <span class="input-group-btn">
              <input type='submit' class="btn btn-default" name='submit' value='<?php print $lang['globalSet']; ?>'/>
            </span>
          </div>
        </form>
      </div>


    </div><!-- /.panel-body -->
  </div><!-- /.panel -->
</div><!-- /.panel-group -->


<div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title"><a name="volume"></a>
         <i class='mdi mdi-volume-high'></i> <?php print $lang['globalVolumeSettings']; ?>
      </h4>
    </div><!-- /.panel-heading -->

    <div class="panel-body">
      <div class="row">
<?php
include("inc.setVolume.php");
include("inc.setMaxVolume.php");
include("inc.setVolumeStep.php");
include("inc.setStartupVolume.php");
?>
      </div><!-- / .row -->
    </div><!-- /.panel-body -->

  </div><!-- /.panel -->
</div><!-- /.panel-group -->

</div><!-- /.container -->

</body>
<script src="js/jukebox.js">
</script>
</html>
