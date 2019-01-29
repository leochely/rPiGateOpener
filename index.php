<!DOCTYPE html>
  <?php
    if(isset($_POST['run'])){
      shell_exec("python3 helloworld.py");
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
    ?> />
  </form>
</html>
