<template>
    <li>
        <h3>{{postData.title}}</h3>
        <p>{{postData.body}}</p>

        <button @click="sendEvent">Click</button>
    </li>
</template>

<script>

export default {
    name: 'post-item',
    props: {
        'postData' : {
            type: Object,
            required: true,
        }
    },
    methods:{
        sendEvent(){
            this.$emit('postItemClicked', this.postData.title)
        }
    }
}
</script>

<style scoped>
li {
    color: green
}
</style>

<style scoped>
li {
    color: green
}
</style>
