<template>
    <div id="myproduct" class="container">
        <div class="row mt-2 mb-2">
            <div class="col-md-10">&nbsp;</div>
            <div class="col-md-2 text-right">
                <button class="btn btn-primary" data-toggle="modal" data-target="#cart">
                    <i class="fa fa-shopping-cart"></i> <span class="badge badge-light">{{badge}}</span>
                </button>
                <div class="modal fade" id="cart">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Your Cart</h4>
                                <button class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <table class="table table-striped text-left" v-show="carts.length > 0">
                                    <thead>
                                        <tr>
                                            <th>Item ID</th>
                                            <th>Name</th>
                                            <th>Price per unit (RM)</th>
                                            <th>Quantity</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(cart, n) in carts" :key="n">
                                            <td>{{cart.id}}</td>
                                            <td>{{cart.name}}</td>
                                            <td>{{ formatNumber(cart.price) }}</td>
                                            <td width="100">
                                                <input type="text" readonly class="form-control" v-model="cart.amount">
                                            </td>
                                            <td width="60">
                                                <button @click="removeCart(n)" class="btn btn-danger btn-sm"><i class="fa fa-close"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p v-show="carts.length < 1" class="text-left"> No items added</p>
                            </div>
                            <div class="modal-footer">
                                Total Price: RM {{ formatNumber(totalPrice) }} &nbsp;
                                <a href="/checkout" class="btn btn-primary" :class="{disabled: !carts.length}">CheckOut</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <h1 style="margin: 0px auto 20px auto">Black Panther Tea</h1>

            <!--pagination-->
            <div class="row mb-3">
                <div class="col-md-7">
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
                <div class="col-md-3">
                    Page: {{pagination.from_page}} - {{pagination.to_page}}
                    Total: {{pagination.total_page}}
                </div>
            </div>

            <!-- search engine -->
            <div class="col-xs-3 ml-4 mb-3">
                <input type="text" v-model="search" placeholder="Search for Names" class="">
                <i class="fa fa-search"></i>
            </div>

            <!--display teas-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6" v-for="(tea, index) in filteredTeas" v-bind:key="tea.id">
                        <div class="row border ml-2 mb-2">
                            <div class="col-sm-6">
                                <div style="margin: 20px 0px 20px 10px">
                                    <h4>{{tea.name}}
                                        <sup v-if="tea.rate==4" class="fa fa-fire d-inline" style="color:orangered; font-size:15px;"></sup>
                                    </h4>
                                    <img :src="'/storage/image/'+ tea.image" :alt="tea.name" style="width:100px;height:100px;display:block;"  class="m-2">
                                    <small class="m-2">{{tea.description}}</small>
                                    <p class="m-2"><b>Rating &nbsp;</b>
                                        <i v-for="rate in tea.rate" style="font-size:24px; color: #f9d71c;" class="fa fa-star"></i>
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div style="margin: 20px 10px 20px 0px">
                                    <p class="m-2"><b>Price </b></p> 
                                    <h4>RM{{ formatNumber(tea.price) }}</h4>
                                    <br>
                                    <p class="m-2"><b>Quantity </b></p> 
                                    <h4>{{tea.quantity}} unit(s)</h4>
                                    <br>
                                    <p v-if="!tea.quantity">We are out of Stock!</p>
                                    <p v-else-if="tea.quantity > 5 && tea.quantity < 10">Hurry Up!</p>
                                    <p v-else-if="tea.quantity >= 10">Fresh and Nice!</p>
                                    <span v-if="tea.quantity">
                                        <input type="number" @input="save($event, tea)" min="0" :max="tea.quantity" :key="index" style="width: 60px" value=0 class="mr-2 ml-3">
                                        unit(s)
                                    </span>
                                    <button @click="addCart()" class="btn btn-primary m-3 float-right" 
                                            :class="{disabled: !tea.quantity}" 
                                            :key="tea.id"
                                            >Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
                    
        </div>

        <!--pagination--><br>
        <div class="row mb-3">
            <div class="col-md-7">
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
            <div class="col-md-3">
                Page: {{pagination.from_page}} - {{pagination.to_page}}
                Total: {{pagination.total_page}}
            </div>
        </div>
    </div>
</template>
  
 
  
  
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
                amount:'', //quantity
                rate:''
            },
            add:true,
            edit:false,
            pagination: {},
            carts:[],
            cartadd:{
                id:'',
                name:'',
                price:'',
                amount:''
            },
            badge: '0',
            quantity: '1',
            totalPrice: '0',
            search:null
        }
    },
    created(){
        this.viewTea();
        this.viewCart();
    }, 
    methods: {
        viewCart(){
            if(localStorage.getItem('carts')){
                this.carts = JSON.parse(localStorage.getItem('carts'));
                this.badge = this.carts.length;
                this.totalPrice = this.carts.reduce((total, item) => {
                    // return total + this.quantity * item.price;
                    return total += item.amount * item.price;
                },0);
            }
            console.log(this.carts);
        },
        save(event, tea){
            if(event.target.value == 0){
                alert("Please enter quantity");
                // console.log("cartadd  "+JSON.stringify(this.cartadd));
            }else{
                this.cartadd.id = tea.id;
                this.cartadd.name = tea.name;
                this.cartadd.price = tea.price;
                this.cartadd.amount = event.target.value;
                // console.log("cartadd  "+JSON.stringify(this.cartadd));
            }
        },
        addCart(tea){
            if(this.cartadd.amount == null || this.cartadd.amount == 0){
                alert("Please enter quantity");
                // console.log("cartadd  "+JSON.stringify(this.cartadd));
            }
            else{
                const index = this.carts.findIndex(i => i.name === this.cartadd.name)
                if (index !== -1) {
                    this.carts.splice(index, 1, this.cartadd)
                } 
                else {
                    this.carts.push(this.cartadd);
                }
                this.cartadd = {};
                this.storeCart();
            }
        },
        removeCart(tea){
            this.carts.splice(tea, 1);
            this.storeCart();
        },
        storeCart(tea){
            let parsed = JSON.stringify(this.carts);
            localStorage.setItem('carts', parsed);
            this.viewCart();
        },
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
                };
            })
            .catch(err =>console.log(err));
        },
        formatNumber(fnumber){
            let val = parseFloat(fnumber).toFixed(2);
            return val.toString();
        }
    },
    computed:{
        filteredTeas(){
            if(this.search){
                return this.teas.filter((tea) => {
                    return this.search.toLowerCase().split(' ').every(v => tea.name.toLowerCase().includes(v));
                })
            }
            else{
                return this.teas;
            }
            
        }
    }
  }
</script>


<style>

</style>