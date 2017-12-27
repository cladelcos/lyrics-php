<div ng-controller="generalCtrl">
	<div ng-repeat="x in lyrics | filter: filterBand" >
		<div class="content-field" name="<?=$linha['genre'] ?>">
		<a href="<?=$linha['url_lyrics'] ?>" target="_blank">
			<h6>
				<div class="wrapper">
					<div class="cube zoom-in">
						<i class="front">
							<img src="../data/image/cover-front/<?=$linha['cover_url']?>" alt="<?=$linha['band'] ?> - <?=$linha['song_name'] ?>">
						</i>
						<i class="back">
							<img src="../data/image/cover-back/<?=$linha['cover_url']?>" alt="<?=$linha['band'] ?> - <?=$linha['song_name'] ?>">
						</i>
						<i class="top">
						</i>
						<i class="bottom">
						</i>
						<i class="left">
							<img src="../data/image/cover-side/<?=$linha['cover_url']?>" alt="<?=$linha['band'] ?> - <?=$linha['song_name'] ?>">
						</i>
						<i class="right">
							<img src="../data/image/cover-side/<?=$linha['cover_url']?>" alt="<?=$linha['band'] ?> - <?=$linha['song_name'] ?>">
						</i>
					</div>
				</div>
				<div>
					<?=$linha['band'] ?> - <?=$linha['song_name'] ?>
				</div>
			</h6>
		</a>
		</div>
	</div>
</div>