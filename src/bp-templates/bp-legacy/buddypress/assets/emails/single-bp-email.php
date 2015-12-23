<?php
/**
 * BuddyPress email template.
 *
 * @since 2.5.0
 *
 * @package BuddyPress
 * @subpackage Core
 */

/*
Based on the Cerberus "Fluid" template by Ted Goas (http://tedgoas.github.io/Cerberus/).
License for the original template:


The MIT License (MIT)

Copyright (c) 2013 Ted Goas

Permission is hereby granted, free of charge, to any person obtaining a copy of
this software and associated documentation files (the "Software"), to deal in
the Software without restriction, including without limitation the rights to
use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
the Software, and to permit persons to whom the Software is furnished to do so,
subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$settings = get_option( 'bp_mailtpl_opts', bp_email_get_customizer_settings_defaults() );


?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="<?php echo esc_attr( get_bloginfo( 'charset' ) ); ?>">
	<meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
  <title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->

  <!-- CSS Reset -->
	<style type="text/css">
	  /* What it does: Remove spaces around the email design added by some email clients. */
	  /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
		html,
		body {
			Margin: 0 !important;
			padding: 0 !important;
			height: 100% !important;
			width: 100% !important;
		}

		/* What it does: Stops email clients resizing small text. */
		* {
			-ms-text-size-adjust: 100%;
			-webkit-text-size-adjust: 100%;
		}

		/* What it does: Forces Outlook.com to display emails full width. */
		.ExternalClass {
			width: 100%;
		}

		/* What is does: Centers email on Android 4.4 */
		div[style*="margin: 16px 0"] {
			margin:0 !important;
		}

		/* What it does: Stops Outlook from adding extra spacing to tables. */
		table,
		td {
			mso-table-lspace: 0pt !important;
			mso-table-rspace: 0pt !important;
		}

		/* What it does: Fixes webkit padding issue. Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */
		table {
			border-spacing: 0 !important;
			border-collapse: collapse !important;
			table-layout: fixed !important;
			Margin: 0 auto !important;
		}
		table table table {
			table-layout: auto;
		}

		/* What it does: Uses a better rendering method when resizing images in IE. */
		img {
			-ms-interpolation-mode:bicubic;
		}

		/* What it does: Overrides styles added when Yahoo's auto-senses a link. */
		.yshortcuts a {
			border-bottom: none !important;
		}

		/* What it does: A work-around for iOS meddling in triggered links. */
		a[x-apple-data-detectors] {
			color:inherit !important;
			text-decoration: underline !important;
		}
	</style>

	<!-- Progressive Enhancements -->
	<style>
		/* What it does: Hover styles for buttons */
		.button-td,
		.button-a {
			transition: all 100ms ease-in;
		}
		.button-td:hover,
		.button-a:hover {
			background: #555555 !important;
			border-color: #555555 !important;
		}
	</style>

