<body>
<?php snippet('header') ?>
<!-- DEBUG: <?= $page->note()->html() ?> -->
<section class="hero">
  <img src="<?= image('contact-us.png')->url() ?>" />
</section>
<main>
  <div class="contact">  
    <?= $page->Text()->html() ?>

    <form action="./contact-us_files/mailer.php" method="post" enctype="multipart/form-data">

      <div class="message-text">
        <span style="font-size:17px; font-weight:bold; ">
        <?= $page->name()->html() ?> 
        </span>
        <br>

        <div>
          <span style="font-size:13px; font-weight:bold; "><u>Toll Free</u></span>
          <span style="font-size:13px; ">: </span>
          <span style="font-size:14px; "><?= $page->telephone()->html() ?> </span>
          <span style="font-size:13px; "><br></span>
          <span style="font-size:13px; font-weight:bold; "><u>Email</u></span>
          <span style="font-size:13px; ">: </span>
          <span style="font-size:14px; "><?= $page->email()->html() ?> </span>
        </div>
      
      </div>

      <label>Name:</label> *<br>
      <input class="form-input-field" type="text" value="" name="form[element0]" size="40"><br><br>

      <label>Email Address:</label> *<br>
      <input class="form-input-field" type="text" value="" name="form[element1]" size="40"><br><br>

      <label>How can we help you?</label> *<br>
      <textarea class="form-input-field" name="form[element2]" rows="8" cols="38"></textarea><br><br>

      <div style="display: none;">
        <div class="message-text">
          <span style="font-size:17px; font-weight:bold; "><?= $page->name()->html() ?></span><br>
          <span>
          <span style="font-size:13px; font-weight:bold; "><u>Toll Free</u></span>
            <span style="font-size:13px; ">:</span>
            <span style="font-size:14px; "><?= $page->telephone()->html() ?></span>
            <span style="font-size:13px; "><br></span>
            <span style="font-size:13px; font-weight:bold; "><u>Email</u></span>
            <span style="font-size:13px; ">:</span>
            <span style="font-size:14px; "><?= $page->email()->html() ?></span>
          </span>
        </div>
        <label>Spam Protection: Please don't fill this in:</label>
        <textarea name="comment" rows="1" cols="1"></textarea>
      </div>

      <div>
        <input type="hidden" name="form_token" value="21356474135d702c63a01f5">
        <input class="form-input-button" type="reset" name="resetButton" value="Reset">
        <input class="form-input-button" type="submit" name="submitButton" value="Submit" disabled>
      </div>

    </form>
  </div>

</main>

<?php snippet('footer') ?>
</body>
</html>