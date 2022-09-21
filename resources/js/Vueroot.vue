<template>
  xxxxxxx
  <Container/>
</template>

<script>
// @ is an alias to /src
import Container from './components/Container.vue'

export default {
  name: 'Vueroot',
  props: ['categories'],
  components: {
    Container
  },
  // methods: {
  //   async fetchCategories() {
  //           this.categories  = await axios.get('/api/category')
  //           .then(res =>res.data)
  //           .catch(err =>console.error(err));
  //           document.querySelector('#content').style.opacity = "1";
  //           document.querySelector('#content').style.visibility = "visible"
  //       }
  // }

  setup: () => ({
        title: 'Vue working, keep going'
    }),
  // created() {
  //       this.fetchCategories()
  //   }
}

</script>

<style lang="scss">

</style>
