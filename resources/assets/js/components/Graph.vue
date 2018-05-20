<template>
    <div>
        <canvas  width="400" height="400" ref="canvas"></canvas>
        <div class="legend" v-html="legend"></div>

    </div>
  
</template>

<script>
    import Chart from 'chart.js';
    export default {

        props: {
            labels: {},
            values: {},
            color: {
                default: 'rgba(54, 162, 235, 0.2)'
            },
            borderColor: {
                default: 'rgba(54, 162, 235, 1)'
            }
        },

        data() {
            return {
                legend:''
            }
        },

        mounted() {

            const data = {
                type: 'line',
                data: {
                    labels: this.labels,
                    datasets: [{
                        label: 'Monthly points',
                        data: this.values,
                           backgroundColor: [
                                this.color,
                                
                                
                            ],
                            borderColor: [
                               this.borderColor,
                               
                               
                           ],
                           borderWidth: 1
                        },
                        {
                            label: 'Other points',
                            data: [2, 50, 21],
                             backgroundColor: [
                                'rgba(153, 102, 255, 0.2)'
                                
                                
                            ],

                            borderColor: [
                                'rgba(153, 102, 255, 1)'
                            ],
                              
                            borderWidth: 1
                        }
                    ]
                },
                options: {
                    legend:false,
                    responsive: false
                }
            };

           
            const myChart = new Chart(this.$refs.canvas, data);
            this.legend = myChart.generateLegend();
        }
    }
</script>
<style>
    .legend span {
        width: 10px;
        height: 10px;
        display: inline-block;
        margin-right: 10px;
    }
</style>
