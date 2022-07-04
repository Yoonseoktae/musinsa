<?php 
namespace App\Models\Api;

use CodeIgniter\Model;

/**
 * Class Goods
 *
 * @package App\Models
 */
class Goods extends Model
{
	/**
	 * @var string $table
	 */
	protected $table = 'goods';

	/**
	 * @var string $primaryKey
	 */
	protected $primaryKey = 'goods_no';

	/**
	 * @var array $allowedFields
	 */
	protected $allowedFields = [
		'goods_nm', 'goods_cont', 'com_id'
	];

	/**
	 * @var string $useTimestamps
	 */
	protected $useTimestamps = true;
	
	/**
	 * @var string $createdField
	 */
	protected $createdField = 'reg_dm';

	/**
	 * @var string $updatedField
	 */
	protected $updatedField = 'upd_dm';


}