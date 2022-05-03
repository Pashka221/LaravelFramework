@extends('Header')

@section('content')
    <form class="row g-3">
        <div class="container mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <div class="card px-5 py-5" id="form1">
                        <div class="form-data" v-if="!submitted">
                            <div class="forms-inputs mb-4"> <span>Login </span><br> <input placeholder="Login" autocomplete="off" type="text" v-model="email" v-bind:class="{'form-control':true, 'is-invalid' : !validEmail(email) && emailBlured}" v-on:blur="emailBlured = true">
                                <div class="invalid-feedback">A valid email is required!</div>
                            </div>
                            <div class="forms-inputs mb-4"> <span>Password</span><br> <input placeholder="Password" autocomplete="off" type="password" v-model="password" v-bind:class="{'form-control':true, 'is-invalid' : !validPassword(password) && passwordBlured}" v-on:blur="passwordBlured = true">
                                <div class="invalid-feedback">Password must be 8 character!</div>
                            </div>
                            <div class="mb-3"> <button v-on:click.stop.prevent="submit" class="btn btn-dark w-50">Login</button> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

