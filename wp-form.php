<?php
	function html_form_code() {
		echo '
		<style>

		@import url("https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@600&display=swap");
		body {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
			background: linear-gradient(45deg, greenyellow, dodgerblue);
			font-family: "Sansita Swashed", cursive;
		}
		#center {
			position: relative;
			padding: 50px 50px;
			background: #fff;
			border-radius: 10px;
		}
		#center h1 {
			font-size: 2em;
			border-left: 5px solid dodgerblue;
			padding: 10px;
			color: #000;
			letter-spacing: 5px;
			margin-bottom: 60px;
			font-weight: bold;
			padding-left: 10px;
		}
		#center .inputbox {
			position: relative;
			width: 300px;
			height: 50px;
			margin-bottom: 50px;
		}
		#center .inputbox input {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			border: 2px solid #000;
			outline: none;
			background: none;
			padding: 10px;
			border-radius: 10px;
			font-size: 1.2em;
		}
		#center .inputbox:last-child {
			margin-bottom: 0;
		}
		#center .inputbox span {
			position: absolute;
			top: 14px;
			left: 20px;
			font-size: 1em;
			transition: 0.6s;
			font-family: sans-serif;
		}
		#center .inputbox input:focus ~ span,
		#center .inputbox input:valid ~ span {
			transform: translateX(-13px) translateY(-35px);
			font-size: 1em;
		}
		#center .inputbox [type="button"] {
			width: 50%;
			background: dodgerblue;
			color: #fff;
			border: #fff;
		}
		#center .inputbox:hover [type="button"] {
			background: linear-gradient(45deg, greenyellow, dodgerblue);
		}
		</style>';
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