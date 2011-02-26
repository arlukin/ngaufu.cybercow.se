<?php
	include("../include/connection.php");

/*
	// VALIDATE
	dim vErrorMsg
	function isValid()
	{
		vErrorMsg = ""
		if (vName = "") then
			vErrorMsg = vErrorMsg + "You must enter a name." & "<br>"
		end if

		if (vEmail = "") then
			vErrorMsg = vErrorMsg + "You must enter an email." & "<br>"
		end if

		if (vText = "") then
			vErrorMsg = vErrorMsg + "You must enter some text." & "<br>"
		end if

		if (vErrorMsg <> "") then
			isValid = false
		else
			isValid = true
		end if
	}

	//PROCESS
	function CharFix($sfix)
	{
		$sfix = trim($sfix);
		$sfix = str_replace($sfix, "'", "''");
		$sfix = str_replace($sfix, "|", "");

		return $sfix;
	}

	function processAdd()
	{
		sql = "INSERT INTO tGuestBook " &_
					"([name], [email], [homepage], [hometown], [text]) "&_
					"VALUES ('" & charfix(vName) & " ', '" & charfix(vEmail) & " ', '" & charfix(vStyle) & " ', '" & charfix(vHomeTown) & " ', '" & charfix(vText) & "' )"

		conn.execute(sql)
	}

	//GET VALUE FROM FORMS
	vName = request.form("formName")
	vEmail = request.form("formEmail")
	vStyle = request.form("formStyle")
	vHomeTown = request.form("formHomeTown")
	vText= request.form("formText")

	//ACTION
	set conn = Server.CreateObject("ADODB.Connection")
	conn.open strConnectionString

	if (request.form("Submit") <> "") then
		if (isValid()) then
			processAdd
			response.redirect "guestbook.php"
		end if
	end if
	*/
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
						<?php include("../LeftMenu.html");
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
						<?php
							// Öppna databasen
							/*
							if request("page") = "" then
								page = 1
							else
								page = request("page")
							end if

							sql = "select count(*) from tGuestbook"
							set rs2 = Server.CreateObject("ADODB.Recordset")
							rs2.open sql, conn

							sql = "SELECT * from tGuestBook order by [date] desc"

							set rs = Server.CreateObject("ADODB.Recordset")
							rs.cursortype = asOpenStatic
							rs.cursorlocation = adUseClient

							rs.open sql, conn

							if not rs.EOF then
								rs.pagesize = 8
								rs.movefirst
								rs.absolutepage = page
								maxpage = cint(rs.pagecount)
							end if
							*/

						?>
						<table cellspacing="0" cellpadding="0" border="0" >
							<tr>
								<td width="10"><img src="../Images/Bo.gif"></td>
								<td class="cssBodyText" width="250" valign="top">
									<FORM ACTION="guestbook.php?state=add" METHOD="POST">
										<TABLE CELLSPACING=1 CELLPADDING=1 BORDER=0>
											<TR>
												<TD ALIGN=left class="cssLabel">Name:<BR><INPUT NAME="formName" TYPE=Text SIZE="14" MAXLENGTH="99" value="<?=vName?>"></TD>
												<TD ALIGN=right class="cssLabel"width=*>E-mail<BR><INPUT NAME="formEmail" TYPE=Text SIZE="14" MAXLENGTH="99" value="<?=vEmail?>"></TD>
											</TR>
											<TR>
												 <TD ALIGN=left class="cssLabel">Style:<BR><INPUT NAME="formStyle" TYPE=Text SIZE="14" MAXLENGTH="99" value="<?=vStyle?>"></TD>
												 <TD ALIGN=right class="cssLabel">Hometown:<BR><INPUT NAME="formHomeTown" TYPE=Text SIZE="14" MAXLENGTH="99 value="<?=vHomeTown?>""></TD>
											</TR>

											<TR>
												<TD COLSPAN=2 class="cssLabel">My message:<BR><TEXTAREA NAME="formText" ROWS=5 COLS=25 WRAP=Virtual><?=vText?></TEXTAREA></TD>
											</TR>

											<TR>
												<TD colspan=2 class="cssLabel"><INPUT NAME="Submit" TYPE=Submit VALUE="Save message!"></TD>
											</TR>

											<TR>
												<TD colspan=2 class="cssErrorMsg"><?= vErrorMsg ?></TD>
											</TR>



										</TABLE>
									</FORM>
								</td>
								<td width="10"><img src="../Images/Bo.gif"></td>
								<td class="cssBodyText" width="250" valign="top">
									<?
											x = 0
											do while not rs.EOF and x < rs.pagesize
									?>
											<table>
												<tr>
													<td class="cssLabel">Name:</td>
													<td class="cssBodyText"><a href="mailto:<?= rs("email") ?>"><?= rs("name") ?></td>
												</tr>
												<tr>
													<td class="cssLabel">Style:</td>
													<td class="cssBodyText"><a href="http://<?= rs("homepage") ?>"><?= rs("homepage") ?></td>
												</tr>
												<tr>
													<td class="cssLabel">Hometown:</td>
													<td class="cssBodyText"><?= rs("hometown") ?></td>
												</tr>
												<tr>
													<td class="cssLabel">sent:</td>
													<td class="cssBodyText"><?= date(strtotime(rs("date")), 'Y-m-d') ?></td>
												</tr>
												<tr>
													<td class="cssBodyText" colspan="2"><?= nl2br(rs("text")) ?></td>
												</tr>
											</table>
											<HR>
									<?
										x = x + 1
										rs.MoveNext
										loop
									?>
								</td>
							<tr>
						</table>

						<? if not cint(page) = 1 then ?>
							<a href="guestbook.php?page=<?= (page - 1) ?>&" class="cssLabel">&laquo; Previous</a>
						<? else?>
							<span class="cssLabel">&laquo; Previous</span>
						<? end if ?>
						&nbsp;

						<? if not cint(page) = maxpage and not rs.EOF then ?>
							<a href="guestbook.php?page=<?= (page + 1) ?>&" class="cssLabel">Next &raquo;</a>
						<? else?>
							<span class="cssLabel">Next &raquo;</span>
						<? end if ?>
						&nbsp;
						<span class="cssLabel">Numbef of pages: <? = maxpage?></span>

					</td>
				</tr>

			</table>
		</td>
	</tr>

</table>
</body>
</html>
