<div>
    <canvas id="monGraph" width="100" height="50" style="background-color: rgba(215, 239, 219, 0.8);"></canvas>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha512-s+xg36jbIujB2S2VKfpGmlC3T5V2TF3lY48DX7u2r9XzGzgPsa6wTpOQA7J9iffvdeBN0q9tKzRxVxw1JviZPg==" crossorigin="anonymous"></script>
    <script>
        let ctx = document.querySelector("#monGraph")

        let graph = new Chart(ctx, {
            type: "line",

            data: {

                labels: ['9','10','11','12','13','14'],


                datasets: [
                {
                    label: 'Graphe de la Température',
                    data: [20,21.7,22,22.5,24,25],
                    borderColor: 'red',

                },
                {
                    label: 'Graphe de la Température j-1',
                    data: [21,22,22.6,23,21,25],
                    borderColor: 'blue',

                }

            ],





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