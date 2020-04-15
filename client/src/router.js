import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from './views/Home.vue'
import Paintings from './views/Paintings.vue'
import Drawings from './views/Drawings.vue'
import Biography from './views/Biography.vue'
import Agenda from './views/Agenda.vue'
import Contact from './views/Contact.vue'

Vue.use(VueRouter)

const routes = [
  { path: '/', component: Home},
  { path: '/paintings', component: Paintings},
  { path: '/drawings', component: Drawings},
  { path: '/biography', component: Biography},
  { path: '/agenda', component: Agenda },
  { path: '/contact', component: Contact}
]

const router = new VueRouter({
  mode: 'history',
  base: __dirname,
  routes
})

export default router