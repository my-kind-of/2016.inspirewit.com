<footer class="text-center">
  <div id="base">
    <div class="container">
    <!-- Print a random quote -->
    <?php
      function array_random($arr, $num = 1) {
        shuffle($arr);
        $r = array();
        for ($i = 0; $i < $num; $i++) { $r[] = $arr[$i];}
        return $num == 1 ? $r[0] : $r;
      }
      // The array of quotes
      $a = array("<h3>&ldquo;Don't tell me the sky is the limit when there are footprints on the moon!&rdquo;</h3><p>&mdash;Paul Brandt</p>",
        "<h3>&ldquo;Keep your eyes on the stars, and your feet on the ground.&rdquo;</h3><p>&mdash;Theodore Roosevelt</p>",
        "<h3>&ldquo;Act as if what you do makes a difference. It does.&rdquo;</h3><p>&mdash;William James</p>");
      print_r(array_random($a));
    ?>
      <p class="copy">Designed by <br>
        <a href="http://www.harrymt.com/" target="_blank">harrymt</a> for <a class="hacksoc" href="http://www.hacksocnotts.co.uk/">hacksoc</a>
      </p>
      <ul class="social">
        <li class="facebook"><a href="https://www.facebook.com/witnotts" target="_blank">Facebook</a></li>
        <li class="twitter"><a href="https://twitter.com/inspireWIT" target="_blank">Twitter</a></li>
      </ul>
    </div>
</footer>