</head>
<body class="body_bg" width="100%" height="100%" bgcolor="<?php echo esc_attr( $settings['body_bg'] ); ?>" style="Margin: 0;">
<table cellpadding="0" cellspacing="0" border="0" height="100%" width="100%" bgcolor="<?php echo esc_attr( $settings['body_bg'] ); ?>" style="border-collapse:collapse;" class="body_bg"><tr><td valign="top">
	<center style="width: 100%;">

		<!-- Visually Hidden Preheader Text : BEGIN -->
		<div style="display:none;font-size:1px;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;mso-hide:all;font-family: sans-serif;">
			(Optional) This text will appear in the inbox preview, but not the email body.
		</div>
		<!-- Visually Hidden Preheader Text : END -->

		<div style="max-width: 600px;">
			<!--[if (gte mso 9)|(IE)]>
			<table cellspacing="0" cellpadding="0" border="0" width="600" align="center">
			<tr>
			<td>
			<![endif]-->

			<!-- Email Header : BEGIN -->
			<table cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="max-width: 600px;">
			<tr>
			  <td style="padding: 20px 0; text-align: center">
				<img src="http://placehold.it/200x50" width="200" height="50" alt="alt_text" border="0">
			  </td>
			</tr>
			</table>
			<!-- Email Header : END -->

			<!-- Email Body : BEGIN -->
			<table cellspacing="0" cellpadding="0" border="0" align="center" bgcolor="#ffffff" width="100%" style="max-width: 600px;">

				<!-- Hero Image, Flush : BEGIN -->
				<tr>
				  <td>
					<img src="http://placehold.it/600x300" width="600" height="" alt="alt_text" border="0" align="center" style="width: 100%; max-width: 600px; height: auto;">
				  </td>
				</tr>
				<!-- Hero Image, Flush : END -->

				<!-- 1 Column Text : BEGIN -->
				<tr>
					<td>
						<table cellspacing="0" cellpadding="0" border="0" width="100%">
						  <tr>
							<td style="padding: 40px; font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555;">
								Maecenas sed ante pellentesque, posuere leo id, eleifend dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent laoreet malesuada cursus. Maecenas scelerisque congue eros eu posuere. Praesent in felis ut velit pretium lobortis rhoncus ut&nbsp;erat.
								<br><br>
								<!-- Button : Begin -->
								<table cellspacing="0" cellpadding="0" border="0" align="center" style="Margin: auto;">
									<tr>
										<td style="border-radius: 3px; background: #222222; text-align: center;" class="button-td">
											<a href="http://www.google.com" style="background: #222222; border: 15px solid #222222; padding: 0 10px;color: #ffffff; font-family: sans-serif; font-size: 13px; line-height: 1.1; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold;" class="button-a">
												<!--[if mso]>&nbsp;&nbsp;&nbsp;&nbsp;<![endif]-->A Button<!--[if mso]>&nbsp;&nbsp;&nbsp;&nbsp;<![endif]-->
											</a>
										</td>
									</tr>
								</table>
								<!-- Button : END -->
								<br>
								Maecenas sed ante pellentesque, posuere leo id, eleifend dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent laoreet malesuada cursus. Maecenas scelerisque congue eros eu posuere. Praesent in felis ut velit pretium lobortis rhoncus ut&nbsp;erat.
							</td>
						  </tr>
						</table>
					</td>
				</tr>
				<!-- 1 Column Text : BEGIN -->

				<!-- Two Even Columns : BEGIN -->
				<tr>
					<td bgcolor="#ffffff" align="center" height="100%" valign="top" width="100%">
						<!--[if mso]>
						<table cellspacing="0" cellpadding="0" border="0" align="center" width="560">
						<tr>
						<td align="center" valign="top" width="560">
						<![endif]-->
						<table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="max-width:560px;">
							<tr>
								<td align="center" valign="top" style="font-size:0; padding: 10px 10px 30px 10px;">
									<!--[if mso]>
									<table border="0" cellspacing="0" cellpadding="0" align="center" width="560">
									<tr>
									<td align="left" valign="top" width="280">
									<![endif]-->
									<div style="display:inline-block; max-width:50%; Margin: 0 -2px; vertical-align:top; width:100%;" class="stack-column">
										<table cellspacing="0" cellpadding="0" border="0" width="100%">
											<tr>
												<td style="padding: 0 20px;">
													<table cellspacing="0" cellpadding="0" border="0" width="100%" style="font-size: 14px;text-align: left;">
														<tr>
															<td style="text-align: center;">
																<img src="http://placehold.it/200" width="200" alt="" style="border: 0;width: 100%;max-width: 200px;height: auto;" class="center-on-narrow">
															</td>
														</tr>
														<tr>
															<td style="font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555; padding-top: 10px;" class="stack-column-center">
																Maecenas sed ante pellentesque, posuere leo id, eleifend dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos&nbsp;himenaeos.
															</td>
														</tr>
													</table>
												</td>
											</tr>
										</table>
									</div>
									<!--[if mso]>
									</td>
									<td align="left" valign="top" width="280">
									<![endif]-->
									<div style="display:inline-block; max-width:50%; Margin: 0 -2px; vertical-align:top; width:100%;" class="stack-column">
										<table cellspacing="0" cellpadding="0" border="0" width="100%">
											<tr>
												<td style="padding: 0 20px;">
													<table cellspacing="0" cellpadding="0" border="0" width="100%" style="font-size: 14px;text-align: left;">
														<tr>
															<td style="text-align: center;">
																<img src="http://placehold.it/200" width="200" alt="" style="border: 0;width: 100%;max-width: 200px;height: auto;" class="center-on-narrow">
															</td>
														</tr>
														<tr>
															<td style="font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555; padding-top: 10px;" class="stack-column-center">
																Maecenas sed ante pellentesque, posuere leo id, eleifend dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos&nbsp;himenaeos.
															</td>
														</tr>
													</table>
												</td>
											</tr>
										</table>
									</div>
									<!--[if mso]>
									</td>
									</tr>
									</table>
									<![endif]-->
								</td>
							</tr>
						</table>
						<!--[if mso]>
						</td>
						</tr>
						</table>
						<![endif]-->
					</td>
				</tr>
				<!-- Two Even Columns : END -->

			</table>
			<!-- Email Body : END -->

			<!-- Email Footer : BEGIN -->
			<table cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="max-width: 680px;">
				<tr>
					<td style="padding: 40px 10px;width: 100%;font-size: 12px; font-family: sans-serif; mso-height-rule: exactly; line-height:18px; text-align: center; color: #888888;">
						<span class="footer_text"><?php echo esc_html( $settings['footer_text'] ); ?></span>
						<br><br>
						<a href="{{unsubscribe}}" style="color:#888888; text-decoration:underline;"><?php _ex( 'unsubscribe', 'email', 'buddypress' ); ?></a>
					</td>
				</tr>
			</table>
			<!-- Email Footer : END -->

			<!--[if (gte mso 9)|(IE)]>
			</td>
			</tr>
			</table>
			<![endif]-->
		</div>
	</center>
</td></tr></table>
<?php if ( is_customize_preview() ) wp_footer(); ?>
</body>
</html>
