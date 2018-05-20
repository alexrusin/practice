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
                symbol:''
            };
        },

    	mounted() {

           axios.get(this.url)
              .then((response) => {
                console.log(response.data);
                this.symbol = response.data["Meta Data"]["2. Symbol"];
                this.title = response.data["Meta Data"]["1. Information"] + " for " + this.symbol;
                this.timeSeries = response.data["Time Series (Daily)"];

                for (let label in this.timeSeries) {
                    this.labels.push(label);
                    this.data.push(this.timeSeries[label]["5. adjusted close"]);
                }

                this.labels = this.labels.reverse();
                this.data = this.data.reverse();

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
                        responsive: true
                    }
                });


              })
              .catch((error) => {
                console.log(error);
              });
        }

    });
</script>