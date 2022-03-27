<template>
    <div class="container">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" v-model="name" class="form-control" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">age</label>
            <input type="number" v-model="age" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label class="form-label">Job</label>
            <input type="text" v-model="job" class="form-control" aria-describedby="emailHelp">
        </div>

        <button @click.privent="addPerson" class="btn btn-primary">Submit</button>
    </div>
</template>

<script>
    export default {
        name: 'CreateComponent',

        data(){
            return {
                name:null,
                age:null,
                job:null
            }
        },
        methods:{
            addPerson(){
                axios.post('/api/people', {name:this.name, age:this.age, job:this.job})
                .then(res => {
                    this.name = null;
                    this.age = null;
                    this.job = null;
                    this.$parent.$refs.index.getPeople();
                })
            }
        }
    }
</script>

<style scoped>

</style>
