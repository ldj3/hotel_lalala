<?php
/**
 * TOP API: taobao.xhotel.add request
 * 
 * @author auto create
 * @since 1.0, 2017.05.04
 */
class XhotelAddRequest
{
	/** 
	 * 酒店地址。长度不能超过120。不填入会导致不能自动匹配。
	 **/
	private $address;
	
	/** 
	 * 预订须知。json字段描述：hotelInMountaintop 酒店位于山顶 1在山顶、0不在；needBoat 酒店需要坐船前往 1需要、0不需要；酒店位于景区内 1在景区、0不在；extraBed 加床收费；extraCharge 额外收费；arrivalTime 到店时间；extend 其他补充项
	 **/
	private $bookingNotice;
	
	/** 
	 * 酒店品牌。取值为数字。枚举如下（只给出top30，如果不满足，请联系去啊接口人）：    ruJia("1", "rujiakuaijie", "如家快捷", 1),    qiTian("2", "7 days", "7天连锁", 1),    hanTing("3", "Hanting Inns & Hotels", "汉庭酒店", 1),    geLinHaoTai("4", "Green Tree Inn", "格林豪泰", 1),    jinJiang("5", "Jinjiang Inn", "锦江之星", 1),    su8("6", "Super 8", "速8", 1),    moTai("7", "Motel", "莫泰", 1),    zhouji("8", "InterContinental", "洲际", 4),    budint("9", "Pod Inn", "布丁", 1),    jiuJiu("10", "jiujiuliansuo", "99连锁", 1),    piaoHome("11", "Piao Home Inn", "飘HOME", 1),    juzi("12", "Orange Hotels", "桔子酒店", 1),    yibai("13", "yibai", "易佰", 1),    weiyena("14","weiyena","维也纳",2),    huangguanjiari("15", "huangguanjiari", "皇冠假日", 4),    xidawu("16", "xidawu", "喜达屋", 3),    chengshiBJ("17", "chengshibianjie", "城市便捷", 1),    shagnKeYou("18", "shagnkeyou", "尚客优", 1),    jinjiang("19", "jinjiang", "锦江酒店", 3),    wendemu("20", "Hawthorn Suites", "温德姆", 4),    yibisi("21", "Ibis Hotels", "宜必思", 1),    wanhao("22", "JM Hoteles", "万豪", 4),    yijia365("23", "yijia365", "驿家365", 1),    shoulv("24", "shoulvjituan", "首旅建国", 3),    kaiyuan("25", "New Century Hotel", "开元大酒店", 4),    yagao("26", "yagao", "雅高", 3),    daisi("27", "daisi", "戴斯", 3),    jinling("28", "jinlingliansuo", "金陵", 4),    xianggelila("29", "Shangri-La City Hotels", "香格里拉", 4),    xierdun("30", "Hilton", "希尔顿", 4),
	 **/
	private $brand;
	
	/** 
	 * 商业区（圈）长度不超过20字
	 **/
	private $business;
	
	/** 
	 * 城市编码。参见：http://hotel.alitrip.com/area.htm，domestic为false时，输入对应国家的海外城市编码，可调用海外城市查询接口获取；（更新酒店时为可选）
	 **/
	private $city;
	
	/** 
	 * domestic为0时，固定China； domestic为1时，必须传定义的海外国家编码值。参见：http://hotel.alitrip.com/area.htm
	 **/
	private $country;
	
	/** 
	 * 逗号分隔的字符串 1visa；2万事达卡；3美国运通卡；4发现卡；5大来卡；6JCB卡；7银联卡
	 **/
	private $creditCardTypes;
	
	/** 
	 * 装修时间，格式为2015-01-01装修时间
	 **/
	private $decorateTime;
	
	/** 
	 * 酒店描述
	 **/
	private $description;
	
	/** 
	 * 区域（县级市）编码。参见：http://hotel.alitrip.com/area.htm
	 **/
	private $district;
	
	/** 
	 * 是否国内酒店。0:国内;1:国外。默认是国内
	 **/
	private $domestic;
	
	/** 
	 * 扩展信息的JSON。注：此字段的值需要ISV在接入前与淘宝沟通，且确认能解析
	 **/
	private $extend;
	
