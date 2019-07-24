<html>
  <head>
    <title>Michelle Ryals' Tiny Redis-PHP Demo</title>
  </head>
  <body>
    <h1>This is Michelle Ryals' tiny little redis-php demo.</h1>
    <p>Wish I had more time to run with this, since the PHP/webserver stuff is rapidly coming back to me, like riding a bike! <br>
    <em>Sorry for mixing HTML with PHP; it's a bit hackey.</em></p><br>

    <?php
      // Obligatory connection things
      $redis = new Redis();
      $redis->connect('127.0.0.1', 6379);
      echo "Server is running: ".$redis->ping();

      // Set some redis value
      $redis->set('test', 'This is a test. This is only a test. Were this a real value, it might contain useful data.');
      // Get this redis value
      $redis_value = $redis->get('test');
    ?>
    <strong><?php echo $redis_value;?></strong>

  </body>
</html>
