<template>
    <div class="container">
        <div class="row">


            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Plan</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                </tr>
                </thead>
                
                <tbody>
                    <tr v-for="cartItem in cart">
                    <td>{{cartItem.description}}</td>
                    <td>{{cartItem.Value}}</td>
                    <td>
                        <button @click="removeFromCart(cartItem)" class="button alert tiny">-</button> <strong>{{cartItem.qty}}</strong> <button @click="addToCart(cartItem)" class="button success tiny">+</button>

                    </td>
                    <td>
                          {{cartItem.Value * cartItem.qty}}

                    </td>

                </tr>

                <tr>
                    <td></td>
                    <td>
                        Grand Total: {{carttotal}}
                </td>
                    <td>Items: {{ totalitems}}


                </td>
                    <td></td>
                    <td></td>

                </tr>
                </tbody>
            </table>

            

        </div>
    </div>
</template>

<script>
    export default {
        props:['cart','carttotal','totalitems'],

        methods:{
            removeFromCart(item){
                bus.$emit('remove-from-cart',item);

            },
            addToCart(item){
                bus.$emit('added-to-cart',item);

            }


        }
    }
</script>
