<?php
 session_start();
 include("config.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>News Detail</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="wrapper">
   <?php include "includes/header.php"; ?>
   <!---------------------------------------- END HEADER -------------------------------->
   <div id="greenLine"></div>
   		<div id="content">

            <div class="container">

                <div class="newsitemd">
					        <?php
                    $new_id = $_GET['new_id'];

                    $koneksi = new mysqli("localhost","root","","training-php");

                    $sql = "SELECT * FROM berita WHERE id=$new_id";

                    $query = $koneksi->query($sql);

                    $data = $query->fetch_assoc();

                  ?>
                    <h2 class="news_title"><?php echo $data['judul']; ?></h2>
                    <p class="crt_date">Create date : <?php echo $data['created_at']; ?></p>
                    <div class="clear"></div>
                    <p class="news_desc">
                    <img src="images-ori/<?php echo $data['gambar']; ?>" align="left">
					              <?php
                          echo $data['detail'];
                        ?>
                    </p>
                </div>

                <?php
                if (isset($_SESSION['sess_user'])) { ?>
   <!------------- Form Comment ---------------------------------------------->
                 <form class="comment_form" action="process/adding_comment.php" method="post">				<h4>Leave A Comment</h4>
                    <input type="hidden" name="id_news" value="#"><br>
                    <input type="email" placeholder="Email" name="email" required><br>
                    <input type="text" placeholder="Username" name="username" required><br>
                    <textarea name="comment" placeholder="Your Comment" required></textarea><br>
                	<input type="submit" value="Comment">
                 </form>

                <?php } ?>
   <!-------------------------------------------------------------------------->

   <!------------- List Comment ----------------------------------------------->
                 <div class="comment_wrap">
                 	<h1>Comments (4)</h1>

                 	<div class="comment_list">
                    	<div class="user_photo">
                         <img src="photo_member/profile-5.png" />
                        </div>
                        <div class="box_desc">
                          <h2>Gladis</h2>
                          <p> Mauris tincidunt, nulla quis rhoncus malesuada, nibh ante pulvinar dolor, ut lacinia libero risus nec orci.tiam auctor tincidunt augue at pharetra. Morbi velit eros, sagittis in facilisis non, rhoncus </p>
                          <span>2014-03-28 11:41:11</span>
                        </div>

                    </div>

                    <div class="comment_list">
                    	<div class="user_photo">
                         <img src="photo_member/profile-2.jpg" />
                        </div>
                        <div class="box_desc">
                          <h2>Supriadi</h2>
                          <p> Mauris tincidunt, nulla quis rhoncus malesuada, nibh ante pulvinar dolor, ut lacinia libero risus nec orci.tiam auctor tincidunt augue at pharetra. Morbi velit eros, sagittis in facilisis non, rhoncus </p>
                          <span>2014-03-28 11:41:11</span>
                        </div>

                    </div>

                    <div class="comment_list">
                    	<div class="user_photo">
                         <img src="photo_member/profile-1.jpg" />
                        </div>
                        <div class="box_desc">
                          <h2>Kodir</h2>
                          <p> Mauris tincidunt, nulla quis rhoncus malesuada, nibh ante pulvinar dolor, ut lacinia libero risus nec orci.tiam auctor tincidunt augue at pharetra. Morbi velit eros, sagittis in facilisis non, rhoncus </p>
                          <span>2014-03-28 11:41:11</span>
                        </div>

                    </div>

                    <div class="comment_list">
                    	<div class="user_photo">
                         <img src="photo_member/profile-3.jpg" />
                        </div>
                        <div class="box_desc">
                          <h2>Parno</h2>
                          <p> Mauris tincidunt, nulla quis rhoncus malesuada, nibh ante pulvinar dolor, ut lacinia libero risus nec orci.tiam auctor tincidunt augue at pharetra. Morbi velit eros, sagittis in facilisis non, rhoncus </p>
                          <span>2014-03-28 11:41:11</span>
                        </div>

                    </div>

                 </div>


   <!-------------------------------------------------------------------------->

            </div><!--- END CONTENT Container -->

        </div>
<!---------------------------------------- END CONTENT ------------------------------->
		<?php include "includes/footer.php" ?>
<!---------------------------------------- END FOOTER -------------------------------->
</div>
</body>
</html>
