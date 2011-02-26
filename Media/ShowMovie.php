<?php
	$movieId = $_GET['movieId'];
?>
<html>
<head>
	<title>The Ngau Fu Demo Team</title>
	<LINK rel="stylesheet" type="text/css" href="../Include/Style.css" title="Style">
</head>
<body background="../Images/ngaufu_bg.gif">

<table cellspacing="0" cellpadding="0" border="0" width="800">
	<tr>
		<td valign="top">
			<table cellspacing="0" cellpadding="0" border="0">
				<tr>
					<td width="118"><img src="../Images/Logo.gif"></td>
				</tr>

				<tr>
					<td >
						<?php include("../LeftMenu.html"); ?>
					</td>
				</tr>
			</table>
		<td valign="top">
			<table cellspacing="0" cellpadding="0" border="0" >
				<tr>
					<td width="700" align="center"><img src="../Images/NgauFuTitle.gif"></td>
				</tr>
				<tr>
					<td align="center"><img src="../Images/ChakusHorizontal.gif"></td>
				</tr>

				<tr>
					<td>
						<table cellspacing="0" cellpadding="0" border="0" >
							<tr>
								<td width="10" valign="top"><img src="../Images/Bo.gif"></td>
								<td class="cssBodyText" width="275" valign="top">

									<object width="640" height="505">
										<param name="movie" value="http://www.youtube.com/v/<?= $movieId ?>&hl=sv&fs=1"></param>
										<param name="allowFullScreen" value="true"></param>
										<param name="allowscriptaccess" value="always"></param>
										<embed src="http://www.youtube.com/v/<?= $movieId ?>&hl=sv&fs=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="640" height="505"></embed>
									</object>
									<br><br>
								</td>
							<tr>
						</table>
					</td>
				</tr>

			</table>
		</td>
	</tr>

</table>
</body>
</html>
