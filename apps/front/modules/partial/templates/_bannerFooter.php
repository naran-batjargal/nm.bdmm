<?php $rs = BannerTable::getInstance()->doFetchOne(array('path', 'ext', 'link', 'target'), array('position'=>'footer'));?>
<?php include_partial("partial/banner", array('rs'=>$rs, 'width'=>1100, 'height'=>100));?>