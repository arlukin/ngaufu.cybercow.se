<?php
function writeInfoRutaBegin($width)
{
	?>
	<table background ="" border="0" cellPadding="0" cellSpacing="0">
		<tr>
			<td><IMG src="<?= IMAGE_URL ?>/cell_gra_top.gif" border=0  style="HEIGHT: 16px; WIDTH: <?= $width ?>px"></td>
		</tr>
		<tr>
			<td background="<?= IMAGE_URL ?>/cell_gra_bak.gif" vAlign="top">
				<table align="center" cellPadding="0" cellSpacing="0" WIDTH="95%">
	<?
}

//

function writeInfoRutaEnd($width)
{
	?>
				</table>
			</td>
		</tr>
		<tr>
			<td><IMG src="<?= IMAGE_URL ?>/cell_gra_bot.gif" border=0 hspace=2 style="HEIGHT: 16px; WIDTH: <?= $width-2 ?>px" ></td>
		</tr>
	</table>
	<?
}

//

function writePicturePage($picture, $firstPage, $prevPage, $nextPage, $lastPage, $pageCount, $picText)
{
	?>
	<table cellspacing="0" cellpadding="0" border="0" width="800">
		<tr>
			<td valign="top">
				<table cellspacing="0" cellpadding="0" border="0">
					<tr>
						<td width="118"><img src="<?= IMAGE_URL ?>/Logo.gif"></td>
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
						<td width="700" align="center"><img src="<?= IMAGE_URL ?>/NgauFuTitle.gif"></td>
					</tr>
					<tr>
						<td align="center"><img src="<?= IMAGE_URL ?>/ChakusHorizontal.gif"></td>
					</tr>

					<tr>
						<td>
							<table cellspacing="0" cellpadding="0" border="0" >
								<tr>
									<td width="10"><img src="<?= IMAGE_URL ?>/Bo.gif"></td>
									<td width="560" valign="top">

									<!-- Info ruta  Start -->
									<? writeInfoRutaBegin(560) ?>
										<tr>
											<td align="right">

												<? if ($firstPage <> "") { ?>
													<a href="<?= $firstPage?>">First</a>&nbsp;
												<? } else {?>
													First&nbsp;
												<? } ?>

												<? if ($prevPage <> "") { ?>
													<a href="<?= $prevPage?>">Prev</a>&nbsp;
												<? } else {?>
													Prev&nbsp;
												<? } ?>

												<?= $pageCount?>

												<? if ($nextPage <> "")  {?>
													<a href="<?= $nextPage?>">Next</a>&nbsp;
												<? } else {?>
													Next&nbsp;
												<? } ?>

												<? if ($lastPage <> "") { ?>
													<a href="<?= $lastPage?>">Last</a>&nbsp;
												<? } else {?>
													Last&nbsp;
												<? } ?>
											</td>
										</tr>
										<tr><td height="4"></td></tr>
										<tr>
											<td>
												<?= $picText ?>
											</td>
										</tr>
									<? writeInfoRutaEnd(560) ?>
									<!-- Info ruta  Slut -->

									<br>
									<img src="Images/<?= $picture ?>" width="560">

									</td>
								<tr>
							</table>
						</td>
					</tr>

				</table>
			</td>
		</tr>
	</table>
	<?
}

?>