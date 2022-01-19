# Bộ nhớ đệm (Cache)

<!-- TOC -->

- [Giới thiệu](#overview)
- [Kết nối với Redis](#connect-with-redis)
- [Kết nối bên ngoài](#connect-outside)

<!-- /TOC -->

<a id="markdown-overview" name="cron-job-là-gì"></a>

## Giới thiệu
Sau khi cài [đặt một máy chủ](/docs/vi/1.0/connect-custom-server), Bạn có thể đi tới [Ứng dụng](/docs/vi/1.0/applications) để cài đặt Memcached và Redis. Theo mặc định, không có dịch vụ nào trong số này được hiển thị công khai và chỉ có thể được truy cập từ bên trong máy chủ của bạn.

<a id="markdown-connect-with-redis" name="connect-with-redis"></a>

## Kết nối với Redis
Redis và Memcache đều có sẵn thông qua 127.0.0.1 và các cổng mặc định của chúng.
```
MEMCACHED_HOST=127.0.0.1
MEMCACHED_PORT=11211

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379
```

<a id="markdown-connect-outside" name="connect-outside"></a>
## Kết nối bên ngoài
Tất cả các máy chủ FlashVPS đều yêu cầu xác thực khóa SSH và không thể truy cập bằng mật khẩu. Do đó, khi sử dụng ứng dụng khách GUI (GUI Client) hoặc ứng dụng khách bên ngoài khác để kết nối với phiên bản (instance) bộ đệm của bạn, bạn sẽ cần sử dụng xác thực SSH. Khi chọn khóa SSH để sử dụng trong quá trình xác thực, hãy **đảm bảo rằng bạn chọn khóa SSH riêng tư của mình**.
