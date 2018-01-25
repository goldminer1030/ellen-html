			<div class="video-separator"></div>
			<div class="ellensvideo">
				<div class="esv-video large-div">
					<iframe src="https://player.vimeo.com/video/249803589?autoplay=1&loop=1&title=0&byline=0&portrait=0&background=1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>
			</div>
			<div class="video-separator">
				<div class="ellenbook">
					<div class="container">
						<div class="text-center"><button class="ellenBookTrigger" href="<?php echo hook('decodeRouteImage', array(Registre::get('ellen_book'), 'medium')); ?>" target="_blank" class="down-ellenbook">Visionner le Ellen Book</button></div>
					</div>
				</div>
			</div>
			
			<!-- EllenBook modal -->
			<div class="modal" id="ellenBookModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Le Book d'Ellen</h4>
				  </div>
				  <div class="modal-body">
					<div class="flipbook-opened" data-book="<?php echo hook('decodeRouteImage', array(Registre::get('ellen_book'), 'medium')); ?>">Le Book d'Ellen</div>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
				  </div>
				</div>
			  </div>
			</div>