	/** 
	 * 楼层信息。
	 **/
	private $floors;
	
	/** 
	 * 酒店设施。json格式示例值：{"free Wi-Fi in all rooms":"true","massage":"true","meetingRoom":"true"}目前支持维护的设施枚举有：free Wi-Fi in all rooms 所有房间设有免费无线网络;meetingRoom 会议室;massage  按摩室;fitnessClub 健身房;bar 酒吧;cafe 咖啡厅;frontDeskSafe 前台贵重物品保险柜wifi 无线上网公共区域;casino 娱乐场/棋牌室;restaurant 餐厅;smoking area 吸烟区;Business Facilities 商务设施
	 **/
	private $hotelFacilities;
	
	/** 
	 * 酒店入住政策(针对国际酒店，儿童及加床信息)格式：{"children_age_from":"2","children_age_to":"3","children_stay_free":"True","infant_age":"1","min_guest_age":"4"}
	 **/
	private $hotelPolicies;
	
	/** 
	 * 纬度
	 **/
	private $latitude;
	
	/** 
	 * 经度
	 **/
	private $longitude;
	
	/** 
	 * 酒店名称
	 **/
	private $name;
	
	/** 
	 * 卖家酒店英文名称
	 **/
	private $nameE;
	
	/** 
	 * 开业时间，格式为2015-01-01
	 **/
	private $openingTime;
	
	/** 
	 * 扩展信息的JSON。 orbitTrack 业务字段是指从飞猪到酒店说经过平台名以及方式的一个数组，按顺序，从飞猪，再经过若干平台，最后到酒店， platform是指定当前平台名，ways 是指通过哪种方式到该平台 其中，飞猪到下一个平台里, ways 字段只能是【直连】、【人工】两个方式之一； 从最后一个平台到酒店的ways字段只能是【电话】、【传真】、【人工】、【系统】之一； 第一个 飞猪平台 和 最后具体酒店是至少得填的
	 **/
	private $orbitTrack;
	
	/** 
	 * 外部酒店ID, 这是卖家自己系统中的ID
	 **/
	private $outerId;
	
	/** 
	 * 酒店图片只支持远程图片，格式如下：[{"url":"http://123.jpg","ismain":"false","type":"大堂","attribute":"普通图"},{"url":"http://456.jpg","ismain":"true","type":"公共区域","attribute":"全景图"},{"url":"http://789.jpg","ismain":"false","type":"大堂","attribute":"普通图"}] 其中url是远程图片的访问地址（URL地址必须是合法的，否则会报错），main是是否为主图（主图只能有一个，如果有多个或者没有，则会报错）,attribute表示图片属性，取值范围只能是：[普通图, 平面图, 全景图] ,type表示图片类型，取值范围只能是：[周边, 外观, 商务中心, 健身房, 其他, 会议室, 餐厅, 浴室, 客房, 公共区域, 娱乐设施, 大堂, 泳池]，图片数量最多是能是10张。
	 **/
	private $pics;
	
	/** 
	 * 坐标类型，现在支持：G – GoogleB – 百度A – 高德M – MapbarL – 灵图
	 **/
	private $positionType;
	
	/** 
	 * 邮政编码。
	 **/
	private $postalCode;
	
	/** 
	 * 省份编码。选填，不填入的时候已city字段为准.参见：http://hotel.alitrip.com/area.htm，domestic为false时默认为0
	 **/
	private $province;
	
	/** 
	 * 房间的基础设施。json格式示例值：{"bathtub":"true","bathPub":"true"}目前支持维护的设施枚举有：bathtub 独立卫浴;bathPub 公共卫浴
	 **/
	private $roomFacilities;
	
	/** 
	 * 房间数 0~9999之内的数字
	 **/
	private $rooms;
	
	/** 
	 * 酒店基础服务。json格式示例值：{"receiveForeignGuests":"true","morningCall":"true","breakfast":"true"}目前支持维护的设施枚举有：receiveForeignGuests 接待外宾;morningCall 叫醒服务; breakfast  早餐服务; airportShuttle 接机服务; luggageClaim 行李寄存; rentCar 租车; HourRoomService24 24小时客房服务; airportTransfer 酒店/机场接送; dryCleaning 干洗; expressCheckInCheckOut 快速入住/退房登记; custodyServices 保管服务
	 **/
	private $service;
	
