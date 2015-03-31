<?php 
/**
 * triggered on deactivate
 */
class Alti_ProtectUploads_Deactivator extends Alti_ProtectUploads_Admin {

	public function run() {

		$this->remove_index();
		$this->remove_htaccess();		

	}

}