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
                    background-color: #111111;
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
                    width: 20px;
                    cursor: pointer;
                }
                /**/
                #display_info{
                    background-color: #f8f8f8;
                    width: 80%;
                    margin: 0px auto;
                    border-bottom-left-radius: 10px;
                    border-bottom-right-radius: 10px;
                }
                #display_info ul > li {
                    padding-left: 40px;
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
            </style>
            
            <!-- Trigger/Open The Modal -->
            <!-- Search iCon -->
            <img id="search-icon" src="https://icare.eu/wp-content/uploads/2021/03/Search_Icon.png" alt="Search-iCon" onclick="openModal()"> <span id="milk-white" style="padding-left: 10px">Search</span>
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
                                    <input type="search" name="s" class="search" id="search" onkeyup="loaddata()"/>
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
                <div id="display_info"></div>
            </div>
        <?php
    }

    add_shortcode("custom-woo-search", "product_search_woo");
?>