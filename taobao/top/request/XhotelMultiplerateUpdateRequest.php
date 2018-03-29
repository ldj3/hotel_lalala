<?php
/**
 * TOP API: taobao.xhotel.multiplerate.update request
 * 
 * @author auto create
 * @since 1.0, 2016.09.08
 */
class XhotelMultiplerateUpdateRequest
{
	/** 
	 * 儿童人数
	 **/
	private $childnum;
	
	/** 
	 * 币种.CNY为人民币
	 **/
	private $currencyCode;
	
	/** 
	 * 废弃，使用out_rid
	 **/
	private $gid;
	
	/** 
	 * 婴儿人数
	 **/
	private $infantnum;
	
	/** 
	 * 价格和库存信息。 A:use_room_inventory:是否使用房型共享库存，可选值 true false ,false时：使用房价专有库存，此时要求价格和库存必填。 B:date 日期必须为 T---T+180 日内的日期（T为当天），且不能重复 C:price 价格 int类型 取值范围1-99999999 单位为分 D:quota 库存 int 类型 取值范围 0-999（数量库存） 60000(状态库存关) 61000(状态库存开) tax为税费，addBed为加床价，addPerson为加人价1
	 **/
	private $inventoryPrice;
	
	/** 
	 * 连住天数(范围1~10)
	 **/
	private $lengthofstay;
	
	/** 
	 * 锁库存截止时间，如果当前时间是在锁库存开始时间和截止时间之间，那么不允许修改该活动库存（包含开始时间和截止时间）
	 **/
	private $lockEndTime;
	
	/** 
	 * 锁库存开始时间，如果当前时间是在锁库存开始时间和截止时间之间，那么不允许修改该活动库存（包含开始时间和截止时间）
	 **/
	private $lockStartTime;
	
	/** 
	 * 废弃
	 **/
	private $name;
	
	/** 
	 * 入住人数(范围1~10)
	 **/
	private $occupancy;
	
	/** 
	 * 卖家房型ID
	 **/
	private $outRid;
	
	/** 
	 * 卖家自己系统的房价code
	 **/
	private $ratePlanCode;
	
	/** 
	 * 价格开关 date：开关状态控制的那一天；rate_status：开关状态(0，关闭；1，打开); checkin_status：入住开关(0，关闭；1，打开)；checkout_status：离店开关 (0，关闭；1，打开)
	 **/
	private $rateSwitchCal;
	
	/** 
	 * 废弃，使用rate_plan_code
	 **/
	private $rpid;
	
	/** 
	 * 价格状态。0为不可售；1为可售，默认可售
	 **/
	private $status;
	
	/** 
	 * 系统商，一般不填写，使用须申请
	 **/
	private $vendor;
	
	private $apiParas = array();
	
	public function setChildnum($childnum)
	{
		$this->childnum = $childnum;
		$this->apiParas["childnum"] = $childnum;
	}

	public function getChildnum()
	{
		return $this->childnum;
	}

	public function setCurrencyCode($currencyCode)
	{
		$this->currencyCode = $currencyCode;
		$this->apiParas["currency_code"] = $currencyCode;
	}

	public function getCurrencyCode()
	{
		return $this->currencyCode;
	}

	public function setGid($gid)
	{
		$this->gid = $gid;
		$this->apiParas["gid"] = $gid;
	}

	public function getGid()
	{
		return $this->gid;
	}

	public function setInfantnum($infantnum)
	{
		$this->infantnum = $infantnum;
		$this->apiParas["infantnum"] = $infantnum;
	}

	public function getInfantnum()
	{
		return $this->infantnum;
	}

	public function setInventoryPrice($inventoryPrice)
	{
		$this->inventoryPrice = $inventoryPrice;
		$this->apiParas["inventory_price"] = $inventoryPrice;
	}

	public function getInventoryPrice()
	{
		return $this->inventoryPrice;
	}

	public function setLengthofstay($lengthofstay)
	{
		$this->lengthofstay = $lengthofstay;
		$this->apiParas["lengthofstay"] = $lengthofstay;
	}

	public function getLengthofstay()
	{
		return $this->lengthofstay;
	}

	public function setLockEndTime($lockEndTime)
	{
		$this->lockEndTime = $lockEndTime;
		$this->apiParas["lock_end_time"] = $lockEndTime;
	}

	public function getLockEndTime()
	{
		return $this->lockEndTime;
	}

	public function setLockStartTime($lockStartTime)
	{
		$this->lockStartTime = $lockStartTime;
		$this->apiParas["lock_start_time"] = $lockStartTime;
	}

	public function getLockStartTime()
	{
		return $this->lockStartTime;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setOccupancy($occupancy)
	{
		$this->occupancy = $occupancy;
		$this->apiParas["occupancy"] = $occupancy;
	}

	public function getOccupancy()
	{
		return $this->occupancy;
	}

	public function setOutRid($outRid)
	{
		$this->outRid = $outRid;
		$this->apiParas["out_rid"] = $outRid;
	}

	public function getOutRid()
	{
		return $this->outRid;
	}

	public function setRatePlanCode($ratePlanCode)
	{
		$this->ratePlanCode = $ratePlanCode;
		$this->apiParas["rate_plan_code"] = $ratePlanCode;
	}

	public function getRatePlanCode()
	{
		return $this->ratePlanCode;
	}

	public function setRateSwitchCal($rateSwitchCal)
	{
		$this->rateSwitchCal = $rateSwitchCal;
		$this->apiParas["rate_switch_cal"] = $rateSwitchCal;
	}

	public function getRateSwitchCal()
	{
		return $this->rateSwitchCal;
	}

	public function setRpid($rpid)
	{
		$this->rpid = $rpid;
		$this->apiParas["rpid"] = $rpid;
	}

	public function getRpid()
	{
		return $this->rpid;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
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
		return "taobao.xhotel.multiplerate.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->childnum,10,"childnum");
		RequestCheckUtil::checkMinValue($this->childnum,1,"childnum");
		RequestCheckUtil::checkMaxValue($this->infantnum,10,"infantnum");
		RequestCheckUtil::checkMinValue($this->infantnum,1,"infantnum");
		RequestCheckUtil::checkNotNull($this->lengthofstay,"lengthofstay");
		RequestCheckUtil::checkNotNull($this->occupancy,"occupancy");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
