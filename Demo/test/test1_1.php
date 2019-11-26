<?php
    $url="https://miningproject-36b73.firebaseio.com/api.json?fbclid=IwAR3gZUR_uhp6amov6UyepHadLGV_plG2i5tAiBtd1T15aHziPLnnhE8fG0k";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    $content = curl_exec($ch);
    curl_close($ch);
    echo $content.truck_1;
?>