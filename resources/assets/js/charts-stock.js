window._ = require('lodash');

window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import Vue from 'vue';


Vue.component('stock-chart', require('./components/StockChart.vue'));

new Vue({
	el: '#chart-app'
});