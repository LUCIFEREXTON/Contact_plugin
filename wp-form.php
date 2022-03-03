<?php
	function html_form_code() {
		echo'<div id="center">';
		echo'	<form  action="' . esc_url( $_SERVER['REQUEST_URI'] ) . '" method="post">';
		echo'		<div class="inputbox">';
		echo'			<input type="text" required="required" name="cf-name" pattern="[a-zA-Z0-9 ]+" value="' . ( isset( $_POST["cf-name"] ) ? esc_attr( $_POST["cf-name"] ) : '' ) . '" size="40" >';
		echo'			<span>Name</span>';
		echo'		</div>';
		echo'		<div class="inputbox">';
		echo'     <input type="email" name="cf-email" value="' . ( isset( $_POST["cf-email"] ) ? esc_attr( $_POST["cf-email"] ) : '' ) . '" size="40" />';
		echo'			<span>Email</span>';
		echo'		</div>';
		echo'		<div class="inputbox">';
		echo '    <input type="text" name="cf-subject" pattern="[a-zA-Z ]+" value="' . ( isset( $_POST["cf-subject"] ) ? esc_attr( $_POST["cf-subject"] ) : '' ) . '" size="40" />';
		echo'			<span>Subject</span>';
		echo'		</div>';
		echo'		<div class="inputbox">';
		echo '    <textarea rows="10" cols="35" name="cf-message">' . ( isset( $_POST["cf-message"] ) ? esc_attr( $_POST["cf-message"] ) : '' ) . '</textarea>';
		echo'			<span>Query/Suggestions</span>';
		echo'		</div>';
		echo'		<div class="inputbox">';
		echo'     <p><input type="submit" name="cf-submitted" value="Send"></p>';
		echo'		</div>';
		echo'	</form>';
		echo'</div>';
	}
?>