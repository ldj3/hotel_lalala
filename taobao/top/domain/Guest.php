<?php

/**
 * 入住人信息, 最好将要参与联房结账的所有入住人都传入
 * @author auto create
 */
class Guest
{
	
	/** 
	 * 加密方式, 默认0: 不加密, 信息会通过淘宝开放平台加密传输, 不会泄密, 阿里旅行可以获取到证件信息;  1: SHA-1不可逆加密,  阿里旅行无法解析到具体信息, 只用于做信息匹配.加密逻辑示例: JAVA: MessageDigest sha = MessageDigest.getInstance(&quot;SHA-1&quot;);sha.update(data.getBytes(&quot;UTF-8&quot;)); return new BigInteger(1, sha.digest()).toString(16); .NET: byte[] strRes = (new SHA1CryptoServiceProvider()).ComputeHash(Encoding.UTF8.GetBytes(source)); var enText = new StringBuilder(); foreach (byte iByte in strRes) enText.AppendFormat(&quot;{0:x2}&quot;, iByte);return enText.ToString();
	 **/
	public $encrypt_type;
	
	/** 
	 * 证件号, 如果加密方式设置为1, 传入加密后的证件号
	 **/
	public $id_number;
	
	/** 
	 * 证件类型, 默认0:身份证; 1: 护照; 2:警官证
	 **/
	public $id_type;
	
	/** 
	 * 是否主入住人，该入住人会参与信用住结算扣款，多个入住人时必须有且仅有一个该字段设置为true
	 **/
	public $is_main;
	
	/** 
	 * 姓名, 如果加密方式设置为1, 传入加密后的姓名
	 **/
	public $name;
	
	/** 
	 * 手机号, 如果加密方式设置为1, 传入加密后的手机号
	 **/
	public $phone;	
}
?>