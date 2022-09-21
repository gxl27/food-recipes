require('./bootstrap');

import { createApp } from 'vue'
import  Vueroot from './Vueroot.vue'

const app = createApp({})

app.component('vueroot', Vueroot)

app.mount('#app')