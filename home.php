<html>
  <head>
      <title></title>
  </head>  
  <body>
  <?php
    require "cores.php";

   ?>
      <ul>

            <?php foreach ($cores as $cor) { ?>
                <li>
                    <?php echo $cor;?>
                </li>                   
            <?php } ?>  
      </ul>


  </body>

</html>