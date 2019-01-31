<template>
<div> 
    <div class="container">
        <div class="row">
            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">{{shirt.name}}</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">SeedCoins  <small class="text-muted">/ {{shirt.numberSeedCoin}}</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                        <p class="card-text">{{shirt.description}}</p>                       
                        </ul>
                        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Agregar al carrito</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
</template>
 
<script>
    export default {
        props:['shirt','shirtlink','shirtimagepath'],
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            addToCart(){
                bus.$emit('added-to-cart',this.shirt);
            },
            addToCompare(){
                bus.$emit('added-to-compare',this.shirt);
            },
            htmlToText(html) {
                var tag = document.createElement('div');
                tag.innerHTML = html;

                return tag.innerText;
            }
        }
    }
</script>
