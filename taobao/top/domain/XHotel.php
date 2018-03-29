<?php

/**
 * 酒店2.0 酒店信息
 * @author auto create
 */
class XHotel
{
	
	/** 
	 * 酒店地址
	 **/
	public $address;
	
	/** 
	 * 标识该酒店所走的 结算流程，如果是null 默认是 国内结算流程，否则是其他的，比如：海外信用住结算流程
	 **/
	public $billing_process_type;
	
	/** 
	 * brand
	 **/
	public $brand;
	
	/** 
	 * 商圈信息
	 **/
	public $business;
	
	/** 
	 * 城市编码
	 **/
	public $city;
	
	/** 
	 * cityTag
	 **/
	public $city_tag;
	
	/** 
	 * 国家编码
	 **/
	public $country;
	
	/** 
	 * 创建时间
	 **/
	public $created_time;
	
	/** 
	 * 逗号分隔的字符串 1visa；2万事达卡；3美国运通卡；4发现卡；5大来卡；6JCB卡；7银联卡；110未知卡类型
	 **/
	public $credit_card_types;
	
	/** 
	 * 货币类型（编码,字母编码）,hid 维度支持的币种信息,目前只能 add 时添加，不支持 update时更新,,如果DB中是null ，则默认是人民币 CNY
	 **/
	public $currency_code_name;
	
	/** 
	 * 酒店数据状态：匹配成功；待匹配；待审核；审核失败；疑似错误；请注意：只有状态为&ldquo;匹配成功&rdquo;; 才是正常状态。其他状态都不会上架商品。
	 **/
	public $data_confirm_str;
	
	/** 
	 * decorateTime
	 **/
	public $decorate_time;
	
	/** 
	 * description
	 **/
	public $description;
	
	/** 
	 * 地区编码
	 **/
	public $district;
	
	/** 
	 * 0:国内;1:国外
	 **/
	public $domestic;
	
	/** 
	 * 未通过时的拒绝原因等。
	 **/
	public $error_info;
	
	/** 
	 * 扩展信息
	 **/
	public $extend;
	
	/** 
	 * fax
	 **/
	public $fax;
	
	/** 
	 * floors
	 **/
	public $floors;
	
	/** 
	 * gmtCreate
	 **/
	public $gmt_create;
	
	/** 
	 * gmtModified
	 **/
	public $gmt_modified;
	
	/** 
	 * 酒店ID
	 **/
	public $hid;
	
	/** 
	 * hotelFacilities
	 **/
	public $hotel_facilities;
	
	/** 
	 * 纬度
	 **/
	public $latitude;
	
	/** 
	 * 经度
	 **/
	public $longitude;
	
	/** 
	 * hotel匹配状态: 0：待系统匹配 1：已系统匹配，匹配成功，待卖家确认 2：已系统匹配，匹配失败，待人工匹配 3：已人工匹配，匹配成功，待卖家确认 4：已人工匹配，匹配失败 5：卖家已确认，确认&ldquo;YES&rdquo; 6：卖家已确认，确认&ldquo;NO&rdquo; 7:已系统匹配，但是匹配重复，待人工确认
	 **/
	public $match_status;
	
	/** 
	 * 修改时间
	 **/
	public $modified_time;
	
	/** 
	 * 酒店名称
	 **/
	public $name;
	
	/** 
	 * nameE
	 **/
	public $name_e;
	
	/** 
	 * openingTime
	 **/
	public $opening_time;
	
	/** 
	 * 卖家自己系统的id
	 **/
	public $outer_id;
	
	/** 
	 * pics
	 **/
	public $pics;
	
	/** 
	 * 坐标类型
	 **/
	public $position_type;
	
	/** 
	 * postalCode
	 **/
	public $postal_code;
	
	/** 
	 * 省份编码
	 **/
	public $province;
	
	/** 
	 * roomFacilities
	 **/
	public $room_facilities;
	
	/** 
	 * rooms
	 **/
	public $rooms;
	
	/** 
	 * 淘宝标准酒店信息
	 **/
	public $s_hotel;
	
	/** 
	 * service
	 **/
	public $service;
	
	/** 
	 * shid
	 **/
	public $shid;
	
	/** 
	 * star
	 **/
	public $star;
	
	/** 
	 * 酒店状态：0: 正常;-2:停售；-1：删除
	 **/
	public $status;
	
	/** 
	 * 酒店维度特殊标签含义, json: {"pure-direct-hotel":0,"direct-manual-order-hotel":1,"ebk-direct-hotel":0,"non-direct-hotel":1,"allow-dingding-business-travel-hotel":1,"willing-dingding-bussiness-travel-hotel":0,"calendar-room-package-hotel":1,"dijiajiajia-hotel":0,"ebk-number-of-confirm-room-hotel":1} , key含义: pure-direct-hotel 表示纯直连酒店, direct-manual-order-hotel 和 ebk-direct-hotel 和 non-direct-hotel 这三个key对应value都是0 . direct-manual-order-hotel 表示 人工承接失败订单的酒店标签。如果某个直连酒店打了该标签，那么直连下单失败以后，允许人工承接订单，由人工跟进 . ebk-direct-hotel 表示 ebk直连酒店标。如果某个酒店打了该标签，那么这个酒店下允许通过ebk发布直连rp . non-direct-hotel 表示 卖家非直连酒店标签。如果某个酒店打了该标签，那么该酒店下单不会走直连交易。 allow-dingding-business-travel-hotel 表示 允许进入阿里商旅渠道（钉钉）售卖信用住的单体酒店 willing-dingding-bussiness-travel-hotel 表示 已签协议愿意加入阿里商旅渠道售卖信用住的单体酒店 . calendar-room-package-hotel 表示 酒店可以参加日历房套餐活动包括创建，修改，删除活动信息（高星集团GMV项目） dijiajiajia-hotel 表示 底价加价酒店权限标。只有打了该标的酒店才允许维护底价加价规则和包房rp . ebk-number-of-confirm-room-hotel 表示ebk确认订单，是否要输入外部确认号
	 **/
	public $tag_json;
	
	/** 
	 * tags
	 **/
	public $tags;
	
	/** 
	 * 酒店电话
	 **/
	public $tel;
	
	/** 
	 * type
	 **/
	public $type;
	
	/** 
	 * 曾用名
	 **/
	public $used_name;
	
	/** 
	 * vendor
	 **/
	public $vendor;	
}
?>