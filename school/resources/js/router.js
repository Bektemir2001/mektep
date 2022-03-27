import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter)

export default new VueRouter({
    mode:"history",
    routes:[
        {
            path:'/admin/main',
            component: function(){return import('./components/admin/admin_components/MainComponent')},
            name:'admin.main'
        },
        {
            path:'/admin/lesson',
            component: function(){return import('./components/admin/admin_components/lesson/LessonComponent')},
            name:'admin.lessons'
        }
    ]
})
