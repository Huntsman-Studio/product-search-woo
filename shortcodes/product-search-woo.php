<?php

    function product_search_woo($atts){
        ?>  
            <script>
                // When the user clicks on the button, opent the modal
				function openModal(){
					// Get the modal
					var modal = document.getElementById("myModal");
					var top = document.getElementById("top-bar");
                    document.getElementById("masthead").style.marginTop = "70px";
					modal.style.display = "block";
					top.style.display = "none";
                    document.getElementById("search").focus();
				}

				// When user clicks span (x), close the modal
				function closeModal(){
					// Get the modal
					var modal = document.getElementById("myModal");
					var top = document.getElementById("top-bar");
                    document.getElementById("masthead").style.marginTop = "0px";
					modal.style.display = "none";
					top.style.display = "block";
				}

				// When the user clicks anywhere outside of the modal, close it
				window.onclick = function(event) {
					// Get the modal
					var modal = document.getElementById("myModal");
					var top = document.getElementById("top-bar");

					if (event.target == modal){
						modal.style.display = "none";
						top.style.display = "block";
                        document.getElementById("masthead").style.marginTop = "0px";
					}
				}

                // Loaddata Functionality 
                function loaddata(){
                    
                    // Get search Value
                    var search = document.getElementById("search").value;

                    if(search){
                        $.ajax({
                            type: 'post',
                            url: 'https://icare.eu/at/wp-content/plugins/product-search-woo/includes/loaddata.php',
                            data: {
                                search : search,
                            },
                            success: function (response) {
                                // We get the element having id of display_info and put the response inside it
                                $( '#display_info' ).html(response);
                            }
                        });
                    }
                }
            </script>
            <style>
                span{
                    font-family: 'Manrope' !important;
                }
                /* The Modal (background) */
                .modal {
                    display: none; /* Hidden by default */
                    position: fixed; /* Stay in place */
                    z-index: 1; /* Sit on top */
                    left: 0;
                    top: 0;
                    width: 100%; /* Full width */
                    height: 100%; /* Full height */
                    overflow: auto; /* Enable scroll if needed */
                    background-color: rgb(0, 0, 0); /* Fallback color */
                    background-color: rgba(0, 0, 0, 0.8); /* Black w/ opacity */
                }

                /* Modal Content/Box*/
                .modal-content {
                    background-color: #111111;2
                    /*margin: 0px auto; /* 15% from the top and centered */
                    /* padding: 20px; */
                    /* border: 1px solid #888; */
                    width: 100%; /* Could be more or less, depending on screen size */
                    /* height: 20px; */
                    text-align: center;
                }

                /* Input type */
                input.search:focus{
                    background-color: #111111;
                    color: #f8f8f8;
                    box-shadow: none;
                }	

                /* Span Color */
                span#grey{
                    color: rgb(73, 73, 73);
                    font-size: 22px;
                }
                span#grey:hover{
                    color: #f8f8f8;
                    cursor: pointer;
                }
                /**/

                /* Table Serach Cell */		
                td.cell.search{
                    /* width: 80%; */
                    height: 70px;
                    margin: 0px;
                }
                /**/

                /* Table Logo Cell */
                td.cell.circle-logo{
                    text-align: center;
                    width: 55px;
                    padding-left: 10px;
                }
                /**/

                /* Input Search */
                input.search{
                    width: 100%;
                    height: 40px;
                    border: 0px;
                    margin: 0px;
                    background-color: #111111;
                    border-left: 2px solid rgb(73, 73, 73);

                    /* Value */
                    font-size: 23px;
                    color: #f8f8f8;
                    padding-left: 10px;
                    /**/
                }
                /**/

                /* Circle Logo */
                img#icare-circle{
                    text-align: left;
                    width: 35px;
                    /* object-fit: contain; */
                    /* padding-right: 10px; */
                    /* padding-left: 40px; */
                }
                /**/

                /* Table Search */
                table#table-search{
                    width: 80%;
                    margin: auto;
                    border: 0px;
                }
                /**/

                /* Table TR */
                table#table-search  tr{
                    background-color: #111111;
                    border: 0px;
                }
                /**/

                /* Table TD */
                table#table-search td{
                    border: 0px;
                }
                /**/

                /* Search iCon */
                img#search-icon{
                    width: 22px;
                    /* max-width: 32px; */
                    cursor: pointer;
                }
                /**/
                #display_info{
                    background-color: #f8f8f8;
                    width: 80%;
                    margin: 0px auto;
                    border-bottom-left-radius: 10px;
                    border-bottom-right-radius: 10px;
                    overflow-x: hidden;
                    padding-left: 20px;
    
                }
                /* Hide scrollbar for Chrome, Safari and Opera */
                /* .ex::-webkit-scrollbar {
                display: none;
                } */

                /* Hide scrollbar for IE, Edge and Firefox
                .ex {
                -ms-overflow-style: none;  /* IE and Edge
                scrollbar-width: none;  /* Firefox 
                }*/
                #display_info ul > li {
                    padding-left: 20px;
                    padding-bottom: 10px;
                }
                #display_info ul{
                    padding-top: 20px;
                    padding-bottom: 20px;
                }
                #x-logo{
                    text-align: right;
                    /* padding-right: 5px; */
                }

                td.cell.x-logo{
                    text-align: right;
                    padding-right: 10px;
                }

                *#cat-ul{
                    color: #878787;
                }
                *#cat-ul:hover{
                    color: #000;
                    font-weight: bold;
                }
                *#prd-li:hover{
                    font-weight: bold;
                }
                #float-icon{
                    width: 40px;
                    padding-right: 10px;
                    /* position: fixed; */
                }
                /* width */
                #display_info ::-webkit-scrollbar {
                    width: 10px !important;
                }
                /* Track */
                #display_info ::-webkit-scrollbar-track {
                    background: #e5e5e5 !important; 
                    border-radius: 99px;
                    margin-top: 10px;
                    /* padding-left: 10px; */
                    margin-right: 20px !important;
                }
                /* Handle */
                #display_info ::-webkit-scrollbar-thumb {
                    background: #c4c4c4 !important;
                    border-radius: 99px;
                }
            </style>
            
            <!-- Trigger/Open The Modal -->
            <!-- Search iCon -->
            <p onclick="openModal()"><img id="search-icon" src="https://icare.eu/wp-content/uploads/2021/03/SearchIconNew.png" alt="Search-iCon"> <span id="milk-white" style="padding-left: 10px; font-size: 18px !important; font-weight: 500; cursor:pointer">Search</span>
            <!-- / Search iCon --></button>

            <!-- The Modal -->
            <div id="myModal" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <form name="product-search" action="https://icare.eu/at/" method="GET" style="margin-bottom: 0px" autocomplete="off">
                        <!-- Search Form -->
                        <table id="table-search">
                            <tr>
                                <!-- Image Column -->
                                <td class="cell circle-logo">
                                    <!-- <p> -->
                                    <img id="icare-circle" src="https://icare.eu/wp-content/uploads/2021/03/Search_C_icon.png" alt="iCare-Circle-Logo">
                                    <!-- <span id="grey">  </span> -->
                                    <!-- </p> -->
                                </td>
                                <!-- / Image Column -->
                                <!-- Search Column -->
                                <td class="cell search">
                                    <input autofocus type="text" name="s" class="search" id="search" onkeyup="loaddata()"/>
                                    <input type="hidden" name="post_type" value="product"/>
                                </td>
                                <!-- / Search Column -->
                                <td class="cell x-logo">
                                    <p><span id="grey"><i class="fas fa-times" id="x-logo" onclick="closeModal()"></i></span></p>
                                </td>
                            </tr>
                        </table>
                        <!-- Search Form -->
                    </form> 
                </div>
                <div id="display_info">
                    <div class="ex" style="width: 65%; float: left; max-height: 428px; overflow-y: scroll; -webkit-overflow-scrolling: touch; overflow-x: hidden" dir="rtl">
                        <ul dir="ltr">
                            <?php
                            $args = array(
                                'post_type' => 'product',
                                'meta_key' => 'total_sales',
                                'orderby' => 'meta_value_num',
                                'posts_per_page' => 8,
                            );
                            $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) : $loop->the_post(); 
                            global $product; 
                            // $link = the_permalink();
                            ?>
                            <li><a id="prd-li" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>

                            <?php endwhile; ?>
                            <?php wp_reset_query(); ?>
                        </ul>
                    </div>
                    <div style="margin-left:65%;">
                        <ul>
                            <li>
                                <img id="float-icon" src="https://icare.eu/wp-content/uploads/2021/03/search_cases_and_protection_icon.svg" alt="Cases & Protection">
                                <a id="cat-ul" href="https://icare.eu/product-category/cases-and-protection/">Cases and Protection</a>
                            </li>
                            <li>
                                <img id="float-icon" src="https://icare.eu/wp-content/uploads/2021/03/search_Headphones_Speakers_icon.svg" alt="Headphones & Speakers">
                                <a id="cat-ul" href="https://icare.eu/product-category/headphones-and-speakers/">Headphones and Speakers</a>
                            </li>
                            <li>
                                <img id="float-icon" src="https://icare.eu/wp-content/uploads/2021/03/search_Power_Cables_icon.svg" alt="Power & Cables">
                                <a id="cat-ul" href="https://icare.eu/product-category/power-and-cables/">Power and Cables</a>
                            </li>
                            <li>
                                <img id="float-icon" src="https://icare.eu/wp-content/uploads/2021/03/search_Mice_Keyboards_icon.svg" alt="Mice & Keyboards">
                                <a id="cat-ul" href="https://icare.eu/product-category/mice-and-keyboards/">Mice and Keyboards</a>
                            </li>
                            <li>
                                <img id="float-icon" src="https://icare.eu/wp-content/uploads/2021/03/search_Stands_Stylus_icon.svg" alt="Stands & Stylus">
                                <a id="cat-ul" href="https://icare.eu/product-category/stands-and-stylus/">Stands and Stylus</a>
                            </li>
                            <li>
                                <img id="float-icon" src="https://icare.eu/wp-content/uploads/2021/03/search_Smart_Linving_icon.svg" alt="Smart Living">
                                <a id="cat-ul" href="https://icare.eu/product-category/smart-living/">Smart Linving</a>
                            </li>
                            <li>
                                <img id="float-icon" src="https://icare.eu/wp-content/uploads/2021/03/search_Entertainment_icon.svg" alt="Entertainment">
                                <a id="cat-ul" href="https://icare.eu/product-category/gaming-and-entertaiment/">Entertainment</a>
                            </li>
                            <li>
                                <img id="float-icon" src="https://icare.eu/wp-content/uploads/2021/03/search_Enviromental_Friendly_icon.svg" alt="Enviromental Friendly">
                                <a id="cat-ul" href="https://icare.eu/product-category/environmental-friendly/">Enviromental Friendly</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        <?php
    }

    add_shortcode("custom-woo-search", "product_search_woo");
?>