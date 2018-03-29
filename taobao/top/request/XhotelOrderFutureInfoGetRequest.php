<?php
/**
 * TOP API: taobao.xhotel.order.future.info.get request
 * 
 * @author auto create
 * @since 1.0, 2016.12.26
 */
class XhotelOrderFutureInfoGetRequest
{
	/** 
	 * 结束时间
	 **/
	private $createdEnd;
	
	/** 
	 * 开始时间
	 **/
	private $createdStart;
	
	/** 
	 * 酒店编码
	 **/
	private $hotelCode;
	
	/** 
	 * 操作类型 1.在线开发票请求 3.在线选房请求 4.自助checkIn请求 13.扫脸入住身份信息请求 10.房态信息查询请求 103.通用任务取消指令
	 **/
	private $operateType;
	
	/** 
	 * 请求流水号
	 **/
	private $outUuid;
	
	/** 
	 * 指定淘宝订单ID。以英文分号隔开的字符串“123455666;123455666;123455666”
	 **/
	private $tids;
	
	/** 
	 * 系统商分配的身份识别
	 **/
	private $vendor;
	
	private $apiParas = array();
	
	public function setCreatedEnd($createdEnd)
	{
		$this->createdEnd = $createdEnd;
		$this->apiParas["created_end"] = $createdEnd;
	}

	public function getCreatedEnd()
	{
		return $this->createdEnd;
	}

	public function setCreatedStart($createdStart)
	{
		$this->createdStart = $createdStart;
		$this->apiParas["created_start"] = $createdStart;
	}

	public function getCreatedStart()
	{
		return $this->createdStart;
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

	public function setOperateType($operateType)
	{
		$this->operateType = $operateType;
		$this->apiParas["operate_type"] = $operateType;
	}

	public function getOperateType()
	{
		return $this->operateType;
	}

	public function setOutUuid($outUuid)
	{
		$this->outUuid = $outUuid;
		$this->apiParas["out_uuid"] = $outUuid;
	}

	public function getOutUuid()
	{
		return $this->outUuid;
	}

	public function setTids($tids)
	{
		$this->tids = $tids;
		$this->apiParas["tids"] = $tids;
	}

	public function getTids()
	{
		return $this->tids;
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
		return "taobao.xhotel.order.future.info.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->hotelCode,"hotelCode");
		RequestCheckUtil::checkNotNull($this->operateType,"operateType");
		RequestCheckUtil::checkNotNull($this->outUuid,"outUuid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
