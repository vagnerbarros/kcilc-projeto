<!-- CAPTCHA -->
<br>
<div id="group_<?php echo Proxy::encrypt('captcha');?>"
	class="control-group">

	<div class='controls'
		style="width: 220px; background: transparent; margin-bottom: 10px;">
		<div style="height: 50px;">
			<img id="siimage" width='190px' height='40px' align="left"
				style="padding-right: 2px; border: none; top: 5px; float: left;"
				src="lib/securimage/securimage_show.php?sid=<?php echo md5(time()) ?>" />

			<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"
				codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0"
				width="19" height="19" id="SecurImage_as3" align="middle">
				<param name="allowScriptAccess" value="sameDomain" />
				<param name="allowFullScreen" value="false" />
				<param name="movie"
					value="lib/securimage/securimage_play.swf?audio=lib/securimage/securimage_play.php&bgColor1=#777&bgColor2=#fff&iconColor=#000&roundedCorner=5" />
				<param name="quality" value="high" />
				<param name="bgcolor" value="#ffffff" />
			</object>

			<br />

			<!-- pass a session id to the query string of the script to prevent ie caching -->
			<a tabindex="-1" style="border-style: none; position: relative; float: right; margin-left: 10px; margin-top: -15px;" href="#"
				title="Refresh Image"
				onclick="document.getElementById('siimage').src = 'lib/securimage/securimage_show.php?sid=' + Math.random(); return false"><img
				src="lib/securimage/images/refresh.gif" alt="Reload Image"
				border="0" onclick="this.blur()" align="bottom" /> </a>
		
		</div>

		<div style="clear: both"></div>
		<!-- NOTE: the "name" attribute is "code" so that $img->check($_POST['code']) will check the submitted form field -->
		
		<label style="margin-top: ">Digite as letras abaixo:</label>
		<input type="text" id="code" style="width: 175px;"
			name="<?php echo Proxy::encrypt('code')?>" size="12" maxlength="3" /><br />
		
	</div>

</div>
<div style="clear: both"></div>
		
