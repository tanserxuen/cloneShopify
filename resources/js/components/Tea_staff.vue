<template>
    <div class="row">
        <h2>Tea</h2>

        <!--pagination-->
        <div class="row mb-3">
            <div class="col-md-8">
                <nav>
                    <ul class="pagination">
                        <li v-bind:class="{disabled: !pagination.first_link}" class="page-item">
                            <a href="#" @click="viewTea(pagination.first_link)" class="page-link">&laquo;</a>
                        </li>
                        <li v-bind:class="{disabled: !pagination.prev_link}" class="page-item">
                            <a href="#" @click="viewTea(pagination.prev_link)" class="page-link">&lt;</a>
                        </li>
                        <li v-for="n in pagination.last_page" v-bind:key="n" v-bind:class="{active: !pagination.current_page == n}" class="page-item">
                            <a href="#" @click="viewTea(pagination.path_page + n)" class="page-link">{{n}}</a>
                        </li>
                        <li v-bind:class="{disabled: !pagination.next_link}" class="page-item">
                            <a href="#" @click="viewTea(pagination.next_link)" class="page-link">&gt;</a>
                        </li>
                        <li v-bind:class="{disabled: !pagination.last_link}" class="page-item">
                            <a href="#" @click="viewTea(pagination.last_link)" class="page-link">&raquo;</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-4">
                Page: {{pagination.from_page}} - {{pagination.to_page}}
                Total: {{pagination.total_page}}
            </div>
        </div>

        <!--display teas-->
        <div class="col-md-9">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6" v-for="tea in teas" v-bind:key="tea.id">
                        <div class="row border ml-2 mb-2">
                            <div class="col-sm-6">
                                <div class="m-3">
                                    <h4>{{tea.name}}</h4>
                                    <img :src="'/storage/image/'+ tea.image" :alt="tea.name" style="width: 100px;height:100px;">
                                    <p>{{tea.description}}</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="m-3">
                                    <p>Price {{tea.price}}</p>
                                    <p>Quantity {{tea.quantity}}</p>    
                                    <p>Rating {{tea.rate}}</p>                                 
                                    <button @click="deleteTea(tea.id)" class="btn btn-danger" style="float:right;">Delete</button>
                                    <button @click="editTea(tea)" class="btn btn-warning mr-2 mb-1" style="float:right;">Edit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        <!--form-->
        <div class="col-md-3">
            <form>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" v-model="tea.name">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea type="text" class="form-control" v-model="tea.description"></textarea>
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="number" class="form-control col-xs-3" min=0 step=0.5 v-model="tea.price">
                </div>
                <div class="form-group">
                    <label>Quantity</label>
                    <input type="number" class="form-control col-xs-3" min=0 v-model="tea.quantity">
                </div>
                <div class="form-group">
                    <label>Rate</label>
                    <input type="number" class="form-control col-xs-3" min=0 v-model="tea.rate">
                </div>
                <!-- <div class="custom-file">
                    <input type="file" id="customFile" class="custom-file-input" @change="imageSelected">
                    <label class="custom-file-label" for="customFile"><i class="fa fa-image">&nbsp;Choose an image</i></label>
                </div>
                <div v-if="imagePreview">
                    <img :src="imagePreview" alt="" class="figure-img img-fluid rounded mt-5" style="max-height: 100px;">
                    <p>{{imageName}}</p>
                </div>    -->
                
                <div class="alert alert-danger" v-show="errors.length">
                    <strong>Please correct the following error(s):</strong>
                    <ul>
                        <li v-for="error in errors">{{ error }}</li>
                    </ul>
                </div>

                <button v-if="add" @click.prevent="checkform()" class="btn btn-primary mt-3">Add</button>
                <button v-if="edit" @click.prevent="updateTea(tea.id)" class="btn btn-primary mt-3">Edit</button>
            </form>
        </div>
    </div>
</template>
  
  
<style>
  .product-item{
    width: 350px;
    float: left;
  }
