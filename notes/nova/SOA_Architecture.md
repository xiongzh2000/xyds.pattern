

# 有赞SOA架构
 ![Soa Arch][1] 
 
 + PHP：    PHP Framework、业务逻辑代码的统称；
 
 + Swoole：PHP扩展程序，和PHP代码运行在同一进程，向Haunt注册服务，并监听TCP端口，提供服务。Swoole和Tether代理之间保持TCP长连接，并将PHP的远程方法请求封装成Nova协议报文，发送到Tether
+ Tether ：独立进程运行，从Haunt获取远程服务地址，并维护各个远程方法到IP地址的映射关系和连接池，自带负载均衡算法，通过解析Nova协议头的方式获取远程方法名，向对应的远程服务器转发协议报文
+ Haunt ： 注册中心，提供服务注册和订阅功能，并自动踢除不可用的服务，通知服务订阅者
+ Nova ：  Java服务框架，提供服务注册与发现、负载均衡、RPC、监控统计等功能（详见 ）
               Nova同时也是有赞远程调用协议的名称，它基于Thrift协议之上，进行了封装和增强
+ Track：日志收集平台，由PHP\Java Framework\Swoole\Tether向统一向日志平台汇报
+ Hawk：监控平台，Swoole统计服务被调用的统计数据（服务端）、Tether统计服务的调用量（客户端）、Nova统计服务的调用和被调用量，向Hawk汇报
+ Lightning：性能分析平台，整合日志和监控数据，提供调用链跟踪，数据统计，数据分析工具
+ Admin Console：服务管理控制台，整合日志、监控、性能、注册中心，提供一站式管理控制平台


## 二、关键技术点
PHP服务启动流程
服务调用流程
服务路由
通讯协议-注册协议
通讯协议-RPC协议
通讯协议-兼容性 ( HTTP RESTful )
平滑上下线
  haunt提供Unregister接口
负载均衡
监控统计
流量控制 : 业务流量 / 网络流量
可用性保障

## SOA 占用端口列表
1、tether(proxy) for nova协议默认端口 8600
 2、tether lookup_http端口8601
3、tether lookup_tcp端口8602
4、tether pprof端口 8603
5、tether 监控采集默认端口 8604
 
6、haunt agent 默认端口 8687
 
7、swoole 默认端口 9501                －－－已下线
8、swoole 监控采集默认端口8181   －－－即将下线

==============================
 
[1]: https://img.yzcdn.cn/upload_files/2017/04/25/Fl7gHwQALYh-R-LPx9bRWfWnPurb.png
[2]: http://resizesafari.com/favicon.ico "Title" 
 
 
 