<template>
    <div class="row p-5 mb-3">
        <h1 class="m-5">Ultimi Post</h1>


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
