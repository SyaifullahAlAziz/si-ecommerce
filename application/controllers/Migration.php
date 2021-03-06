<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration extends CI_Controller
{

	public function index($p = false)
	{
		if (!$p) return 'No migration specified';
		// truncate data
		$this->db->truncate('tb_provinsi');
		$this->db->truncate('tb_kota');
		$this->db->truncate('tb_pelapak');
		$this->db->truncate('tb_toko');
		$this->db->truncate('tb_produk');

		$provinsi = [
			'11' => 'ACEH',
			'12' => 'SUMATERA UTARA',
			'13' => 'SUMATERA BARAT',
			'14' => 'RIAU',
			'15' => 'JAMBI',
			'16' => 'SUMATERA SELATAN',
			'17' => 'BENGKULU',
			'18' => 'LAMPUNG',
			'19' => 'KEPULAUAN BANGKA BELITUNG',
			'21' => 'KEPULAUAN RIAU',
			'31' => 'DKI JAKARTA',
			'32' => 'JAWA BARAT',
			'33' => 'JAWA TENGAH',
			'34' => 'DI YOGYAKARTA',
			'35' => 'JAWA TIMUR',
			'36' => 'BANTEN',
			'51' => 'BALI',
			'52' => 'NUSA TENGGARA BARAT',
			'53' => 'NUSA TENGGARA TIMUR',
			'61' => 'KALIMANTAN BARAT',
			'62' => 'KALIMANTAN TENGAH',
			'63' => 'KALIMANTAN SELATAN',
			'64' => 'KALIMANTAN TIMUR',
			'65' => 'KALIMANTAN UTARA',
			'71' => 'SULAWESI UTARA',
			'72' => 'SULAWESI TENGAH',
			'73' => 'SULAWESI SELATAN',
			'74' => 'SULAWESI TENGGARA',
			'75' => 'GORONTALO',
			'76' => 'SULAWESI BARAT',
			'81' => 'MALUKU',
			'82' => 'MALUKU UTARA',
			'91' => 'PAPUA BARAT',
			'94' => 'PAPUA'
		];

		$kota = [
			'1101' => ['i' => '11', 'n' => 'KABUPATEN SIMEULUE'],
			'1102' => ['i' => '11', 'n' => 'KABUPATEN ACEH SINGKIL'],
			'1103' => ['i' => '11', 'n' => 'KABUPATEN ACEH SELATAN'],
			'1104' => ['i' => '11', 'n' => 'KABUPATEN ACEH TENGGARA'],
			'1105' => ['i' => '11', 'n' => 'KABUPATEN ACEH TIMUR'],
			'1106' => ['i' => '11', 'n' => 'KABUPATEN ACEH TENGAH'],
			'1107' => ['i' => '11', 'n' => 'KABUPATEN ACEH BARAT'],
			'1108' => ['i' => '11', 'n' => 'KABUPATEN ACEH BESAR'],
			'1109' => ['i' => '11', 'n' => 'KABUPATEN PIDIE'],
			'1110' => ['i' => '11', 'n' => 'KABUPATEN BIREUEN'],
			'1111' => ['i' => '11', 'n' => 'KABUPATEN ACEH UTARA'],
			'1112' => ['i' => '11', 'n' => 'KABUPATEN ACEH BARAT DAYA'],
			'1113' => ['i' => '11', 'n' => 'KABUPATEN GAYO LUES'],
			'1114' => ['i' => '11', 'n' => 'KABUPATEN ACEH TAMIANG'],
			'1115' => ['i' => '11', 'n' => 'KABUPATEN NAGAN RAYA'],
			'1116' => ['i' => '11', 'n' => 'KABUPATEN ACEH JAYA'],
			'1117' => ['i' => '11', 'n' => 'KABUPATEN BENER MERIAH'],
			'1118' => ['i' => '11', 'n' => 'KABUPATEN PIDIE JAYA'],
			'1171' => ['i' => '11', 'n' => 'KOTA BANDA ACEH'],
			'1172' => ['i' => '11', 'n' => 'KOTA SABANG'],
			'1173' => ['i' => '11', 'n' => 'KOTA LANGSA'],
			'1174' => ['i' => '11', 'n' => 'KOTA LHOKSEUMAWE'],
			'1175' => ['i' => '11', 'n' => 'KOTA SUBULUSSALAM'],
			'1201' => ['i' => '12', 'n' => 'KABUPATEN NIAS'],
			'1202' => ['i' => '12', 'n' => 'KABUPATEN MANDAILING NATAL'],
			'1203' => ['i' => '12', 'n' => 'KABUPATEN TAPANULI SELATAN'],
			'1204' => ['i' => '12', 'n' => 'KABUPATEN TAPANULI TENGAH'],
			'1205' => ['i' => '12', 'n' => 'KABUPATEN TAPANULI UTARA'],
			'1206' => ['i' => '12', 'n' => 'KABUPATEN TOBA SAMOSIR'],
			'1207' => ['i' => '12', 'n' => 'KABUPATEN LABUHAN BATU'],
			'1208' => ['i' => '12', 'n' => 'KABUPATEN ASAHAN'],
			'1209' => ['i' => '12', 'n' => 'KABUPATEN SIMALUNGUN'],
			'1210' => ['i' => '12', 'n' => 'KABUPATEN DAIRI'],
			'1211' => ['i' => '12', 'n' => 'KABUPATEN KARO'],
			'1212' => ['i' => '12', 'n' => 'KABUPATEN DELI SERDANG'],
			'1213' => ['i' => '12', 'n' => 'KABUPATEN LANGKAT'],
			'1214' => ['i' => '12', 'n' => 'KABUPATEN NIAS SELATAN'],
			'1215' => ['i' => '12', 'n' => 'KABUPATEN HUMBANG HASUNDUTAN'],
			'1216' => ['i' => '12', 'n' => 'KABUPATEN PAKPAK BHARAT'],
			'1217' => ['i' => '12', 'n' => 'KABUPATEN SAMOSIR'],
			'1218' => ['i' => '12', 'n' => 'KABUPATEN SERDANG BEDAGAI'],
			'1219' => ['i' => '12', 'n' => 'KABUPATEN BATU BARA'],
			'1220' => ['i' => '12', 'n' => 'KABUPATEN PADANG LAWAS UTARA'],
			'1221' => ['i' => '12', 'n' => 'KABUPATEN PADANG LAWAS'],
			'1222' => ['i' => '12', 'n' => 'KABUPATEN LABUHAN BATU SELATAN'],
			'1223' => ['i' => '12', 'n' => 'KABUPATEN LABUHAN BATU UTARA'],
			'1224' => ['i' => '12', 'n' => 'KABUPATEN NIAS UTARA'],
			'1225' => ['i' => '12', 'n' => 'KABUPATEN NIAS BARAT'],
			'1271' => ['i' => '12', 'n' => 'KOTA SIBOLGA'],
			'1272' => ['i' => '12', 'n' => 'KOTA TANJUNG BALAI'],
			'1273' => ['i' => '12', 'n' => 'KOTA PEMATANG SIANTAR'],
			'1274' => ['i' => '12', 'n' => 'KOTA TEBING TINGGI'],
			'1275' => ['i' => '12', 'n' => 'KOTA MEDAN'],
			'1276' => ['i' => '12', 'n' => 'KOTA BINJAI'],
			'1277' => ['i' => '12', 'n' => 'KOTA PADANGSIDIMPUAN'],
			'1278' => ['i' => '12', 'n' => 'KOTA GUNUNGSITOLI'],
			'1301' => ['i' => '13', 'n' => 'KABUPATEN KEPULAUAN MENTAWAI'],
			'1302' => ['i' => '13', 'n' => 'KABUPATEN PESISIR SELATAN'],
			'1303' => ['i' => '13', 'n' => 'KABUPATEN SOLOK'],
			'1304' => ['i' => '13', 'n' => 'KABUPATEN SIJUNJUNG'],
			'1305' => ['i' => '13', 'n' => 'KABUPATEN TANAH DATAR'],
			'1306' => ['i' => '13', 'n' => 'KABUPATEN PADANG PARIAMAN'],
			'1307' => ['i' => '13', 'n' => 'KABUPATEN AGAM'],
			'1308' => ['i' => '13', 'n' => 'KABUPATEN LIMA PULUH KOTA'],
			'1309' => ['i' => '13', 'n' => 'KABUPATEN PASAMAN'],
			'1310' => ['i' => '13', 'n' => 'KABUPATEN SOLOK SELATAN'],
			'1311' => ['i' => '13', 'n' => 'KABUPATEN DHARMASRAYA'],
			'1312' => ['i' => '13', 'n' => 'KABUPATEN PASAMAN BARAT'],
			'1371' => ['i' => '13', 'n' => 'KOTA PADANG'],
			'1372' => ['i' => '13', 'n' => 'KOTA SOLOK'],
			'1373' => ['i' => '13', 'n' => 'KOTA SAWAH LUNTO'],
			'1374' => ['i' => '13', 'n' => 'KOTA PADANG PANJANG'],
			'1375' => ['i' => '13', 'n' => 'KOTA BUKITTINGGI'],
			'1376' => ['i' => '13', 'n' => 'KOTA PAYAKUMBUH'],
			'1377' => ['i' => '13', 'n' => 'KOTA PARIAMAN'],
			'1401' => ['i' => '14', 'n' => 'KABUPATEN KUANTAN SINGINGI'],
			'1402' => ['i' => '14', 'n' => 'KABUPATEN INDRAGIRI HULU'],
			'1403' => ['i' => '14', 'n' => 'KABUPATEN INDRAGIRI HILIR'],
			'1404' => ['i' => '14', 'n' => 'KABUPATEN PELALAWAN'],
			'1405' => ['i' => '14', 'n' => 'KABUPATEN S I A K'],
			'1406' => ['i' => '14', 'n' => 'KABUPATEN KAMPAR'],
			'1407' => ['i' => '14', 'n' => 'KABUPATEN ROKAN HULU'],
			'1408' => ['i' => '14', 'n' => 'KABUPATEN BENGKALIS'],
			'1409' => ['i' => '14', 'n' => 'KABUPATEN ROKAN HILIR'],
			'1410' => ['i' => '14', 'n' => 'KABUPATEN KEPULAUAN MERANTI'],
			'1471' => ['i' => '14', 'n' => 'KOTA PEKANBARU'],
			'1473' => ['i' => '14', 'n' => 'KOTA D U M A I'],
			'1501' => ['i' => '15', 'n' => 'KABUPATEN KERINCI'],
			'1502' => ['i' => '15', 'n' => 'KABUPATEN MERANGIN'],
			'1503' => ['i' => '15', 'n' => 'KABUPATEN SAROLANGUN'],
			'1504' => ['i' => '15', 'n' => 'KABUPATEN BATANG HARI'],
			'1505' => ['i' => '15', 'n' => 'KABUPATEN MUARO JAMBI'],
			'1506' => ['i' => '15', 'n' => 'KABUPATEN TANJUNG JABUNG TIMUR'],
			'1507' => ['i' => '15', 'n' => 'KABUPATEN TANJUNG JABUNG BARAT'],
			'1508' => ['i' => '15', 'n' => 'KABUPATEN TEBO'],
			'1509' => ['i' => '15', 'n' => 'KABUPATEN BUNGO'],
			'1571' => ['i' => '15', 'n' => 'KOTA JAMBI'],
			'1572' => ['i' => '15', 'n' => 'KOTA SUNGAI PENUH'],
			'1601' => ['i' => '16', 'n' => 'KABUPATEN OGAN KOMERING ULU'],
			'1602' => ['i' => '16', 'n' => 'KABUPATEN OGAN KOMERING ILIR'],
			'1603' => ['i' => '16', 'n' => 'KABUPATEN MUARA ENIM'],
			'1604' => ['i' => '16', 'n' => 'KABUPATEN LAHAT'],
			'1605' => ['i' => '16', 'n' => 'KABUPATEN MUSI RAWAS'],
			'1606' => ['i' => '16', 'n' => 'KABUPATEN MUSI BANYUASIN'],
			'1607' => ['i' => '16', 'n' => 'KABUPATEN BANYU ASIN'],
			'1608' => ['i' => '16', 'n' => 'KABUPATEN OGAN KOMERING ULU SELATAN'],
			'1609' => ['i' => '16', 'n' => 'KABUPATEN OGAN KOMERING ULU TIMUR'],
			'1610' => ['i' => '16', 'n' => 'KABUPATEN OGAN ILIR'],
			'1611' => ['i' => '16', 'n' => 'KABUPATEN EMPAT LAWANG'],
			'1612' => ['i' => '16', 'n' => 'KABUPATEN PENUKAL ABAB LEMATANG ILIR'],
			'1613' => ['i' => '16', 'n' => 'KABUPATEN MUSI RAWAS UTARA'],
			'1671' => ['i' => '16', 'n' => 'KOTA PALEMBANG'],
			'1672' => ['i' => '16', 'n' => 'KOTA PRABUMULIH'],
			'1673' => ['i' => '16', 'n' => 'KOTA PAGAR ALAM'],
			'1674' => ['i' => '16', 'n' => 'KOTA LUBUKLINGGAU'],
			'1701' => ['i' => '17', 'n' => 'KABUPATEN BENGKULU SELATAN'],
			'1702' => ['i' => '17', 'n' => 'KABUPATEN REJANG LEBONG'],
			'1703' => ['i' => '17', 'n' => 'KABUPATEN BENGKULU UTARA'],
			'1704' => ['i' => '17', 'n' => 'KABUPATEN KAUR'],
			'1705' => ['i' => '17', 'n' => 'KABUPATEN SELUMA'],
			'1706' => ['i' => '17', 'n' => 'KABUPATEN MUKOMUKO'],
			'1707' => ['i' => '17', 'n' => 'KABUPATEN LEBONG'],
			'1708' => ['i' => '17', 'n' => 'KABUPATEN KEPAHIANG'],
			'1709' => ['i' => '17', 'n' => 'KABUPATEN BENGKULU TENGAH'],
			'1771' => ['i' => '17', 'n' => 'KOTA BENGKULU'],
			'1801' => ['i' => '18', 'n' => 'KABUPATEN LAMPUNG BARAT'],
			'1802' => ['i' => '18', 'n' => 'KABUPATEN TANGGAMUS'],
			'1803' => ['i' => '18', 'n' => 'KABUPATEN LAMPUNG SELATAN'],
			'1804' => ['i' => '18', 'n' => 'KABUPATEN LAMPUNG TIMUR'],
			'1805' => ['i' => '18', 'n' => 'KABUPATEN LAMPUNG TENGAH'],
			'1806' => ['i' => '18', 'n' => 'KABUPATEN LAMPUNG UTARA'],
			'1807' => ['i' => '18', 'n' => 'KABUPATEN WAY KANAN'],
			'1808' => ['i' => '18', 'n' => 'KABUPATEN TULANGBAWANG'],
			'1809' => ['i' => '18', 'n' => 'KABUPATEN PESAWARAN'],
			'1810' => ['i' => '18', 'n' => 'KABUPATEN PRINGSEWU'],
			'1811' => ['i' => '18', 'n' => 'KABUPATEN MESUJI'],
			'1812' => ['i' => '18', 'n' => 'KABUPATEN TULANG BAWANG BARAT'],
			'1813' => ['i' => '18', 'n' => 'KABUPATEN PESISIR BARAT'],
			'1871' => ['i' => '18', 'n' => 'KOTA BANDAR LAMPUNG'],
			'1872' => ['i' => '18', 'n' => 'KOTA METRO'],
			'1901' => ['i' => '19', 'n' => 'KABUPATEN BANGKA'],
			'1902' => ['i' => '19', 'n' => 'KABUPATEN BELITUNG'],
			'1903' => ['i' => '19', 'n' => 'KABUPATEN BANGKA BARAT'],
			'1904' => ['i' => '19', 'n' => 'KABUPATEN BANGKA TENGAH'],
			'1905' => ['i' => '19', 'n' => 'KABUPATEN BANGKA SELATAN'],
			'1906' => ['i' => '19', 'n' => 'KABUPATEN BELITUNG TIMUR'],
			'1971' => ['i' => '19', 'n' => 'KOTA PANGKAL PINANG'],
			'2101' => ['i' => '21', 'n' => 'KABUPATEN KARIMUN'],
			'2102' => ['i' => '21', 'n' => 'KABUPATEN BINTAN'],
			'2103' => ['i' => '21', 'n' => 'KABUPATEN NATUNA'],
			'2104' => ['i' => '21', 'n' => 'KABUPATEN LINGGA'],
			'2105' => ['i' => '21', 'n' => 'KABUPATEN KEPULAUAN ANAMBAS'],
			'2171' => ['i' => '21', 'n' => 'KOTA B A T A M'],
			'2172' => ['i' => '21', 'n' => 'KOTA TANJUNG PINANG'],
			'3101' => ['i' => '31', 'n' => 'KABUPATEN KEPULAUAN SERIBU'],
			'3171' => ['i' => '31', 'n' => 'KOTA JAKARTA SELATAN'],
			'3172' => ['i' => '31', 'n' => 'KOTA JAKARTA TIMUR'],
			'3173' => ['i' => '31', 'n' => 'KOTA JAKARTA PUSAT'],
			'3174' => ['i' => '31', 'n' => 'KOTA JAKARTA BARAT'],
			'3175' => ['i' => '31', 'n' => 'KOTA JAKARTA UTARA'],
			'3201' => ['i' => '32', 'n' => 'KABUPATEN BOGOR'],
			'3202' => ['i' => '32', 'n' => 'KABUPATEN SUKABUMI'],
			'3203' => ['i' => '32', 'n' => 'KABUPATEN CIANJUR'],
			'3204' => ['i' => '32', 'n' => 'KABUPATEN BANDUNG'],
			'3205' => ['i' => '32', 'n' => 'KABUPATEN GARUT'],
			'3206' => ['i' => '32', 'n' => 'KABUPATEN TASIKMALAYA'],
			'3207' => ['i' => '32', 'n' => 'KABUPATEN CIAMIS'],
			'3208' => ['i' => '32', 'n' => 'KABUPATEN KUNINGAN'],
			'3209' => ['i' => '32', 'n' => 'KABUPATEN CIREBON'],
			'3210' => ['i' => '32', 'n' => 'KABUPATEN MAJALENGKA'],
			'3211' => ['i' => '32', 'n' => 'KABUPATEN SUMEDANG'],
			'3212' => ['i' => '32', 'n' => 'KABUPATEN INDRAMAYU'],
			'3213' => ['i' => '32', 'n' => 'KABUPATEN SUBANG'],
			'3214' => ['i' => '32', 'n' => 'KABUPATEN PURWAKARTA'],
			'3215' => ['i' => '32', 'n' => 'KABUPATEN KARAWANG'],
			'3216' => ['i' => '32', 'n' => 'KABUPATEN BEKASI'],
			'3217' => ['i' => '32', 'n' => 'KABUPATEN BANDUNG BARAT'],
			'3218' => ['i' => '32', 'n' => 'KABUPATEN PANGANDARAN'],
			'3271' => ['i' => '32', 'n' => 'KOTA BOGOR'],
			'3272' => ['i' => '32', 'n' => 'KOTA SUKABUMI'],
			'3273' => ['i' => '32', 'n' => 'KOTA BANDUNG'],
			'3274' => ['i' => '32', 'n' => 'KOTA CIREBON'],
			'3275' => ['i' => '32', 'n' => 'KOTA BEKASI'],
			'3276' => ['i' => '32', 'n' => 'KOTA DEPOK'],
			'3277' => ['i' => '32', 'n' => 'KOTA CIMAHI'],
			'3278' => ['i' => '32', 'n' => 'KOTA TASIKMALAYA'],
			'3279' => ['i' => '32', 'n' => 'KOTA BANJAR'],
			'3301' => ['i' => '33', 'n' => 'KABUPATEN CILACAP'],
			'3302' => ['i' => '33', 'n' => 'KABUPATEN BANYUMAS'],
			'3303' => ['i' => '33', 'n' => 'KABUPATEN PURBALINGGA'],
			'3304' => ['i' => '33', 'n' => 'KABUPATEN BANJARNEGARA'],
			'3305' => ['i' => '33', 'n' => 'KABUPATEN KEBUMEN'],
			'3306' => ['i' => '33', 'n' => 'KABUPATEN PURWOREJO'],
			'3307' => ['i' => '33', 'n' => 'KABUPATEN WONOSOBO'],
			'3308' => ['i' => '33', 'n' => 'KABUPATEN MAGELANG'],
			'3309' => ['i' => '33', 'n' => 'KABUPATEN BOYOLALI'],
			'3310' => ['i' => '33', 'n' => 'KABUPATEN KLATEN'],
			'3311' => ['i' => '33', 'n' => 'KABUPATEN SUKOHARJO'],
			'3312' => ['i' => '33', 'n' => 'KABUPATEN WONOGIRI'],
			'3313' => ['i' => '33', 'n' => 'KABUPATEN KARANGANYAR'],
			'3314' => ['i' => '33', 'n' => 'KABUPATEN SRAGEN'],
			'3315' => ['i' => '33', 'n' => 'KABUPATEN GROBOGAN'],
			'3316' => ['i' => '33', 'n' => 'KABUPATEN BLORA'],
			'3317' => ['i' => '33', 'n' => 'KABUPATEN REMBANG'],
			'3318' => ['i' => '33', 'n' => 'KABUPATEN PATI'],
			'3319' => ['i' => '33', 'n' => 'KABUPATEN KUDUS'],
			'3320' => ['i' => '33', 'n' => 'KABUPATEN JEPARA'],
			'3321' => ['i' => '33', 'n' => 'KABUPATEN DEMAK'],
			'3322' => ['i' => '33', 'n' => 'KABUPATEN SEMARANG'],
			'3323' => ['i' => '33', 'n' => 'KABUPATEN TEMANGGUNG'],
			'3324' => ['i' => '33', 'n' => 'KABUPATEN KENDAL'],
			'3325' => ['i' => '33', 'n' => 'KABUPATEN BATANG'],
			'3326' => ['i' => '33', 'n' => 'KABUPATEN PEKALONGAN'],
			'3327' => ['i' => '33', 'n' => 'KABUPATEN PEMALANG'],
			'3328' => ['i' => '33', 'n' => 'KABUPATEN TEGAL'],
			'3329' => ['i' => '33', 'n' => 'KABUPATEN BREBES'],
			'3371' => ['i' => '33', 'n' => 'KOTA MAGELANG'],
			'3372' => ['i' => '33', 'n' => 'KOTA SURAKARTA'],
			'3373' => ['i' => '33', 'n' => 'KOTA SALATIGA'],
			'3374' => ['i' => '33', 'n' => 'KOTA SEMARANG'],
			'3375' => ['i' => '33', 'n' => 'KOTA PEKALONGAN'],
			'3376' => ['i' => '33', 'n' => 'KOTA TEGAL'],
			'3401' => ['i' => '34', 'n' => 'KABUPATEN KULON PROGO'],
			'3402' => ['i' => '34', 'n' => 'KABUPATEN BANTUL'],
			'3403' => ['i' => '34', 'n' => 'KABUPATEN GUNUNG KIDUL'],
			'3404' => ['i' => '34', 'n' => 'KABUPATEN SLEMAN'],
			'3471' => ['i' => '34', 'n' => 'KOTA YOGYAKARTA'],
			'3501' => ['i' => '35', 'n' => 'KABUPATEN PACITAN'],
			'3502' => ['i' => '35', 'n' => 'KABUPATEN PONOROGO'],
			'3503' => ['i' => '35', 'n' => 'KABUPATEN TRENGGALEK'],
			'3504' => ['i' => '35', 'n' => 'KABUPATEN TULUNGAGUNG'],
			'3505' => ['i' => '35', 'n' => 'KABUPATEN BLITAR'],
			'3506' => ['i' => '35', 'n' => 'KABUPATEN KEDIRI'],
			'3507' => ['i' => '35', 'n' => 'KABUPATEN MALANG'],
			'3508' => ['i' => '35', 'n' => 'KABUPATEN LUMAJANG'],
			'3509' => ['i' => '35', 'n' => 'KABUPATEN JEMBER'],
			'3510' => ['i' => '35', 'n' => 'KABUPATEN BANYUWANGI'],
			'3511' => ['i' => '35', 'n' => 'KABUPATEN BONDOWOSO'],
			'3512' => ['i' => '35', 'n' => 'KABUPATEN SITUBONDO'],
			'3513' => ['i' => '35', 'n' => 'KABUPATEN PROBOLINGGO'],
			'3514' => ['i' => '35', 'n' => 'KABUPATEN PASURUAN'],
			'3515' => ['i' => '35', 'n' => 'KABUPATEN SIDOARJO'],
			'3516' => ['i' => '35', 'n' => 'KABUPATEN MOJOKERTO'],
			'3517' => ['i' => '35', 'n' => 'KABUPATEN JOMBANG'],
			'3518' => ['i' => '35', 'n' => 'KABUPATEN NGANJUK'],
			'3519' => ['i' => '35', 'n' => 'KABUPATEN MADIUN'],
			'3520' => ['i' => '35', 'n' => 'KABUPATEN MAGETAN'],
			'3521' => ['i' => '35', 'n' => 'KABUPATEN NGAWI'],
			'3522' => ['i' => '35', 'n' => 'KABUPATEN BOJONEGORO'],
			'3523' => ['i' => '35', 'n' => 'KABUPATEN TUBAN'],
			'3524' => ['i' => '35', 'n' => 'KABUPATEN LAMONGAN'],
			'3525' => ['i' => '35', 'n' => 'KABUPATEN GRESIK'],
			'3526' => ['i' => '35', 'n' => 'KABUPATEN BANGKALAN'],
			'3527' => ['i' => '35', 'n' => 'KABUPATEN SAMPANG'],
			'3528' => ['i' => '35', 'n' => 'KABUPATEN PAMEKASAN'],
			'3529' => ['i' => '35', 'n' => 'KABUPATEN SUMENEP'],
			'3571' => ['i' => '35', 'n' => 'KOTA KEDIRI'],
			'3572' => ['i' => '35', 'n' => 'KOTA BLITAR'],
			'3573' => ['i' => '35', 'n' => 'KOTA MALANG'],
			'3574' => ['i' => '35', 'n' => 'KOTA PROBOLINGGO'],
			'3575' => ['i' => '35', 'n' => 'KOTA PASURUAN'],
			'3576' => ['i' => '35', 'n' => 'KOTA MOJOKERTO'],
			'3577' => ['i' => '35', 'n' => 'KOTA MADIUN'],
			'3578' => ['i' => '35', 'n' => 'KOTA SURABAYA'],
			'3579' => ['i' => '35', 'n' => 'KOTA BATU'],
			'3601' => ['i' => '36', 'n' => 'KABUPATEN PANDEGLANG'],
			'3602' => ['i' => '36', 'n' => 'KABUPATEN LEBAK'],
			'3603' => ['i' => '36', 'n' => 'KABUPATEN TANGERANG'],
			'3604' => ['i' => '36', 'n' => 'KABUPATEN SERANG'],
			'3671' => ['i' => '36', 'n' => 'KOTA TANGERANG'],
			'3672' => ['i' => '36', 'n' => 'KOTA CILEGON'],
			'3673' => ['i' => '36', 'n' => 'KOTA SERANG'],
			'3674' => ['i' => '36', 'n' => 'KOTA TANGERANG SELATAN'],
			'5101' => ['i' => '51', 'n' => 'KABUPATEN JEMBRANA'],
			'5102' => ['i' => '51', 'n' => 'KABUPATEN TABANAN'],
			'5103' => ['i' => '51', 'n' => 'KABUPATEN BADUNG'],
			'5104' => ['i' => '51', 'n' => 'KABUPATEN GIANYAR'],
			'5105' => ['i' => '51', 'n' => 'KABUPATEN KLUNGKUNG'],
			'5106' => ['i' => '51', 'n' => 'KABUPATEN BANGLI'],
			'5107' => ['i' => '51', 'n' => 'KABUPATEN KARANG ASEM'],
			'5108' => ['i' => '51', 'n' => 'KABUPATEN BULELENG'],
			'5171' => ['i' => '51', 'n' => 'KOTA DENPASAR'],
			'5201' => ['i' => '52', 'n' => 'KABUPATEN LOMBOK BARAT'],
			'5202' => ['i' => '52', 'n' => 'KABUPATEN LOMBOK TENGAH'],
			'5203' => ['i' => '52', 'n' => 'KABUPATEN LOMBOK TIMUR'],
			'5204' => ['i' => '52', 'n' => 'KABUPATEN SUMBAWA'],
			'5205' => ['i' => '52', 'n' => 'KABUPATEN DOMPU'],
			'5206' => ['i' => '52', 'n' => 'KABUPATEN BIMA'],
			'5207' => ['i' => '52', 'n' => 'KABUPATEN SUMBAWA BARAT'],
			'5208' => ['i' => '52', 'n' => 'KABUPATEN LOMBOK UTARA'],
			'5271' => ['i' => '52', 'n' => 'KOTA MATARAM'],
			'5272' => ['i' => '52', 'n' => 'KOTA BIMA'],
			'5301' => ['i' => '53', 'n' => 'KABUPATEN SUMBA BARAT'],
			'5302' => ['i' => '53', 'n' => 'KABUPATEN SUMBA TIMUR'],
			'5303' => ['i' => '53', 'n' => 'KABUPATEN KUPANG'],
			'5304' => ['i' => '53', 'n' => 'KABUPATEN TIMOR TENGAH SELATAN'],
			'5305' => ['i' => '53', 'n' => 'KABUPATEN TIMOR TENGAH UTARA'],
			'5306' => ['i' => '53', 'n' => 'KABUPATEN BELU'],
			'5307' => ['i' => '53', 'n' => 'KABUPATEN ALOR'],
			'5308' => ['i' => '53', 'n' => 'KABUPATEN LEMBATA'],
			'5309' => ['i' => '53', 'n' => 'KABUPATEN FLORES TIMUR'],
			'5310' => ['i' => '53', 'n' => 'KABUPATEN SIKKA'],
			'5311' => ['i' => '53', 'n' => 'KABUPATEN ENDE'],
			'5312' => ['i' => '53', 'n' => 'KABUPATEN NGADA'],
			'5313' => ['i' => '53', 'n' => 'KABUPATEN MANGGARAI'],
			'5314' => ['i' => '53', 'n' => 'KABUPATEN ROTE NDAO'],
			'5315' => ['i' => '53', 'n' => 'KABUPATEN MANGGARAI BARAT'],
			'5316' => ['i' => '53', 'n' => 'KABUPATEN SUMBA TENGAH'],
			'5317' => ['i' => '53', 'n' => 'KABUPATEN SUMBA BARAT DAYA'],
			'5318' => ['i' => '53', 'n' => 'KABUPATEN NAGEKEO'],
			'5319' => ['i' => '53', 'n' => 'KABUPATEN MANGGARAI TIMUR'],
			'5320' => ['i' => '53', 'n' => 'KABUPATEN SABU RAIJUA'],
			'5321' => ['i' => '53', 'n' => 'KABUPATEN MALAKA'],
			'5371' => ['i' => '53', 'n' => 'KOTA KUPANG'],
			'6101' => ['i' => '61', 'n' => 'KABUPATEN SAMBAS'],
			'6102' => ['i' => '61', 'n' => 'KABUPATEN BENGKAYANG'],
			'6103' => ['i' => '61', 'n' => 'KABUPATEN LANDAK'],
			'6104' => ['i' => '61', 'n' => 'KABUPATEN MEMPAWAH'],
			'6105' => ['i' => '61', 'n' => 'KABUPATEN SANGGAU'],
			'6106' => ['i' => '61', 'n' => 'KABUPATEN KETAPANG'],
			'6107' => ['i' => '61', 'n' => 'KABUPATEN SINTANG'],
			'6108' => ['i' => '61', 'n' => 'KABUPATEN KAPUAS HULU'],
			'6109' => ['i' => '61', 'n' => 'KABUPATEN SEKADAU'],
			'6110' => ['i' => '61', 'n' => 'KABUPATEN MELAWI'],
			'6111' => ['i' => '61', 'n' => 'KABUPATEN KAYONG UTARA'],
			'6112' => ['i' => '61', 'n' => 'KABUPATEN KUBU RAYA'],
			'6171' => ['i' => '61', 'n' => 'KOTA PONTIANAK'],
			'6172' => ['i' => '61', 'n' => 'KOTA SINGKAWANG'],
			'6201' => ['i' => '62', 'n' => 'KABUPATEN KOTAWARINGIN BARAT'],
			'6202' => ['i' => '62', 'n' => 'KABUPATEN KOTAWARINGIN TIMUR'],
			'6203' => ['i' => '62', 'n' => 'KABUPATEN KAPUAS'],
			'6204' => ['i' => '62', 'n' => 'KABUPATEN BARITO SELATAN'],
			'6205' => ['i' => '62', 'n' => 'KABUPATEN BARITO UTARA'],
			'6206' => ['i' => '62', 'n' => 'KABUPATEN SUKAMARA'],
			'6207' => ['i' => '62', 'n' => 'KABUPATEN LAMANDAU'],
			'6208' => ['i' => '62', 'n' => 'KABUPATEN SERUYAN'],
			'6209' => ['i' => '62', 'n' => 'KABUPATEN KATINGAN'],
			'6210' => ['i' => '62', 'n' => 'KABUPATEN PULANG PISAU'],
			'6211' => ['i' => '62', 'n' => 'KABUPATEN GUNUNG MAS'],
			'6212' => ['i' => '62', 'n' => 'KABUPATEN BARITO TIMUR'],
			'6213' => ['i' => '62', 'n' => 'KABUPATEN MURUNG RAYA'],
			'6271' => ['i' => '62', 'n' => 'KOTA PALANGKA RAYA'],
			'6301' => ['i' => '63', 'n' => 'KABUPATEN TANAH LAUT'],
			'6302' => ['i' => '63', 'n' => 'KABUPATEN KOTA BARU'],
			'6303' => ['i' => '63', 'n' => 'KABUPATEN BANJAR'],
			'6304' => ['i' => '63', 'n' => 'KABUPATEN BARITO KUALA'],
			'6305' => ['i' => '63', 'n' => 'KABUPATEN TAPIN'],
			'6306' => ['i' => '63', 'n' => 'KABUPATEN HULU SUNGAI SELATAN'],
			'6307' => ['i' => '63', 'n' => 'KABUPATEN HULU SUNGAI TENGAH'],
			'6308' => ['i' => '63', 'n' => 'KABUPATEN HULU SUNGAI UTARA'],
			'6309' => ['i' => '63', 'n' => 'KABUPATEN TABALONG'],
			'6310' => ['i' => '63', 'n' => 'KABUPATEN TANAH BUMBU'],
			'6311' => ['i' => '63', 'n' => 'KABUPATEN BALANGAN'],
			'6371' => ['i' => '63', 'n' => 'KOTA BANJARMASIN'],
			'6372' => ['i' => '63', 'n' => 'KOTA BANJAR BARU'],
			'6401' => ['i' => '64', 'n' => 'KABUPATEN PASER'],
			'6402' => ['i' => '64', 'n' => 'KABUPATEN KUTAI BARAT'],
			'6403' => ['i' => '64', 'n' => 'KABUPATEN KUTAI KARTANEGARA'],
			'6404' => ['i' => '64', 'n' => 'KABUPATEN KUTAI TIMUR'],
			'6405' => ['i' => '64', 'n' => 'KABUPATEN BERAU'],
			'6409' => ['i' => '64', 'n' => 'KABUPATEN PENAJAM PASER UTARA'],
			'6411' => ['i' => '64', 'n' => 'KABUPATEN MAHAKAM HULU'],
			'6471' => ['i' => '64', 'n' => 'KOTA BALIKPAPAN'],
			'6472' => ['i' => '64', 'n' => 'KOTA SAMARINDA'],
			'6474' => ['i' => '64', 'n' => 'KOTA BONTANG'],
			'6501' => ['i' => '65', 'n' => 'KABUPATEN MALINAU'],
			'6502' => ['i' => '65', 'n' => 'KABUPATEN BULUNGAN'],
			'6503' => ['i' => '65', 'n' => 'KABUPATEN TANA TIDUNG'],
			'6504' => ['i' => '65', 'n' => 'KABUPATEN NUNUKAN'],
			'6571' => ['i' => '65', 'n' => 'KOTA TARAKAN'],
			'7101' => ['i' => '71', 'n' => 'KABUPATEN BOLAANG MONGONDOW'],
			'7102' => ['i' => '71', 'n' => 'KABUPATEN MINAHASA'],
			'7103' => ['i' => '71', 'n' => 'KABUPATEN KEPULAUAN SANGIHE'],
			'7104' => ['i' => '71', 'n' => 'KABUPATEN KEPULAUAN TALAUD'],
			'7105' => ['i' => '71', 'n' => 'KABUPATEN MINAHASA SELATAN'],
			'7106' => ['i' => '71', 'n' => 'KABUPATEN MINAHASA UTARA'],
			'7107' => ['i' => '71', 'n' => 'KABUPATEN BOLAANG MONGONDOW UTARA'],
			'7108' => ['i' => '71', 'n' => 'KABUPATEN SIAU TAGULANDANG BIARO'],
			'7109' => ['i' => '71', 'n' => 'KABUPATEN MINAHASA TENGGARA'],
			'7110' => ['i' => '71', 'n' => 'KABUPATEN BOLAANG MONGONDOW SELATAN'],
			'7111' => ['i' => '71', 'n' => 'KABUPATEN BOLAANG MONGONDOW TIMUR'],
			'7171' => ['i' => '71', 'n' => 'KOTA MANADO'],
			'7172' => ['i' => '71', 'n' => 'KOTA BITUNG'],
			'7173' => ['i' => '71', 'n' => 'KOTA TOMOHON'],
			'7174' => ['i' => '71', 'n' => 'KOTA KOTAMOBAGU'],
			'7201' => ['i' => '72', 'n' => 'KABUPATEN BANGGAI KEPULAUAN'],
			'7202' => ['i' => '72', 'n' => 'KABUPATEN BANGGAI'],
			'7203' => ['i' => '72', 'n' => 'KABUPATEN MOROWALI'],
			'7204' => ['i' => '72', 'n' => 'KABUPATEN POSO'],
			'7205' => ['i' => '72', 'n' => 'KABUPATEN DONGGALA'],
			'7206' => ['i' => '72', 'n' => 'KABUPATEN TOLI-TOLI'],
			'7207' => ['i' => '72', 'n' => 'KABUPATEN BUOL'],
			'7208' => ['i' => '72', 'n' => 'KABUPATEN PARIGI MOUTONG'],
			'7209' => ['i' => '72', 'n' => 'KABUPATEN TOJO UNA-UNA'],
			'7210' => ['i' => '72', 'n' => 'KABUPATEN SIGI'],
			'7211' => ['i' => '72', 'n' => 'KABUPATEN BANGGAI LAUT'],
			'7212' => ['i' => '72', 'n' => 'KABUPATEN MOROWALI UTARA'],
			'7271' => ['i' => '72', 'n' => 'KOTA PALU'],
			'7301' => ['i' => '73', 'n' => 'KABUPATEN KEPULAUAN SELAYAR'],
			'7302' => ['i' => '73', 'n' => 'KABUPATEN BULUKUMBA'],
			'7303' => ['i' => '73', 'n' => 'KABUPATEN BANTAENG'],
			'7304' => ['i' => '73', 'n' => 'KABUPATEN JENEPONTO'],
			'7305' => ['i' => '73', 'n' => 'KABUPATEN TAKALAR'],
			'7306' => ['i' => '73', 'n' => 'KABUPATEN GOWA'],
			'7307' => ['i' => '73', 'n' => 'KABUPATEN SINJAI'],
			'7308' => ['i' => '73', 'n' => 'KABUPATEN MAROS'],
			'7309' => ['i' => '73', 'n' => 'KABUPATEN PANGKAJENE DAN KEPULAUAN'],
			'7310' => ['i' => '73', 'n' => 'KABUPATEN BARRU'],
			'7311' => ['i' => '73', 'n' => 'KABUPATEN BONE'],
			'7312' => ['i' => '73', 'n' => 'KABUPATEN SOPPENG'],
			'7313' => ['i' => '73', 'n' => 'KABUPATEN WAJO'],
			'7314' => ['i' => '73', 'n' => 'KABUPATEN SIDENRENG RAPPANG'],
			'7315' => ['i' => '73', 'n' => 'KABUPATEN PINRANG'],
			'7316' => ['i' => '73', 'n' => 'KABUPATEN ENREKANG'],
			'7317' => ['i' => '73', 'n' => 'KABUPATEN LUWU'],
			'7318' => ['i' => '73', 'n' => 'KABUPATEN TANA TORAJA'],
			'7322' => ['i' => '73', 'n' => 'KABUPATEN LUWU UTARA'],
			'7325' => ['i' => '73', 'n' => 'KABUPATEN LUWU TIMUR'],
			'7326' => ['i' => '73', 'n' => 'KABUPATEN TORAJA UTARA'],
			'7371' => ['i' => '73', 'n' => 'KOTA MAKASSAR'],
			'7372' => ['i' => '73', 'n' => 'KOTA PAREPARE'],
			'7373' => ['i' => '73', 'n' => 'KOTA PALOPO'],
			'7401' => ['i' => '74', 'n' => 'KABUPATEN BUTON'],
			'7402' => ['i' => '74', 'n' => 'KABUPATEN MUNA'],
			'7403' => ['i' => '74', 'n' => 'KABUPATEN KONAWE'],
			'7404' => ['i' => '74', 'n' => 'KABUPATEN KOLAKA'],
			'7405' => ['i' => '74', 'n' => 'KABUPATEN KONAWE SELATAN'],
			'7406' => ['i' => '74', 'n' => 'KABUPATEN BOMBANA'],
			'7407' => ['i' => '74', 'n' => 'KABUPATEN WAKATOBI'],
			'7408' => ['i' => '74', 'n' => 'KABUPATEN KOLAKA UTARA'],
			'7409' => ['i' => '74', 'n' => 'KABUPATEN BUTON UTARA'],
			'7410' => ['i' => '74', 'n' => 'KABUPATEN KONAWE UTARA'],
			'7411' => ['i' => '74', 'n' => 'KABUPATEN KOLAKA TIMUR'],
			'7412' => ['i' => '74', 'n' => 'KABUPATEN KONAWE KEPULAUAN'],
			'7413' => ['i' => '74', 'n' => 'KABUPATEN MUNA BARAT'],
			'7414' => ['i' => '74', 'n' => 'KABUPATEN BUTON TENGAH'],
			'7415' => ['i' => '74', 'n' => 'KABUPATEN BUTON SELATAN'],
			'7471' => ['i' => '74', 'n' => 'KOTA KENDARI'],
			'7472' => ['i' => '74', 'n' => 'KOTA BAUBAU'],
			'7501' => ['i' => '75', 'n' => 'KABUPATEN BOALEMO'],
			'7502' => ['i' => '75', 'n' => 'KABUPATEN GORONTALO'],
			'7503' => ['i' => '75', 'n' => 'KABUPATEN POHUWATO'],
			'7504' => ['i' => '75', 'n' => 'KABUPATEN BONE BOLANGO'],
			'7505' => ['i' => '75', 'n' => 'KABUPATEN GORONTALO UTARA'],
			'7571' => ['i' => '75', 'n' => 'KOTA GORONTALO'],
			'7601' => ['i' => '76', 'n' => 'KABUPATEN MAJENE'],
			'7602' => ['i' => '76', 'n' => 'KABUPATEN POLEWALI MANDAR'],
			'7603' => ['i' => '76', 'n' => 'KABUPATEN MAMASA'],
			'7604' => ['i' => '76', 'n' => 'KABUPATEN MAMUJU'],
			'7605' => ['i' => '76', 'n' => 'KABUPATEN MAMUJU UTARA'],
			'7606' => ['i' => '76', 'n' => 'KABUPATEN MAMUJU TENGAH'],
			'8101' => ['i' => '81', 'n' => 'KABUPATEN MALUKU TENGGARA BARAT'],
			'8102' => ['i' => '81', 'n' => 'KABUPATEN MALUKU TENGGARA'],
			'8103' => ['i' => '81', 'n' => 'KABUPATEN MALUKU TENGAH'],
			'8104' => ['i' => '81', 'n' => 'KABUPATEN BURU'],
			'8105' => ['i' => '81', 'n' => 'KABUPATEN KEPULAUAN ARU'],
			'8106' => ['i' => '81', 'n' => 'KABUPATEN SERAM BAGIAN BARAT'],
			'8107' => ['i' => '81', 'n' => 'KABUPATEN SERAM BAGIAN TIMUR'],
			'8108' => ['i' => '81', 'n' => 'KABUPATEN MALUKU BARAT DAYA'],
			'8109' => ['i' => '81', 'n' => 'KABUPATEN BURU SELATAN'],
			'8171' => ['i' => '81', 'n' => 'KOTA AMBON'],
			'8172' => ['i' => '81', 'n' => 'KOTA TUAL'],
			'8201' => ['i' => '82', 'n' => 'KABUPATEN HALMAHERA BARAT'],
			'8202' => ['i' => '82', 'n' => 'KABUPATEN HALMAHERA TENGAH'],
			'8203' => ['i' => '82', 'n' => 'KABUPATEN KEPULAUAN SULA'],
			'8204' => ['i' => '82', 'n' => 'KABUPATEN HALMAHERA SELATAN'],
			'8205' => ['i' => '82', 'n' => 'KABUPATEN HALMAHERA UTARA'],
			'8206' => ['i' => '82', 'n' => 'KABUPATEN HALMAHERA TIMUR'],
			'8207' => ['i' => '82', 'n' => 'KABUPATEN PULAU MOROTAI'],
			'8208' => ['i' => '82', 'n' => 'KABUPATEN PULAU TALIABU'],
			'8271' => ['i' => '82', 'n' => 'KOTA TERNATE'],
			'8272' => ['i' => '82', 'n' => 'KOTA TIDORE KEPULAUAN'],
			'9101' => ['i' => '91', 'n' => 'KABUPATEN FAKFAK'],
			'9102' => ['i' => '91', 'n' => 'KABUPATEN KAIMANA'],
			'9103' => ['i' => '91', 'n' => 'KABUPATEN TELUK WONDAMA'],
			'9104' => ['i' => '91', 'n' => 'KABUPATEN TELUK BINTUNI'],
			'9105' => ['i' => '91', 'n' => 'KABUPATEN MANOKWARI'],
			'9106' => ['i' => '91', 'n' => 'KABUPATEN SORONG SELATAN'],
			'9107' => ['i' => '91', 'n' => 'KABUPATEN SORONG'],
			'9108' => ['i' => '91', 'n' => 'KABUPATEN RAJA AMPAT'],
			'9109' => ['i' => '91', 'n' => 'KABUPATEN TAMBRAUW'],
			'9110' => ['i' => '91', 'n' => 'KABUPATEN MAYBRAT'],
			'9111' => ['i' => '91', 'n' => 'KABUPATEN MANOKWARI SELATAN'],
			'9112' => ['i' => '91', 'n' => 'KABUPATEN PEGUNUNGAN ARFAK'],
			'9171' => ['i' => '91', 'n' => 'KOTA SORONG'],
			'9401' => ['i' => '94', 'n' => 'KABUPATEN MERAUKE'],
			'9402' => ['i' => '94', 'n' => 'KABUPATEN JAYAWIJAYA'],
			'9403' => ['i' => '94', 'n' => 'KABUPATEN JAYAPURA'],
			'9404' => ['i' => '94', 'n' => 'KABUPATEN NABIRE'],
			'9408' => ['i' => '94', 'n' => 'KABUPATEN KEPULAUAN YAPEN'],
			'9409' => ['i' => '94', 'n' => 'KABUPATEN BIAK NUMFOR'],
			'9410' => ['i' => '94', 'n' => 'KABUPATEN PANIAI'],
			'9411' => ['i' => '94', 'n' => 'KABUPATEN PUNCAK JAYA'],
			'9412' => ['i' => '94', 'n' => 'KABUPATEN MIMIKA'],
			'9413' => ['i' => '94', 'n' => 'KABUPATEN BOVEN DIGOEL'],
			'9414' => ['i' => '94', 'n' => 'KABUPATEN MAPPI'],
			'9415' => ['i' => '94', 'n' => 'KABUPATEN ASMAT'],
			'9416' => ['i' => '94', 'n' => 'KABUPATEN YAHUKIMO'],
			'9417' => ['i' => '94', 'n' => 'KABUPATEN PEGUNUNGAN BINTANG'],
			'9418' => ['i' => '94', 'n' => 'KABUPATEN TOLIKARA'],
			'9419' => ['i' => '94', 'n' => 'KABUPATEN SARMI'],
			'9420' => ['i' => '94', 'n' => 'KABUPATEN KEEROM'],
			'9426' => ['i' => '94', 'n' => 'KABUPATEN WAROPEN'],
			'9427' => ['i' => '94', 'n' => 'KABUPATEN SUPIORI'],
			'9428' => ['i' => '94', 'n' => 'KABUPATEN MAMBERAMO RAYA'],
			'9429' => ['i' => '94', 'n' => 'KABUPATEN NDUGA'],
			'9430' => ['i' => '94', 'n' => 'KABUPATEN LANNY JAYA'],
			'9431' => ['i' => '94', 'n' => 'KABUPATEN MAMBERAMO TENGAH'],
			'9432' => ['i' => '94', 'n' => 'KABUPATEN YALIMO'],
			'9433' => ['i' => '94', 'n' => 'KABUPATEN PUNCAK'],
			'9434' => ['i' => '94', 'n' => 'KABUPATEN DOGIYAI'],
			'9435' => ['i' => '94', 'n' => 'KABUPATEN INTAN JAYA'],
			'9436' => ['i' => '94', 'n' => 'KABUPATEN DEIYAI'],
			'9471' => ['i' => '94', 'n' => 'KOTA JAYAPURA']
		];

		$pelapak = 3;
		$toko = 3;

		$produk = [
			"pepes rinuak",
			"dendeng rinuak",
			"rinuak goreng",
			"bada salai",
			"bada goreng",
			"peyek rinuak"
		];

		// provinsi
		$query = "INSERT INTO tb_provinsi VALUES";
		foreach ($provinsi as $key => $value) {
			$e = $this->db->escape($value);
			$query .= " ($key, $e),";
		}
		$query = substr($query, 0, -1);
		$this->db->query($query);

		// kota
		$query = "INSERT INTO tb_kota VALUES";
		foreach ($kota as $key => $value) {
			$e1 = $this->db->escape($value['i']);
			$e2 = $this->db->escape($value['n']);
			$rand2 = rand(20000, 60000);
			$rand2temp = $rand2 % 1000;
			$rand2 = $rand2 - $rand2temp;
			$query .= " ($key, $e1, $e2, $rand2),";
		}
		$query = substr($query, 0, -1);
		$this->db->query($query);

		// pelapak
		for ($i=1; $i <= $pelapak; $i++) { 
			$query = "INSERT
						INTO tb_pelapak 
					  VALUES (
								null,
								'password',
								'Nama Pelapak $i',
								'Alamat Pelapak $i',
								'018238182371',
								'pelapak$i@gmail.com'
					 		 )";
			$this->db->query($query);
		}

		// toko
		for ($i=1; $i <= $toko; $i++) { 
			$rand = rand(1, $pelapak);
			$query = "INSERT
						INTO tb_toko
					  VALUES (
								null,
								$rand,
								'Nama Toko $i',
								'No Rek $i',
								'Toko $i'
					 		 )";
			$this->db->query($query);
		}
		
		// produk
		$query = "INSERT INTO tb_produk VALUES";
		foreach ($produk as $key => $value) {
			$e = $this->db->escape($value);
			$randtoko = rand(1, $toko);
			$randstok = rand(500, 9000);
			$value = ucwords($value);
			$query .= " (null, $randtoko, 1, 1, '$value', $randstok),";
		}
		$query = substr($query, 0, -1);
		$this->db->query($query);
	}
}
