<template>
<div>
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Planes</h1>
      <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default Bootstrap components and utilities with little customization.</p>
    </div>

    <div class="container">
        <div class="row">
            <div v-for="plan in plans" class="card-deck mb-3 text-center">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">{{plan.name}}</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">SeedCoins  <small class="text-muted">/ {{plan.numberSeedCoin}}</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                        <p class="card-text">{{plan.description}}</p>
                      
                       
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
    import axios from 'axios'
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
              plans: [],
            };
          },
          created: function (){
              this.getPlans();
          },
          methods: {
              getPlans: function() {
                  var urlPlans = 'list-plans';
                  axios.get(urlPlans).then(response =>{
                      this.plans = response.data
                  });
              }
          },
    }
</script>
