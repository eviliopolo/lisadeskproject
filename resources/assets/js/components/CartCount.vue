<template>
    <div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#checkoutDetailModal">
            <i class="fa fa-shopping-cart fa-2x" aria-hidden="true">
            </i>
            CART
            <span class="alert badge">
                    {{ cartcount }}
            </span>
        </button>

        

    </div>
</template>

<script>
    export default {
        props:['cartcount'],

        data(){
            return {
            }
        },

        created() {
            console.log('Component mounted.')
        },

    }
</script>
