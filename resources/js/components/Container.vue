<template>
    <div :class="'recipes-list'" :style="'background-image:url(/storage/' + currentCategory.logo + ')'">
        <div v-for="recipe in this.recipes"
                        :data-id="recipe.id"
                        :key="recipe.id"
                        @click="this.$emit('customRecipe', recipe)"
                        :class="'recipes-list-item'">
            <div :class="'recipes-list-item-title'">
                {{ recipe.title }}
            </div>
            <div>
                <img :src="'storage/' + recipe.logo" :alt="recipe.title">
            </div>
            <div :class="'recipes-list-item-subimg'">
                <div :class="'color-danger'">
                    <i class="fa-solid fa-fire"></i> <span>{{ recipe.calories }} kcal</span>
                </div>
                <div :class="'secondary-color'">
                   <i class="fa-solid fa-clock"></i> <span>{{ recipe.duration }} mins</span>
                </div>
            </div>
            <div :class="'btn-recipe-details text-white rounded mt-8 py-2 px-4 secondary-color-bg text-center cursor-pointer'">
               <span>Details</span>
            </div>
            
        </div>
    </div>
</template>
<script>
export default {
    name: 'Container',
    props: {
        recipes: {
            type: Object
        },
        currentCategory: {
           
        }
    },
}
</script>
