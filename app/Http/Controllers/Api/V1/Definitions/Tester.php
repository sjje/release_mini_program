<?php
/**
 * Created by PhpStorm.
 * User: chengyuanlong
 * Date: 2018/12/4
 * Time: 上午11:15
 */

namespace App\Http\Controllers\Api\V1\Definitions;

/**
 * @SWG\Definition(definition="Tester", type="object")
 */
class Tester
{
    /**
     * @SWG\Property(type="string", description="人员对应的唯一字符串")
     */
    public $userstr;

    /**
     * @SWG\Property(type="string", description="微信id")
     */
    public $wechat_id;

    /**
     * @SWG\Property(type="string", description="添加时间")
     */
    public $created_at;
}