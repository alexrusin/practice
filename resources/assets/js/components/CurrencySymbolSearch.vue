<template>
    <div class="container">
       <input type="text" placeholder="Symbol search..." v-model="symbol">
       
       <select v-model="market">
          <option disabled value="">Please select market</option>
          <option>USD</option>
          <option>CNY</option>
          <option>INR</option>
        </select>
        <button type="button" @click="findSymbol">Search</button>
        <digital-currency-chart :currency-symbol="symbol" api-key="YPSEZZ91IMYTHW1Z" :request-onload="false" :market="market" ref="digitalCurrencyChart"></digital-currency-chart>

    </div>
</template>

<script>
    export default {

        data() {
            return {
                symbol:"",
                market: ""
            };
        },

        methods: {
            findSymbol() {
                if(!this.symbol) {
                    alert("Please select symbol");
                    return;
                }

                if(!this.market) {
                    alert("Please select market");
                    return;
                }
                this.$refs.digitalCurrencyChart.sendRequest();
            }
        }
    }
</script>