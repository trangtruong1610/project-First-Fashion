// Carousel multiple items
$('.carousel.carousel-multi-item.v-2 .carousel-item').each(function(){
    var next = $(this).next();
    if (!next.length) {
        next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));

    for (var i=0;i<4;i++) {
        next=next.next();
        if (!next.length) {
            next=$(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));
    }
});
// Range Price Slider
var rangeslider = document.getElementById("sliderRange");
var output = document.getElementById("demo");
output.innerHTML = rangeslider.value;

rangeslider.oninput = function() {
    output.innerHTML = this.value;
}