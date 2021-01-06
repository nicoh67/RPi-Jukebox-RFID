<div class="col-md-12 col-xs-12">

    <?php

    if(isset($_POST['AudioOutput']) && $_POST['AudioOutput']) {
        $audio_outputs = getAudioOutputs();

        $audio_output = $audio_outputs[$_POST['AudioOutput']];

        $change_output = true;
        // If it is bluetooth device, we try to connect
        if(isset($audio_output['device'], $audio_output['device']['DEV'], $audio_output['device']['protocol']) && $audio_output['device']['DEV'] && $audio_output['device']['protocol']=='bluealsa') {
            $ret_connection = exec('sudo bluetoothctl -- connect '. $audio_output['device']['DEV'], $ret_exec);
            echo('<div class="alert alert-info">'. implode(" - ", $ret_exec) .'</div>');
            if(strstr($ret_connection, "Connection successful")===false)
                $change_output = false;
        }

        if($change_output) {
            $cmd = ["mpc enable ". $audio_output['output']];
            foreach($audio_outputs as $ao) {
                if($ao['output'] != $audio_output['output'])
                $cmd[] = "mpc disable ". $ao['output'];
            }
            exec(implode(' && ', $cmd), $ret_exec);
        }

    }

    ?>

    <form name='AudioOutput' method='post' action='<?php print $_SERVER['PHP_SELF']; ?>'>
        <div class="input-group my-group">
        <?php
        $audio_outputs = getAudioOutputs();
        ?>
        <select id="AudioOutput" name="AudioOutput" class="selectpicker form-control" size="<?php echo count($audio_outputs) ?>">
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
