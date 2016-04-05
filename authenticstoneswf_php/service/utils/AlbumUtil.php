<?php

class AlbumUtil{
	
	
	/**
	 *
	 * the constructor is set to private so
	 * so nobody can create a new instance using new
	 *
	 */
	private function __construct() {
		/*** maybe set the db name here later ***/
	}
	
	/**
	 *
	 * Like the constructor, we make __clone private
	 * so nobody can clone the instance
	 *
	 */
	private function __clone(){
	}
	
	public static function getGalleryBaseDirectoryForUser($user_sl_no){
		return $_SERVER["DOCUMENT_ROOT"].'/'.__GALLERY_ROOT.'/'.__USER_GALLERY_PREFIX.$user_sl_no.'/';
	}
	
	public static function getImagesDirectoryForDesign($category, $designId){
		return $_SERVER["DOCUMENT_ROOT"].'/'.__GALLERY_ROOT.'/'.__DESIGN_ROOT.'/'.$category.'/'.$designId;
	}
	
	public static function getThumbsDirectoryForDesign($category, $designId){
		return $_SERVER["DOCUMENT_ROOT"].'/'.__GALLERY_ROOT.'/'.__THUMB_ROOT.'/'.$category.'/'.$designId;
	}
	
	public static function getUrlFromDirectory($folderDirectory){
		$folderUrl = str_replace($_SERVER["DOCUMENT_ROOT"].'/'.__GALLERY_ROOT, 
									'/'.__GALLERY_ROOT, 
									$folderDirectory);
		return $folderUrl;
	}
	
	public static function getThumbnailFromPic($picFile){
		$thumbnailFile = str_replace($_SERVER["DOCUMENT_ROOT"].'/'.__GALLERY_ROOT.'/'.__DESIGN_ROOT,
					 					$_SERVER["DOCUMENT_ROOT"].'/'.__GALLERY_ROOT.'/'.__THUMB_ROOT,
										$picFile);
		return $thumbnailFile;
	}
	
	public static function getPicFromThumbnail($thumbnailFile){
		$picFile = str_replace($_SERVER["DOCUMENT_ROOT"].'/'.__GALLERY_ROOT.'/'.__THUMB_ROOT,
								$_SERVER["DOCUMENT_ROOT"].'/'.__GALLERY_ROOT.'/'.__DESIGN_ROOT,
								$thumbnailFile);
		return $picFile;
	}

} /*** end of class ***/

?>
