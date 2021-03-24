<?php

    function product_search_woo($atts){
        ?>
            <!-- Trigger/Open The Modal -->
            <!-- Search iCon -->
            <img id="search-icon" src="https://icare.eu/wp-content/uploads/2021/03/Search-Icon.svg" alt="Search-iCon" onclick="openModal()"/>
            <!-- / Search iCon --></button>

            <!-- The Modal -->
            <div id="myModal" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <form role="search" action="https://icare.eu/at/" method="GET">
                        <!-- Search Form -->
                        <table id="table-search">
                            <tr>
                                <!-- Image Column -->
                                <td class="cell circle-logo">
                                    <p>
                                        <img id="icare-circle" src="https://icare.eu/wp-content/uploads/2021/03/C-icon-for-search.svg" alt="iCare-Circle-Logo">
                                        <span id="grey">  </span>
                                    </p>
                                </td>
                                <!-- / Image Column -->
                                <!-- Search Column -->
                                <td class="cell search">
                                    <input class="search" type="text" name="s"/>
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
            </div>
        <?php
    }

    add_shortcode("custom-woo-search", "product_search_woo");
?>