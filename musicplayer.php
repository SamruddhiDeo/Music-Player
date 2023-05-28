<?php 
    include 'musicpartials/_musicdbconnect.php';   

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Player</title>
    <link rel="stylesheet" href="musicstyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><h3>Music Player</h3></li>
               
     
            </ul>
        </nav>
    </header>
    <div id="mainContainer">
        <div id="songPlayContainer">
            <img id="songCover" src="covers/Aao Milo Chalo cover.jpg"></img>
            <!-- <div id="songProgress"> -->

                <div id="progressbarContainer">
                    <div id="songName">Aao Milo Chale</div>
                    <audio onclick="makeSpecificButtonPlay()" id="songAudio" autoplay controls src="songs/Aao Milo Chalo.mp3">

                    </audio>
                </div>

            <!-- </div> -->
        </div>
        <div id="songlistContainer">
            <h1>Songs</h1>
            <div id="songlist">

                <?php 
$sql = "SELECT * FROM `songs`";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
$no = 1;
if($num > 0){
  while($row = mysqli_fetch_assoc($result)){
 
      echo '
      <div id="song">
                    <div>'. $no .'</div>
                    <img class="cover" src="'. $row['cover'] .'" alt="">
                    <div>'. $row["songname"] .'</div>
                    <div>'. $row["duration"] .'</div>
                    <img src="musicimg/play.svg" alt="" class="play playbtn">
                    <div hidden class="songAudio">'. $row["filepath"] .'</div>
                </div>
                <hr>
      ';
$no++;
      }
}

?>

            </div>
        </div>
    </div>

    <footer>
        Copyrights © preserved | MyMusic
    </footer>
    <script src="musicscript.js"></script>
</body>

</html>