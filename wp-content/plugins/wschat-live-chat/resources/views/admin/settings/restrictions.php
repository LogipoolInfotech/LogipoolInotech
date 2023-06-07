<form method="post">
<?php wp_nonce_field( 'wschat_save_settings', 'wschat_settings_nonce' ); ?>
<table class="form-table">
<p class="description mt-3"> <?php echo esc_attr__( 'By default WSChat widget will be available for all the pages in your site. If you want to display it on any specific page(s). Please mention the page URLs in a new line.', 'wschat' ); ?></p>
	<tr>
		<td>
		<p><strong><?php echo esc_attr__( 'Inclusion list', 'wschat' ); ?><sup class="elex_wschat_go_premium_color ms-1"><?php esc_html_e( '[Premium]' ); ?></sup></strong></p>
			<textarea disabled class="form-control form-control-sm w-50" name="inclusion_list" rows="6"  placeholder="Enter page URLs here ..." ><?php esc_attr_e( isset( $wschat_options['inclusion_list'] ) ? implode( "\n", $wschat_options['inclusion_list'] ) : ' ' ); ?></textarea>
		</td>
	</tr>
	<tr>
		<td>
		<p><strong><?php echo esc_attr__( 'Exclusion list', 'wschat' ); ?><sup class="elex_wschat_go_premium_color ms-1"><?php esc_html_e( '[Premium]' ); ?></sup></strong></p>
			<textarea disabled class="form-control form-control-sm w-50 " name="exclusion_list" rows="6" placeholder="Enter page URLs here ..." ><?php esc_attr_e( isset( $wschat_options['exclusion_list'] ) ? implode( "\n", $wschat_options['exclusion_list'] ) : ' ' ); ?></textarea>
		</td>
	</tr>
	</table>
</form>   


