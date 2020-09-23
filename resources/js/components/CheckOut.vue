<template>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <h3 class="card-header">Order Summary</h3>
                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Product Code</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price (RM)</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(cart, index) in carts" :key="index">
                                    <td>{{ index+1 }}</td>
                                    <td>{{cart.id}}</td>
                                    <td>{{cart.name}}</td>
                                    <td>{{ formatNumber(cart.price) }}</td>
                                    <td>{{cart.amount}}</td>
                                    <td>{{ formatNumber( calc(cart.amount, cart.price) ) }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <input type="checkbox" v-model="checked" class="m-2 text-left">Shipping<br>
                        <div class="mt-2 text-right">
                            <p>Total Price: RM {{ formatNumber(total) }}</p>
                            
                            <button class="btn btn-info" @click="addToOrderTable('ebank')">Online Bank In</button>
                            <button class="btn btn-primary" @click="addToOrderTable('FPX')">FPX</button>
                            <button class="btn btn-primary" @click="addToOrderTable('Cash')">Cash on Deliver</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<style>

</style>


<script>
export default{
    props:{
        userid: {
            type: Number,
            required: true
        }
    },
    data(){
        return{
            carts:[],   //id, name, price, amount
            order:{
                id:'',
                user_id : '',
                order_id : '',
                shipping: false,
                customer_id: '',
                payment : '',
                tea_id : [],
                quantity : [],
                unit_price:[]
            },
            checked: true
        }
    },
    created(){
        this.viewCart();
    },
    methods:{
        viewCart(){
            if(localStorage.getItem('carts')){
                this.carts = JSON.parse(localStorage.getItem('carts'));
                
            };
            
            //add tea_id and quantity
            for(var i=0; i<this.carts.length;i++){
                this.order.tea_id.push(this.carts[i].id);
                this.order.quantity.push(JSON.parse(this.carts[i].amount));
                this.order.unit_price.push(JSON.parse(this.carts[i].price));
            }
            
            this.order.customer_id = this.userid;
            this.order.user_id = this.userid;
            console.log(this.order);
        },
        addToOrderTable(payment){
            this.order.payment = payment;
            this.order.shipping = this.checked;
            console.log("add payment: "+JSON.stringify(this.order));

            fetch('api/orders', {
                method: 'post',
                body: JSON.stringify(this.order),
                headers: {
                    'Content-Type' : 'application/json'
                }
            })
            .then(res => res.json())
            .then(data => 
                console.log(this.order),
                alert('Order Added'),
                this.order.id='',
                this.order.user_id='',
                this.order.order_id='',
                this.order.shipping='',
                this.order.customer_id='',
                this.order.payment='',
                this.order.tea_id=[],
                this.order.quantity=[],
                this.order.unit_price=[],
                console.log(this.order)
            )
            .catch(err => console.log(err));
            this.removeCart();
        },
        formatNumber(fnumber){
            let p = parseFloat(fnumber).toFixed(2);
            return p.toString();
        },
        removeCart(){
            localStorage.removeItem('carts');
            alert('Order Summary has been sent to your email');
            window.location.href = 'http://practise.test/sendOrder/';
        },
        calc(price, amount){
            return price*amount;
        }
    },
    computed:{
        total(){
            let t =0;
            t = this.carts.reduce((total, item) => {
                return total += item.amount * item.price;
            },0);

            if(this.checked == true){
                t+=4.99;
            }
            
            return t;
        }
    }
}
</script>