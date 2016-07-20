<?php
  $itemler=array("kapadokya-1.jpg","kapadokya-2.jpg","kapadokya-3.jpg","kapadokya-4.jpg");
  if (isset($_GET['index']))
    $index = $_GET['index'];
  else
    $index = 1;

    $ileri=$index+1;
    if ($ileri > $ileri%count($itemler)) {
      $ileri=1;
  }
  $geri=$index-1;
    if ($geri < $itemler%count($itemler)) {
    $geri=4;
  }
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <h1>HOŞ GELDİNİZ</h1>
   <hr color="green"/>
   <body>
     <p align="center">
       <img src="<?php echo $itemler[$index-1]; ?>" alt="" />
     </p>
     <p align="right">
        <a href="item.php?index=<?php echo $ileri; ?>">İleri</a> <br/>
     </p>
     <p align="left">
       <a href="item.php?index=<?php echo $geri; ?>">Geri</a>
     </p>
   </body>
 </html>
