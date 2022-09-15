<?php 
    require_once"music.php";

    $track=new musicPlayer("mp3/sam/tupac.mp3");
    $track->play();
    $track->setTrack('mp3/sam/Changing.mp3');
    $track->play();

   
?>