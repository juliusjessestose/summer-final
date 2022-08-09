
<template>
<h1>Recipes</h1>

<hr>
 <div class="d-flex align-content-between">
    <div class="card mb-5" v-for="chicken in chickens" :key="chicken.id">
        <div class="card-header bg-info">
            <h4>{{chicken.menu_name}}</h4>
        </div>
        <div class="card-body">
            <h6>Ingredients</h6>
            <ul>
                <li v-for="ingredient in chicken.ingredients" :key="ingredient.id">
                    {{ingredient.ingredients_name}} 
                </li>
            </ul>
        </div>
         <div class="card-body">
        <h6>Preparations</h6>
        <ul>
            <li v-for="ingredient in chicken.ingredients" :key="ingredient.id">
                    {{ingredient.preparations}}
        </li>
        </ul>
         </div>
    </div>
 </div>

</template>



<script setup>
import Layout from '../Shared/Layout.vue'

</script>


<script>
export default{
    layout: Layout,
    props:{
        chickens: Array
    }
}

</script>

<style scoped>
h1{
  font-weight: bolder;
  text-align: center;
}
h4{
    text-align: center;
    font-weight: bolder;
}
h6 {
  color: #444;
  border-bottom: 1px solid; 
  font-weight: bolder;
  text-align: center;
}



</style>