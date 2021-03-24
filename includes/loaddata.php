<?php

    // Includes
    include '../DB/db_config.php';

    if ( isset($_POST['search']) ){

        $html = '<table style="border: 0px">
            <tr style="border: 0px; vertical-align: top">
                <td style="border: 0px; width: 70%">
                    <ul>';
                    // Connect to DB
                    $conn = openCon();

                    // Initialize SQL Query --> Get Products
                    $sql = 'SELECT * FROM wp_posts WHERE post_title like \'%'.$_POST['search'].'%\' AND post_type = \'product\' LIMIT 8';

                    // Get reusult
                    $res = $conn->query($sql);

                    // Check result
                    if ( $res -> num_rows > 0 ) {
                        // $html .= '<li>HERE</li>';
                        while( $row = $res -> fetch_assoc() ){
                            $html .= '<li><a href="' . $row['guid'] . '" id="prd-li">' . $row['post_title'] . '</li>';
                        }
                    } else {
                        $html .= '<li><a href="">Oops... &nbsp;&nbsp;&nbsp;&nbsp;There is no result for this search...</li>'; 
                    }
                    
                    $html .= '</ul>
                </td>
                <td style="border: 0px">
                    <ul>
                        <li><a id="cat-ul" href="#">Cases and Protection</a></li>
                        <li><a id="cat-ul" href="#">Headphones and Speakers</a></li>
                        <li><a id="cat-ul" href="#">Power and Cables</a></li>
                        <li><a id="cat-ul" href="#">Mice and Keyboards</a></li>
                        <li><a id="cat-ul" href="#">Stands and Stylus</a></li>
                        <li><a id="cat-ul" href="#">Smart Linving</a></li>
                        <li><a id="cat-ul" href="#">Entertainment</a></li>
                        <li><a id="cat-ul" href="#">Enviromental Friendly</a></li>
                    </ul>
                </td>
            </tr>
        </table>';

        // Disconnect from DB
        closeCon($conn);

        echo $html;
    }

?>