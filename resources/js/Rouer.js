import { createWebHistory,createRouter } from "vue-router";
import App from './App.vue';
import Home from './components/Home.vue';
import Blog from './components/Blog.vue';
import About from './components/About.vue';
import Contact from './components/Contact.vue';
import Login from './components/Login.vue';
import Signup from './components/Signup.vue';
import Profile from './components/Profile.vue';

const routes = [
    {
        path : '/',
        name : 'Home',
        component : Home
    },
    {
        path : '/blog',
        name : 'Blog',   
        component : Blog
    },
    {
        path : '/about',
        name : 'About',
        component : About
    },
    {
        path : '/contact',
        name : 'Contact',
        component : Contact
    },
    {
        path : '/login',
        name : 'Login',
        component : Login
    },
    {
        path : '/signup',
        name : 'Signup',
        component : Signup
    },
    {
        path : '/profile',
        name : 'Profile',
        component : Profile
    }
];

const router = createRouter({

    history:createWebHistory(),
    routes
});
export default router