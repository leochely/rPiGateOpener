<!DOCTYPE html>
  <?php
    if(isset($_POST['run'])){
		$gate = fopen("gate.txt", "r") or die("Unable to open file!");
		$state = fread($gate, filesize("gate.txt"));
		fclose($gate);
		
		$gate = fopen("gate.txt", "w") or die("Unable to open file!");
		if($state == 'opened'){
			fwrite($gate,'closed');
		}
		else{
			fwrite($gate,'opened');
		}
		fclose($gate);
  }
  ?>

  <form action="" method="post">
    Test
    <input type="submit" name='run' value=<?php
    $gate = fopen("gate.txt", "r") or die("Unable to open file!");
    if(fread($gate,filesize("gate.txt")) == 'opened'){
      echo '\'close\'';
    }
    else{
      echo '\'open\'';
    }
	fclose($gate);
    ?> />
  </form>
</html>
