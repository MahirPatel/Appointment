<?php
    // For Log & Debug Purpose Start
    if(!function_exists('pr')){
        function pr($data,$flow=0,$ip=""){
            if(!empty($ip)){
                if($_SERVER['REMOTE_ADDR'] == $ip){
                    echo '<pre>';
                    print_r($data);
                    echo '</pre>';
                    if($flow == 1){
                        exit;   
                    }
                }
            }else{
                echo '<pre>';
                print_r($data);
                echo '</pre>';
                if($flow == 1){
                    exit;   
                }
            }
        }
    }
    // For Log & Debug Purpose End
?>