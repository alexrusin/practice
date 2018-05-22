<template>
    <div>
        <div>
            <select v-model="time" @change="reRender">
                <option :value="7">last 7 days</option>
                <option :value="30">1 month</option>
                <option :value="90">3 months</option>
            </select>
        </div>
        <h1>{{title}}</h1>
        <canvas  width="800" height="600" ref="canvas"></canvas>
        <div class="legend" v-html="legend"></div>

    </div>
</template>

<script>
    import ParentGraph from './ParentGraph.vue';
    export default ParentGraph.extend ({
    	props: ['url'],

        data() {
            return {
                title: '',
                timeSeries: {},
                labels: [],
                data: [],
                symbol:'',
                time: 30
            };
        },

    	mounted() {

           axios.get(this.url)
              .then((response) => {
                console.log(response.data);
                this.symbol = response.data["Meta Data"]["2. Symbol"];
                this.title = response.data["Meta Data"]["1. Information"] + " for " + this.symbol;
                this.timeSeries = response.data["Time Series (Daily)"];
                this.massageData();

                this.render({
                    type: 'line',
                    data: {
                        labels: this.labels,
                        datasets: [
                            {
                            label: this.symbol,
                            data: this.data,
                               backgroundColor: [
                                  'rgba(54, 162, 235, 0.2)' 
                                    
                                    
                                ],
                                borderColor: [
                                    'rgba(54, 162, 235, 1)',
                                   
                                   
                               ],
                               borderWidth: 1
                            }
                        ]
                    },
                    options: {
                        legend:false,
                        responsive: false
                    }
                });


              })
              .catch((error) => {
                console.log(error);
              });
        }, 

        methods: {
            massageData() {
                let count = 0;
                this.labels = [];
                this.data = [];
                for (let label in this.timeSeries) {
                    if (count > this.time-1) {
                        break;
                    }
                    this.labels.push(label);
                    this.data.push(this.timeSeries[label]["5. adjusted close"]);
                    count++;
                }

                this.labels = this.labels.reverse();
                this.data = this.data.reverse();
            },

            reRender() {
                this.massageData();
                this.myChart.destroy();
                this.render({
                    type: 'line',
                    data: {
                        labels: this.labels,
                        datasets: [
                            {
                            label: this.symbol,
                            data: this.data,
                               backgroundColor: [
                                  'rgba(54, 162, 235, 0.2)' 
                                    
                                    
                                ],
                                borderColor: [
                                    'rgba(54, 162, 235, 1)',
                                   
                                   
                               ],
                               borderWidth: 1
                            }
                        ]
                    },
                    options: {
                        legend:false,
                        responsive: false
                    }
                });
            }
        }

    });
</script>