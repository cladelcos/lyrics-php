<div>
    <div>
        <div class="content-field" name="<?=$linha['genre']?>">
            <a href="<?=$linha['urlLyrics']?>" target="_blank">
                <h6>
                    <div class="wrapper">
                        <div class="cube zoom-in">
                            <i class="front">
                                <img src="data/image/cover-front/<?=cover($linha['coverAbbrNameBand'],$linha['coverAbbrNameAlbum'])?>" alt="<?=$linha['band']?> - <?=$linha['songName']?>">
                            </i>
                            <i class="back">
                                <img src="data/image/cover-back/<?=cover($linha['coverAbbrNameBand'],$linha['coverAbbrNameAlbum'])?>" alt="<?=$linha['band']?> - <?=$linha['songName']?>">
                            </i>
                            <i class="top">
                            </i>
                            <i class="bottom">
                            </i>
                            <i class="left">
                               <img src="data/image/cover-side/<?=cover($linha['coverAbbrNameBand'],$linha['coverAbbrNameAlbum'])?>" alt="<?=$linha['band']?> - <?=$linha['songName']?>">
                            </i>
                            <i class="right">
                                <img src="data/image/cover-side/<?= cover($linha['coverAbbrNameBand'],$linha['coverAbbrNameAlbum'])?>" alt="<?=$linha['band']?> - <?=$linha['songName']?>">
                            </i>
                        </div>
                    </div>
                    <div>
                        <?=$linha['band']?> - <?=$linha['songName']?>
                    </div>
                </h6>
            </a>
        </div>
    </div>
</div>