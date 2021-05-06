require('./bootstrap');

var $jq = jQuery.noConflict();
$jq(document).ready(function() {
    $('.last-releases, .favorites').slick({
        infinite: false,
        slidesToShow: 1.5,
        slidesToScroll: 1,
        autoplay: true
    })
});
