<?php
 $url = "https://theflirtmethod.com?".$_SERVER['QUERY_STRING'];
 header("Location: $url");
exit();
?>
