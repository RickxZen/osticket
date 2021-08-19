<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/formulier.css">
		<title>
			Report Form
		</title>
	</head>
	<body>
		<div>
			<form method="POST" class="input-content" action="php/send.php" enctype="multipart/form-data">
				<table class="styled-table">
					<thead>
						<tr>
							<th colspan="2">Report to IT</th>
						<tr>
					</thead>
					<tbody>
						<tr>
							<td class="firstcolumn">Name</td>
							<td class="secondcolumn"><input type="text" class="fullwidth" name="name" required></td>
						</tr>
						<tr>
							<td class="firstcolumn">Phone number</td>
							<td class="secondcolumn"><input type="tel" class="fullwidth" name="phone" required></td>
						</tr>
						<tr>
							<td class="firstcolumn">Emailaddress</td>
							<td class="secondcolumn"><input type="text" class="fullwidth" name="email" required></td>
						</tr>
						<tr>
							<td class="firstcolumn">Short description of the issue</td>
							<td class="secondcolumn"><input type="text" class="fullwidth" name="subject" required/></td>
						</tr>
						
						
						<tr>
							<td class="firstcolumn">Message</td>
							<td class="secondcolumn">
								<textarea class="fullwidth messageheight" name="message" required>

								</textarea>
							</td>
						</tr>
						<tr>
							<td class="firstcolumn">Desk number</td>
							<td class="secondcolumn">
								<select class="fullwidth" name="desk">
									<option value="" disabled selected>Choose desk</option>
									<option value="Desk01">Desk 01</option>
									<option value="Desk02">Desk 02</option>
									<option value="Desk03">Desk 03</option>
									<option value="Desk04">Desk 04</option>
									<option value="Desk05">Desk 05</option>
									<option value="Desk06">Desk 06</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="firstcolumn">Attachments</td>
							<td><input type="file" name="attachments[]" multiple></td>
						</tr>
						<tr>
							<td><input type="reset" class="fullwidth" value="Reset issue" name="reset"></td>
							<td><input type="submit" class="fullwidth" value="Send issue" name="SEND"></td>
						</tr>
					</tbody>
				</table>
			</form>		
		</div>
	</body>
</html>