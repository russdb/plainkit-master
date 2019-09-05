<?php
/**
 * Snippets are a great way to store code snippets for reuse or to keep your templates clean.
 * in loops or simply to keep your templates clean.
 * This footer snippet is reused in all templates. In fetches information from the `site.txt` content file
 * and from the `about` page.
 * More about snippets: https://getkirby.com/docs/guide/templates/snippets
 */
?>

</div>

  <footer class="footer">
    <div>
      &copy; 2013 - <?= date('Y') ?> <?= $site->name()->html() ?>  
      All rights reserved. &nbsp;
      <a href="#">Disclaimer & Privacy Policy</a> &nbsp; <a href="mailto:#">Contact Us</a>
    </div>

    <div class="socialIcons"style="text-align: right;">
      <a href="#"><i class="fab fa-facebook-f"></i></a> 
      <a href="#"><i class="fab fa-twitter"></i></a>
    </div>

  </footer>

</body>
</html>
