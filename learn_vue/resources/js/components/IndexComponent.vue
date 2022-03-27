<template>
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">age</th>
                <th scope="col">Job</th>
            </tr>
            </thead>
            <tbody>
            <template v-for="person in people">
                <tr :class="isEdit(person.id) ? 'd-none' : ''">
                    <th scope="row">{{person.id}}</th>
                    <td>{{person.name}}</td>
                    <td>{{ person.age }}</td>
                    <td>{{person.job}}</td>
                    <td><a href="#" @click.prevent="changeEditPersonId(person.id, person.name, person.age, person.job)" class="btn btn-success">Edit</a></td>
                    <td><a href="#" @click.prevent="deletePerson(person.id)" class="btn btn-danger">Delete</a></td>
                </tr>
                <tr :class="isEdit(person.id) ? '' : 'd-none'">
                    <th scope="row">{{person.id}}</th>
                    <td><input type="text" v-model="name" class="form-control"></td>
                    <td><input type="text" v-model="age" class="form-control"></td>
                    <td><input type="text" v-model="job" class="form-control"></td>
                    <td><a href="#" @click.prevent="updatePerson(person.id)" class="btn btn-success">Update</a></td>
                </tr>
            </template>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        name: 'IndexComponent',

        data(){
            return {
                people:null,
                personId:null,
                name:null,
                age:null,
                job:null
            }
        },
        mounted() {
            this.getPeople()

        },
        methods:{
            getPeople(){
               axios.get('/api/people')
               .then(res=>{
                   this.people = res.data
               })
            },
            changeEditPersonId(id, name, age, job){
               this.personId = id;
               this.name = name;
               this.age = age;
               this.job = job
            },

            isEdit(id){
                return this.personId === id

            },

            updatePerson(id){
                this.personId = null

                axios.patch(`/api/people/${id}`, {name:this.name, age:this.age, job:this.job})
                .then(res=>{
                    this.getPeople()
                })
            },
            deletePerson(id){
                axios.delete(`/api/people/${id}`)
                    .then(res=>{
                        this.getPeople()
                    })
            }
        }
    }
</script>

<style scoped>

</style>
