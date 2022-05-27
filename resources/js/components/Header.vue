<template>
  <div>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">BoolPress</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <router-link class="nav-link active" :to="{name: 'home'}">Home</router-link>
        </li>
        <li class="nav-item">
          <router-link class="nav-link active" :to="{name: 'about'}">About Us</router-link>
        </li>
        <li class="nav-item">
          <router-link class="nav-link active" :to="{name: 'posts'}">Posts</router-link>
        </li>
      </ul>
      <span class="navbar-text">
        ***
      </span>
    </div>
  </div>
</nav>
  </div>
</template>

<script>
export default {

    name: 'Header',

}
</script>

<style>

</style>
