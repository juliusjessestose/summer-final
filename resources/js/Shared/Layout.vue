
<template>
    
    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Panlasang Pinoy Chicken Recipes</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">

        <li class="nav-item">
          <Link class="nav-link" :class="{'selected': $page.component=='Home'}" href="/">Home</Link>
        </li>
        <li class="nav-item">
          <Link class="nav-link" :class="{'selected': $page.component=='Chicken'}" href="/chickens">Chicken</Link>
        </li>
         <li class="nav-item">
          <Link class="nav-link" :class="{'selected': $page.component=='Ingredient'}" href="/ingredients">Ingredient</Link>
        </li>
      </ul>
    </div>
  </div>
</nav>

<section class="container bg-white p-4 rounded-4 my-5 shadow" style="min-height: 500px">
    <slot />

</section>


<footer class="text-center my-3 text-light">
    Copyright &copy; 2022. All rights reserved.
</footer>
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'
</script>

<style scoped>
section{
    background-color: #fff;
    opacity: 0.7;
}
.selected{
  color: skyblue;
  font-weight: bold;
}

</style>