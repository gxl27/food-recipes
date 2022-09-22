<template>
    <div :class="'category-list'">
        <div v-for="category in this.categories"
                        :data-id="category.id"
                        :key="category.id"
                        @click="this.$emit('customCategory', category)"
                        >
                <span v-if="category.id == this.currentCategory.id"
                        class="category-active">
                        {{ category.title }}
                </span>
                <span v-else>
                        {{ category.title }}
                </span>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Categorybar',
    props: {
        categories: {
            type: Object
        },
        currentCategory: {
           
        }
    },
    emits: ['some']
}
</script>