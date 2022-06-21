<?php include_once('RecuperationLog.php');?>
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

                    labels: ['0', '1', '2', '3', '4', '5','6', '7', '8', '9', '10', '11','12', '13', '14', '15', '16', '17','18', '19', '20'],


                    datasets: [{

                        label: 'Stress',

                        data: ['', <?php echo abs($val[19])?>, <?php echo abs($val[18])?>, <?php echo abs($val[17])?>, <?php echo abs($val[16])?>, <?php echo abs($val[15])?>, <?php echo abs($val[14])?>, <?php echo abs($val[13])?>, <?php echo abs($val[12])?>,<?php echo abs($val[11])?>,<?php echo abs($val[10])?>,<?php echo abs($val[9])?>,<?php echo abs($val[8])?>,<?php echo abs($val[7])?>,<?php echo abs($val[6])?>,<?php echo abs($val[5])?>,<?php echo abs($val[4])?>,<?php echo abs($val[3])?>,<?php echo abs($val[2])?>,<?php echo abs($val[1])?>,<?php echo abs($val[0])?>],
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