	/** 
	 * 该字段只有确定的时候，才允许填入。用于标示和淘宝酒店的匹配关系。目前尚未启动该字段。
	 **/
	private $shid;
	
	/** 
	 * 酒店档次，星级。取值范围为1,1.5,2,2.5,3,3.5,4,4.5,5
	 **/
	private $star;
	
	/** 
	 * 酒店电话。格式：国家代码（最长6位）#区号（最长4位）#电话（最长20位）。国家代码提示：中国大陆0086、香港00852、澳门00853、台湾00886
	 **/
	private $tel;
	
	/** 
	 * 酒店曾用名
	 **/
	private $usedName;
	
	/** 
	 * 对接系统商名称：可为空不要乱填，需要申请后使用
	 **/
	private $vendor;
	
	private $apiParas = array();
	
	public function setAddress($address)
	{
		$this->address = $address;
		$this->apiParas["address"] = $address;
	}

	public function getAddress()
	{
		return $this->address;
	}

	public function setBookingNotice($bookingNotice)
	{
		$this->bookingNotice = $bookingNotice;
		$this->apiParas["booking_notice"] = $bookingNotice;
	}

	public function getBookingNotice()
	{
		return $this->bookingNotice;
	}

	public function setBrand($brand)
	{
		$this->brand = $brand;
		$this->apiParas["brand"] = $brand;
	}

	public function getBrand()
	{
		return $this->brand;
	}

	public function setBusiness($business)
	{
		$this->business = $business;
		$this->apiParas["business"] = $business;
	}

	public function getBusiness()
	{
		return $this->business;
	}

	public function setCity($city)
	{
		$this->city = $city;
		$this->apiParas["city"] = $city;
	}

	public function getCity()
	{
		return $this->city;
	}

	public function setCountry($country)
	{
		$this->country = $country;
		$this->apiParas["country"] = $country;
	}

	public function getCountry()
	{
		return $this->country;
	}

	public function setCreditCardTypes($creditCardTypes)
	{
		$this->creditCardTypes = $creditCardTypes;
		$this->apiParas["credit_card_types"] = $creditCardTypes;
	}

	public function getCreditCardTypes()
	{
		return $this->creditCardTypes;
	}

	public function setDecorateTime($decorateTime)
	{
		$this->decorateTime = $decorateTime;
		$this->apiParas["decorate_time"] = $decorateTime;
	}

	public function getDecorateTime()
	{
		return $this->decorateTime;
	}

