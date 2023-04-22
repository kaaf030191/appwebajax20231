<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TData extends Model {
	protected $table = 'tdata';
	protected $primaryKey = 'idData';
	protected $keyType = 'string';
	public $incrementing = true;
}
?>