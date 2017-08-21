<?php namespace Wlkj\JubiApi;

class JubiApi
{
	public $key	  		= 'wxbcfaa471bb9a3957';
	public $timeout   	= 5;
					
	// ==================================================
	// 调用CURL发起GET请求	
	// 参数：$url  - 请求链接URL
	public function curl_get($url)
	{		
		$ch = curl_init();	
		curl_setopt_array($ch,[
					CURLOPT_URL 			=> $url,					
					CURLOPT_TIMEOUT 		=> $this->timeout,
					CURLOPT_RETURNTRANSFER	=> true,
					CURLOPT_SSL_VERIFYPEER  => false						
		]);	
		if( !$result = curl_exec($ch)){
			trigger_error(curl_error($ch));
		}
						
		curl_close($ch);
		return $result;		
	}  	
	
	// ===================================================
	// 获取微信公众号 access_token		
	public function getAccess()
	{		
		return null;
	}
				
}
	
