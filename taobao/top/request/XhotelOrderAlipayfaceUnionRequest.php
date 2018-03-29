<?php
/**
 * TOP API: taobao.xhotel.order.alipayface.union request
 * 
 * @author auto create
 * @since 1.0, 2016.10.08
 */
class XhotelOrderAlipayfaceUnionRequest
{
	/** 
	 * 废弃字段，请勿使用.请使用total_fee字段设置总的金额.
	 **/
	private $extendFee;
	
	/** 
	 * 入住人信息, 最好将要参与联房结账的所有入住人都传入
	 **/
	private $guests;
	
	/** 
	 * 酒店(卖家)订单号
	 **/
	private $outOrderId;
	
	/** 
	 * 联房备注信息,请填写联房结账的具体情况
	 **/
	private $remark;
	
	/** 
	 * 阿里旅行订单id
	 **/
	private $tid;
	
	/** 
	 * 变更后总的订单金额.单位为分
	 **/
	private $totalFee;
	
	private $apiParas = array();
	
	public function setExtendFee($extendFee)
	{
		$this->extendFee = $extendFee;
		$this->apiParas["extend_fee"] = $extendFee;
	}

	public function getExtendFee()
	{
		return $this->extendFee;
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

	public function setOutOrderId($outOrderId)
	{
		$this->outOrderId = $outOrderId;
		$this->apiParas["out_order_id"] = $outOrderId;
	}

	public function getOutOrderId()
	{
		return $this->outOrderId;
	}

	public function setRemark($remark)
	{
		$this->remark = $remark;
		$this->apiParas["remark"] = $remark;
	}

	public function getRemark()
	{
		return $this->remark;
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

	public function setTotalFee($totalFee)
	{
		$this->totalFee = $totalFee;
		$this->apiParas["total_fee"] = $totalFee;
	}

	public function getTotalFee()
	{
		return $this->totalFee;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.order.alipayface.union";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->outOrderId,100,"outOrderId");
		RequestCheckUtil::checkMaxLength($this->remark,500,"remark");
		RequestCheckUtil::checkNotNull($this->totalFee,"totalFee");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
