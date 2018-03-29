<?php
/**
 * TOP API: taobao.xhotel.order.offline.settle.put request
 * 
 * @author auto create
 * @since 1.0, 2016.09.21
 */
class XhotelOrderOfflineSettlePutRequest
{
	/** 
	 * 实际离店日期，用于校验总房费收取
	 **/
	private $checkOut;
	
	/** 
	 * 此金额是否包含担保金 0：默认值无意义；1：包含；2：不包含（多间房结账必须传入）
	 **/
	private $containGuarantee;
	
	/** 
	 * 每日房价,json格式,如果房价和在阿里旅行下单时发生了变化，必须设置该字段.用于更新阿里旅行端的房价信息,涉及到对用户的优惠信息处理等环节(多间房的时候dailyPriceInfo留空)
	 **/
	private $dailyPriceInfo;
	
	/** 
	 * 备注
	 **/
	private $memo;
	
	/** 
	 * 请求结果通知地址（暂时无效，无需传入）
	 **/
	private $notifyUrl;
	
	/** 
	 * 杂费总额(不能为负数)
	 **/
	private $otherFee;
	
	/** 
	 * 杂费明细,如果otherFee>0则该字段必须设置,并和杂费金额相吻合
	 **/
	private $otherFeeDetail;
	
	/** 
	 * 商家订单号
	 **/
	private $outId;
	
	/** 
	 * 结账请求流水号
	 **/
	private $outUuid;
	
	/** 
	 * 入住房间号
	 **/
	private $roomNo;
	
	/** 
	 * 房间明细列表
	 **/
	private $roomSettleInfoList;
	
	/** 
	 * 淘宝订单id,必须填写
	 **/
	private $tid;
	
	/** 
	 * 房费总额(必须大于0)
	 **/
	private $totalRoomFee;
	
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

	public function setContainGuarantee($containGuarantee)
	{
		$this->containGuarantee = $containGuarantee;
		$this->apiParas["contain_guarantee"] = $containGuarantee;
	}

	public function getContainGuarantee()
	{
		return $this->containGuarantee;
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

	public function setMemo($memo)
	{
		$this->memo = $memo;
		$this->apiParas["memo"] = $memo;
	}

	public function getMemo()
	{
		return $this->memo;
	}

	public function setNotifyUrl($notifyUrl)
	{
		$this->notifyUrl = $notifyUrl;
		$this->apiParas["notify_url"] = $notifyUrl;
	}

	public function getNotifyUrl()
	{
		return $this->notifyUrl;
	}

	public function setOtherFee($otherFee)
	{
		$this->otherFee = $otherFee;
		$this->apiParas["other_fee"] = $otherFee;
	}

	public function getOtherFee()
	{
		return $this->otherFee;
	}

	public function setOtherFeeDetail($otherFeeDetail)
	{
		$this->otherFeeDetail = $otherFeeDetail;
		$this->apiParas["other_fee_detail"] = $otherFeeDetail;
	}

	public function getOtherFeeDetail()
	{
		return $this->otherFeeDetail;
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

	public function setRoomNo($roomNo)
	{
		$this->roomNo = $roomNo;
		$this->apiParas["room_no"] = $roomNo;
	}

	public function getRoomNo()
	{
		return $this->roomNo;
	}

	public function setRoomSettleInfoList($roomSettleInfoList)
	{
		$this->roomSettleInfoList = $roomSettleInfoList;
		$this->apiParas["room_settle_info_list"] = $roomSettleInfoList;
	}

	public function getRoomSettleInfoList()
	{
		return $this->roomSettleInfoList;
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

	public function setTotalRoomFee($totalRoomFee)
	{
		$this->totalRoomFee = $totalRoomFee;
		$this->apiParas["total_room_fee"] = $totalRoomFee;
	}

	public function getTotalRoomFee()
	{
		return $this->totalRoomFee;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.order.offline.settle.put";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->checkOut,"checkOut");
		RequestCheckUtil::checkNotNull($this->otherFee,"otherFee");
		RequestCheckUtil::checkNotNull($this->totalRoomFee,"totalRoomFee");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
