<template>
            <div class="row">
                    <aside class="col-12 col-lg-3">
                        <nav class=" navbar-dark ">
                            <div class="nav-header">
                                <div class="brand">
                                    <img class="img-fluid" src="/imgs/logo.png" alt="Migtikueliz Beats" style="padding-top: 3rem; width: 80%">
                                </div>

                                <div class="hamburger-button  d-xs-block d-lg-none">
                                       <button class="navbar-toggler toggle"  data-target="#nav-items" data-collapsed="off" type="button">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                </div>
                            </div>
                            <ul id="nav-items" class="nav-items">
                                    <!-- use router-link component for navigation. -->
                                    <!-- specify the link by passing the `to` prop. -->
                                    <!-- `<router-link>` will be rendered as an `<a>` tag by default -->
                                <li><router-link to="/" exact>HOME</router-link></li>
                                <li><router-link to="/services-rates" exact>SERVICES & RATES</router-link></li>
                                <li> <router-link to="/beat-store">BEAT STORE</router-link></li>
                                <li> <router-link to="/radio">RADIO</router-link></li>
                                <li> <router-link to="/contact">CONTACT</router-link></li>
                            </ul>
                        </nav>
                    </aside>
                <main class="col-12 col-lg-9">
                    <router-view></router-view>
                </main>
            </div
            >
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
      
        }
    }
</script>

