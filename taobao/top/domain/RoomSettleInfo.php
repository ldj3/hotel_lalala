<?php

/**
 * 单间房明细
 * @author auto create
 */
class RoomSettleInfo
{
	
	/** 
	 * 日历价格,json格式(包含日期，价格，税费，低价加价前费用等),（每个房间的日历价格，多间房结账必填）
	 **/
	public $daily_price_info;
	
	/** 
	 * 房间check in 时间
	 **/
	public $room_check_in;
	
	/** 
	 * 房间check out时间
	 **/
	public $room_check_out;
	
	/** 
	 * 房间费（大于零）
	 **/
	public $room_fee;
	
	/** 
	 * 房间号
	 **/
	public $room_no;
	
	/** 
	 * 房间杂费（不能为负数）
	 **/
	public $room_other_fee;
	
	/** 
	 * 房间杂费明细 （当房间杂费存在时候，此值不能空。格式与原有杂费格式otherFeeDetail的格式相同）eg;{"洗衣费":5000,"水吧":10000,"优惠":1000}
	 **/
	public $room_other_fee_detail;
	
	/** 
	 * 房间状态；1:未入住（担保且需扣款）；2:取消成功（卖家取消；担保noshow且双方协商一致不扣款）；3:已入住
	 **/
	public $room_status;	
}
?>