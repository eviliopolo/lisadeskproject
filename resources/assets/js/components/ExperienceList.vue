<template>
 <main role="main">
       <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Course example</h1>
          <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
          <p>
            <a href="#" class="btn btn-primary my-2">Main call to action</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
          </p>
        </div>
      </section>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <div v-for="item in list" class="col-md-4">                             
                        <div  class="card mb-4 shadow-sm">
                            <img class="card-img-top" :src="getAvatar(item.pathImage)" v-bind:alt="pic">
                            <div class="card-body">
                                <p class="card-text">{{item.description}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Detalle</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Ventajas</button>
                                    </div>
                                    <small class="text-muted">{{item.name}}</small>
                                </div>
                            </div>
                        </div>                
                </div>                                               
            </div>
            <infinite-loading  @distance="1" @infinite="infiniteHandler"></infinite-loading>       
            
            
        </div>
    </div>
</main>
</template>
 
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
              list: [],
              page: 1,
            };
          },
          methods: {
            infiniteHandler($state) {
                let vm = this;
 
                this.$http.get('/experiencieslist?page='+this.page)
                    .then(response => {
                        return response.json();
                    }).then(data => {
                        $.each(data.data, function(key, value) {
                                vm.list.push(value);
                        });
                        $state.loaded();
                    });
 
                this.page = this.page + 1;
            },
            getAvatar(avatar){
                return "/storage/"+avatar;
            },
          },
    }
</script>
