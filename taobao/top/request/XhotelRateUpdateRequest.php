<?php
/**
 * TOP API: taobao.xhotel.rate.update request
 * 
 * @author auto create
 * @since 1.0, 2017.09.05
 */
class XhotelRateUpdateRequest
{
	/** 
	 * 不推荐使用
	 **/
	private $addBed;
	
	/** 
	 * 不推荐使用
	 **/
	private $addBedPrice;
	
	/** 
	 * 不推荐使用（仅支持CNY）
	 **/
	private $currencyCode;
	
	/** 
	 * 不推荐使用，请使用out_rid
	 **/
	private $gid;
	
	/** 
	 * 每日价格和房价专有库存信息。A:use_room_inventory:是否使用room级别共享库存，可选值 true false 1、true时：使用room级别共享库存（即使用gid对应的XRoom中的inventory），rate_quota_map 的json 数据中不需要录入库存信息,录入的库存信息会忽略 2、false时：使用rate级别私有库存，此时要求价格和库存必填。B:date  日期必须为 T---T+180 日内的日期（T为当天），且不能重复C:price 价格 int类型 取值范围1-99999999 单位为分D:quota 库存 int 类型 取值范围  0-999（数量库存）  60000(状态库存关) 61000(状态库存开)
	 **/
	private $inventoryPrice;
	
	/** 
	 * 不推荐使用
	 **/
	private $jishiquerenTag;
	
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
	 * 商家房型ID
	 **/
	private $outRid;
	
	/** 
	 * 日历价格开关， date：开关状态控制的是那一天 rate_status：开关状态。0，关闭；1，打开
	 **/
	private $rateSwitchCal;
	
	/** 
	 * 商家价格计划编码
	 **/
	private $rateplanCode;
	
	/** 
	 * 不推荐使用，请使用rateplan_code
	 **/
	private $rpid;
	
	/** 
	 * 不推荐使用
	 **/
	private $shijiaTag;
	
	/** 
	 * 系统商，一般不用填写，使用需要申请
	 **/
	private $vendor;
	
	private $apiParas = array();
	
	public function setAddBed($addBed)
	{
		$this->addBed = $addBed;
		$this->apiParas["add_bed"] = $addBed;
	}

	public function getAddBed()
	{
		return $this->addBed;
	}

	public function setAddBedPrice($addBedPrice)
	{
		$this->addBedPrice = $addBedPrice;
		$this->apiParas["add_bed_price"] = $addBedPrice;
	}

	public function getAddBedPrice()
	{
		return $this->addBedPrice;
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

	public function setInventoryPrice($inventoryPrice)
	{
		$this->inventoryPrice = $inventoryPrice;
		$this->apiParas["inventory_price"] = $inventoryPrice;
	}

	public function getInventoryPrice()
	{
		return $this->inventoryPrice;
	}

	public function setJishiquerenTag($jishiquerenTag)
	{
		$this->jishiquerenTag = $jishiquerenTag;
		$this->apiParas["jishiqueren_tag"] = $jishiquerenTag;
	}

	public function getJishiquerenTag()
	{
		return $this->jishiquerenTag;
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

	public function setOutRid($outRid)
	{
		$this->outRid = $outRid;
		$this->apiParas["out_rid"] = $outRid;
	}

	public function getOutRid()
	{
		return $this->outRid;
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

	public function setRateplanCode($rateplanCode)
	{
		$this->rateplanCode = $rateplanCode;
		$this->apiParas["rateplan_code"] = $rateplanCode;
	}

	public function getRateplanCode()
	{
		return $this->rateplanCode;
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

	public function setShijiaTag($shijiaTag)
	{
		$this->shijiaTag = $shijiaTag;
		$this->apiParas["shijia_tag"] = $shijiaTag;
	}

	public function getShijiaTag()
	{
		return $this->shijiaTag;
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
		return "taobao.xhotel.rate.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->addBed,2,"addBed");
		RequestCheckUtil::checkMinValue($this->addBed,1,"addBed");
		RequestCheckUtil::checkMaxLength($this->name,60,"name");
		RequestCheckUtil::checkMaxLength($this->outRid,128,"outRid");
		RequestCheckUtil::checkMaxLength($this->rateplanCode,50,"rateplanCode");
		RequestCheckUtil::checkMaxLength($this->vendor,50,"vendor");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
