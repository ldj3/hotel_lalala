<?php

/**
 * 结果返回列表
 * @author auto create
 */
class HotelOrderDirectInfo
{
	
	/** 
	 * * PMS处理消息的动作（pms端应该考虑增加代办任务列表）      * 0:普通，不需要特殊动作      * 1：弹窗提示（Pms中央模态窗）      * 2：托盘信息提示（给酒店广播通知或者平台公告）      * 3:发送请求给酒店前台人员，前台人员需要看到后确认处理(比如督促前台结账、督促前台上报入住状态)      * 4：请求pms自动处理(自动发起结账，自动上报订单状态等)
	 **/
	public $action;
	
	/** 
	 * 操作类型 1.在线开发票请求 3.在线选房请求 4.自助checkIn请求 13.扫脸入住身份信息请求 10.房态信息查询请求 103.通用任务取消指令
	 **/
	public $biz_type;
	
	/** 
	 * xml内容格式字符串，详细参考 http://open.taobao.com/docs/doc.htm?spm=a219a.7629140.0.0.2gmWOz&treeId=191&articleId=106152&docType=1
	 **/
	public $context;
	
	/** 
	 * 给酒店前台展示的文案提示
	 **/
	public $display_text;
	
	/** 
	 * json格式的扩展字段
	 **/
	public $extensions;
	
	/** 
	 * 创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 修改时间
	 **/
	public $gmt_modified;
	
	/** 
	 * 酒店编码
	 **/
	public $hotel_code;
	
	/** 
	 * 外部订单号
	 **/
	public $out_order_id;
	
	/** 
	 * 单次请求的唯一标识
	 **/
	public $request_i_d;
	
	/** 
	 * 卖家id
	 **/
	public $seller_id;
	
	/** 
	 * * 消息状态（tips:Pms定时get走请求，状态可以考虑不变化）      * 0：新建消息（接收到交易系统请求）      * 1:请求已获取（pms已经取走请求数据）      * 2:请求已认领（pms已经有人认领消息，正在处理）      * 3:请求已反馈（Pms反馈请求处理结果）      * 4:处理完成（已通知相关系统（交易））      * 5:请求失效
	 **/
	public $status;
	
	/** 
	 * 淘宝订单号
	 **/
	public $tid;	
}
?>