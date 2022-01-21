# PHP

<!-- TOC -->

- [Tổng quan](#tổng-quan)
- [Multiple PHP Versions](#multiple-php-versions)
- [Cài đặt](#cài-đặt)
- [Gỡ cài đặt](#gỡ-cài-đặt)
- [Chuyển đổi PHP Mặc định](#chuyển-đổi-php-mặc-định)
- [Một số cài đặt cấu hình PHP phổ biến](#một-số-cài-đặt-cấu-hình-php-phổ-biến)
  - [Kích thước tải lên tệp tối đa](#kích-thước-tải-lên-tệp-tối-đa)
  - [Thời gian thực thi tối đa](#thời-gian-thưc-thi-tối-đa)
  - [OPcache](#opcache)
<!-- /TOC -->

<a id="markdown-tổng-quan" name="tổng-quan"></a>

## Tổng quan
FlashVPS giúp bạn dễ dàng chuyển đổi phiên bản mặc định cho máy chủ, thiết lập kích thước tải lên tệp tối đa, thời gian thực thi tối đa và bất/tắt OPCache.
> **! Cài đặt PHP thủ công**  
> Nếu bạn chọn cài đặt thủ công các phiên bản PHP trên máy chủ của mình, FlashVPS sẽ không biết về các cài đặt PHP đó. FlashVPS chỉ biết về các cài đặt PHP được quản lý thông qua bảng điều khiển FlashVPS.

<a id="markdown-multiple-php-versions" name="multiple-php-versions"></a>

## Multiple PHP Versions 
Khi tạo một máy chủ, bạn phải quyết định phiên bản PHP nào bạn muốn cài đặt làm phiên bản `default`. PHP CLI trên máy chủ của bạn sẽ trỏ đến phiên bản đã cài đặt được chọn tại thời điểm tạo.

Khi máy chủ đã được tạo, FlashVPS giúp bạn dễ dàng cài đặt các phiên bản bổ sung cùng với phiên bản mặc định. Trong tài liệu sau, chúng tôi sẽ thảo luận về cách quản lý các phiên bản PHP bổ sung này.

<a id="markdown-cài-đặt" name="cài-đặt"></a>
## Cài đặt

Bạn có thể cài đặt các phiên bản PHP bổ sung thông qua tab [**Ứng dụng**](/docs/vi/1.0/applications) trên bảng điều khiển quản lý của máy chủ. Sau khi một phiên bản PHP bổ sung đã được cài đặt, bạn có thể chọn nó khi tạo một trang web hoặc khi chuyển đổi phiên bản PHP của một trang web.

Khi bạn cài đặt một phiên bản PHP mới vào máy chủ của mình, FlashVPS sẽ tạo và thiết lập cấu hình quy trình PHP-FPM cho phiên bản đó. Điều này có nghĩa là máy chủ của bạn sẽ chạy nhiều phiên bản PHP cùng một lúc.


<a id="markdown-gỡ-cài-đặt" name="gỡ-cài-đặt"></a>

## Gỡ cài đặt
Bạn có thể gỡ cài đặt các phiên bản PHP thông qua tab [**Ứng dụng**](/docs/vi/1.0/applications) trên bảng điều khiển quản lý của máy chủ. Bạn có thể chọn gỡ cài đặt phiên bản PHP miễn là:
- Có các phiên bản khác được cài đặt.
- Phiên bản bạn muốn gỡ cài đặt không phải là phiên bản mặc định của máy chủ cho các trang web mới.
- Phiên bản bạn muốn gỡ cài đặt không phải là phiên bản mặc định của máy chủ trên CLI.
- Phiên bản bạn muốn gỡ cài đặt không được sử dụng bởi bất kỳ trang web nào.

<a id="markdown-chuyển-đổi-php-mặc-định" name="chuyển-đổi-php-mặc-định"></a>

## Chuyển đổi PHP Mặc định
Phiên bản PHP 'mặc định' là phiên bản PHP sẽ được sử dụng theo mặc định khi tạo một trang web mới trên máy chủ.
Các bước chuyển đổi:
1. Tại bảng điều khiển quản lý máy chủ > Chọn `Phiên bản mặc định PHP`
![](/vendor/docs/images/php-default-server-dashboard.png)
2. Chọn phiên bản PHP muốn chuyển
![](/vendor/docs/images/php-default-version.png)
3. Chọn `Cập nhật`

Khi chọn một phiên bản PHP mới làm phiên bản 'mặc định' cho máy chủ của bạn, các phiên bản PHP được các trang web hiện có sử dụng sẽ không được cập nhật.

<a id="markdown-một-số-cài-đặt-cấu-hình-php-phổ-biến" name="một-số-cài-đặt-cấu-hình-php-phổ-biến"></a>

## Một số cài đặt cấu hình PHP phổ biến
> **! Configuration Settings**  
> Thay đổi các cài đặt sau sẽ áp dụng các thay đổi cho tất cả các phiên bản PHP được cài đặt trên máy chủ.

<a id="markdown-kích-thước-tải-lên-tệp-tối-đa" name="kích-thước-tải-lên-tệp-tối-đa"></a>

### Kích thước tải lên tệp tối đa
Bạn có thể thiết lập cấu hình kích thước tải lên tệp tối đa tại bảng điều khiển quản lý máy chủ. Giá trị được cung cấp tính theo đơn vị megabyte. Để tham khảo, `1024MB` là `1GB`.
![](/vendor/docs/images/php-upload-max-file-size-server-dashboard.png)


<a id="markdown-thời-gian-thưc-thi-tối-đa" name="thời-gian-thưc-thi-tối-đa"></a>

### Thời gian thực thi tối đa
Bạn có thể định cấu hình thời gian thực thi tối đa tại bảng điều khiển quản lý máy chủ. Giá trị được cung cấp tính theo theo đơn vị `giây`.
![](/vendor/docs/images/php-max-execution-time-server-dashboard.png)

<a id="markdown-opcache" name="opcache"></a>

### OPcache
Việc tối ưu hóa OPcache PHP cho sản xuất(production) sẽ cấu hình OPcache để lưu trữ mã PHP đã biên dịch của bạn trong bộ nhớ để cải thiện đáng kể hiệu suất. Nếu bạn chọn tối ưu hóa OPcache cho sản xuất(production), bạn nên xác minh rằng tập lệnh triển khai của bạn [**khởi động lại dịch vụ PHP-FPM**](/docs/vi/1.0/cookbook#restarting-php-fpm) vào cuối mỗi lần triển khai.

Bật PHPOpcache tại bảng điều khiển quản lý máy chủ
![](/vendor/docs/images/php-opcache-server-dashboard.png)

