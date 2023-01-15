<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class StasiunAir
 * 
 * @property int $id
 * @property string|null $code
 * @property string|null $name
 * @property Carbon|null $mulai_beroperasi
 * @property string|null $tgl_mulai_beroperasi
 * @property string|null $bulan_mulai_beroperasi
 * @property string|null $tahun_mulai_beroperasi
 * @property string|null $nama_sungai
 * @property string|null $nama_das
 * @property string|null $alamat_stasiun
 * @property string|null $provinsi
 * @property string|null $kab_kota
 * @property string|null $latitude
 * @property string|null $longitude
 * @property string|null $kategori_lokasi
 * @property string|null $vendor
 * @property string|null $status
 * @property string|null $kategori
 * @property string|null $keterangan
 *
 * @package App\Models
 */
class StasiunAir extends Model
{
	protected $table = 'stasiun_air';
	public $timestamps = false;

	protected $dates = [
		'mulai_beroperasi'
	];

	protected $fillable = [
		'code',
		'name',
		'mulai_beroperasi',
		'tgl_mulai_beroperasi',
		'bulan_mulai_beroperasi',
		'tahun_mulai_beroperasi',
		'nama_sungai',
		'nama_das',
		'alamat_stasiun',
		'provinsi',
		'kab_kota',
		'latitude',
		'longitude',
		'kategori_lokasi',
		'vendor',
		'status',
		'kategori',
		'keterangan'
	];
}
