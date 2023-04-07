<!-- Vendor -->
<script src="{{ asset('frontend/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/jquery.appear/jquery.appear.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/jquery.cookie/jquery.cookie.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/popper/umd/popper.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/common/common.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/jquery.validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/jquery.gmap/jquery.gmap.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/jquery.lazyload/jquery.lazyload.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/isotope/jquery.isotope.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/vide/jquery.vide.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/vivus/vivus.min.js') }}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{ asset('frontend/js/theme.js') }}"></script>

<!-- Current Page Vendor and Views -->
<script src="{{ asset('frontend/vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js') }}"></script>
<script src="{{ asset('frontend/js/views/view.home.js') }}"></script>

<!-- Theme Custom -->
<script src="{{ asset('frontend/js/custom.js') }}"></script>
{{-- Countdown Timer --}}
<script src="{{ asset('frontend/js/jquery.simple.timer.js') }}"></script>


<!-- Theme Initialization Files -->
<script src="{{ asset('frontend/js/theme.init.js') }}"></script>


<script>
    $('.timer').startTimer({

        onComplete: function(element) {
            $('#text_form').submit();
        }
    })

</script>

<script>
    $(document).ready(function() {

        let i = 1;
        let str = '.q-' + i;
        // let result = class.concat(i);
        $(str).show();

        $(".next").click(function() {

            $(str).hide();

            i = i + 1;
            str = '.q-' + i;

            $(str).show();
            console.log(i);
            if (i === total) {

                $(".next").html('Submit Answer');
                $(".next").removeClass('btn-tertiary');
                $(".next").addClass('btn-success');

            }

            if (i > total) {
                this.type = 'submit';
            }

            if (i === total) {

                this.value = 'Submit Answer';
                // alert('submit')
            }

        });
    });

</script>
