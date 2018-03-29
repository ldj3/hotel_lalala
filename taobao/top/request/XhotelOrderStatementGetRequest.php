<?php
/**
 * TOP API: taobao.xhotel.order.statement.get request
 * 
 * @author auto create
 * @since 1.0, 2017.10.13
 */
class XhotelOrderStatementGetRequest
{
	/** 
	 * 0：check_in, 1：check_out,2：分账时间
	 **/
	private $dateType;
	
	/** 
	 * 查询开始时间
	 **/
	private $from;
	
	/** 
	 * 外部酒店编码
	 **/
	private $hotelCode;
	
	/** 
	 * 要查询的tid列表，逗号分隔,列表查询;当此值不为空时候，其余参数忽略。最多单次20条。
	 **/
	private $orderTids;
	
	/** 
	 * 查询条数，最大支持500条
	 **/
	private $pageSize;
	
	/** 
	 * 数据查询开始下标
	 **/
	private $start;
	
	/** 
	 * 淘宝订单号
	 **/
	private $tid;
	
	/** 
	 * 查询结束时间
	 **/
	private $to;
	
	/** 
	 * 系统商vendor
	 **/
	private $vendor;
	
	private $apiParas = array();
	
	public function setDateType($dateType)
	{
		$this->dateType = $dateType;
		$this->apiParas["date_type"] = $dateType;
	}

	public function getDateType()
	{
		return $this->dateType;
	}

	public function setFrom($from)
	{
		$this->from = $from;
		$this->apiParas["from"] = $from;
	}

	public function getFrom()
	{
		return $this->from;
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

	public function setOrderTids($orderTids)
	{
		$this->orderTids = $orderTids;
		$this->apiParas["order_tids"] = $orderTids;
	}

	public function getOrderTids()
	{
		return $this->orderTids;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setStart($start)
	{
		$this->start = $start;
		$this->apiParas["start"] = $start;
	}

	public function getStart()
	{
		return $this->start;
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

	public function setTo($to)
	{
		$this->to = $to;
		$this->apiParas["to"] = $to;
	}

	public function getTo()
	{
		return $this->to;
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
		return "taobao.xhotel.order.statement.get";
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
