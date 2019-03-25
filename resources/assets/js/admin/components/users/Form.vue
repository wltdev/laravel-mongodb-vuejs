<template>
    <div>
        <div class="alert alert-success" v-if="saved">
            <strong>Success!</strong> User has been saved successfully.
        </div>

        <div class="well well-sm" id="signature-form">
            <form class="form-horizontal" method="post" @submit.prevent="onSubmit">
                <fieldset>
                    <legend class="text-center">Create User</legend>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Name</label>
                        <div class="col-md-9" :class="{'has-error': errors.name}">
                            <input id="name"
                                   v-model="data.name"
                                   type="text"
                                   placeholder="Your name"
                                   class="form-control">
                            <span v-if="errors.name" class="help-block text-danger">{{ errors.name[0] }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="email">Your E-mail</label>
                        <div class="col-md-9" :class="{'has-error': errors.email}">
                            <input id="email"
                                   v-model="data.email"
                                   type="email"
                                   placeholder="Your email"
                                   class="form-control">
                            <span v-if="errors.email" class="help-block text-danger">{{ errors.email[0] }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="email">Password</label>
                        <div class="col-md-9" :class="{'has-error': errors.password}">
                            <input id="password"
                                   v-model="data.password"
                                   type="password"
                                   placeholder="Password"
                                   class="form-control">
                            <span v-if="errors.password" class="help-block text-danger">{{ errors.password[0] }}</span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="email">Password Confirmation</label>
                        <div class="col-md-9" :class="{'has-error': errors.password_confirmation}">
                            <input id="password_confirmation"
                                   v-model="data.password_confirmation"
                                   type="password"
                                   placeholder="password_confirmation"
                                   class="form-control">
                            <span v-if="errors.password_confirmation" class="help-block text-danger">{{ errors.password_confirmation[0] }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12 text-right">
                            <button type="submit" class="btn btn-primary ">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</template>

<script>
    export default {

        data() {
            return {
                errors: [],
                saved: false,
                data: {
                    name                  : null,
                    email                 : null,
                    password              : null,
                    password_confirmation : null,
                }
            };
        },

        methods: {
            onSubmit() {
                this.saved = false;

                axios.post('/admin/users', this.data)
                    .then(({data}) => this.setSuccessMessage(data))
                    .catch(({response}) => this.setErrors(response));
            },

            setErrors(response) {
                this.errors = response.data.errors;
            },

            setSuccessMessage(data) {
                console.log(data)
                this.reset();
                this.saved = true;
            },

            reset() {
                this.errors = [];
                this.signature = {name: null, email: null, body: null};
            }
        }
    }
</script>