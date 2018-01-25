<?php
$post = hook('macro', '$:/view/post');
$meta = hook('get_all_meta_post', $post->getId());

$data = $post->getContent();
preg_match_all("#<pre>([^<]+)</pre>[^<]*<p>([^<]+)</p>#", $data, $matches);
?>
  <div class="header-title-container">
		<div class="entete">
			<div class="flotaison-container">
				<div class="textOver text0">
					conditions <br />
					<span class="subtitle">GENERALes D'UTILISATION</span>
				</div>
				<div class="background-image">
					<img src="static/images/cgu.jpg" class="cimagex" alt="header title"/>
				</div>
			</div>
		</div>
  </div>

  <div class="cgu-page-content bg-white">
    <div class="tiny-container">

      <?php
      for($i=0; $i < count($matches[0]); $i++) {
      ?>
      <div class="cgu-item">
        <p class="cgu-item-number"><?php echo $matches[1][$i]; ?></p>
        <p class="cgu-item-description"><?php echo $matches[2][$i]; ?></p>
      </div>
      <?php } ?>
      
    </div>
  </div>