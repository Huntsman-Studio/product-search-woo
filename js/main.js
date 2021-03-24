// Loaddata Functionality 
function loaddata(){
    
    // Get search Value
    var search = document.getElementById("search");

    if(search){
        $.ajax({
            type: 'post',
            url: '../includes/loaddata.php',
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