<template>
    <div>
        <h1 class="text-center p-5">Ultimi Post</h1>
        <div class="col-12">
            <router-view></router-view>

        </div>

        <Post v-for="(post, index) in posts" :key="index" :post="post"/>
    </div>
</template>

<script>
import Post from '../components/Post';
export default {
    name: "PostList",
    components: {
        Post
    },
    data: function() {
        return {
            posts: [],
        }
    },
    methods: {
        getPosts(){
            axios.get("http://localhost:8000/api/posts")
            .then((result) =>{

                this.posts = result.data.data;
            })
            .catch( (error) =>{
                console.warn(error);
            });
        }
    },
    created(){
        this.getPosts();
    }
}
</script>
