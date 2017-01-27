function updateRooms(str) {
    var roomSelection = document.getElementById("room-selection");
    roomSelection.innerHTML = "";
    if (str != "hide") {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var roomSelection = document.getElementById("room-selection");
                roomSelection.disabled = false;
                roomSelection.innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","./scripts/getRooms.php?q="+str,true);
        xmlhttp.send();
    }
}

$( document ).ready(function() {
    updateRooms("lion_gate");
});
