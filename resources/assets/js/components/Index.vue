<template>
    <body id="nav-scroller" ref="content" style="position:relative;">
        <!-- navbar-1.vue -->
        <b-navbar toggleable="md" type="dark" fluid-grow fixed="top" v-b-scrollspy:nav-scroller>
            <b-navbar-toggle target="nav_collapse"></b-navbar-toggle>
            <b-navbar-brand href="#">
                <img src="img/logo.png" class="logo" alt="BV">
            </b-navbar-brand>
            <b-collapse is-nav id="nav_collapse"> 
                <b-navbar-nav class="ml-auto">
                    <b-nav-item class="nav-item" href="#home" active @click="scrollIntoView">HOME</b-nav-item>
                    <b-nav-item class="nav-item" href="#about" @click="scrollIntoView">ABOUT</b-nav-item>
                    <b-nav-item class="nav-item" href="#contact" @click="scrollIntoView">CONTACT</b-nav-item>
                    <b-nav-item class="nav-item" href="/home" @click="scrollIntoView">LOGIN</b-nav-item>
                </b-navbar-nav>
            </b-collapse>
        </b-navbar>

        <section id="home">
            <!-- carousel-1.vue -->
            <b-carousel id="carousel1"
                style="text-shadow: 1px 1px 2px #333;"
                controls
                indicators
                background="#ababab"
                :interval="4000"
                img-width="1024"
                img-height="480"
                v-model="slide"
                @sliding-start="onSlideStart"
                @sliding-end="onSlideEnd"
            >
                <!-- Text slides with image -->
                <b-carousel-slide caption="First slide"
                    text="Nulla vitae elit libero, a pharetra augue mollis interdum."
                    img-src="https://picsum.photos/1024/480/?image=52"
                ></b-carousel-slide>
                <b-carousel-slide caption="First slide"
                    text="Nulla vitae elit libero, a pharetra augue mollis interdum."
                    img-src="https://picsum.photos/1024/480/?image=53"
                ></b-carousel-slide>
            </b-carousel>
        </section>

        <section id="about">
            <div class="container">
                <h1>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat officia vitae reiciendis at recusandae aliquid culpa quis! Numquam fugiat dicta sint, maiores sit aperiam atque ipsum sequi! Ratione, dignissimos voluptatibus!</h1>
                <h2>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat officia vitae reiciendis at recusandae aliquid culpa quis! Numquam fugiat dicta sint, maiores sit aperiam atque ipsum sequi! Ratione, dignissimos voluptatibus!</h2>
                <h3>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat officia vitae reiciendis at recusandae aliquid culpa quis! Numquam fugiat dicta sint, maiores sit aperiam atque ipsum sequi! Ratione, dignissimos voluptatibus!</h3>
                <h4>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi unde vero impedit placeat totam ex sed alias molestias illo neque? Consectetur repudiandae reiciendis recusandae accusantium aliquid est hic reprehenderit amet!</h4>
            </div>
        </section>

        <section id="contact">
            <div class="container">
                <h1>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat officia vitae reiciendis at recusandae aliquid culpa quis! Numquam fugiat dicta sint, maiores sit aperiam atque ipsum sequi! Ratione, dignissimos voluptatibus!</h1>
                <h2>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat officia vitae reiciendis at recusandae aliquid culpa quis! Numquam fugiat dicta sint, maiores sit aperiam atque ipsum sequi! Ratione, dignissimos voluptatibus!</h2>
                <h3>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat officia vitae reiciendis at recusandae aliquid culpa quis! Numquam fugiat dicta sint, maiores sit aperiam atque ipsum sequi! Ratione, dignissimos voluptatibus!</h3>
                <h4>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi unde vero impedit placeat totam ex sed alias molestias illo neque? Consectetur repudiandae reiciendis recusandae accusantium aliquid est hic reprehenderit amet!</h4>
                <h4>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi unde vero impedit placeat totam ex sed alias molestias illo neque? Consectetur repudiandae reiciendis recusandae accusantium aliquid est hic reprehenderit amet!</h4>
                <h4>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi unde vero impedit placeat totam ex sed alias molestias illo neque? Consectetur repudiandae reiciendis recusandae accusantium aliquid est hic reprehenderit amet!</h4>
                <h4>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi unde vero impedit placeat totam ex sed alias molestias illo neque? Consectetur repudiandae reiciendis recusandae accusantium aliquid est hic reprehenderit amet!</h4>
                <h4>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi unde vero impedit placeat totam ex sed alias molestias illo neque? Consectetur repudiandae reiciendis recusandae accusantium aliquid est hic reprehenderit amet!</h4>
            </div>
        </section>

    </body>
</template>

<script>
    export default {
        data () {
            return {
                slide: 0,
                sliding: null
            }
        },
        methods: {
            onSlideStart (slide) {
                this.sliding = true
            },
            onSlideEnd (slide) {
                this.sliding = false
            },
            scrollIntoView (evt) {
                
                const href = evt.target.getAttribute('href')
                const el = href ? document.querySelector(href) : null
                if (el) {
                    this.$refs.content.scrollTop = el.offsetTop
                }
            }
        }
    }
</script>
    
<style>
    
    /* Home */
    .navbar {
        background: #2a517c;
        opacity: 0.9;
        
    }
    .logo {
        height: 50px; 
        margin-left: 40px;
    }
    .ml-auto {
        margin-right: 40px;
    }
    .ml-auto > .nav-item {
        padding: 10px 30px 10px 30px;
    }
    .ml-auto > .nav-item:hover {
        background: #4475aa;
    }

    /* About */
    #about {
        padding-top: 50px;
    }

    /* Contact */
    #contact {
        padding-top: 50px;
    }
    /* Login */


</style>