<?php

    include '../DB/db_config.php';
    
    function get_best_sellers(){

        // Def Variables
        $i = 0; $max = 0;
        
        $html = '<div class="ex" style="width: 70%; float: left; max-height: 428px; overflow-y: scroll; -webkit-overflow-scrolling: touch; overflow-x: hidden" dir="rtl">
            <ul dir="ltr">';

        // Connect to DB
        $conn = openCon();

        // Initialize SQL qquery
        $sql = 'SELECT * FROM wp_posts 
                JOIN wp_postmeta ON wp_posts.ID = wp_postmeta.post_id
                WHERE wp_posts.post_type = \'product\'';
        
        // Get Result
        $res = $conn->query($sql);

        // Check Result
        if($res->num_rows > 0){

            // Loop Result
            while($row = $res->fetch_assoc()){

                // Check Max
                switch($row['meta_key']){
                    case 'total_sales':
                        
                        break;
                }
            }
        }

        // Disconnect from DB
        closeCon($conn);
    }
?>