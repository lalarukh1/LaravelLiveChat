<template>
    <div>
        <vue-typer text='Hello World! I was registered globally!'></vue-typer>

        <carousel-3d>
        <slide :index="0">
            Slide 1 Content
        </slide>
        <slide :index="1">
            Slide 2 Content
        </slide>
            <slide :index="2">
                <figure>
                    <img src="/images/action.jpg">
                    <figcaption>
                        The sky is the limit only for those who aren't afraid to fly!
                    </figcaption>
                </figure>
            </slide>
        </carousel-3d>

    </div>
</template>
<script>
    import { Carousel3d, Slide } from 'vue-carousel-3d';

    export default {
        components: {
            Carousel3d,
            Slide
        }
    }


</script>