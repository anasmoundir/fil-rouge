<div class="slick-carousel">
    {{-- @foreach ($slides as $slide) --}}
    <div>
        <div>Slide 1</div>
        <div>Slide 2</div>
        <div>Slide 3</div>
    </div>
    {{-- @endforeach --}}
</div>


<script>
    $(document).ready(function() {
        $('.slick-carousel').slick({
            dots: true,
            arrows: true,
            autoplay: true,
            autoplaySpeed: 3000,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });
</script>
