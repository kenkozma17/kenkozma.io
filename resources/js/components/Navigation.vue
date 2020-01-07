<template>
    <nav class="navigation">
        <div class="wrapper">
            <div class="container">
                <div class="align-left">
                    <a href="#" class="nav-item logo">Ken Kozma</a>
                </div>
                <div class="align-right">
                    <a href="#home" class="nav-item">Home</a>
                    <a href="#about" class="nav-item">About</a>
                    <a href="#work" class="nav-item">Work</a>
                    <a href="#contact" class="nav-item">Contact</a>
                </div>
            </div>
        </div>
    </nav>
</template>

<script>
    module.exports = {
        data: function () {
            return {}
        },
        methods: {
            /** Makes navigation sticky */
            stickyNav() {
                let nav = $('.navigation'), scrolled = window.pageYOffset;
                if(scrolled > 5) {
                    nav.addClass('sticky');
                } else {
                    nav.removeClass('sticky');
                }
            }
        },
        created: function() {
            window.addEventListener('scroll', this.stickyNav);
        }
    }
</script>