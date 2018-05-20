<template>
	<div>
    	<canvas  width="800" height="600" ref="canvas"></canvas>
    	<div class="legend" v-html="legend"></div>

	</div>
</template>
<script>
	import Vue from 'vue';
	import Chart from 'chart.js';
	export default Vue.extend({
		data() {
			return {
				legend: ''
			};
		},

		methods: {
			render(data) {
				const myChart = new Chart(this.$refs.canvas, data);
	            this.legend = myChart.generateLegend();
			}
		}

	});
</script>

<style>
    .legend span {
        width: 10px;
        height: 10px;
        display: inline-block;
        margin-right: 10px;
    }
</style>