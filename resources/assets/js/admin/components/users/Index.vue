<template>
    <div>
        <div class="well well-sm">
            <div class="table-responsive">
                <table class="table table-striped table-no-bordered table-hover">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th></th>
                    </thead>
                    <tbody>
                        <tr v-for="item in data.users" v-bind:key="item._id">
                            <td> {{ item._id }} </td>
                            <td> {{ item.name }} </td>
                            <td> {{ item.email }} </td>
                            <td>
                                <a v-bind:href="item.url">Editar</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div> 
        </div>    
    </div>
</template>

<script>
    export default {

        data() {
            return {
                errors: [],
                data: {
                    users: []
                }
            };
        },

        mounted(){
            axios.get('/admin/users/get-collection')
                .then( 
                     response => {
                        console.log(response.data)
                        this.setUsers( response ) 
                    },
                )
                .catch( ({ response }) => this.setErrors( response ) );
        },

        methods: {

            setUsers( response ) {
                this.data.users = response.data;
            },

            setErrors( response ) {
                console.log(response)
            }
        }
    }
</script>