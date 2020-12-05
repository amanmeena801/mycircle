<?php include 'config/declare.php'; ?>

<!-- a universal file that has all the classes included -->
<?php include 'config/classesGetter.php'; ?>

<!-- creating objects -->
<?php
  $universal = new universal;
  $avatar = new Avatar;
  $post = new post;
  $noti = new notifications;
  $message = new message;
?>

<?php
  $title = "{$noti->titleNoti()} Developer • Mycircle";
  $keywords = "Mycircle, Share and capture world's moments, share, capture, about";
  $desc = "Mycircle lets you capture, follow, like and share world's moments in a better way and tell your story with photos, messages, posts and everything in between";
?>

<!-- including files for header of document -->
<?php
  if ($universal->isLoggedIn()) {
    include 'includes/header.php';
    include 'needs/heading.php';
    include 'needs/nav.php';
    include_once 'needs/search.php';
  } else if ($universal->isLoggedIn() == false) {
    include 'index_include/index_header.php';
  }
?>

<div class="overlay"></div>
<div class="notify"><span></span></div>
<div class="badshah">

  <div class="dev_div inst">
    <img src="" alt="">             
      <span>Developed by <b>Aman Meena</b> currently 20 living in Jaipur.</span>
    <span>He's a full-stack Web developer and Mobile app developer mostly writes code in Dart, JavaScript, C++ & PHP as these are his favourite languages. And why he is programmer - 'coz he thinks programming is a religion!!
    </span>
    <br><br>
      <span><center><b>If you want to contribute in this Project, please contact aman.meena801@gmail.com <br> Credits: @Aman_Meena </b></center></span>
    
  </div>

</div>

<?php
if ($universal->isLoggedIn()) {
  include 'includes/footer.php';
} else if ($universal->isLoggedIn() == false) {
  include 'index_include/index_footer.php';
}
?>
