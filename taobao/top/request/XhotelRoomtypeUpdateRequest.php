<?php
/**
 * TOP API: taobao.xhotel.roomtype.update request
 * 
 * @author auto create
 * @since 1.0, 2017.08.17
 */
class XhotelRoomtypeUpdateRequest
{
	/** 
	 * 具体面积大小，请按照正确格式填写。两种格式，例如：40 或者 10-20
	 **/
	private $area;
	
	/** 
	 * 床宽。按自己定义存储，比如：2.1米
	 **/
	private $bedSize;
	
	/** 
	 * 床型。必填，按链接中床型列表定义值存储 http://open.taobao.com/docs/doc.htm?&docType=1&articleId=105610
	 **/
	private $bedType;
	
	/** 
	 * 属性值为1: 含义是非直连房型
	 **/
	private $connectionType;
	
	/** 
	 * 扩展信息的JSON。注：此字段的值需要ISV在接入前与淘宝沟通，且确认能解析
	 **/
	private $extend;
	
	/** 
	 * 客房在建筑的第几层，隔层为1-2层，4-5层，7-8层
	 **/
	private $floor;
	
	/** 
	 * （已废弃）
	 **/
	private $hid;
	
	/** 
	 * 商家酒店ID(如果更新房型的时候房型不存在，会拿该code去新增房型)
	 **/
	private $hotelCode;
	
	/** 
	 * 宽带服务。A,B,C,D。分别代表： A：无宽带，B：免费宽带，C：收费宽带，D：部分收费宽带
	 **/
	private $internet;
	
	/** 
	 * 最大入住人数，默认2（1-99）
	 **/
	private $maxOccupancy;
	
	/** 
	 * 房型名称。不能超过30字；添加房型时为必须
	 **/
	private $name;
	
	/** 
	 * 卖家房型英文名称
	 **/
	private $nameE;
	
	/** 
	 * 操作人信息
	 **/
	private $operator;
	
	/** 
	 * （必传）商家房型ID
	 **/
	private $outerId;
	
	/** 
	 * 房型图片只支持远程图片，格式如下：[{"url":"http://taobao.com/123.jpg","ismain":"true"},{"url":"http://taobao.com/456.jpg","ismain":"false"},{"url":"http://taobao.com/789.jpg","ismain":"false"}]其中url是远程图片的访问地址（URL地址必须是合法的，否则会报错），main是是否为主图。只能设置一张图片为主图。要求：无logo、水印、边框、人物，不模糊，不重复，不歪斜，房间图清晰，图片尺寸不小于300*225，不小于5M
	 **/
	private $pics;
	
	/** 
	 * （已废弃）
	 **/
	private $rid;
	
	/** 
	 * 设施服务。JSON格式。 value值true有此服务，false没有。 bar：吧台，catv：有线电视，ddd：国内长途电话，idd：国际长途电话，toilet：独立卫生间，pubtoliet：公共卫生间。 如： {"bar":false,"catv":false,"ddd":false,"idd":false,"pubtoilet":false,"toilet":false}
	 **/
	private $service;
	
	/** 
	 * 该字段只有确定的时候，才允许填入。用于标示和淘宝房型的匹配关系。目前尚未启动该字段。
	 **/
	private $srid;
	
	/** 
	 * 房型状态。0:正常，-1:删除，-2:停售
	 **/
	private $status;
	
	/** 
	 * 系统商，不要使用，只有申请才可用
	 **/
	private $vendor;
	
	/** 
	 * 0:无窗/1:有窗
	 **/
	private $windowType;
	
	private $apiParas = array();
	
	public function setArea($area)
	{
		$this->area = $area;
		$this->apiParas["area"] = $area;
	}

	public function getArea()
	{
		return $this->area;
	}

	public function setBedSize($bedSize)
	{
		$this->bedSize = $bedSize;
		$this->apiParas["bed_size"] = $bedSize;
	}

	public function getBedSize()
	{
		return $this->bedSize;
	}

	public function setBedType($bedType)
	{
		$this->bedType = $bedType;
		$this->apiParas["bed_type"] = $bedType;
	}

	public function getBedType()
	{
		return $this->bedType;
	}

	public function setConnectionType($connectionType)
	{
		$this->connectionType = $connectionType;
		$this->apiParas["connection_type"] = $connectionType;
	}

	public function getConnectionType()
	{
		return $this->connectionType;
	}

	public function setExtend($extend)
	{
		$this->extend = $extend;
		$this->apiParas["extend"] = $extend;
	}

	public function getExtend()
	{
		return $this->extend;
	}

	public function setFloor($floor)
	{
		$this->floor = $floor;
		$this->apiParas["floor"] = $floor;
	}

	public function getFloor()
	{
		return $this->floor;
	}

	public function setHid($hid)
	{
		$this->hid = $hid;
		$this->apiParas["hid"] = $hid;
	}

	public function getHid()
	{
		return $this->hid;
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

	public function setInternet($internet)
	{
		$this->internet = $internet;
		$this->apiParas["internet"] = $internet;
	}

	public function getInternet()
	{
		return $this->internet;
	}

	public function setMaxOccupancy($maxOccupancy)
	{
		$this->maxOccupancy = $maxOccupancy;
		$this->apiParas["max_occupancy"] = $maxOccupancy;
	}

	public function getMaxOccupancy()
	{
		return $this->maxOccupancy;
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

	public function setNameE($nameE)
	{
		$this->nameE = $nameE;
		$this->apiParas["name_e"] = $nameE;
	}

	public function getNameE()
	{
		return $this->nameE;
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

	public function setOuterId($outerId)
	{
		$this->outerId = $outerId;
		$this->apiParas["outer_id"] = $outerId;
	}

	public function getOuterId()
	{
		return $this->outerId;
	}

	public function setPics($pics)
	{
		$this->pics = $pics;
		$this->apiParas["pics"] = $pics;
	}

	public function getPics()
	{
		return $this->pics;
	}

	public function setRid($rid)
	{
		$this->rid = $rid;
		$this->apiParas["rid"] = $rid;
	}

	public function getRid()
	{
		return $this->rid;
	}

	public function setService($service)
	{
		$this->service = $service;
		$this->apiParas["service"] = $service;
	}

	public function getService()
	{
		return $this->service;
	}

	public function setSrid($srid)
	{
		$this->srid = $srid;
		$this->apiParas["srid"] = $srid;
	}

	public function getSrid()
	{
		return $this->srid;
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

	public function setWindowType($windowType)
	{
		$this->windowType = $windowType;
		$this->apiParas["window_type"] = $windowType;
	}

	public function getWindowType()
	{
		return $this->windowType;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.roomtype.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->area,30,"area");
		RequestCheckUtil::checkMaxLength($this->bedSize,30,"bedSize");
		RequestCheckUtil::checkMaxLength($this->bedType,30,"bedType");
		RequestCheckUtil::checkMaxLength($this->extend,500,"extend");
		RequestCheckUtil::checkMaxLength($this->floor,30,"floor");
		RequestCheckUtil::checkMaxLength($this->hotelCode,64,"hotelCode");
		RequestCheckUtil::checkMaxLength($this->name,30,"name");
		RequestCheckUtil::checkMaxLength($this->nameE,60,"nameE");
		RequestCheckUtil::checkMaxLength($this->outerId,64,"outerId");
		RequestCheckUtil::checkMaxLength($this->service,1024,"service");
		RequestCheckUtil::checkMaxLength($this->vendor,50,"vendor");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
