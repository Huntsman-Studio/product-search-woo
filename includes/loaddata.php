<?php

    // Includes
    include '../DB/db_config.php';

    if ( isset($_POST['search']) ){

        $html = '
            <div class="ex" style="width: 65%; float: left; max-height: 428px; overflow-y: scroll; -webkit-overflow-scrolling: touch; overflow-x: hidden" dir="rtl">
                <ul dir="ltr">';
                // Connect to DB
                $conn = openCon();

                // Initialize SQL Query --> Get Products
                $sql = 'SELECT * FROM wp_posts WHERE post_title like \'%'.$_POST['search'].'%\' AND post_type = \'product\'';

                // Get reusult
                $res = $conn->query($sql);

                // Check result
                if ( $res -> num_rows > 0 ) {
                    // $html .= '<li>HERE</li>';
                    while( $row = $res -> fetch_assoc() ){
                        $html .= '<li><a href="' . $row['guid'] . '" id="prd-li">' . $row['post_title'] . '</a></li>';
                    }
                } else {
                    $html .= '<li><a href="">Oops... &nbsp;&nbsp;&nbsp;&nbsp;There is no result for this search...</a></li>'; 
                }
                
                $html .= '</ul>
            </div>
            <div style="margin-left:65%;">
                <ul>
                    <li>
                        <img id="float-icon" src="https://icare.eu/wp-content/uploads/2021/03/search_cases_and_protection_icon.svg" alt="Cases & Protection">
                        <a id="cat-ul" href="https://icare.eu/at/product-category/cases-and-protection/">Cases and Protection</a>
                    </li>
                    <li>
                        <img id="float-icon" src="https://icare.eu/wp-content/uploads/2021/03/search_Headphones_Speakers_icon.svg" alt="Headphones & Speakers">
                        <a id="cat-ul" href="https://icare.eu/at/product-category/headphones-and-speakers/">Headphones and Speakers</a>
                    </li>
                    <li>
                        <img id="float-icon" src="https://icare.eu/wp-content/uploads/2021/03/search_Power_Cables_icon.svg" alt="Power & Cables">
                        <a id="cat-ul" href="https://icare.eu/at/product-category/power-and-cables/">Power and Cables</a>
                    </li>
                    <li>
                        <img id="float-icon" src="https://icare.eu/wp-content/uploads/2021/03/search_Mice_Keyboards_icon.svg" alt="Mice & Keyboards">
                        <a id="cat-ul" href="https://icare.eu/at/product-category/mice-and-keyboards/">Mice and Keyboards</a>
                    </li>
                    <li>
                        <img id="float-icon" src="https://icare.eu/wp-content/uploads/2021/03/search_Stands_Stylus_icon.svg" alt="Stands & Stylus">
                        <a id="cat-ul" href="https://icare.eu/at/product-category/stands-and-stylus/">Stands and Stylus</a>
                    </li>
                    <li>
                        <img id="float-icon" src="https://icare.eu/wp-content/uploads/2021/03/search_Smart_Linving_icon.svg" alt="Smart Living">
                        <a id="cat-ul" href="https://icare.eu/at/product-category/smart-living/">Smart Linving</a>
                    </li>
                    <li>
                        <img id="float-icon" src="https://icare.eu/wp-content/uploads/2021/03/search_Entertainment_icon.svg" alt="Entertainment">
                        <a id="cat-ul" href="https://icare.eu/at/product-category/gaming-and-entertaiment/">Entertainment</a>
                    </li>
                    <li>
                        <img id="float-icon" src="https://icare.eu/wp-content/uploads/2021/03/search_Enviromental_Friendly_icon.svg" alt="Enviromental Friendly">
                        <a id="cat-ul" href="https://icare.eu/at/product-category/environmental-friendly/">Enviromental Friendly</a>
                    </li>
                </ul>
            </div>';

        // Disconnect from DB
        closeCon($conn);

        echo $html;


    }

?>