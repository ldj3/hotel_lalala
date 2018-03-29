<?php
/**
 * TOP API: taobao.xhotel.order.alipayface.cancel request
 * 
 * @author auto create
 * @since 1.0, 2016.09.21
 */
class XhotelOrderAlipayfaceCancelRequest
{
	/** 
	 * 预留后续用
	 **/
	private $notifyUrl;
	
	/** 
	 * 外部订单号
	 **/
	private $outId;
	
	/** 
	 * 请求流水号
	 **/
	private $outUuid;
	
	/** 
	 * 原因描述
	 **/
	private $reasonText;
	
	/** 
	 * 淘宝订单ID，必选
	 **/
	private $tid;
	
	private $apiParas = array();
	
	public function setNotifyUrl($notifyUrl)
	{
		$this->notifyUrl = $notifyUrl;
		$this->apiParas["notify_url"] = $notifyUrl;
	}

	public function getNotifyUrl()
	{
		return $this->notifyUrl;
	}

	public function setOutId($outId)
	{
		$this->outId = $outId;
		$this->apiParas["out_id"] = $outId;
	}

	public function getOutId()
	{
		return $this->outId;
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

	public function setReasonText($reasonText)
	{
		$this->reasonText = $reasonText;
		$this->apiParas["reason_text"] = $reasonText;
	}

	public function getReasonText()
	{
		return $this->reasonText;
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
		return "taobao.xhotel.order.alipayface.cancel";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
