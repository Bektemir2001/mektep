import Vue from "vue";
import AdminComponent from "./components/admin/AdminComponent";
import router from "./router";

require('./bootstrap');

const app = new Vue({
    el: '#app',
    components:{
        AdminComponent
    },
    router
});
