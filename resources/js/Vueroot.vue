<template>
  <Categorybar :categories="this.categories"  :currentCategory="this.currentCategory" @customCategory="changeCategory"/>
  <Container :recipes="this.recipes"  :currentCategory="this.currentCategory" @customRecipe="changeRecipe"/>

</template>

<script>

import axios from 'axios'
import Container from './components/Container.vue'
import Categorybar from './components/Categorybar.vue'


export default {
  name: 'Vueroot',
  data: () => {
        return {
            categories: {},
            currentCategory:0,
            recipes: {},
            currentRecipe:0,
        }
    },
  components: {
    Categorybar,
    Container,
 
  },
  methods: {
    async initialize() {

      // this functions runs after the page is loaded. Need to use await to get the default data
      await this.fetchCategories();
      await this.fetchRecipes();

    },

    async changeCategory(value) {
    
      this.currentCategory = value;
      await this.fetchRecipes();

    },

    async changeRecipe(value) {
      
      this.currentRecipe = value;
      console.log(this.currentRecipe)

    },

    async fetchCategories() {
            this.categories  = await axios.get('/api/category')
            .then(result => result.data)
            .catch(err =>console.error(err));
            console.log(this.categories)
            this.changeCategory(this.categories[0]);

        },
      async fetchRecipes() {
        let link = "/api/recipes/category/" + this.currentCategory.id
        console.log(link)
            this.recipes  = await axios.get(link)
            .then(result => result.data)
            .catch(err =>console.error(err));

      }
  },

  created() {
        this.initialize()
    }
}

</script>

<style lang="scss">
main {
  
  opacity:0.01;

}
</style>
