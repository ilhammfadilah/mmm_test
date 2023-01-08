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
$route['default_controller'] = 'auth';


$route['login']      = 'auth/index';
$route['registrasi'] = 'auth/registration';
$route['blocked']    = 'auth/blocked';

$route['pimpinan']           = 'pimpinan';
$route['admin']              = 'admin';
$route['supplier']           = 'supplier';
$route['agen']               = 'agen';

//Routes Akses Admin
$route['listayam']                         = 'admin/listayam';
$route['tambahdataayam']                   = 'admin/createayam';
$route['editdataayam/(:any)']              = 'admin/editayam/$1';

$route['listpimpinan']                         = 'admin/listpimpinan';
$route['tambahdatapimpinan']                   = 'admin/createpimpinan';
$route['editdatapimpinan/(:any)']              = 'admin/editpimpinan/$1';

$route['listsupplier']                     = 'admin/listsupplier';
$route['tambahdatasupplier']               = 'admin/createsupplier';
$route['editdatasupplier/(:any)']          = 'admin/editsupplier/$1';

$route['listagen']                         = 'admin/listagen';
$route['tambahdataagen']                   = 'admin/createagen';
$route['editdataagen/(:any)']              = 'admin/editagen/$1';

$route['listayamhilang']                   = 'admin/listayamhilang';
$route['tambahdataayamhilang']             = 'admin/createayamhilang';
$route['detaildataayamhilang/(:any)']      = 'admin/detailayamhilang/$1';

$route['listayammati']                     = 'admin/listayammati';
$route['tambahdataayammati']               = 'admin/createayammati';
$route['detaildataayammati/(:any)']        = 'admin/detailayammati/$1';

$route['listpenjualan-admin']              = 'admin/listpenjualan';
$route['detaildatapenjualan-admin/(:any)'] = 'admin/detailpenjualan/$1';

$route['laporanayamhilang']                = 'admin/laporanayamhilang';
$route['laporanayamhilangtigabulan']       = 'admin/laporanayamhilangtigabulan';

$route['laporanayammati']                  = 'admin/laporanayammati';
$route['laporanayammatitigabulan']         = 'admin/laporanayammatitigabulan';

$route['profile-admin']                    = 'admin/profile';
$route['editprofile-admin']                = 'admin/edit';
$route['ubahpassword-admin']               = 'admin/changepassword';
//

//Routes Akses Supplier
$route['listpembelian']                      = 'supplier/listpembelian';
$route['tambahdatapembelian']                = 'supplier/createpembelian';
$route['detaildatapembelian/(:any)']         = 'supplier/detailpembelian/$1';
$route['laporanpembelian-supplier']          = 'supplier/laporanpembelian';
$route['laporanpembeliantigabulan-supplier'] = 'supplier/laporanpembelian';

$route['profile-supplier']                   = 'supplier/profile';
$route['editprofile-supplier']               = 'supplier/edit';
$route['ubahpassword-supplier']              = 'supplier/changepassword';
//

//Routes Akses Agen
$route['listpenjualan']              = 'agen/listpenjualan';
$route['tambahdatapenjualan']        = 'agen/createpenjualan';
$route['detaildatapenjualan/(:any)'] = 'agen/detailpenjualan/$1';

$route['profile-agen']               = 'agen/profile';
$route['editprofile-agen']           = 'agen/edit';
$route['ubahpassword-agen']          = 'agen/changepassword';
//

//Routes Akses Pimpinan
$route['pengaturan']                           = 'pimpinan/pengaturan';

$route['listclarity']                          = 'pimpinan/listclarity';
$route['tambahdataclarity']                    = 'pimpinan/createclarity';
$route['editdataclarity/(:any)']               = 'pimpinan/editclarity/$1';

$route['listshape']                            = 'pimpinan/listshape';
$route['tambahdatashape']                      = 'pimpinan/createshape';
$route['editdatashape/(:any)']                 = 'pimpinan/editshape/$1';

$route['listcolor']                            = 'pimpinan/listcolor';
$route['tambahdatacolor']                      = 'pimpinan/createcolor';
$route['editdatacolor/(:any)']                 = 'pimpinan/editcolor/$1';

