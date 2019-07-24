<html>
  <head>
    <title>Michelle Ryals' Tiny Redis-PHP Demo</title>
  </head>
  <body>
    <p><strong>This is Michelle Ryals' little redis-php demo...</strong></p>

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
