jQuery(function ($) {
        function init_bergen() {
            var myLocation = new google.maps.LatLng(60.785881, 10.699598);
            var mapOptions = {
                center: myLocation,
                zoom: 15
            };
            var marker = new google.maps.Marker({
                position: myLocation,
                title: "Property Location"
            });
            var map = new google.maps.Map(document.getElementById("bergen"),
                mapOptions);
            marker.setMap(map);
        }
        init_bergen();
    });
