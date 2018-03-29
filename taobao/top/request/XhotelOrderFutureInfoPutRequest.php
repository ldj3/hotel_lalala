<?php
/**
 * TOP API: taobao.xhotel.order.future.info.put request
 * 
 * @author auto create
 * @since 1.0, 2016.12.26
 */
class XhotelOrderFutureInfoPutRequest
{
	/** 
	 * 字段详细介绍参见 https://open.alitrip.com/docs/doc.htm?docType=1&articleId=106153
	 **/
	private $context;
	
	/** 
	 * 酒店编码
	 **/
	private $hotelCode;
	
	/** 
	 * 操作类型 21: 订单状态更新（商家推送订单状态变更）23：酒店房态信息上传（上传一段时间内的酒店房态）25：在线开发票请求确认 26：自助选房请求进行请求确认   27：自助checkIn请求进行请求确认 32: 扫脸入住入住信息回传 （飞猪将登记至公安系统）
	 **/
	private $operateType;
	
	/** 
	 * 商家请求流水号
	 **/
	private $outUuid;
	
	/** 
	 * 商家vendor信息。具体值咨询淘宝技术
	 **/
	private $vendor;
	
	private $apiParas = array();
	
	public function setContext($context)
	{
		$this->context = $context;
		$this->apiParas["context"] = $context;
	}

	public function getContext()
	{
		return $this->context;
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
		return "taobao.xhotel.order.future.info.put";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->context,"context");
		RequestCheckUtil::checkNotNull($this->hotelCode,"hotelCode");
		RequestCheckUtil::checkNotNull($this->operateType,"operateType");
		RequestCheckUtil::checkNotNull($this->outUuid,"outUuid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
