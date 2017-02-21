<?php
/**
 * Created by PhpStorm.
 * User: lius
 * Date: 2017/2/20
 * Time: 19:56
 */
$options = array(
    //将选项放入数组中，管理更加方便
    //
    //标签页‘网站设置’开始
    array(
        'title'	=>	'基本设置',
        'id'	=>	'webseting',
        'type'	=>	'panelstart'		//panel代表是顶部标签
    ),
    array(
        'title'	=>	'在此设置您网站的基本信息',
        'type'	=>	'sutitle'	//sutitle代表顶部标签介绍信息
    ),//

    array(
        'name'	=>	'网站描述',
        'desc'	=>	'用简洁的文字描述您的站点，字数建议在120个字以内',
        'id'	=>	"waitig_description",
        'type'	=>	'text',
        'std'	=>	''
    ),
    array(
        'name'  => '网站关键字',//选项显示的文字，选填
        'desc'  => '各关键字间用半角逗号","分割，数量在6个以内最佳。',//选项显示的一段描述文字，选填
        'id'    => "waitig_keywords",//选项的id，必须是唯一，后面根据这个获取值，必填
        'type'  => 'text',//种类，这个是普通的文字输入，必填
        'std'   => ''//选项的默认值，选填
    ),
    array(
        'name'	=>	'title分隔符',
        'desc'	=>	'显示在浏览器标题栏用来分割网站名字的符号',
        'id'	=>	'waitig_delimiter',
        'type'	=>	'text',
        'std'	=>	'|'
    ),
    array(
        'name'	=>	'去除头部多余代码',
        'desc'	=>	'如果不用wlw发布博客，则建议开启',
        'id'	=>	'waitig_remove_head_code',
        'type'	=>	'checkbox'
    ),
    array(
        'name'	=>	'首页小说ID',
        'desc'	=>	'首页小说ID',
        'id'	=>	"index_cat_id",
        'type'	=>	'number',
        'std'	=>	'2'
    ),
    array(
        'name'	=>	'首页小说缩略图',
        'desc'	=>	'首页小说缩略图',
        'id'	=>	"index_novel_image",
        'type'	=>	'text',
        'std'	=>	''
    ),
    array(
        'name'	=>	'首页右侧精彩推荐小说ID',
        'desc'	=>	'右侧精彩推荐小说ID',
        'id'	=>	"right_cat_id",
        'type'	=>	'number',
        'std'	=>	'2'
    ),
    array(
        'name'	=>	'首页小说缩略图',
        'desc'	=>	'首页小说缩略图',
        'id'	=>	"right_novel_image",
        'type'	=>	'text',
        'std'	=>	''
    ),//
    array(
        'name'	=>	'底部为你推荐显示小说数',
        'desc'	=>	'为你推荐显示小说的数量',
        'id'	=>	"bottom_cat_num",
        'type'	=>	'number',
        'std'	=>	'9'
    ),
    array(
        'name'	=>	'网站title分割符',
        'desc'	=>	'默认为|',
        'id'	=>	"waitig_delimiter",
        'type'	=>	'text',
        'std'	=>	'|'
    ),
    array(
        'type'	=>	'panelend'
    ),
    //标签页‘网站设置’结束
    //
    //标签页‘个性设置’开始
    array(
        'title'	=>	'个性设置',
        'id'	=>	'personsetting',
        'type'	=>	'panelstart'
    ),
    array(
        'title' => '丰富的个性话设置，使你的网站更加个性！',
        'type'  => 'subtitle'
    ),
    array(
        'type'	=>	'panelend'
    ),

);