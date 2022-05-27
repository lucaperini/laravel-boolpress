window.axios = require("axios");
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

window.Vue = require("vue");

import Vue from "vue";
import VueRouter from "vue-router";
import App from "./views/App";

Vue.use(VueRouter);

import Home from "./pages/Home";
import AboutUs from "./pages/AboutUs";
import Posts from "./pages/Posts";

const router = new VueRouter({
    mode: 'history',
    routes: [

        {
            path: "/home",
            name: "home",
            component: Home,
        },


        {
            path: "/about-us",
            name: "about",
            component: AboutUs,
        },

        {
            path: "/posts",
            name: "posts",
            component: Posts,
        },
    ],
});

const app = new Vue({
    el: "#root",
    render: (h) => h(App),
    router
});