	public function setDescription($description)
	{
		$this->description = $description;
		$this->apiParas["description"] = $description;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function setDistrict($district)
	{
		$this->district = $district;
		$this->apiParas["district"] = $district;
	}

	public function getDistrict()
	{
		return $this->district;
	}

	public function setDomestic($domestic)
	{
		$this->domestic = $domestic;
		$this->apiParas["domestic"] = $domestic;
	}

	public function getDomestic()
	{
		return $this->domestic;
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

	public function setFloors($floors)
	{
		$this->floors = $floors;
		$this->apiParas["floors"] = $floors;
	}

	public function getFloors()
	{
		return $this->floors;
	}

	public function setHotelFacilities($hotelFacilities)
	{
		$this->hotelFacilities = $hotelFacilities;
		$this->apiParas["hotel_facilities"] = $hotelFacilities;
	}

	public function getHotelFacilities()
	{
		return $this->hotelFacilities;
	}

	public function setHotelPolicies($hotelPolicies)
	{
		$this->hotelPolicies = $hotelPolicies;
		$this->apiParas["hotel_policies"] = $hotelPolicies;
	}

	public function getHotelPolicies()
	{
		return $this->hotelPolicies;
	}

	public function setLatitude($latitude)
	{
		$this->latitude = $latitude;
		$this->apiParas["latitude"] = $latitude;
	}

	public function getLatitude()
	{
		return $this->latitude;
	}

	public function setLongitude($longitude)
	{
		$this->longitude = $longitude;
		$this->apiParas["longitude"] = $longitude;
	}

	public function getLongitude()
	{
		return $this->longitude;
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

	public function setOpeningTime($openingTime)
	{
		$this->openingTime = $openingTime;
		$this->apiParas["opening_time"] = $openingTime;
	}

	public function getOpeningTime()
	{
		return $this->openingTime;
	}

	public function setOrbitTrack($orbitTrack)
	{
		$this->orbitTrack = $orbitTrack;
		$this->apiParas["orbit_track"] = $orbitTrack;
	}

	public function getOrbitTrack()
	{
		return $this->orbitTrack;
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

	public function setPositionType($positionType)
	{
		$this->positionType = $positionType;
		$this->apiParas["position_type"] = $positionType;
	}

	public function getPositionType()
	{
		return $this->positionType;
	}

	public function setPostalCode($postalCode)
	{
		$this->postalCode = $postalCode;
		$this->apiParas["postal_code"] = $postalCode;
	}

	public function getPostalCode()
	{
		return $this->postalCode;
	}

	public function setProvince($province)
	{
		$this->province = $province;
		$this->apiParas["province"] = $province;
	}

	public function getProvince()
	{
		return $this->province;
	}

	public function setRoomFacilities($roomFacilities)
	{
		$this->roomFacilities = $roomFacilities;
		$this->apiParas["room_facilities"] = $roomFacilities;
	}

	public function getRoomFacilities()
	{
		return $this->roomFacilities;
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

	public function setService($service)
	{
		$this->service = $service;
		$this->apiParas["service"] = $service;
	}

	public function getService()
	{
		return $this->service;
	}

	public function setShid($shid)
	{
		$this->shid = $shid;
		$this->apiParas["shid"] = $shid;
	}

	public function getShid()
	{
		return $this->shid;
	}

	public function setStar($star)
	{
		$this->star = $star;
		$this->apiParas["star"] = $star;
	}

	public function getStar()
	{
		return $this->star;
	}

	public function setTel($tel)
	{
		$this->tel = $tel;
		$this->apiParas["tel"] = $tel;
	}

	public function getTel()
	{
		return $this->tel;
	}

	public function setUsedName($usedName)
	{
		$this->usedName = $usedName;
		$this->apiParas["used_name"] = $usedName;
	}

	public function getUsedName()
	{
		return $this->usedName;
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
		return "taobao.xhotel.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->address,"address");
		RequestCheckUtil::checkMaxLength($this->address,120,"address");
		RequestCheckUtil::checkMaxLength($this->bookingNotice,2000,"bookingNotice");
		RequestCheckUtil::checkMaxLength($this->business,20,"business");
		RequestCheckUtil::checkNotNull($this->city,"city");
		RequestCheckUtil::checkMaxLength($this->country,30,"country");
		RequestCheckUtil::checkMaxLength($this->extend,500,"extend");
		RequestCheckUtil::checkMaxLength($this->floors,32,"floors");
		RequestCheckUtil::checkMaxLength($this->latitude,10,"latitude");
		RequestCheckUtil::checkMaxLength($this->longitude,10,"longitude");
		RequestCheckUtil::checkNotNull($this->name,"name");
		RequestCheckUtil::checkMaxLength($this->name,128,"name");
		RequestCheckUtil::checkNotNull($this->outerId,"outerId");
		RequestCheckUtil::checkMaxLength($this->outerId,64,"outerId");
		RequestCheckUtil::checkMaxLength($this->postalCode,20,"postalCode");
		RequestCheckUtil::checkMaxValue($this->rooms,9999,"rooms");
		RequestCheckUtil::checkMinValue($this->rooms,1,"rooms");
		RequestCheckUtil::checkMaxLength($this->star,3,"star");
		RequestCheckUtil::checkNotNull($this->tel,"tel");
		RequestCheckUtil::checkMaxLength($this->tel,30,"tel");
		RequestCheckUtil::checkMaxLength($this->usedName,60,"usedName");
		RequestCheckUtil::checkMaxLength($this->vendor,50,"vendor");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
