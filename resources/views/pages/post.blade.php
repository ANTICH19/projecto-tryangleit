<template>
    <div id="app">
        <post-item>
            <ul v-for="post in posts" :key="post.title">
                <PostItem :post-data="post" @postItemClicked="gotEvent($event)"/>
            </ul>
        </post-item>

    </div>
</template>
123123
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
