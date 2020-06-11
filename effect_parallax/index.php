<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Efeito parallax Javascript</title>
        <link href="css/style.css" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;500&display=swap" rel="stylesheet"> 
    </head>
    <body>
        <section>
            <!-- <h1 class="layer">Parallax & Clip-Art2</h1>-->
            <?php 
                include 'svg/ca.svg';
                include 'svg/iso-square-light-ca.svg';
            ?>
        </section>
        
        <script type="text/javascript">
            document.addEventListener('mousemove', parallax);

            function parallax(e){
                this.querySelectorAll('.layer').forEach(layer => {
                    let x = (window.innerWidth - e.pageX * 10) / 100;
                    let y = (window.innerHeight - e.pageY * 10) / 100;
                    layer.style.transform = `translate(${x}px,${y}px)`;
                })
            }

        </script>
        
        <script type="text/javascript">
            document.addEventListener('mousemove', parallax);

            function parallax(e){
                this.querySelectorAll('.layer2').forEach(layer => {
                    let x = (window.innerWidth - e.pageX * 10) / 300;
                    let y = (window.innerHeight - e.pageY * 10) / 300;
                    layer.style.transform = `translate(${x}px,${y}px)`;
                })
            }

        </script>
        
        
    </body>
</html>
