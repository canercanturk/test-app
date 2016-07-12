<?php
  $kisiler=array();
  if(file_exists('kisiler.dat')){
    $kisilerDat=file_get_contents('kisiler.dat');
    if (trim($kisilerDat)) {
      $kisilerDat=explode("\n",trim($kisilerDat));
    foreach ($kisilerDat as $kisiLine) {
      $kisiLine=explode(",",$kisiLine);
      $kisi=array(
        "adi"=>$kisiLine[0],
        "soyadi"=>$kisiLine[1],
        "yas"=>$kisiLine[2],
        "hobileri"=>$kisiLine[3]
      );
      $kisiler[]=$kisi;
    }
  }
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
    </title>
  </head>
  <body>
    <h3>Kişiler</h3>
    <hr size="2"/>
    <p>
      <a href="ekle.php">Yeni kişi</a>
    </p>
    <br/>
    <table border="1" width="50%">
      <thead>
        <tr>
          <th>ADI</th>
          <th>SOYADI</th>
          <th>YAŞ</th>
          <th>Hobiler</th>
          <th>Kişiyi Düzenle</th>
          <th>Kişiyi Sil</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($kisiler as $key => $kisi) { ?>
          <tr>
            <td><a href="goster.php?index=<?php echo $key; ?>"><?php echo $kisi["adi"];?></a></td>
            <td><?php echo $kisi["soyadi"];?></td>
            <td><?php echo $kisi["yas"];?></td>
            <td><?php echo $kisi["hobileri"];?></td>
            <td><a href="ekle.php?index=<?php echo $key;  ?>">Düzenle</a></td>
            <td>
              <a href="index.php" >Sil</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="6">Toplam <?php echo count($kisiler); ?> kayıt bulundu</td>
        </tr>

      </tfoot>
    </table>

  </body>
</html>
