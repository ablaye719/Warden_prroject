<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    
    <body>
        <?php include_once('header.php'); ?>

        
        <canvas id="monGraph" width="400" height="150" style="background-color: rgba(215, 239, 219, 0.8);"></canvas>
        



        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha512-s+xg36jbIujB2S2VKfpGmlC3T5V2TF3lY48DX7u2r9XzGzgPsa6wTpOQA7J9iffvdeBN0q9tKzRxVxw1JviZPg==" crossorigin="anonymous"></script>
        <script>

        let ctx = document.querySelector("#monGraph")

        let graph = new Chart(ctx, {

            type: "line",

            data: {

                labels: ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],

                datasets: [{

                    label: 'Stress',

                    data: [12, 19, 3, 5, 2, 3],

                    borderColor: 'red'

                }]

            },

            options: {

                title: {

                    display: true,

                    text: 'Graph Stress'

                },

                legend: {

                    position: 'bottom'

                }

            }

        })

    </script>














    </body>

    <footer>
        <a id='CGU' href="cgu.php"><span>CGU</span></a>
        <a id='FAQ' href="Faq.php"><span>FAQ</span></a>
    </footer>

    
</html>