<?php
/**
 * TOP API: taobao.xhotel.order.update request
 * 
 * @author auto create
 * @since 1.0, 2017.09.04
 */
class XhotelOrderUpdateRequest
{
	/** 
	 * 操作的类型：1.确认无房（取消预订，710发送短信提醒买家申请退款）,2.确认预订
	 **/
	private $optType;
	
	/** 
	 * 订单号
	 **/
	private $tid;
	
	private $apiParas = array();
	
	public function setOptType($optType)
	{
		$this->optType = $optType;
		$this->apiParas["opt_type"] = $optType;
	}

	public function getOptType()
	{
		return $this->optType;
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
		return "taobao.xhotel.order.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->optType,"optType");
		RequestCheckUtil::checkNotNull($this->tid,"tid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
