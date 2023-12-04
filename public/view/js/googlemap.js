function initMap() {
    // Tọa độ trung tâm (ví dụ: San Francisco, California)
    var center = {lat: 37.7749, lng: -122.4194};

    // Tạo đối tượng bản đồ và đặt tọa độ trung tâm
    var map = new google.maps.Map(document.getElementById('google-map'), {
        center: center,
        zoom: 12
    });

    // Thêm đánh dấu tại tọa độ trung tâm
    var marker = new google.maps.Marker({
        position: center,
        map: map,
        title: 'Hello World!'
    });
}