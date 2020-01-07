let card = $(".card");

$(document).on("mousemove",function(e) {
    let ax = -($(window).innerWidth()/2- e.pageX)/50;
    let ay = ($(window).innerHeight()/2- e.pageY)/20;
    card.attr("style", "transform: rotateY("+ax+"deg)" +
        " rotateX("+ay+"deg);-webkit-transform: " +
        " rotateY("+ax+"deg)" +
        " rotateX("+ay+"deg);-moz-transform: " +
        " rotateY("+ax+"deg)" +
        " rotateX("+ay+"deg)");
});

$(document).on("scroll",function(e) {
    let homeHeight = $('#home').innerHeight();
    if (window.pageYOffset > (homeHeight / 2)) {
        card.css('transform', 'none');
    }
});