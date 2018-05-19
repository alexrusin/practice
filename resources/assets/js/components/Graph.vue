<template>
   
    <canvas  width="400" height="400"></canvas>
  
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

        mounted() {

            const data = {
                type: 'line',
                data: {
                    labels: this.labels,
                    datasets: [{
                        data: this.values,
                           backgroundColor: [
                                this.color,
                                
                                
                            ],
                            borderColor: [
                               this.borderColor,
                               
                               
                           ],
                           borderWidth: 1
                    }]
                },
                options: {
                    responsive: false
                }
            };

           
            var myChart = new Chart(this.$el, data);
        }
    }
</script>