</style>
  
  
<script>
  export default{
    name: 'teas',
    data(){
        return {
            teas:[],
            tea: {
                id:'',
                name:'',
                image:'',
                description:'',
                price:'',
                quantity:'',
                rate: ''
            },
            add:true,
            edit:false,
            pagination: {},
            errors:[],
            // imagePreview:'',
            // imageName:''
        }
    },
    created(){
        this.viewTea();
    }, 
    methods: {
        viewTea(pg){
            pg = pg || 'api/teas';
            fetch(pg)
           //fetch('api/teas')
            .then(res => res.json())
            .then(res => {
                this.teas = res.data;
                this.pagination = {
                  current_page: res.meta.current_page,
                  last_page: res.meta.last_page,
                  from_page: res.meta.from,
                  to_page: res.meta.to,
                  total_page: res.meta.total,
                  path_page: res.meta.path+"?page=",
                  first_link: res.links.first,
                  last_link: res.links.last,
                  prev_link: res.links.prev,
                  next_link: res.links.next
                },
                console.log(res.data);
            })
            .catch(err =>console.log(err));
        },
        addTea(){
            let data = new FormData;
            data.append('image', this.tea.image);
            console.log(this.tea);
            console.log(this.tea.name);
            // console.log(this.tea.image);
            console.log(this.tea.description);
            console.log(this.tea.quantity);
            console.log(this.tea.rate);
            console.log(this.tea.price);

            fetch('api/teas',{
                method: 'POST', 
                body: JSON.stringify(this.tea),
                headers:{
                    'Content-Type': "application/json"
                    // 'Content-Type': "application/x-www-form-urlencoded"
                }
            })
            .then(res => res.json())
            .then(data => {
                alert('Tea added');
                this.tea.name = '';
                this.tea.description = '';
                // this.tea.image = '';
                // this.imagePreview = '';
                this.tea.price = '';
                this.tea.quantity = '';
                this.tea.rate = '';
                this.viewTea();
            })
            .catch(err =>console.log(err));
        },
        editTea(tea){
            //tea.name is data of the parameter
            this.add = false;
            this.edit = true;
            this.tea.id = tea.id
            this.tea.name = tea.name
            // this.image = '';
            // this.imagePreview = '';
            this.tea.description = tea.description
            this.tea.price = tea.price
            this.tea.quantity = tea.quantity
            this.tea.rate = tea.rate
        },
        updateTea(id){
            fetch(`api/teas/${id}`,{
                method: 'PUT', 
                body: JSON.stringify(this.tea),
                headers:{
                    'Content-Type': 'application/json'
                }
            })
            .then(res => res.json())
            .then(data => {
                this.tea.name = '';
                this.tea.description = '';
                // this.image = '';
                // this.imagePreview = '';
                this.tea.price = '';
                this.tea.quantity = '';
                this.tea.rate = '';
                alert('Tea updated');
                this.viewTea();
            })
            .catch(err =>console.log(err));
        },
        deleteTea(id){
            if(confirm('Are you sure?')){
                fetch(`api/teas/${id}`,{
                    method: 'delete'
                })
                .then(res => res.json())
                .then(data => {
                    alert('Tea deleted');
                    this.viewTea();
                })
                .catch(err => console.log(err));
            }
        },
        checkform(){
            this.errors = [];

            if(this.tea.name && this.tea.description && this.tea.price && this.tea.quantity && this.tea.rate
                && this.isNumeric(this.tea.price) && this.isInt(this.tea.quantity) && this.isInt(this.tea.rate)
                && this.tea.rate > 0 && this.tea.rate < 6 && this.tea.price > 0 && this.tea.quantity > 0)
                this.addTea();

            if(!this.tea.name){
                this.errors.push('Name is required');
            }
            
            if(!this.tea.description){
                this.errors.push('Description is required');
            }

            if(!this.tea.price){
                this.errors.push('Price is required');
            }
            else if(!this.isNumeric(this.tea.price)){
                this.errors.push('Price must be a number');
            }

            if(!this.tea.quantity){
                this.errors.push('Quantity is required');
            }
            else if(!this.isInt(this.tea.quantity)){
                this.errors.push('Quantity must be a number');
            }

            if(!this.tea.rate){
                this.errors.push('Rate is required');
            }
            else if(!this.isInt(this.tea.rate)){
                this.errors.push('Rate must be a number');
            }
            
            if(!this.tea.rate < 0 || this.tea.rate >6){
                this.errors.push('Rate between 1-5');
            }

            if(!this.tea.rate < 0 || !this.tea.price < 0 || !this.tea.quantity < 0){
                this.errors.push('Negative numbers are not allowed');
            }

            // console.log(this.errors);
        },
        isInt(n) {
            return n % 1 === 0;
        },
        isNumeric(n) {
            return !isNaN(parseFloat(n)) && isFinite(n);
        },
        // imageChanged(e){
        //     console.log(e);
        //     var fileReader = new FileReader()
        //     fileReader.readAsDataURL(e.target.files[0]);

        //     fileReader.onload = (e) => {
        //         this.tea.image = e.target.result
        //     }

        //     console.log(this.tea);
        // }
        // imageSelected(e){
        //     this.tea.image = e.target.files[0];
        //         this.imageName = this.tea.image.name;

        //     let reader = new FileReader();
        //     reader.readAsDataURL(this.tea.image);
        //     reader.onload = e => {
        //         this.imagePreview = e.target.result;
        //     };
        //     console.log(this.tea);
        // }
    }
  }
</script>