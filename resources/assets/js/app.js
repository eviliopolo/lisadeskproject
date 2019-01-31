
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
Vue.use(require('vue-resource'));
window.bus = new Vue();

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('experience-list', require('./components/ExperienceList.vue'));
Vue.component('InfiniteLoading', require('vue-infinite-loading'));
Vue.component('plan', require('./components/Plan.vue'));
Vue.component('plan-list', require('./components/PlanList.vue'));
Vue.component('cart-count', require('./components/CartCount.vue'));
Vue.component('cart-detail', require('./components/CartDetail.vue'));

const app = new Vue({
    el: '#app',
    data: {
        cart: []
    },
    created(){
        this.getCart();

        bus.$on('added-to-cart', (product) => {
            this.addToCart(product);
        });

        bus.$on('remove-from-cart', (product) => {
            this.removeFromCart(product);
        });
    },
    computed: {
        cartTotal(){
            return this.cart.reduce((total, product) => {
                return total + product.qty * product.Value;
            }, 0);
        },
        totalItems(){
            return this.cart.reduce((total, product) => {
                return total + product.qty;
            }, 0);
        }
    },
    methods: {
        getCart () {
            if (localStorage && localStorage.getItem('cart')) {
                this.cart = JSON.parse(localStorage.getItem('cart'));

            } else {
                this.cart = [];
            }
        },
        addToCart(product){
            const matchingProductIndex = this.cart.findIndex((item) => {
                return item.id === product.id;
            });

            if (matchingProductIndex > -1) {
                this.cart[matchingProductIndex].qty++;
            } else {
                product.qty = 1;
                this.cart.push(product);

            }

            localStorage.setItem('cart', JSON.stringify(this.cart));
        },

        removeFromCart(product){
            const matchingProductIndex = this.cart.findIndex((item) => {
                return item.id == product.id;
            });

            if (this.cart[matchingProductIndex].qty <= 1) {
                this.cart.splice(matchingProductIndex, 1);
            } else {
                this.cart[matchingProductIndex].qty--;
            }

            localStorage.setItem('cart', JSON.stringify(this.cart));
        }

    }
});
