<?php
$this->breadcrumbs=array(
	'Web Streams',
);

/*
$this->menu=array(
	array('label'=>'Create WebStream', 'url'=>array('create')),
	array('label'=>'Manage WebStream', 'url'=>array('admin')),
);
*/

?>

<h1>Web Streams</h1>

<?php echo $this->renderPartial('_searchform', array('modelSearchForm'=>$modelSearchForm)); ?>

<br/><br/>

<?php
	$querystring="";
	$lngstrem="all";
	$type="all";
	foreach ($playlist_params as $key => $val)
	{
		if($key == "lngstrem"){
			$lngstrem = $val;
		}else if($key == "type"){
			$type = WebStream::getPlaylistTypeStreamNameById($val);
		}else if($key == "status" && $val == WebStream::WEBSTREAM_STATUS_WORKING){
			// We do nothing
		}else{
			if($querystring==""){
				$querystring.="?";
			}else{
				$querystring.="&";
			}
			$querystring.=$key."=".$val;
		}
	}
	if($lngstrem == "all" && $type == "all"){
		$playlist_link = $this->createUrl("playlists/playlist.m3u".$querystring);
	}else{
		$playlist_link = $this->createUrl("playlists/playlist_".$type."_".$lngstrem.".m3u".$querystring);
	}
?>

Playlist corresponding to the search : <br/>
=> <?php echo CHtml::link(Yii::app()->getRequest()->getHostInfo().$playlist_link, $playlist_link); ?><br/><br/>

<?php echo $this->renderPartial('_results', array('dataProvider'=>$dataProvider)); ?>