		<!-- Two -->
			<section id="two" class="wrapper style2 alt">
				<div class="inner">

				<? foreach (View::getVar('items') as $arrItem): ?>

					<div class="spotlight">
						<div class="image">
							<img src="<?=$arrItem['img'];?>" alt="" />
						</div>
						<div class="content">
							<h3><?=$arrItem['title'];?></h3>
							<p><?=$arrItem['text'];?></p>
						</div>
					</div>
				<? endforeach ?>
				
				</div>
			</section>

