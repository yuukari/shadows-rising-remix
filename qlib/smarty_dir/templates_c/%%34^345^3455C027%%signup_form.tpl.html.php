<?php /* Smarty version 2.6.6, created on 2011-05-12 19:45:27
         compiled from /home/resbahco/public_html/lab/rpg/qcms/modules/User_Signup/templates/signup_form.tpl.html */ ?>


			<div style="text-align: center;">

			<br />
			<table width="100%">
				<tr>
					<td>
						<div style="text-align: center;"><b>Server Rules</b>
						<hr width="15%" /></div>
						<ul>
							<li>One account per user (no "multies").</li>
							<li>NO Bug exploitation. If you find a bug, report it (and I"m sure you will find a few).</li>
							<li>Follow specific site and game rules.</li>
						</ul>
					</td>
				</tr>
			</table>


			<div style="text-align: center;"><br />
			<form method="post" action="<?php echo $this->_tpl_vars['url_prefix']; ?>
/qcms/module.php?dir=User_Signup&op=signup">
			<blockquote>

			<center>
			<table cellspacing="1" cellpadding="2" border="0">
				<tr bgcolor="#555555">
				<tr>
					<td bgcolor="#555555" align="right">
						<b>Login Name:</b>
					</td>
					<td bgcolor="#333333">
						<input name="l_name" value="" size="20" />
					</td>
				</tr>
				<tr>
					<td bgcolor="#555555" align="right">
						<b>Password:</b>
					</td>
					<td bgcolor="#333333">
						<input type="password" name="passwd" value="" size="20" />
					</td>
				</tr>
				<tr>
					<td bgcolor="#555555" align="right">
						<b>Password Again:</b>
					</td>
					<td bgcolor="#333333">
						<input type="password" name="passwd_verify" value="" size="20" />
					</td>
				</tr>
				<tr>
					<td bgcolor="#555555" align="right">
						<b>First Name:</b>
					</td>
					<td bgcolor="#333333">
						<input name="first_name" value="" size="20" />
					</td>
				</tr>
				<tr>
					<td bgcolor="#555555" align="right">
						<b>Last Name:</b>
					</td>
					<td bgcolor="#333333">
						<input name="last_name" value="" size="20" />
					</td>
				</tr>
				<tr>
					<td bgcolor="#555555" align="right">
						<b>Country:</b>
					</td>
					<td bgcolor="#333333">
						<select name="country">

<option value="ap">-Anonymous-</option><option value="af">Afghanistan</option><option value="al">Albania</option><option value="dz">Algeria</option><option value="as">American Samoa</option><option value="ad">Andorra</option><option value="ao">Angola</option><option value="ai">Anguilla</option><option value="aq">Antarctica</option><option value="ag">Antigua and Barbuda</option><option value="ar">Argentina</option><option value="am">Armenia</option><option value="aw">Aruba</option><option value="au">Australia</option><option value="at">Austria</option><option value="az">Azerbaijan</option><option value="bs">Bahamas</option><option value="bh">Bahrain</option><option value="bd">Bangladesh</option><option value="bb">Barbados</option><option value="by">Belarus</option><option value="be">Belgium</option><option value="bj">Benin</option><option value="bm">Bermuda</option><option value="bt">Bhutan</option><option value="bo">Bolivia</option><option value="ba">Bosnia and Herzegowina</option><option value="bw">Botswana</option><option value="bv">Bouvet Island</option><option value="br">Brazil</option><option value="io">British Indian Ocean Territory</option><option value="bn">Brunei Darussalam</option><option value="bg">Bulgaria</option><option value="bi">Burundi</option><option value="kh">Cambodia</option><option value="ca">Canada</option><option value="ky">Cayman Islands</option><option value="cf">Central African Republic</option><option value="cl">Chile</option><option value="cn">China</option><option value="cx">Christmas Island</option><option value="cc">Cocos (keeling) Islands</option><option value="co">Colombia</option><option value="km">Comoros</option><option value="cg">Congo</option><option value="ck">Cook Islands</option><option value="cr">Costa Rica</option><option value="ci">Cote d"Ivoire</option><option value="hr">Croatia</option><option value="cu">Cuba</option><option value="cy">Cyprus</option><option value="cz">Czech Republic</option><option value="dk">Denmark</option><option value="dj">Djibouti</option><option value="do">Dominican Republic</option><option value="ec">Ecuador</option><option value="eg">Egypt</option><option value="ee">Estonia</option><option value="et">Ethiopia</option><option value="fo">Faroe Islands</option><option value="fj">Fiji</option><option value="fi">Finland</option><option value="fr">France</option><option value="gf">French Guiana</option><option value="pf">French Polynesia</option><option value="tf">French Southern Territories</option><option value="ga">Gabon</option><option value="gm">Gambia</option><option value="ge">Georgia</option><option value="de">Germany</option><option value="gh">Ghana</option><option value="gi">Gibraltar</option><option value="gr">Greece</option><option value="gl">#00FF00land</option><option value="gp">Guadeloupe</option><option value="gu">Guam</option><option value="gt">Guatemala</option><option value="gy">Guyana</option><option value="ht">Haiti</option><option value="hm">Heard and McDonald Islands</option><option value="hk">Hong Kong</option><option value="hu">Hungary</option><option value="is">Iceland</option><option value="in">India</option><option value="id">Indonesia</option><option value="iq">Iraq</option><option value="ie">Ireland</option><option value="il">Israel</option><option value="it">Italy</option><option value="jm">Jamaica</option><option value="jp">Japan</option><option value="jo">Jordan</option><option value="kz">Kazakhstan</option><option value="ke">Kenya</option><option value="ki">Kiribati</option><option value="kp">Korea, Democratic People"s Republic of</option><option value="kr">Korea, Republic of</option><option value="kw">Kuwait</option><option value="kg">Kyrgyzstan</option><option value="lv">Latvia</option><option value="lb">Lebanon</option><option value="ls">Lesotho</option><option value="ly">Libyan Arab Jamahiriya</option><option value="li">Liechtenstein</option><option value="lt">Lithuania</option><option value="lu">Luxembourg</option><option value="mk">Macedonia, the Former Yugoslav Republic</option><option value="my">Malaysia</option><option value="mt">Malta</option><option value="mq">Martinique</option><option value="mu">Mauritius</option><option value="yt">Mayotte</option><option value="mx">Mexico</option><option value="fm">Micronesia, Federated States of</option><option value="md">Moldova, Republic of</option><option value="mc">Monaco</option><option value="ma">Morocco</option><option value="na">Namibia</option><option value="np">Nepal</option><option value="nl">Netherlands</option><option value="an">Netherlands Antilles</option><option value="nz">New Zealand</option><option value="ni">Nicaragua</option><option value="ne">Niger</option><option value="ng">Nigeria</option><option value="nu">Niue</option><option value="no">Norway</option><option value="om">Oman</option><option value="pk">Pakistan</option><option value="pa">Panama</option><option value="py">Paraguay</option><option value="pe">Peru</option><option value="ph">Philippines</option><option value="pl">Poland</option><option value="pt">Portugal</option><option value="qa">Qatar</option><option value="ro">Romania</option><option value="ru">Russian Federation</option><option value="rw">Rwanda</option><option value="kn">Saint Kitts and Nevis</option><option value="lc">Saint lucia</option><option value="vc">Saint Vincent and the Grenadines</option><option value="ws">Samoa</option><option value="sa">Saudi Arabia</option><option value="sg">Singapore</option><option value="sk">Slovakia</option><option value="si">Slovenia</option><option value="sb">Solomon Islands</option><option value="za">South Africa</option><option value="gs">South Georgia and the South Sandwich Isl</option><option value="es">Spain</option><option value="lk">Sri Lanka</option><option value="sz">Swaziland</option><option value="se">Sweden</option><option value="ch">Switzerland</option><option value="sy">Syrian Arab Republic</option><option value="tw">Taiwan</option><option value="tz">Tanzania, United Republic of</option><option value="th">Thailand</option><option value="tg">Togo</option><option value="tk">Tokelau</option><option value="to">Tonga</option><option value="tt">Trinidad and Tobago</option><option value="tn">Tunisia</option><option value="tr">Turkey</option><option value="tm">Turkmenistan</option><option value="tc">Turks and Caicos Islands</option><option value="ug">Uganda</option><option value="ua">Ukraine</option><option value="ae">United Arab Emirates</option><option value="gb">United Kingdom</option><option value="us">United States</option><option value="um">United States Minor Outlying Islands</option><option value="uy">Uruguay</option><option value="uz">Uzbekistan</option><option value="ve">Venezuela</option><option value="vn">Vietnam</option><option value="wf">Wallis and Futuna Islands</option><option value="eh">Western sahara</option><option value="ye">Yemen</option><option value="yu">Yugoslavia</option><option value="zw">Zimbabwe</option>          
        
						</select>
					</td>
				</tr>
				<tr>
					<td bgcolor="#555555" align="right">
						<b>Email Address:</b><br />(Must be valid for authorisation)<br />(It will remain private)
					</td>
					<td bgcolor="#333333">
						<input name="email_address" value="" size="20" />
					</td>
				</tr>
				<tr>
					<td bgcolor="#555555" align="right">
						<b>Email Address Again:</b><br />(Please retype the above address)
					</td>
					<td bgcolor="#333333">
						<input name="email_address_verify" value="" size="20" />
					</td>
				</tr>
				<tr>
					<td bgcolor="#555555" align="right">
						<b>Select the your Internet Connection Speed:</b><br />(Used to determine user options.)
					</td>
					<td bgcolor="#333333">
						<input type="radio" name="con_speed" value="1" />Slow
						<br /><input type="radio" name="con_speed" value="2" checked="checked" />Average
						<br /><input type="radio" name="con_speed" value="3" />Fast
					</td>
				</tr>
				<tr align="right">
					<td>
						<br /><br />The below listed are optional:
					</td>
				</tr>
				<tr>
					<td bgcolor="#555555" align="right">
						<a href="http://www.aol.com" target="_blank"><b><font color="red">*</font></b>&nbsp<img src="images/aim.gif" border="0" /></a> AIM<b>:</b>
					</td>
					<td bgcolor="#333333">
						<input name="aim" value="" size="20" />
					</td>
				</tr>
				<tr>
					<td bgcolor="#555555" align="right">
						<a href="http://www.icq.com" target="_blank"><b><font color="red">*</font></b>&nbsp<img src="images/icq_on.gif" border="0" /></a> ICQ<b>:</b>
					</td>
					<td bgcolor="#333333">
						<input name="icq" value="0" size="20" />
					</td>
				</tr>
				<tr>
					<td bgcolor="#555555" align="right">
						<a href="http://www.msn.com" target="_blank"><b><font color="red">*</font></b>&nbsp<img src="images/msnm.gif" border="0" /></a> MSNM<b>:</b>
					</td>
					<td bgcolor="#333333">
						<input name="msn" value="" size="20" />
					</td>
				</tr>
				<tr>
					<td bgcolor="#555555" align="right">
						<a href="http://www.yahoo.com" target="_blank"><b><font color="red">*</font></b>&nbsp<img src="images/yim.gif" border="0" /></a> YIM<b>:</b>
					</td>
					<td bgcolor="#333333">
						<input name="yim" value="" size="20" />
					</td>
				</tr>
											<!--input type="hidden" name="db" value=<?php echo '<?echo'; ?>
("\"$db\"");<?php echo '?>'; ?>
-->
											</td>
				</tr>
				<tr>
					<td>
						<br />I have read and accepted the <a href="<?php echo $this->_tpl_vars['url_prefix']; ?>
/qcms/disclaimer.html" target="_new" class="delta_link">rules</a> and <a class="delta_link" href="<?php echo $this->_tpl_vars['url_prefix']; ?>
/qcms/disclaimer.html" target="_new">disclaimer</a>.
					</td>
					<td>
						<br /><input type="checkbox" name="disc" value="1">
					 </td>
				</tr>
			</table>
			</center>

		</blockquote>

<br />
<div style="text-align: center;">
<input type="submit" value="Submit">
</div>
</form>
</table>