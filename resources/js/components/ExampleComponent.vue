<template>
    <div id="app">
        <ul v-for="post in posts" :key="post.title">
            <PostItem :post-data="post" @postItemClicked="gotEvent($event)"/>
        </ul>
    </div>
</template>

<script>
import PostItem from './PostItem.vue'

export default {
    name: 'App',
    components: {
        PostItem,
    },
    data: function(){
        return {
            posts: [
                {
                    title: 'LOREM IPSUM DOLOR SIT AMET. 1',
                    body: 'LOREM IPSUM DOLOR SIT AMET CONSECTETUR ADIPISICING ELIT. ALIQUAM EXERCITATIONEM, DOLORE ATQUE EXCEPTURI NULLA IPSAM DEBITIS FUGIT MOLESTIAS UT NECESSITATIBUS.'
                },
                {
                    title: 'LOREM IPSUM DOLOR SIT AMET. 2',
                    body: 'LOREM IPSUM DOLOR SIT AMET CONSECTETUR ADIPISICING ELIT. ALIQUAM EXERCITATIONEM, DOLORE ATQUE EXCEPTURI NULLA IPSAM DEBITIS FUGIT MOLESTIAS UT NECESSITATIBUS.'
                },
                {
                    title: 'LOREM IPSUM DOLOR SIT AMET. 3',
                    body: 'LOREM IPSUM DOLOR SIT AMET CONSECTETUR ADIPISICING ELIT. ALIQUAM EXERCITATIONEM, DOLORE ATQUE EXCEPTURI NULLA IPSAM DEBITIS FUGIT MOLESTIAS UT NECESSITATIBUS.'
                }
            ]
        }
    },
    methods: {
        gotEvent(title){
            alert(title)
        }
    }
}
</script>

<style >
#app {
    font-family: Avenir, Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
    margin-top: 60px;
}
</style>

