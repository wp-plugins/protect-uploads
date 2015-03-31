<div id="wrap" class="<?php echo $this->plugin_name ?>">
	<?php
		$plugin = new Alti_ProtectUploads_Admin($this->plugin_name, $this->version);
		if($_POST) {
			$plugin->save_form( $_POST );
		}
		$plugin->display_messages();
	?>
	<h2>Protect Uploads Directory <span><?php _e('by', $this->plugin_name); ?> <a href="http://alticreation.com/en">alticreation.com</a></span></h2>
	<p class="description"><?php _e('Prevent users to browse your uploads directory. You\'ll protect your uploads directory to be accessed and content stolen too easily in one batch.', $this->plugin_name); ?></p>
	<form method="POST" enctype="multipart/form-data">

		<table class="form-table">
			<tbody>
				<tr>
					<th scope="row">
						<label for=""><span class="dashicons dashicons-dashboard"></span> <?php _e('Status', $this->plugin_name); ?></label>
					</th>
					<td>
						<fieldset>
							<?php if( $this->get_current_protection() === true ) { ?>
							<p class="valid"><span class="dashicons dashicons-lock"></span> <?php _e('Uploads directory is protected.', $this->plugin_name); ?></p>
							<?php if( get_option( $this->plugin_name . '-protection') == 'remove' ) { ?>
							<p class="valid note"><?php _e('Your uploads directory is <strong>already protected</strong> by an htaccess file or an Apache setting set for the whole website. You don\'t need extra protection.<br>The «remove option» behind will have no effect on the current protection.', $this->plugin_name); ?></p>
							<?php } ?>
							<?php } else { ?>
							<p class="error"><span class="dashicons dashicons-shield"></span> <?php _e('Uploads directory is not protected!', $this->plugin_name); ?></p>
							<?php } ?>
						</fieldset>
					</td>
				</tr>
				<tr>
					<th scope="row">
						<label for="size"><span class="dashicons dashicons-shield-alt"></span> <?php _e('Protection', $this->plugin_name); ?></label>
					</th>
					<td>
						<fieldset>
							<legend class="screen-reader-text">
								<span><?php _e('Protection', $this->plugin_name); ?></span>
							</legend>
							<!--  -->
							<label for="protection_1">
								<input type="radio" value="index_php" name="protection" id="protection_1" <?php if( get_option( $this->plugin_name . '-protection') == 'index_php' ) { ?>checked<?php } ?>>
								<strong><?php _e('add index file', $this->plugin_name); ?></strong> 
								<p class="description"><?php _e('This will create an index.php file on the root of your uploads directory. This simple trick will hide the content of your whole uploads directory.', $this->plugin_name); ?></p>
							</label><br>
							<!--  -->
							<label for="protection_2">
								<input type="radio" value="htaccess" name="protection" id="protection_2" <?php if( get_option( $this->plugin_name . '-protection') == 'htaccess' ) { ?>checked<?php } ?>>
								<strong><?php _e('prevent directory listing with htaccess', $this->plugin_name); ?></strong> 
								<p class="description"><?php _e('Through the htaccess file, it will prevent people to browse your uploads directory and return a 403 code (Forbidden Access).', $this->plugin_name); ?></p>
							</label><br>
							<!--  -->
							<label for="protection_3">
								<input type="radio" value="remove" name="protection" id="protection_3" <?php if( get_option( $this->plugin_name . '-protection') == 'remove' || get_option( $this->plugin_name . '-protection') == '' ) { ?>checked<?php } ?>>
								<strong><?php _e('remove protection or disabled protection', $this->plugin_name); ?></strong>
								<p class="description"><?php _e('Your uploads directory is not protected.', $this->plugin_name); ?></p>
							</label><br>
						</fieldset>
						
					</td>
				</tr>
				<tr>
					<th scope="row">
						<label for=""><span class="dashicons dashicons-visibility"></span> <?php _e('Check', $this->plugin_name); ?></label>
					</th>
					<td>
						<p><?php _e('Visit your', $this->plugin_name); ?> <a href="<?php echo $this->get_uploads_url(); ?>" target="_blank"><?php _e('uploads directory', $this->plugin_name); ?></a> <?php _e('to check the current protection', $this->plugin_name); ?>.</p>
					</td>
				</tr>
				<tr>
					<th scope="row">
						<label for=""><span class="dashicons dashicons-welcome-learn-more"></span> <?php _e('Support', $this->plugin_name); ?></label>
					</th>
					<td>
						<p><?php _e('Protect Uploads Plugin <a href="http://www.alticreation.com/en/protect-uploads/" target="_blank">support page</a>.', $this->plugin_name); ?></p>
						<p><?php _e('This plugin is compatible with the <span class="dashicons dashicons-awards"></span> <a href="http://www.alticreation.com/en/alti-watermark/" target="_blank">Watermark Plugin</a>.', $this->plugin_name); ?></p>
						<p class="small"><?php _e('To do so, you have to: 1. Install the Watermark Plugin 2. Then choose your settings in this page and Update.', $this->plugin_name); ?></p>
					</td>
				</tr>
				<tr>
					<th scope="row">
					</th>
					<td>
						<input type="submit" id="submit" value="<?php _e('Update', $this->plugin_name); ?>" name="submit" class="button button-primary">
					</td>
				</tr>
			</tbody>
		</table>

	</form>
	<div id="message" class="updated protect-uploads-footer">
		<a class="logo" href="http://www.alticreation.com?plugin=protect-uploads"><img src="http://alticreation.com/logos/alticreation_color_01.png" alt="alticreation"></a>
		<p><?php _e('Protect Uploads plugin is developped by', $this->plugin_name); ?> <a href="http://www.alticreation.com/en/profile">Alexis Blondin</a>.</p>
		<div class="share">
			<a href="http://www.alticreation.com?plugin=protect-uploads" target="_blank">alticreation.com</a>
			<a href="https://plus.google.com/+AlexisBlondin" target="_blank">google&nbsp;+</a>
			<a href="https://twitter.com/alticreation" target="_blank">twitter</a>
		</div>
	</div>
</div>

