<?php

namespace App\Controllers\Api;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Controller;

/**
 * Class Goods
 *
 * @package App\Controllers\Api
 */
class Goods extends Controller {

    use ResponseTrait;

    protected $goodsModel;
    protected $data;

    public function __construct() 
    {
        // 상품 Model 객체생성
        $this->goodsModel = new \App\Models\Api\Goods();
    }

    /**
     * @brief 상품 조회
     * @param int $id 상품고유번호
     * 
     * @return array 상품정보
     */
    public function show($id = false) 
    {
        if ($id) {
            $result = $this->goodsModel
                        ->where('goods_no', $id)
                        ->orderBy('goods_no', 'asc')
                        ->first();
        } else {
            $result = $this->goodsModel
                        ->orderBy('goods_no', 'asc')
                        ->findAll();
        }

        return $this->respond($result);
    }

    /**
     * @brief 상품 등록
     * @param string goods_nm 상품명
     * @param string goods_cont 상품설명
     * @param int com_id 업체고유번호
     * 
     * @return int 등록된 상품고유번호
     */
    public function create() 
    {
        if (!$this->validate([
            'goods_nm'    => 'alpha_numeric|max_length[100]',
            'goods_cont' => 'alpha_numeric',
            'com_id'  => 'is_natural|max_length[20]'

        ])) return $this->fail($this->validator->getErrors());

        $this->data = $this->request->getJSON();

        if (!empty($this->data)) {
            $goods = $this->goodsModel->insert($this->data);
            return $this->respondCreated($goods);
        }
        
    }

}