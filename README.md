# agent

> 判断访问信息

## 安装
> composer require jliu/agent


##使用

1. 得到agent完整类型信息

```php
\jliu\agent\Agent::getDeviceInfo();
```

2. 浏览器类型

```php
\jliu\agent\Agent::browserType();
```

3. 是移动设备访问

```php
\jliu\agent\Agent::isMobile();
```


4. 检查是否在微信中打开

```php
\jliu\agent\Agent::isMicroMessage();
```