$route['listdiagroup']                         = 'pimpinan/listdiagroup';
$route['tambahdatadiagroup']                   = 'pimpinan/creatediagroup';
$route['editdatadiagroup/(:any)']              = 'pimpinan/editdiagroup/$1';

$route['listdiameter']                         = 'pimpinan/listdiameter';
$route['tambahdatadiameter']                   = 'pimpinan/creatediameter';
$route['editdatadiameter/(:any)']              = 'pimpinan/editdiameter/$1';

$route['listparcel']                           = 'pimpinan/listparcel';
$route['tambahdataparcel']                     = 'pimpinan/createparcel';
$route['editdataparcel/(:any)']                = 'pimpinan/editparcel/$1';

$route['listmaterial']                             = 'pimpinan/listmaterial';
$route['tambahdatamaterial']                       = 'pimpinan/creatematerial';
$route['editdatamaterial/(:any)']                  = 'pimpinan/editmaterial/$1';

$route['listbahanbaku']                        = 'pimpinan/listbahanbaku';
$route['tambahdatabahanbaku']                  = 'pimpinan/createbahanbaku';
$route['editdatabahanbaku/(:any)']             = 'pimpinan/editbahanbaku/$1';

$route['listtipeproduk']                       = 'pimpinan/listtipeproduk';
$route['tambahdatatipeproduk']                 = 'pimpinan/createtipeproduk';
$route['editdatatipeproduk/(:any)']            = 'pimpinan/edittipeproduk/$1';

$route['listfinishing']                        = 'pimpinan/listfinishing';
$route['tambahdatafinishing']                  = 'pimpinan/createfinishing';
$route['editdatafinishing/(:any)']             = 'pimpinan/editfinishing/$1';

$route['listwarnaproduk']                      = 'pimpinan/listwarnaproduk';
$route['tambahdatawarnaproduk']                = 'pimpinan/createwarnaproduk';
$route['editdatawarnaproduk/(:any)']           = 'pimpinan/editwarnaproduk/$1';

$route['listkonsepkepala']                     = 'pimpinan/listkonsepkepala';
$route['tambahdatakonsepkepala']               = 'pimpinan/createkonsepkepala';
$route['editdatakonsepkepala/(:any)']          = 'pimpinan/editkonsepkepala/$1';

$route['listongkos']                           = 'pimpinan/listongkos';
$route['tambahdataongkos']                     = 'pimpinan/createongkos';
$route['editdataongkos/(:any)']                = 'pimpinan/editongkos/$1';

$route['listmatauang']                         = 'pimpinan/listmatauang';
$route['tambahdatamatauang']                   = 'pimpinan/creatematauang';
$route['editdatamatauang/(:any)']              = 'pimpinan/editmatauang/$1';

$route['listkurs']                             = 'pimpinan/listkurs';
$route['tambahdatakurs']                       = 'pimpinan/createkurs';
$route['editdatakurs/(:any)']                  = 'pimpinan/editkurs/$1';

$route['listclient']                          = 'pimpinan/listclient';
$route['tambahdataclient']                    = 'pimpinan/createclient';
$route['editdataclient/(:any)']               = 'pimpinan/editclient/$1';
$route['detaildataclient/(:any)']             = 'pimpinan/detailclient/$1';

$route['listkaryawan']                         = 'pimpinan/listkaryawan';
$route['tambahdatakaryawan']                   = 'pimpinan/createkaryawan';
$route['editdatakaryawan/(:any)']              = 'pimpinan/editkaryawan/$1';
$route['detaildatakaryawan/(:any)']            = 'pimpinan/detailkaryawan/$1';

$route['listbagian']                           = 'pimpinan/listbagian';
$route['tambahdatabagian']                     = 'pimpinan/createbagian';
$route['editdatabagian/(:any)']                = 'pimpinan/editbagian/$1';

$route['listbsis']                             = 'pimpinan/listbsis';
$route['tambahdatabsis']                       = 'pimpinan/createbsis';
$route['editdatabsis/(:any)']                  = 'pimpinan/editbsis/$1';

$route['listcoa']                              = 'pimpinan/listcoa';
$route['tambahdatacoa/(:any)']                 = 'pimpinan/addcoa/$1';
$route['editdatacoa/(:any)']                   = 'pimpinan/editcoa/$1';

