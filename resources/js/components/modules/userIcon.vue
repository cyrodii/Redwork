<template>
    <div class="avatar-list">
        <span class="avatar bradius" v-bind:class="options" v-bind:style="{backgroundImage: userLink}" data-toggle="tooltip" data-placement="top" v-bind:title="user.username"></span>
    </div>
</template>

<script>
export default {
    name: "UserIcon",
    props: ['options', 'user'],
    methods: {
        downloadImage() {

        },
    },
    computed: {
        userLink: function() {
            return "url(/img/userProfiles/" + this.user.username + ".png)"
        }
    },
    mounted() {
        if(!localStorage.user){
            this.downloadImage();
        } else {
            this.user.username = localStorage.username
        }
    },   
}
</script>