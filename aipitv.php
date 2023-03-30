<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script language="javascript">
    window.location = "https://aipitv.my.id";
  </script>
</head>
<body>
#EXTM3U url-tvg="https://iptv-org.github.io/epg/guides/id-id/mncvision.id.epg.xml.gz" refresh="3600"

<?php
  $browser = $_SERVER['HTTP_USER_AGENT'];
  if ($browser =! 'gbscell_aipitv_appd') {
      echo 'AKU ANJING';
      //echo var_export(unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR'])));
    exit();
    }
 ?>
  
<script type="text/javascript">

#EXTINF:-1 group-title="INFO GANGGUAN",TOLONG DIBACA
#https://aipitv.my.id/vod/gangguan_sport.mp4

#EXTINF:-1 group-title="HATI-HATI DENGAN PENJUAL ILEGAL",TOLONG DIBACA
#https://aipitv.my.id/vod/pencuriapk.mp4

#EXTINF:-1 tvg-logo="https://aipitv.my.id/tvlogo/live/defaultlogo.png" group-title="DISCLAIMER & INFO",DISCLAIMER
https://aipitv.my.id/vod/disclaimer.mp4

#EXTINF:-1 tvg-logo="https://aipitv.my.id/tvlogo/live/defaultlogo.png" group-title="DISCLAIMER & INFO",FAQ
https://aipitv.my.id/vod/faq.mp4

#EXTINF:-1 tvg-logo="https://aipitv.my.id/tvlogo/live/defaultlogo.png" group-title="DISCLAIMER & INFO",ORANG BAIK
#https://aipitv.my.id/vod/orangbaik.mp4

#EXTINF:-1 tvg-logo="https://aipitv.my.id/tvlogo/live/defaultlogo.png" group-title="DISCLAIMER & INFO",DONASI
https://aipitv.my.id/vod/donasi.mp4

#EXTINF:-1 tvg-logo="https://aipitv.my.id/tvlogo/live/defaultlogo.png" group-title="DISCLAIMER & INFO",TENTANG
https://aipitv.my.id/vod/about352.mp4
  
</script>
</body>
</html>
