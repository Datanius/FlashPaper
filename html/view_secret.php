<?php defined('_DIRECT_ACCESS_CHECK') or exit(); ?>
		<div id="form-div" class="container mx-auto">
			<fieldset>
				<div>
					<label style="font-family: 'Enriqueta', arial, serif; line-height: 1.25; margin: 0 0 10px; font-size: 30px; font-weight: bold;"><?php echo $settings['messages']['view_secret_header'] ?? ""; ?></label>
                    <div class="alert alert-info" role="alert">
						<?php echo $settings['messages']['view_secret_subheader'] ?? ""; ?>
					</div>
					<div style="margin-top:10px">
						<textarea readonly class="form-control" name="secret" rows="8" style="resize: vertical;"><?php echo $message ?? ""; ?></textarea>
					</div>
				</div>
			</fieldset>
		</div>
