<div class="title-clientes" id="clientes">
    <h2>Clientes</h2>
</div>
<div class="container-fluid">

    <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
        <div class="carousel-inner row w-10 mxauto" role="listbox">
            <div class="carousel-item carousel-item-first col-md-4 active">
                <img class="img-fluid mx-auto d-bloc" src="img/clientsImg/Claragua1.png" alt="slide 1">
            </div>
            <div class="carousel-item col-md-4">
                <img class="img-fluid mx-auto d-block" src="img/clientsImg/EstarSeguros.png" alt="slide 2">
            </div>
            <div class="carousel-item col-md-4">
                <img class="img-fluid mx-auto d-block" src="img/clientsImg/donaemi.png" alt="slide 3">
            </div>
            <div class="carousel-item col-md-4">
                <img class="img-fluid mx-auto d-block" src="img/clientsImg/logo-banesco.png" alt="slide 4">
            </div>
            <div class="carousel-item col-md-4">
                <img class="img-fluid mx-auto d-block" src="img/clientsImg/logo-pluspetrol.png" alt="slide 5">
            </div>
            <div class="carousel-item col-md-4">
                <img class="img-fluid mx-auto d-block" src="img/clientsImg/iumo1.png" alt="slide 6">
            </div>
            <div class="carousel-item col-md-4">
                <img class="img-fluid mx-auto d-block" src="img/clientsImg/LOGOVALEVEN.png" alt="slide 7">
            </div>
            <div class="carousel-item col-md-4">
                <img class="img-fluid mx-auto d-block" src="img/clientsImg/oleica1.png" alt="slide 8">
            </div>
            <div class="carousel-item col-md-4">
                <img class="img-fluid mx-auto d-block" src="img/clientsImg/roros1.png" alt="slide 9">
            </div>
        </div>
        <a class="carousel-control-prev" role="button" data-slide="prev" data-target="#carouselExample">
            <i class="fa fa-chevron-left fa-lg text-muted"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next text-faded"  role="button" data-slide="next" data-target="#carouselExample">
            <i class="fa fa-chevron-right fa-lg text-muted"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="finalclients"></div>
<script>
$('#carouselExample').on('slide.bs.carousel', function (e) {

/*

CC 2.0 License Iatek LLC 2018
Attribution required

*/

var $e = $(e.relatedTarget);

var idx = $e.index();
console.log("IDX :  " + idx);

var itemsPerSlide = 8;
var totalItems = $('.carousel-item').length;

if (idx >= totalItems-(itemsPerSlide-1)) {
    var it = itemsPerSlide - (totalItems - idx);
    for (var i=0; i<it; i++) {
        // append slides to end
        if (e.direction=="left") {
            $('.carousel-item').eq(i).appendTo('.carousel-inner');
        }
        else {
            $('.carousel-item').eq(0).appendTo('.carousel-inner');
        }
    }
}
});
</script>