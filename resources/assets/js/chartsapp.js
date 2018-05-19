
import Vue from 'vue';


Vue.component('graph', require('./components/Graph.vue'));

new Vue({
	el: '#chart-app'
});