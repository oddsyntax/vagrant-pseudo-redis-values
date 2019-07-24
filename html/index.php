<html>
  <head>
    <title>Michelle Ryals' Tiny Redis-PHP Demo</title>
  </head>
  <body>
    <p>This is Michelle Ryals' little redis-php demo.</p>
    <br>
    <p>
    <?php
      // Obligatory connection things
      $redis = new Redis();
      $redis->connect('127.0.0.1', 6379);
    ?>
    <em>Ping the Redis Server - is it running?</em> 
    <?php echo " " . $redis->ping(); ?>
    </p>
  
    <p>
    <em>Saving a string value to the Redis key "test"...</em>
    <?php
      // Set some redis value
      $redis->set('test', 'This is a test. This is only a test. Were this a real value, it might contain useful data.');
    ?>
    <br><br>
    <em>Fetching the value from the Redis key "test"...</em>
    <br><br>
    <?php
      // Get this redis value
      $redis_value = $redis->get('test');
    ?>
    <strong><?php echo $redis_value;?></strong>
  </p>
  </body>
</html>
