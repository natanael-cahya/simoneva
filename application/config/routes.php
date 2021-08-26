<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'homepage';
$route['dashboard'] = 'admin/Dashboard';
$route['s5'] = 'admin/s5/crud_s5/v_s5';
$route['kategori'] = 'admin/kategori/crud_kategori/v_kategori';
$route['area'] = 'admin/area/crud_area/v_area';
$route['list_audit'] = 'admin/audit/crud_list_audit/v_list_audit';
$route['penilaian'] = 'admin/penilaian/crud_penilaian/v_penilaian';
$route['tentang_5s'] = 'admin/lp/tentang';
$route['kebijakan_5s'] = 'admin/lp/kebijakan';
$route['komitmen_5s'] = 'admin/lp/komitmen';
$route['dokumentasi'] = 'admin/lp/dokumentasi';
$route['struktur'] = 'admin/lp/struktur';
$route['pob'] = 'admin/lp/pob';
// 
$route['buat-rencana'] = 'admin/rencana/crud_rencana';
$route['data-rencana'] = 'admin/rencana/crud_rencana/v_rencana';
$route['riwayat-rencana'] = 'admin/rencana/crud_rencana/r_rencana';

$route['data-bidang'] = 'admin/bidang/crud_bidang';
$route['request-material'] = 'admin/permintaan/crud_permintaan/v_permintaan';

$route['input-audit-ex'] = 'admin/audit/crud_auditE';
$route['riwayat-audit-ex'] = 'admin/audit/crud_auditE/r_auditE';
$route['input-audit-in'] = 'admin/penilaian/crud_penilaian/pilihh';
$route['riwayat-audit-in'] = 'admin/penilaian/crud_penilaian/r_penilaian';

$route['register'] = 'admin/register';

$route['laporan-gudang'] = 'admin/report/crud_report/pilihg';
$route['laporan-workshop'] = 'admin/report/crud_report/pilihw';
$route['laporan-lingkungan'] = 'admin/report/crud_report/pilihl';
$route['laporan-produksi'] = 'admin/report/crud_report/pilihp';
$route['laporan-office'] = 'admin/report/crud_report/piliho';

$route['list-gudang'] = 'admin/audit/crud_list_audit/v_list_audit';
$route['list-workshop'] = 'admin/audit/crud_list_audit/v_auditW';
$route['list-produksi'] = 'admin/audit/crud_list_audit/v_auditp';
$route['list-lingkungan'] = 'admin/audit/crud_list_audit/v_auditl';
$route['list-office'] = 'admin/audit/crud_list_audit/v_audito';


$route['edit-rencana/'] = 'admin/rencana/crud_rencana/e_rencana/';




$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
