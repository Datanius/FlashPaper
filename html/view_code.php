<?php defined('_DIRECT_ACCESS_CHECK') or exit(); ?>
		<div id="form-div" class="container mx-auto"
			<fieldset>
				<div>
					<label style="font-family: 'Enriqueta', arial, serif; line-height: 1.25; margin: 0 0 10px; font-size: 30px; font-weight: bold;"><?php echo $settings['messages']['view_code_header'] ?? ""; ?></label>
                    <div class="alert alert-info" role="alert">
						<?php echo $settings['messages']['view_code_subheader'] ?? ""; ?>
					</div>
					<div style="margin-top:10px">
                        <input type="text" class="form-control float-start" name="secret" id="secret" value="<?php echo $message ?? ""; ?>" readonly><button onclick="moveSecretToClipboard(this)" class="btn btn-primary btn-copy float-end"><img src="./svg/clipboard-plus.svg" alt="Copy & Paste"></button>
					</div>
				</div>
			</fieldset>
		</div>
        <script>
            function moveSecretToClipboard(element) {
                const value = document.getElementById('secret').value;
                copyTextToClipboard(value, function () {
                    element.firstElementChild.src = './svg/clipboard-plus.svg'
                });
            }
            function copyTextToClipboard(text, onSuccess) {
                if (!navigator.clipboard) {
                    fallbackCopyTextToClipboard(text);
                    return;
                }
                navigator.clipboard.writeText(text).then(function() {
                    console.log('Async: Copying to clipboard was successful!');
                    onSuccess();
                }, function(err) {
                    console.error('Async: Could not copy text: ', err);
                });
            }
        </script>
