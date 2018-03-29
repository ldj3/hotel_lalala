<?php

/**
 * 系统自动生成
 * @author auto create
 */
class StatementOrder
{
	
	/** 
	 * 门店收款账户(1：支付宝；2：银行卡)
	 **/
	public $account_type;
	
	/** 
	 * 支付宝交易号
	 **/
	public $alipay_trade_no;
	
	/** 
	 * 入住时间
	 **/
	public $check_in;
	
	/** 
	 * 离店时间
	 **/
	public $check_out;
	
	/** 
	 * 扣除佣金后， 1.	集团入账=买家实际支付(房费+杂费-卖家优惠)； 2.	门店实际入账=买
	 **/
	public $commission_total;
	
	/** 
	 * 集团与门店佣金
	 **/
	public $hotel_commission;
	
	/** 
	 * 酒店名称
	 **/
	public $hotel_name;
	
	/** 
	 * 杂费总额
	 **/
	public $other_fee;
	
	/** 
	 * 外部订单ID
	 **/
	public $out_id;
	
	/** 
	 * 支付类型(1:预付；5:面付;7：在线预约;601:线上信用住；602：扫码信用住；603：身份证线下信用住；604：官网信用住)
	 **/
	public $pay_type;
	
	/** 
	 * 总房费（分）
	 **/
	public $payment;
	
	/** 
	 * 卖家优惠明细（暂无值）
	 **/
	public $promotion_detail;
	
	/** 
	 * 入住天数
	 **/
	public $room_sum_nights;
	
	/** 
	 * 实际的房型名称
	 **/
	public $room_type_name;
	
	/** 
	 * 卖家优惠（分）
	 **/
	public $seller_promotion;
	
	/** 
	 * 结算日期
	 **/
	public $settle_date;
	
	/** 
	 * 分账状态 (0, "未分账"),(1, "分账成功"),(3, "分账失败"), (2, "无需分账"),(4,"预处理成功");
	 **/
	public $settle_status;
	
	/** 
	 * 淘宝佣金
	 **/
	public $taobao_commission;
	
	/** 
	 * 税和费，单位分
	 **/
	public $tax_and_fee;
	
	/** 
	 * 淘宝订单ID
	 **/
	public $tid;
	
	/** 
	 * 交易状态（暂无值）
	 **/
	public $trade_status;
	
	/** 
	 * 交易手续费
	 **/
	public $transaction_fee;	
}
?>