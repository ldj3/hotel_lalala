<?php
/**
 * TOP API: taobao.xhotel.order.extend request
 * 
 * @author auto create
 * @since 1.0, 2016.07.12
 */
class XhotelOrderExtendRequest
{
	/** 
	 * 延住后的离店日期(最多总共入住天数不能超过9间夜)
	 **/
	private $checkOut;
	
	/** 
	 * 延住日期段的每日房价信息,注意不包括原有的日期房价
	 **/
	private $extendDailyPriceInfo;
	
	/** 
	 * 延住房费,注意不包含原有的房费金额,单位为分
	 **/
	private $extendFee;
	
	/** 
	 * 卖家系统订单号,和tid必须至少传入一个
	 **/
	private $outOrderId;
	
	/** 
	 * 阿里旅行订单id,和outOrderId必须至少传入一个
	 **/
	private $tid;
	
	private $apiParas = array();
	
	public function setCheckOut($checkOut)
	{
		$this->checkOut = $checkOut;
		$this->apiParas["check_out"] = $checkOut;
	}

	public function getCheckOut()
	{
		return $this->checkOut;
	}

	public function setExtendDailyPriceInfo($extendDailyPriceInfo)
	{
		$this->extendDailyPriceInfo = $extendDailyPriceInfo;
		$this->apiParas["extend_daily_price_info"] = $extendDailyPriceInfo;
	}

	public function getExtendDailyPriceInfo()
	{
		return $this->extendDailyPriceInfo;
	}

	public function setExtendFee($extendFee)
	{
		$this->extendFee = $extendFee;
		$this->apiParas["extend_fee"] = $extendFee;
	}

	public function getExtendFee()
	{
		return $this->extendFee;
	}

	public function setOutOrderId($outOrderId)
	{
		$this->outOrderId = $outOrderId;
		$this->apiParas["out_order_id"] = $outOrderId;
	}

	public function getOutOrderId()
	{
		return $this->outOrderId;
	}

	public function setTid($tid)
	{
		$this->tid = $tid;
		$this->apiParas["tid"] = $tid;
	}

	public function getTid()
	{
		return $this->tid;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.order.extend";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->checkOut,"checkOut");
		RequestCheckUtil::checkNotNull($this->extendDailyPriceInfo,"extendDailyPriceInfo");
		RequestCheckUtil::checkNotNull($this->extendFee,"extendFee");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
