<?php
/**
 * Created by PhpStorm.
 * User: harlen-mac
 * Date: 2018/12/4
 * Time: 上午1:39
 */

namespace App\Http\Controllers\Api\V1;

/**
 * @SWG\Post(
 *     path="/component/{componentAppId}/bind_component",
 *     summary="绑定小程序到三方平台",
 *     tags={"小程序管理"},
 *     description="管理三方平台",
 *     produces={"application/json"},
 *     @SWG\Parameter(
 *         name="redirect_url",
 *         type="string",
 *         required=true,
 *         in="formData",
 *         description="授权成功的回调地址",
 *     ),
 *     @SWG\Response(
 *         response=200,
 *         description="成功返回",
 *         @SWG\Schema(
 *             @SWG\Property(
 *                 property="status",
 *                 type="string",
 *                 default="T",
 *                 description="接口返回状态['T'->成功; 'F'->失败]"
 *             ),
 *             @SWG\Property(
 *                 property="data",
 *                 type="Object",
 *                 ref="#/definitions/MiniProgram"
 *             )
 *         )
 *     )
 * )
 */

/**
 * @SWG\Get(
 *     path="/component/{componentAppId}/mini_program",
 *     summary="获取小程序列表",
 *     tags={"小程序管理"},
 *     description="管理三方平台",
 *     produces={"application/json"},
 *     @SWG\Parameter(
 *         description="第几页，默认第一页",
 *         in="query",
 *         name="page",
 *         required=false,
 *         type="integer",
 *         format="int64",
 *         default="1"
 *     ),
 *     @SWG\Parameter(
 *         description="每页数量，默认为15",
 *         in="query",
 *         name="pageSize",
 *         required=false,
 *         type="integer",
 *         format="int64",
 *         default="5"
 *     ),
 *     @SWG\Response(
 *         response=200,
 *         description="成功返回",
 *         @SWG\Schema(
 *             @SWG\Property(
 *                 property="pagination",
 *                 type="object",
 *                 @SWG\Property(
 *                     property="total",
 *                     type="integer",
 *                     description="总的数据条数 "
 *                 ),
 *                 @SWG\Property(
 *                     property="per_page",
 *                     type="integer",
 *                     description="每页的数据条数"
 *                 ),
 *                 @SWG\Property(
 *                     property="current_page",
 *                     type="integer",
 *                     description="当前是第几页"
 *                 ),
 *                 @SWG\Property(
 *                     property="last_page",
 *                     type="integer",
 *                     description="最大页数"
 *                 ),
 *             ),
 *             @SWG\Property(
 *                 property="status",
 *                 type="string",
 *                 default="T",
 *                 description="接口返回状态['T'->成功; 'F'->失败]"
 *             ),
 *             @SWG\Property(
 *                 property="data",
 *                 type="array",
 *                 @SWG\Items(ref="#/definitions/MiniProgram")
 *             ),
 *         )
 *     )
 * )
 */

/**
 * @SWG\Put(
 *     path="/component/{componentAppId}/mini_program/{miniProgramAppId}",
 *     summary="保存并设置小程序发版信息",
 *     tags={"小程序管理"},
 *     description="管理三方平台",
 *     produces={"application/json"},
 *     @SWG\Parameter(
 *         name="componentAppId",
 *         in="path",
 *         description="三方平台AppID",
 *         required=true,
 *         type="string",
 *     ),
 *     @SWG\Parameter(
 *         name="miniProgramAppId",
 *         in="path",
 *         description="小程序AppId",
 *         required=true,
 *         type="string",
 *     ),
 *     @SWG\Parameter(
 *         name="config",
 *         in="body",
 *         description="模板配置信息",
 *         required=true,
 *         type="object",
 *         @SWG\Schema(ref="#/definitions/MiniProgramConfig")
 *     ),
 *     @SWG\Response(
 *         response=200,
 *         description="成功返回",
 *         @SWG\Schema(
 *             @SWG\Property(
 *                 property="status",
 *                 type="string",
 *                 default="T",
 *                 description="接口返回状态['T'->成功; 'F'->失败]"
 *             )
 *         )
 *     )
 * )
 */


/**
 * @SWG\Get(
 *     path="/component/{componentAppId}/mini_program/{miniProgramAppId}",
 *     summary="获取小程序信息",
 *     tags={"小程序管理"},
 *     description="管理三方平台",
 *     produces={"application/json"},
 *     @SWG\Parameter(
 *         name="componentAppId",
 *         in="path",
 *         description="三方平台AppID",
 *         required=true,
 *         type="string",
 *     ),
 *     @SWG\Parameter(
 *         name="miniProgramAppId",
 *         in="path",
 *         description="小程序AppId",
 *         required=true,
 *         type="string",
 *     ),
 *     @SWG\Response(
 *         response=200,
 *         description="成功返回",
 *         @SWG\Schema(
 *             @SWG\Property(
 *                 property="status",
 *                 type="string",
 *                 default="T",
 *                 description="接口返回状态['T'->成功; 'F'->失败]"
 *             ),
 *             @SWG\Property(
 *                 property="data",
 *                 type="object",
 *                 @SWG\Property(
 *                     property="info",
 *                     type="Object",
 *                     ref="#/definitions/MiniProgram"
 *                 ),
 *                 @SWG\Property(
 *                     property="config",
 *                     type="Object",
 *                     description="发版信息",
 *                     ref="#/definitions/MiniProgramConfig"
 *                 ),
 *             )
 *         )
 *     )
 * )
 */

class MiniProgramController
{

}
