<?
/*
 * $Id$
 *
 * Copyright (c) 1998-2008 John Morrison.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */
?>

<tr><td><div class="subheading"><a href="gamelog.php?key=<?echo $info->getKey()?>">Log</a> / <a href="gamelog.php?mode=comments&key=<?echo $info->getKey()?>">Comments</a> / Download</div></td></tr>
<tr>
<td> <div class="bodytext">
	<p>
	<b>File Size:</b> <? echo $info->getLogSize();?><br>
	<b>Number of downloads:</b> <? echo $info->getLogNumDownloads();?><p>
	<?
	if ($info->getLogAvailable() == false) {
		echo "Sorry, log file is not available to download.";
	} else {
		echo "<form method='GET' action='logdownload.php'><input type='hidden' name='key' value='" . $info->getKey() . "'><input type='submit' value='Download'></form>";
	}
	?>
</div></td></tr>
</table>

<!-- end content -->
</td>
<td width="1" class="rightborder">&nbsp;</td>
</tr>
</table>

