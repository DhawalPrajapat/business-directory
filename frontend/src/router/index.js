import { createRouter, createWebHistory } from 'vue-router';

import Home from '../views/Home.vue';
import Login from '../views/Login.vue';
import Register from '../views/Register.vue';
import AddBusiness from '../views/AddBusiness.vue';

const routes = [
  { path: '/', name: 'Home', component: Home },
  { path: '/login', name: 'Login', component: Login },
  { path: '/register', name: 'Register', component: Register },
  { path: '/add-business', name: 'AddBusiness', component: AddBusiness }
];

const router = createRouter({
  history: createWebHistory(),
  routes
});

export default router;
