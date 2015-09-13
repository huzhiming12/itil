<?php 
class download
{
	var $filename='';
	function setfilename($filename)
	{
		$this->filename= dirname(dirname(__FILE__))."\\export\\".$filename;
	}
	function downloadfile($filename)
	{
		$this->setfilename($filename);
		if( $this->filecheck() ){
			$fn = array_pop( explode( '/', strtr( $this->filename, '\\', '/' ) ) );
			header( "Pragma: public" );
			header( "Expires: 0" ); // set expiration time
			header( "Cache-Component: must-revalidate, post-check=0, pre-check=0" );
			header( "Content-type:".$this->mineType );
			header( "Content-Length: " . filesize( $this->filename ) );
			header( "Content-Disposition: attachment; filename=\"$fn\"" );
			header( 'Content-Transfer-Encoding: binary' );
			readfile( $this->filename );
		}
	}
	function filecheck(){
		
		$filename=$this->filename;
		if(file_exists($filename))
		{
			return true;
		}else
		{
			echo "file not fond ";
			return false;
		}
	}
}


$filename = $_GET[id];
if( $filename != null ){
	$down = new download();
	$down->downloadfile( $filename );
	$filename = null;
}
?>