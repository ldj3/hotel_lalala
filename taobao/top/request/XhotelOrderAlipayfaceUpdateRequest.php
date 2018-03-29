<?php
/**
 * TOP API: taobao.xhotel.order.alipayface.update request
 * 
 * @author auto create
 * @since 1.0, 2017.08.17
 */
class XhotelOrderAlipayfaceUpdateRequest
{
	/** 
	 * opt_type为11启用，多间房订单取消原因类型，逗号间隔
	 **/
	private $cancelType;
	
	/** 
	 * 客人实际入住日期,opt_type=3/4时必填
	 **/
	private $checkinDate;
	
	/** 
	 * 客人实际离店日期,opt_type=4时必填
	 **/
	private $checkoutDate;
	
	/** 
	 * opt_type为12, 订单确认号
	 **/
	private $confirmCode;
	
	/** 
	 * opt_type为10,11,12启用，真实操作人
	 **/
	private $operator;
	
	/** 
	 * 操作的类型：12.补录确认号,11.多间房确认无房，10.多间房确认有房，8.取消订单(cancel)酒店端发起取消,必须在和买家协商通过的情况下操作,否则有法务风险; 5.买家未入住(noshow),如果该单有担保，会收取买家的担保金额; 3.核实入住(checkIn); 4.核实离店(checkOut); 1.确认无房(直连卖家禁止该操作),2.确认有房(直连卖家禁止该操作)
	 **/
	private $optType;
	
	/** 
	 * 外部订单号
	 **/
	private $outId;
	
	/** 
	 * 入住房间号
	 **/
	private $outRoomNumber;
	
	/** 
	 * 无房原因描述:opt_type=1时必填
	 **/
	private $reasonText;
	
	/** 
	 * 无房原因分类:1.无房, 2.价格变动, 3.买家原因, 4.其它原因,opt_type=1时必填
	 **/
	private $reasonType;
	
	/** 
	 * 客人实际预定房间数
	 **/
	private $rooms;
	
	/** 
	 * 淘宝订单号,必填
	 **/
	private $tid;
	
	/** 
	 * opt_type为10,11启用，多间房订单号列表，逗号间隔
	 **/
	private $tids;
	
	private $apiParas = array();
	
	public function setCancelType($cancelType)
	{
		$this->cancelType = $cancelType;
		$this->apiParas["cancel_type"] = $cancelType;
	}

	public function getCancelType()
	{
		return $this->cancelType;
	}

	public function setCheckinDate($checkinDate)
	{
		$this->checkinDate = $checkinDate;
		$this->apiParas["checkin_date"] = $checkinDate;
	}

	public function getCheckinDate()
	{
		return $this->checkinDate;
	}

	public function setCheckoutDate($checkoutDate)
	{
		$this->checkoutDate = $checkoutDate;
		$this->apiParas["checkout_date"] = $checkoutDate;
	}

	public function getCheckoutDate()
	{
		return $this->checkoutDate;
	}

	public function setConfirmCode($confirmCode)
	{
		$this->confirmCode = $confirmCode;
		$this->apiParas["confirm_code"] = $confirmCode;
	}

	public function getConfirmCode()
	{
		return $this->confirmCode;
	}

	public function setOperator($operator)
	{
		$this->operator = $operator;
		$this->apiParas["operator"] = $operator;
	}

	public function getOperator()
	{
		return $this->operator;
	}

	public function setOptType($optType)
	{
		$this->optType = $optType;
		$this->apiParas["opt_type"] = $optType;
	}

	public function getOptType()
	{
		return $this->optType;
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

	public function setOutRoomNumber($outRoomNumber)
	{
		$this->outRoomNumber = $outRoomNumber;
		$this->apiParas["out_room_number"] = $outRoomNumber;
	}

	public function getOutRoomNumber()
	{
		return $this->outRoomNumber;
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

	public function setReasonType($reasonType)
	{
		$this->reasonType = $reasonType;
		$this->apiParas["reason_type"] = $reasonType;
	}

	public function getReasonType()
	{
		return $this->reasonType;
	}

	public function setRooms($rooms)
	{
		$this->rooms = $rooms;
		$this->apiParas["rooms"] = $rooms;
	}

	public function getRooms()
	{
		return $this->rooms;
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

	public function setTids($tids)
	{
		$this->tids = $tids;
		$this->apiParas["tids"] = $tids;
	}

	public function getTids()
	{
		return $this->tids;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.order.alipayface.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->checkinDate,10,"checkinDate");
		RequestCheckUtil::checkMaxLength($this->checkoutDate,10,"checkoutDate");
		RequestCheckUtil::checkNotNull($this->optType,"optType");
		RequestCheckUtil::checkMaxLength($this->outId,100,"outId");
		RequestCheckUtil::checkMaxLength($this->reasonText,500,"reasonText");
		RequestCheckUtil::checkMaxValue($this->rooms,9,"rooms");
		RequestCheckUtil::checkMinValue($this->rooms,1,"rooms");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
