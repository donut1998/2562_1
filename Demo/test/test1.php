<?php
    // $url="https://miningproject-36b73.firebaseio.com/api.json?fbclid=IwAR3gZUR_uhp6amov6UyepHadLGV_plG2i5tAiBtd1T15aHziPLnnhE8fG0k";
    // $ch = curl_init();
    // curl_setopt($ch, CURLOPT_URL, $url);
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // curl_setopt($ch, CURLOPT_URL, $url);
    // $content = curl_exec($ch);
    // $data = json_decode($content); //json string ต้อง decode ก่อน
    // //print_r($data);
    // curl_close($ch);  
    // //$last_lat = ($data -> truck_1 -> last_pos -> lat);
    // // $last_long = ($data -> truck_1 -> last_pos -> long);
    // // $last_time_update = ($data -> truck_1 -> last_pos -> timestamp);
    


    
    // print_r($last_lat);

    $json = file_get_contents('https://miningproject-36b73.firebaseio.com/api.json?fbclid=IwAR3gZUR_uhp6amov6UyepHadLGV_plG2i5tAiBtd1T15aHziPLnnhE8fG0k');
    $obj = json_decode($json);
    print_r($obj);
    // print_r($obj -> truck_1 -> pos_logs -> {'2019'} -> {'09'} -> {'22'} -> {'08:43:55'} -> {'lat'});
?>