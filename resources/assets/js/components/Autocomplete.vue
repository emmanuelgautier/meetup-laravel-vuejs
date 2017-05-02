<template>
    <div>
        <input type="search" v-model="query" v-on:keyup="autoComplete" class="form-control">

        <div v-if="products.length">
            <div class="col-md-4" v-for="product in products">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h2>{{ product.name }}</h2>

                        <p>{{ product.description }}</p>

                        <a :href="`/products/${product.slug}`"><span class="glyphicon glyphicon-eye-open"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                query: '',
                products: []
            }
        },
        methods: {
            autoComplete() {
                this.products = [];
                if (this.query.length > 2) {
                    axios.get('/api/search', { params: { q: this.query } }).then(response => {
                        this.products = response.data.data;
                    });
                }
            }
        }
    }

</script>