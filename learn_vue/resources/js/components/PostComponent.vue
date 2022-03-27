<template>
    <div class="container">
        <CreateComponent></CreateComponent>
        <IndexComponent ref="index"></IndexComponent>
    </div>
</template>

<script>
    import BektemirComponent from "./BektemirComponent";
    import CreateComponent from "./CreateComponent";
    import IndexComponent from "./IndexComponent";

    export default {
        name:"PostComponent",

        data(){
            return {
                name:null,
                age:null,
                job:null

            }
        },
        mounted(){
            this.getPost()
        },
        methods:{
            getPost(){
                axios.get('/posts')
                .then(data => {
                    this.people = data.data;
                })
                }
        },


        components:{
            IndexComponent,
            BektemirComponent,
            CreateComponent
        }
    }
</script>

<style scoped>

</style>