$route['listcostcenter']                       = 'pimpinan/listcostcenter';
$route['tambahdatacostcenter']                = 'pimpinan/createcostcenter';
$route['editdatacostcenter/(:any)']            = 'pimpinan/editcostcenter/$1';

$route['listgroupakun']                        = 'pimpinan/listgroupakun';
$route['tambahdatagroupakun']                = 'pimpinan/creategroupakun';
$route['editdatagroupakun/(:any)']             = 'pimpinan/editgroupakun/$1';

$route['listcashbank']                         = 'pimpinan/listcashbank';
$route['tambahdatacashbank']                 = 'pimpinan/createcashbank';
$route['editdatacashbank/(:any)']              = 'pimpinan/editcashbank/$1';
$route['detaildatacashbank/(:any)']            = 'pimpinan/detailcashbankheader/$1';

$route['list2ddesain']                         = 'pimpinan/list2ddesain';
$route['tambahdata2ddesain']                 = 'pimpinan/create2ddesain';
$route['editdetaildesain/(:any)']              = 'pimpinan/editdetaildesain/$1';
$route['editdata2ddesain/(:any)']              = 'pimpinan/edit2ddesain/$1';
$route['detaildata2ddesain/(:any)']            = 'pimpinan/detail2ddesain/$1';

$route['listbarang']                           = 'pimpinan/listbarang';
$route['tambahdatabarang']                     = 'pimpinan/createbarang';
$route['editdatabarang/(:any)']                = 'pimpinan/editbarang/$1';
$route['detaildatabarang/(:any)']              = 'pimpinan/detailbarang/$1';

$route['profile']                           = 'pimpinan/profile';
$route['editprofile']                       = 'pimpinan/edit';
$route['ubahpassword']                      = 'pimpinan/changepassword';


$route['listadmin']                           = 'pimpinan/listadmin';
$route['tambahdataadmin']                     = 'pimpinan/createadmin';
$route['editdataadmin/(:any)']                = 'pimpinan/editadmin/$1';

$route['listayam-pimpinan']                   = 'pimpinan/listayam';
$route['laporandataayam']                     = 'pimpinan/laporandataayam';

$route['listagen-pimpinan']                   = 'pimpinan/listagen';
$route['detaildataagen/(:any)']               = 'pimpinan/detailagen/$1';
$route['laporanhistoryagen/(:any)']           = 'pimpinan/laporanhistoryagen/$1';

$route['listsupplier-pimpinan']               = 'pimpinan/listsupplier';
$route['detaildatasupplier/(:any)']           = 'pimpinan/detailsupplier/$1';
$route['laporanhistorysupplier/(:any)']       = 'pimpinan/laporanhistorysupplier/$1';

$route['listpenjualan-pimpinan']              = 'pimpinan/listpenjualan';
$route['detaildatapenjualan-pimpinan/(:any)'] = 'pimpinan/detailpenjualan/$1';
$route['downloadgambar/(:any)']               = 'pimpinan/downloadgambar/$1';

$route['laporanpenjualan']                    = 'pimpinan/laporanpenjualan';
$route['laporanpenjualanhariini']             = 'pimpinan/laporanpenjualanhariini';
$route['laporanpenjualantigabulan']           = 'pimpinan/laporanpenjualantigabulan';

$route['laporanpembelian']                    = 'pimpinan/laporanpembelian';
$route['laporanpembeliantigabulan']           = 'pimpinan/laporanpembeliantigabulan';

$route['laporanuntungrugi']                   = 'pimpinan/laporanuntungrugi';
$route['laporanuntungrugitigabulan']          = 'pimpinan/laporanuntungrugitigabulan';

// 
$route['hitungDiamond']['post'] = 'pimpinan/hitungDiamond';
$route['addsubdetail']['post'] = 'pimpinan/addsubdetail';
$route['deleteSubDetail/(:any)'] = 'pimpinan/deletesubdetail/$1';
$route['getSubDetail'] = 'pimpinan/getSubDetail';
$route['updatedetaildiamond'] = 'pimpinan/updatedetaildiamond';
//


$route['404_override']                        = '';
$route['translate_uri_dashes']                = FALSE;
