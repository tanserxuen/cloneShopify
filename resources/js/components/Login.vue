<template>
    <div>
        <form @submit.prevent="login" class="jumbotron">
            <h1 style="text-align:center;">Login</h1>
            <div class="form-group col-xs-6">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" placeholder="Enter Username" class="form-control" v-model="user.username">
                </div>
                <div class="form-group ">
                    <label for="Password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter Password" class="form-control" v-model="user.password">
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
                user:{
                    username:'',
                    password:''
                }
            }
        },
        mounted(){
            // console.log(this.user.username + '' + this.user.password);
        }, 
        methods:{
            login(){
                // window.location.href = '@Url.Action("checkAuth", "LoginnController")'
                window.location.href="/conf"
            }
        }
    }
</script>

