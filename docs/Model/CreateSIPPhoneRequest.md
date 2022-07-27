# # CreateSIPPhoneRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**authorization_name** | **string** | Authorization name of the user registered for SIP Phone. |
**domain** | **string** | The name or IP address of your provider&#39;s SIP domain. (example: CDC.WEB). |
**password** | **string** | The password generated for the user in the SIP account. |
**proxy_server** | **string** | IP address of the proxy server for SIP requests. Note that if you are using the UDP transport protocol, the default port is 5060. If you are using UDP with a different port number, that port number must be included with the IP address. If you are not using a proxy server, this value can be the same as the Register Server. |
**proxy_server2** | **string** | IP address of the proxy server for SIP requests. Note that if you are using the UDP transport protocol, the default port is 5060. If you are using UDP with a different port number, that port number must be included with the IP address. If you are not using a proxy server, this value can be the same as the Register Server, or empty. | [optional]
**proxy_server3** | **string** | IP address of the proxy server for SIP requests. Note that if you are using the UDP transport protocol, the default port is 5060. If you are using UDP with a different port number, that port number must be included with the IP address. If you are not using a proxy server, this value can be the same as the Register Server, or empty. | [optional]
**register_server** | **string** | IP address of the server that accepts REGISTER requests. Note that if you are using the UDP transport protocol, the default port is 5060. If you are using UDP with a different port number, that port number must be included with the IP address. |
**register_server2** | **string** | IP address of the server that accepts REGISTER requests. Note that if you are using the UDP transport protocol, the default port is 5060. If you are using UDP with a different port number, that port number must be included with the IP address. | [optional]
**register_server3** | **string** | IP address of the server that accepts REGISTER requests. Note that if you are using the UDP transport protocol, the default port is 5060. If you are using UDP with a different port number, that port number must be included with the IP address. | [optional]
**registration_expire_time** | **int** | The number of minutes after which the SIP registration of the Zoom client user will expire, and the client will auto register to the SIP server. | [optional] [default to 60]
**transport_protocol** | **string** | Protocols supported by the SIP provider.&lt;br&gt; The value must be either &#x60;UDP&#x60;, &#x60;TCP&#x60;, &#x60;TLS&#x60;, &#x60;AUTO&#x60;. | [optional]
**transport_protocol2** | **string** | Protocols supported by the SIP provider.&lt;br&gt; The value must be either &#x60;UDP&#x60;, &#x60;TCP&#x60;, &#x60;TLS&#x60;, &#x60;AUTO&#x60;. | [optional]
**transport_protocol3** | **string** | Protocols supported by the SIP provider.&lt;br&gt; The value must be either &#x60;UDP&#x60;, &#x60;TCP&#x60;, &#x60;TLS&#x60;, &#x60;AUTO&#x60;. | [optional]
**user_email** | **string** | The email address of the user to associate with the SIP Phone. Can add &#x60;.win&#x60;, &#x60;.mac&#x60;, &#x60;.android&#x60;, &#x60;.ipad&#x60;, &#x60;.iphone&#x60;, &#x60;.linux&#x60;, &#x60;.pc&#x60;, &#x60;.mobile&#x60;, &#x60;.pad&#x60; at the end of the email (for example, &#x60;user@example.com.mac&#x60;) to add accounts for different platforms for the same user. |
**user_name** | **string** | The phone number associated with the user in the SIP account. |
**voice_mail** | **string** | The number to dial for checking voicemail. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
