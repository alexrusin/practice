import Vue from 'vue';


Vue.component('wins-graph', require('./components/WinsGraph.vue'));

new Vue({
	el: '#chart-app'
});