<div>
    <canvas id="monGraph" width="100" height="50" style="background-color: rgba(215, 239, 219, 0.8);"></canvas>
    <script>
        let ctx = document.querySelector("#monGraph")

        let graph = new Chart(ctx, {

            type: "line",

            data: {

                labels: ['0', '1', '2', '3', '4', '5','6', '7', '8', '9','10'],


                datasets: [{

                    label: 'Température',

                    data: ['', <?php echo abs($val[19])?>, <?php echo abs($val[18])?>, <?php echo abs($val[17])?>, <?php echo abs($val[16])?>, <?php echo abs($val[15])?>, <?php echo abs($val[14])?>, <?php echo abs($val[13])?>, <?php echo abs($val[12])?>,<?php echo abs($val[11])?>,<?php echo abs($val[10])?>],
                    borderColor: 'blue'

                }]

            },

            options: {

                title: {

                    display: true,

                    text: 'Témpérature'

                },

                legend: {

                    position: 'bottom'

                }

            }

        })
    </script>
</div>