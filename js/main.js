// When the user clicks on the button, opent the modal
function openModal(){
    // Get the modal
    var modal = document.getElementById("myModal");
    modal.style.display = "block";
}

// When user clicks span (x), close the modal
function closeModal(){
    // Get the modal
    var modal = document.getElementById("myModal");
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    // Get the modal
    var modal = document.getElementById("myModal");

    if (event.target == modal){
        modal.style.display = "none";
    }
}