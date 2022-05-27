<template>
    <div class="col-4">
        <div class="card m-3 p-3">
            <img
                :src="post.image_url"
                class="card-img-top p-0 mx-auto"
                style="width: 18rem;"
                :alt="'image of ' + post.title"
            />
            <div class="card-body">
                <div class="card-title">
                    {{ post.title }}
                </div>
                <div class="subtitle">
                    {{ post.author }}
                </div>
                <div class="card-text">
                    {{ post.content }}
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Post",
    components: {},
    props: ["post"],
};
</script>

<style></style>
