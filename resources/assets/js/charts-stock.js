window._ = require('lodash');

window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import Vue from 'vue';


Vue.component('stock-chart', require('./components/StockChart.vue'));
Vue.component('digital-currency-chart', require('./components/DigitalCurrencyChart.vue'));
Vue.component('currency-symbol-search', require('./components/CurrencySymbolSearch.vue'));
Vue.component('symbol-search', require('./components/SymbolSearch.vue'));

new Vue({
	el: '#chart-app'
});