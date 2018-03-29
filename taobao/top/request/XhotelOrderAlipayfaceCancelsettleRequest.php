<?php
/**
 * TOP API: taobao.xhotel.order.alipayface.cancelsettle request
 * 
 * @author auto create
 * @since 1.0, 2016.04.14
 */
class XhotelOrderAlipayfaceCancelsettleRequest
{
	/** 
	 * 外部订单号，和tid二选一必填
	 **/
	private $outId;
	
	/** 
	 * 取消结账的原因
	 **/
	private $reason;
	
	/** 
	 * 阿里旅行订单号，淘宝订单号或外部订单号二选一必填
	 **/
	private $tid;
	
	private $apiParas = array();
	
	public function setOutId($outId)
	{
		$this->outId = $outId;
		$this->apiParas["out_id"] = $outId;
	}

	public function getOutId()
	{
		return $this->outId;
	}

	public function setReason($reason)
	{
		$this->reason = $reason;
		$this->apiParas["reason"] = $reason;
	}

	public function getReason()
	{
		return $this->reason;
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
		return "taobao.xhotel.order.alipayface.cancelsettle";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->outId,100,"outId");
		RequestCheckUtil::checkMaxLength($this->reason,250,"reason");
		RequestCheckUtil::checkMinValue($this->tid,0,"tid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
