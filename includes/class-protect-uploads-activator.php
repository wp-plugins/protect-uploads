<?php 
/**
 * fired on activation
 */
class Alti_ProtectUploads_Activator extends Alti_ProtectUploads {

	/**
	 * set option for plugin
	 */
	public function run() {

		if( !get_option( $this->get_plugin_name().'-protection' ) ) { 
			add_option( $this->get_plugin_name().'-protection', 'remove', '', 'yes' ); 
		}
		else {
			update_option( $this->get_plugin_name().'-protection', 'remove' );
		}
		
	}

}