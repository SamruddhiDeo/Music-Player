$songs = array(
        array( "songName" => "Aao Milo Chalo", "filePath" => "songs/Aao Milo Chalo.mp3", "cover" => "covers/Aao Milo Chalo cover.jpg", "duration" => "5:28" ),
        array( "songName" => "Apna Har Din", "filePath" => "songs/Apna Har Din.mp3", "cover" => "covers/Apna Har Din cover.jpg", "duration" => "4:27" ),
        array( "songName" => "Deewangi Deewangi", "filePath" => "songs/Deewangi Deewangi.mp3", "cover" => "covers/Deewangi Deewangi cover.jpg", "duration" => "5:57" ),
        array( "songName" => "Gallan Goodiyaan", "filePath" => "songs/Gallan Goodiyaan.mp3", "cover" => "covers/Gallan Goodiyaan cover.jpg", "duration" => "4:56" ),
        array( "songName" => "Jab Tak", "filePath" => "songs/Jab Tak.mp3", "cover" => "covers/Jab Tak cover.jpg", "duration" => "2:54" ),
        array( "songName" => "Kaise Hua", "filePath" => "songs/Kaise Hua.mp3", "cover" => "covers/Kaise Hua cover.jpg", "duration" => "3:54" ),
        array( "songName" => "Kesariya", "filePath" => "songs/Kesariya.mp3", "cover" => "covers/Kesariya cover.jpg", "duration" => "4:28" ),
        array( "songName" => "Love you Zindagi", "filePath" => "songs/Love you Zindagi.mp3", "cover" => "covers/Love you Zindagi cover.jpg", "duration" => "3:52" ),
        array( "songName" => "Mast Magan", "filePath" => "songs/Mast Magan.mp3", "cover" => "covers/Mast Magan cover.jpg", "duration" => "4:40" ),
        array( "songName" => "Raataan Lambiyan", "filePath" => "songs/Raataan Lambiyan.mp3", "cover" => "covers/Raataan Lambiyan cover.jpg", "duration" => "3:50" ),
        array( "songName" => "Tum Hi Ho Bandhu", "filePath" => "songs/Tum Hi Ho Bandhu.mp3", "cover" => "covers/Tum Hi Ho Bandhu cover.jpg", "duration" => "4:42" ),
        array( "songName" => "Tum Se Hi", "filePath" => "songs/Tum Se Hi.mp3", "cover" => "covers/Tum Se Hi cover.jpg", "duration" => "5:23" ),
        array( "songName" => "Yeh Ishq Hai", "filePath" => "songs/Yeh Ishq Hai.mp3", "cover" => "covers/Yeh Ishq Hai cover.jpg", "duration" => "4:43" ),
    );
    
    for ($x = 0; $x < count($songs)-1; $x++) {
        $sname = $songs[$x]["songName"];
        $spath = $songs[$x]["filePath"];
        $scover = $songs[$x]["cover"];
        $sdura = $songs[$x]["duration"];
    $sql = "INSERT INTO `songs` (`songname`, `filepath`, `cover`, `duration`) VALUES ('$sname', '$spath', '$scover', '$sdura');";
    $result = mysqli_query($conn,$sql);
   
  }
echo var_dump($songs[0]["songName"]);
