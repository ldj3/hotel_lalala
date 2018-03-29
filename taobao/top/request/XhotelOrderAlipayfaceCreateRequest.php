<?php
/**
 * TOP API: taobao.xhotel.order.alipayface.create request
 * 
 * @author auto create
 * @since 1.0, 2016.09.21
 */
class XhotelOrderAlipayfaceCreateRequest
{
	/** 
	 * 扫描用户支付宝得到的串号, 该字段不为空时会采用串号对应的支付宝账号进行信用住结算
	 **/
	private $alipayNumber;
	
	/** 
	 * 订单渠道信息,可以留空
	 **/
	private $channel;
	
	/** 
	 * 入住日期
	 **/
	private $checkIn;
	
	/** 
	 * 离店日期(最多允许9天)
	 **/
	private $checkOut;
	
	/** 
	 * 每日房价,json格式
	 **/
	private $dailyPriceInfo;
	
	/** 
	 * 入住人信息, 注意必须有且只有一个设置为主入住人, 用于信用住结算扣款. 对于java版本的SDK可以使用setGuests(List &lt Guest &gt guests)赋值; 对于.net等其他版本SDK可以通过将List &lt Guest&gt结构数据转为json串赋值.
	 **/
	private $guests;
	
	/** 
	 * 发布到阿里旅行的酒店编码
	 **/
	private $hotelCode;
	
	/** 
	 * 商家系统的订单号，必须全局唯一，重复会按照相同订单处理
	 **/
	private $outOrderId;
	
	/** 
	 * rateplan名称(不清楚可以留空)
	 **/
	private $rateplanName;
	
	/** 
	 * 预定的房间数量
	 **/
	private $roomQuantity;
	
	/** 
	 * 房型名称
	 **/
	private $roomtypeName;
	
	/** 
	 * 总房费,单位为分
	 **/
	private $totalFee;
	
	/** 
	 * 不清楚请留空, 用于和outHid共同定位一个酒店
	 **/
	private $vendor;
	
	private $apiParas = array();
	
	public function setAlipayNumber($alipayNumber)
	{
		$this->alipayNumber = $alipayNumber;
		$this->apiParas["alipay_number"] = $alipayNumber;
	}

	public function getAlipayNumber()
	{
		return $this->alipayNumber;
	}

	public function setChannel($channel)
	{
		$this->channel = $channel;
		$this->apiParas["channel"] = $channel;
	}

	public function getChannel()
	{
		return $this->channel;
	}

	public function setCheckIn($checkIn)
	{
		$this->checkIn = $checkIn;
		$this->apiParas["check_in"] = $checkIn;
	}

	public function getCheckIn()
	{
		return $this->checkIn;
	}

	public function setCheckOut($checkOut)
	{
		$this->checkOut = $checkOut;
		$this->apiParas["check_out"] = $checkOut;
	}

	public function getCheckOut()
	{
		return $this->checkOut;
	}

	public function setDailyPriceInfo($dailyPriceInfo)
	{
		$this->dailyPriceInfo = $dailyPriceInfo;
		$this->apiParas["daily_price_info"] = $dailyPriceInfo;
	}

	public function getDailyPriceInfo()
	{
		return $this->dailyPriceInfo;
	}

	public function setGuests($guests)
	{
		$this->guests = $guests;
		$this->apiParas["guests"] = $guests;
	}

	public function getGuests()
	{
		return $this->guests;
	}

	public function setHotelCode($hotelCode)
	{
		$this->hotelCode = $hotelCode;
		$this->apiParas["hotel_code"] = $hotelCode;
	}

	public function getHotelCode()
	{
		return $this->hotelCode;
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

	public function setRateplanName($rateplanName)
	{
		$this->rateplanName = $rateplanName;
		$this->apiParas["rateplan_name"] = $rateplanName;
	}

	public function getRateplanName()
	{
		return $this->rateplanName;
	}

	public function setRoomQuantity($roomQuantity)
	{
		$this->roomQuantity = $roomQuantity;
		$this->apiParas["room_quantity"] = $roomQuantity;
	}

	public function getRoomQuantity()
	{
		return $this->roomQuantity;
	}

	public function setRoomtypeName($roomtypeName)
	{
		$this->roomtypeName = $roomtypeName;
		$this->apiParas["roomtype_name"] = $roomtypeName;
	}

	public function getRoomtypeName()
	{
		return $this->roomtypeName;
	}

	public function setTotalFee($totalFee)
	{
		$this->totalFee = $totalFee;
		$this->apiParas["total_fee"] = $totalFee;
	}

	public function getTotalFee()
	{
		return $this->totalFee;
	}

	public function setVendor($vendor)
	{
		$this->vendor = $vendor;
		$this->apiParas["vendor"] = $vendor;
	}

	public function getVendor()
	{
		return $this->vendor;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.order.alipayface.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->checkIn,"checkIn");
		RequestCheckUtil::checkNotNull($this->checkOut,"checkOut");
		RequestCheckUtil::checkNotNull($this->hotelCode,"hotelCode");
		RequestCheckUtil::checkNotNull($this->outOrderId,"outOrderId");
		RequestCheckUtil::checkNotNull($this->roomQuantity,"roomQuantity");
		RequestCheckUtil::checkNotNull($this->totalFee,"totalFee");
		RequestCheckUtil::checkMaxLength($this->vendor,50,"vendor");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
