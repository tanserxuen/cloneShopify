<template>
    <div>
        <div>{{errors.fname?errors.fname[0]:''}}</div>
        <form @submit.prevent="check()" action="/login" class="jumbotron">
        <h1 style="text-align:center;">Register</h1>
        <div class="alert alert-success" v-if="success == true">Register Successfully!</div>
        <div class="alert alert-danger" v-if="error.saved">{{ error.saved}}</div>
            <div class="form-group col-xs-6">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" placeholder="Enter Username" class="form-control" v-model="user.username">
                    <div class="alert alert-danger" v-if="error.username">{{ error.username}}</div>
                </div>
                <div class="form-group ">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter Email" class="form-control" v-model="user.email">
                    <div class="alert alert-danger" v-if="error.email">{{ error.email}}</div>
                </div>
                <div class="form-group ">
                    <label for="Password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter Password" class="form-control" v-model="user.password">
                    <div class="alert alert-danger" v-if="error.password">{{ error.password}}</div>
                </div>
                <div class="form-group ">
                    <label for="RetypePassword">Repeat Password</label>
                    <input type="password" name="retypepassword" id="RetypePassword" placeholder="Repeat Password" class="form-control" v-model="user.retypepassword">
                    <div class="alert alert-danger" v-if="error.retypepassword">{{ error.retypepassword}}</div>
                </div>
                <button class="btn btn-warning float-right" type="submit">Confirm</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default{
        data(){
            return{
                user: {
                    username:'',
                    email:'',
                    password:'',
                    retypepassword:''
                },
                errors:[],
                error: {
                    username:'',
                    email:'',
                    password:'',
                    retypepassword:'',
                    saved:''
                },
                success:false
            }
        },
        methods:{
            check(){
                this.error = {};
                if(this.user.password === this.user.retypepassword){
                    if(this.user.password != "" && this.user.retypepassword != "" && this.user.username != "" && this.user.email != ""){
                        this.addUser();
                    }
                } 
                else {
                    this.user.password='';
                    this.user.retypepassword='';
                    this.error.password = "Passwords do not match.";
                    this.error.retypepassword = "Passwords do not match.";
                }
                if(this.user.username == "") this.error.username = "Please fill in username field.";
                if(this.user.email == "") this.error.email = "Please fill in email field.";
                if(this.user.password == "") this.error.password = "Please fill in password field.";
                if(this.user.retypepassword == "") this.error.retypepassword = "Please fill in retypepassword field.";
            },
            addUser(){
                fetch('api/loginn', {
                    method: 'POST',
                    body: JSON.stringify(this.user),
                    headers: {
                        'Content-Type' : 'application/json'
                    }
                })
                .then(res => {
                    res.json();
                    // let $msg = res.data;
                    if(res.isvalid == false){
                        this.errors = res.errors;
                    }
                    // console.log(res);
                    // if(res.status == 200) this.success = true;
                })
                .then(data => {
                    this.user = {};
                    // console.log(this.user);
                })
                .then(err => console.log(err))
                .then(response => {
                    if(response.isValid == false){
                        this.errors = response.errors;
                    }
                    console.log(response.data.errors);
                });
                // .then(res => {
                //     console.log(res);
                //     if(res.status == 200) this.success = true
                //     else this.error.saved = "An error occurred!"
                // });
                this.success = true;
                this.error={};
            }
        }
    }
</script>