<?php
/**
 * TOP API: taobao.xhotel.memberright.update request
 * 
 * @author auto create
 * @since 1.0, 2016.07.05
 */
class XhotelMemberrightUpdateRequest
{
	/** 
	 * 表示用户是否有对应的权益，取值范围true、false
	 **/
	private $hasRight;
	
	/** 
	 * 会员权益类型，1表示首住权益
	 **/
	private $rightType;
	
	/** 
	 * 淘宝用户id
	 **/
	private $taobaoUserId;
	
	private $apiParas = array();
	
	public function setHasRight($hasRight)
	{
		$this->hasRight = $hasRight;
		$this->apiParas["has_right"] = $hasRight;
	}

	public function getHasRight()
	{
		return $this->hasRight;
	}

	public function setRightType($rightType)
	{
		$this->rightType = $rightType;
		$this->apiParas["right_type"] = $rightType;
	}

	public function getRightType()
	{
		return $this->rightType;
	}

	public function setTaobaoUserId($taobaoUserId)
	{
		$this->taobaoUserId = $taobaoUserId;
		$this->apiParas["taobao_user_id"] = $taobaoUserId;
	}

	public function getTaobaoUserId()
	{
		return $this->taobaoUserId;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.memberright.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->hasRight,"hasRight");
		RequestCheckUtil::checkNotNull($this->rightType,"rightType");
		RequestCheckUtil::checkNotNull($this->taobaoUserId,"taobaoUserId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
