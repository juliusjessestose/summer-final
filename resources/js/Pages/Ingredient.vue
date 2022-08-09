
<template>
 <div class="card-header bg-info">
    <h1>Ingredients</h1>
  </div>   
<hr>

<div id="table-ingredients">
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Ingredients Name</th>
      <th scope="col">Preparations</th>
    </tr>
  </thead>
  <tbody v-for="ingredient in ingredients" :key="ingredient.id">
    <tr>
      <th scope="row">{{ ingredient.id }}</th>
      <td>{{ ingredient.ingredients_name }}</td>
      <td>{{ ingredient.preparations }}</td>
    </tr>
  </tbody>
</table>
</div>

</template>


<script setup>
import Layout from '../Shared/Layout.vue'

</script>


<script>
export default{
    layout: Layout,
    props:{
        ingredients: Array
    }
}

</script>

<style scoped>
h1{
  font-weight: bolder;
  text-align: center;
}
</style>