// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("return-to-top").style.display = "block";
    } else {
        document.getElementById("return-to-top").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

// Satellite map
function satellite_map() {
    var var_location = new google.maps.LatLng(48.856847, 2.296832);

    var var_mapoptions = {
        center: var_location,
        zoom: 16,
        mapTypeId: 'satellite'
    };

    var var_map = new google.maps.Map(document.getElementById("map-container-3"),
        var_mapoptions);

    var var_marker = new google.maps.Marker({
        position: var_location,
        map: var_map,
        title: "Paris, France"
    });
}

// Initialize maps
google.maps.event.addDomListener(window, 'load', satellite_map);