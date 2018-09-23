
function initMap() {
    var gli = {lat: 19.523094, lng: -99.238250};
    var map = new google.maps.Map(
        document.getElementById('map'), {zoom: 15, center: gli});
    var marker = new google.maps.Marker({position: gli, map: map});
}

  