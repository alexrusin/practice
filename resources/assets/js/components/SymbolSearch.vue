<template>
    <div class="container">
       <input type="text" placeholder="Symbol search..." v-model="symbol">
       <button type="button" @click="findSymbol">Search</button>
       <stock-chart :stock-symbol="symbol" api-key="YPSEZZ91IMYTHW1Z" :request-onload="false" ref="stockChart"></stock-chart> 

    </div>
</template>

<script>
    export default {

        data() {
            return {
                symbol:""
            };
        },

        methods: {
            findSymbol() {
                this.$refs.stockChart.sendRequest();
            }
        }
    }
</script>