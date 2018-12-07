

<template>
<div id="radio"></div>
</template>
<script>
    export default {
        mounted() {
    var postscribe = require('postscribe');
                postscribe('#radio', '<script src="https://hosted.muses.org/mrp.js"><\/script>');
                postscribe('#radio', '<script src="./js/radio-player.js"><\/script>');
                },


    }

</script>