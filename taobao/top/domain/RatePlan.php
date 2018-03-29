<?php

/**
 * 酒店rateplan数据结构
 * @author auto create
 */
class RatePlan
{
	
	/** 
	 * 是否是协议价。1代表是
	 **/
	public $agreement;
	
	/** 
	 * allotmentReleaseTime
	 **/
	public $allotment_release_time;
	
	/** 
	 * bottomPriceFlag
	 **/
	public $bottom_price_flag;
	
	/** 
	 * 早餐日历,如果没有日历，表示没有日历化。则以RP上的早餐为准
	 **/
	public $breakfast_cal;
	
	/** 
	 * 早餐数量
	 **/
	public $breakfast_count;
	
	/** 
	 * calBreakfast
	 **/
	public $cal_breakfast;
	
	/** 
	 * calChangeRule
	 **/
	public $cal_change_rule;
	
	/** 
	 * calGuarantee
	 **/
	public $cal_guarantee;
	
	/** 
	 * 可入住的最晚时间（小时房相关字段）
	 **/
	public $can_checkin_end;
	
	/** 
	 * 可入住的最早时间（小时房相关字段）
	 **/
	public $can_checkin_start;
	
	/** 
	 * 退订政策
	 **/
	public $cancel_policy;
	
	/** 
	 * 销售渠道，目前制定一了一种A-集团协议
	 **/
	public $channel;
	
	/** 
	 * 普通保留房提前确认时间
	 **/
	public $common_allot_release_time;
	
	/** 
	 * 创建时间
	 **/
	public $created_time;
	
	/** 
	 * rateplan生效截止时间
	 **/
	public $deadline_time;
	
	/** 
	 * 价格计划名称name通过加工处理以后的值
	 **/
	public $display_name;
	
	/** 
	 * rateplan生效开始时间
	 **/
	public $effective_time;
	
	/** 
	 * 每日结束时间默认24:00:00。生效时间＜结束时间
	 **/
	public $end_time;
	
	/** 
	 * 每日生效结束时间（仅时分秒有效）
	 **/
	public $end_time_daily;
	
	/** 
	 * 英文名称
	 **/
	public $english_name;
	
	/** 
	 * extend
	 **/
	public $extend;
	
	/** 
	 * 额外服务的扩展，是一段JSON
	 **/
	public $extend_fee;
	
	/** 
	 * 扩展字段1
	 **/
	public $extend_info1;
	
	/** 
	 * 扩展字段2
	 **/
	public $extend_info2;
	
	/** 
	 * 扩展字段3
	 **/
	public $extend_info3;
	
	/** 
	 * 另加早餐金额
	 **/
	public $fee_breakfast_amount;
	
	/** 
	 * 另加早餐数量
	 **/
	public $fee_breakfast_count;
	
	/** 
	 * 额外服务-政府税-金额（1-9999）
	 **/
	public $fee_gov_tax_amount;
	
	/** 
	 * 额外服务-政府税-百分比（0%-99%）
	 **/
	public $fee_gov_tax_percent;
	
	/** 
	 * 额外服务-服务费-金额（0-9999）
	 **/
	public $fee_service_amount;
	
	/** 
	 * 额外服务-服务费-百分比（0%-99%）
	 **/
	public $fee_service_percent;
	
	/** 
	 * 是否是首住优惠rp。1代表是
	 **/
	public $first_stay;
	
	/** 
	 * 创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 生效截止日期（yyyy-MM-dd hh:mm:ss）
	 **/
	public $gmt_deadline;
	
	/** 
	 * 生效开始日期（yyyy-MM-dd hh:mm:ss）
	 **/
	public $gmt_effective;
	
	/** 
	 * 担保金额，只有担保类型为5，该字段才有意义
	 **/
	public $guarantee_amount;
	
	/** 
	 * 担保日历  如果没有日历，说明没有日历化，以RP上的担保为准
	 **/
	public $guarantee_cal;
	
	/** 
	 * guarantee_mode
	 **/
	public $guarantee_mode;
	
	/** 
	 * 每日开始担保时间
	 **/
	public $guarantee_start_time;
	
	/** 
	 * 担保类型，只支持： 0 无担保 1 首晚担保
	 **/
	public $guarantee_type;
	
	/** 
	 * hid
	 **/
	public $hid;
	
	/** 
	 * 入住的开始跨度（小时房相关字段）
	 **/
	public $hourage;
	
	/** 
	 * invoiceContent
	 **/
	public $invoice_content;
	
	/** 
	 * isStudent
	 **/
	public $is_student;
	
	/** 
	 * 最大提前预订小时按入住时间的23:59:59(一般认为24点)来计算
	 **/
	public $max_adv_hours;
	
	/** 
	 * 最大入住天数（1-365）
	 **/
	public $max_days;
	
	/** 
	 * 会员等级。支持多个等级","分隔
	 **/
	public $member_level;
	
	/** 
	 * 最小提前预订小时按入住时间的23:59:59(一般认为24点)来计算
	 **/
	public $min_adv_hours;
	
	/** 
	 * 首日入住房间数（1-99）
	 **/
	public $min_amount;
	
	/** 
	 * 最小入住天数（1-365）
	 **/
	public $min_days;
	
	/** 
	 * 修改时间
	 **/
	public $modified_time;
	
	/** 
	 * RP名称
	 **/
	public $name;
	
	/** 
	 * 入住人数
	 **/
	public $occupancy;
	
	/** 
	 * outHid
	 **/
	public $out_hid;
	
	/** 
	 * outRid
	 **/
	public $out_rid;
	
	/** 
	 * packRoomFlag
	 **/
	public $pack_room_flag;
	
	/** 
	 * 父rpid
	 **/
	public $parent_rpid;
	
	/** 
	 * 支付类型 可选值 1：预付 5：前台面付
	 **/
	public $payment_type;
	
	/** 
	 * 卖家系统的编码或ID
	 **/
	public $rate_plan_code;
	
	/** 
	 * 房价id
	 **/
	public $rate_plan_id;
	
	/** 
	 * 卖家自己系统的Code，简称RateCode
	 **/
	public $rateplan_code;
	
	/** 
	 * rid
	 **/
	public $rid;
	
	/** 
	 * rateplan类型 1为小时房
	 **/
	public $rp_type;
	
	/** 
	 * rateplan_id
	 **/
	public $rpid;
	
	/** 
	 * sell 端特殊RP 对应的 gid
	 **/
	public $sell_gid;
	
	/** 
	 * 卖家id
	 **/
	public $seller_id;
	
	/** 
	 * 卖家昵称
	 **/
	public $seller_nick;
	
	/** 
	 * source
	 **/
	public $source;
	
	/** 
	 * 每日生效时间默认00:00:00。生效时间＜结束时间
	 **/
	public $start_time;
	
	/** 
	 * 每日生效开始时间（仅时分秒有效）
	 **/
	public $start_time_daily;
	
	/** 
	 * 状态
	 **/
	public $status;
	
	/** 
	 * rate 维度下特殊标签含义 json: {"ebk-tail-room-Rate":1}, key:ebk-tail-room-Rate 表示rate维度ebk尾房标
	 **/
	public $tag_json;
	
	/** 
	 * 卖家。
	 **/
	public $vendor;	
}
?>