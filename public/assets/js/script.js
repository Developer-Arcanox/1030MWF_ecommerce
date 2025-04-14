// Initialize carousel with auto-rotation
document.addEventListener('DOMContentLoaded', function() {
    var myCarousel = document.querySelector('#heroCarousel');
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 5000,
        wrap: true,
        ride: 'carousel'
    });
});