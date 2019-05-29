<template>
    <div class="col-md-4 box">
        <div class="">
            <a :href="'/blog/art/' + id">
                <img :src="_embedded['wp:featuredmedia'][0].source_url" alt="" class="img-fluid pt-3 pb-3 w-100">
            </a>

            <a :href="'/blog/art/' + id">
                <h4> {{title.rendered}}</h4>
            </a>
        </div>
    </div>
</template>

<script>
    export default {

        mounted() {
            console.log('Component mounted.')
        },

        props: ['title', 'id', 'content', '_embedded'],

    }
</script>
