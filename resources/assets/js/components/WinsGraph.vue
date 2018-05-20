<script>
    import ParentGraph from './ParentGraph.vue';
    export default ParentGraph.extend ({
    	props: ['player', 'opponent'],

    	mounted() {

            this.render({
                type: 'bar',
                data: {
                    labels: ['Wins'],
                    datasets: [{
                        label: this.player.name,
                        data: [this.player.wins],
                           backgroundColor: [
                              'rgba(255, 99, 132, 0.2)'  
                                
                                
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                               
                               
                           ],
                           borderWidth: 1
                        },
                        {
                            label: this.opponent.name,
                            data: [this.opponent.wins],
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
            });

        }

    });
</script>