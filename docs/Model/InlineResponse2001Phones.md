# InlineResponse2001Phones

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique Identifier of the SIP Phone. | [optional] 
**user_email** | **string** | The email address of the user to associate with the SIP Phone. Can add [.win, .mac, .android, .ipad, .iphone, .linux, .pc, .mobile, .pad] at the end of the email (ex. user@test.com.mac) to add accounts for different platforms for the same user. | [optional] 
**domain** | **string** | The name or IP address of your provider’s SIP domain. (example: CDC.WEB). | [optional] 
**register_server** | **string** | IP address of the server that accepts REGISTER requests. Note that if you are using the UDP transport protocol, the default port is 5060. If you are using UDP with a different port number, that port number must be included with the IP address. | [optional] 
**transport_protocol** | **string** | Protocols supported by the SIP provider.&lt;br&gt; The value must be either &#x60;UDP&#x60;, &#x60;TCP&#x60;, &#x60;TLS&#x60;, &#x60;AUTO&#x60;. | [optional] 
**proxy_server** | **string** | IP address of the proxy server for SIP requests. Note that if you are using the UDP transport protocol, the default port is 5060. If you are using UDP with a different port number, that port number must be included with the IP address. If you are not using a proxy server, this value can be the same as the Register Server, or empty. | [optional] 
**register_server2** | **string** | IP address of the server that accepts REGISTER requests. Note that if you are using the UDP transport protocol, the default port is 5060. If you are using UDP with a different port number, that port number must be included with the IP address. | [optional] 
**transport_protocol2** | **string** | Protocols supported by the SIP provider.&lt;br&gt; The value must be either &#x60;UDP&#x60;, &#x60;TCP&#x60;, &#x60;TLS&#x60;, &#x60;AUTO&#x60;. | [optional] 
**proxy_server2** | **string** | IP address of the proxy server for SIP requests. Note that if you are using the UDP transport protocol, the default port is 5060. If you are using UDP with a different port number, that port number must be included with the IP address. If you are not using a proxy server, this value can be the same as the Register Server, or empty. | [optional] 
**register_server3** | **string** | IP address of the server that accepts REGISTER requests. Note that if you are using the UDP transport protocol, the default port is 5060. If you are using UDP with a different port number, that port number must be included with the IP address. | [optional] 
**transport_protocol3** | **string** | Protocols supported by the SIP provider.&lt;br&gt; The value must be either &#x60;UDP&#x60;, &#x60;TCP&#x60;, &#x60;TLS&#x60;, &#x60;AUTO&#x60;. | [optional] 
**proxy_server3** | **string** | IP address of the proxy server for SIP requests. Note that if you are using the UDP transport protocol, the default port is 5060. If you are using UDP with a different port number, that port number must be included with the IP address. If you are not using a proxy server, this value can be the same as the Register Server, or empty. | [optional] 
**registration_expire_time** | **int** | The number of minutes after which the SIP registration of the Zoom client user will expire, and the client will auto register to the SIP server. | [optional] 
**user_name** | **string** | The phone number associated with the user in the SIP account. | [optional] 
**password** | **string** | The password generated for the user in the SIP account. | [optional] 
**authorization_name** | **string** | Authorization name of the user  registered for SIP Phone. | [optional] 
**voice_mail** | **string** | The number to dial for checking voicemail. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

