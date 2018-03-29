<?php
/**
 * TOP API: taobao.xhotel.order.alipayface.check request
 * 
 * @author auto create
 * @since 1.0, 2016.09.30
 */
class XhotelOrderAlipayfaceCheckRequest
{
	/** 
	 * 加密方式, 默认0: 不加密, 信息会通过淘宝开放平台传输, 阿里旅行可以获取到具体信息;  1: SHA-1不可逆加密,  阿里旅行方面无法解析到具体信息, 只用于做信息匹配.注意加密后生成40字节长度的字符串
	 **/
	private $encryptType;
	
	/** 
	 * 入住人姓名
	 **/
	private $guestName;
	
	/** 
	 * 参数必填，发布到阿里旅行的酒店编码
	 **/
	private $hotelCode;
	
	/** 
	 * 证件号, 如果加密方式设置为1, 传入加密后的证件号
	 **/
	private $idNumber;
	
	/** 
	 * 证件类型, 默认0:身份证; 1: 护照; 2:警官证; 3:士兵证; 4: 回乡证
	 **/
	private $idType;
	
	/** 
	 * 客人手机号
	 **/
	private $mobileNo;
	
	/** 
	 * 总的收费金额，单位为分
	 **/
	private $totalFee;
	
	/** 
	 * 验证类型.可以不设置. 默认0-信用住下单资格校验;1-已经创建的信用住订单,入住人在checkIn时的资格复审
	 **/
	private $type;
	
	/** 
	 * 不清楚请留空, 用于和outHid共同定位一个酒店
	 **/
	private $vendor;
	
	private $apiParas = array();
	
	public function setEncryptType($encryptType)
	{
		$this->encryptType = $encryptType;
		$this->apiParas["encrypt_type"] = $encryptType;
	}

	public function getEncryptType()
	{
		return $this->encryptType;
	}

	public function setGuestName($guestName)
	{
		$this->guestName = $guestName;
		$this->apiParas["guest_name"] = $guestName;
	}

	public function getGuestName()
	{
		return $this->guestName;
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

	public function setIdNumber($idNumber)
	{
		$this->idNumber = $idNumber;
		$this->apiParas["id_number"] = $idNumber;
	}

	public function getIdNumber()
	{
		return $this->idNumber;
	}

	public function setIdType($idType)
	{
		$this->idType = $idType;
		$this->apiParas["id_type"] = $idType;
	}

	public function getIdType()
	{
		return $this->idType;
	}

	public function setMobileNo($mobileNo)
	{
		$this->mobileNo = $mobileNo;
		$this->apiParas["mobile_no"] = $mobileNo;
	}

	public function getMobileNo()
	{
		return $this->mobileNo;
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

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
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
		return "taobao.xhotel.order.alipayface.check";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->idNumber,"idNumber");
		RequestCheckUtil::checkNotNull($this->totalFee,"totalFee");
		RequestCheckUtil::checkMaxLength($this->vendor,50,"vendor");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
