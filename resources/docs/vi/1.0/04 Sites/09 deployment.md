# Triển khai (Deployment)

<!-- TOC -->

- [Giới thiệu](#giới-thiệu)
  - [Môi trường](#môi-trường)
- [Tự động triển khai](#tự-động-triển-khai)
- [Tập lệnh triển khai](#tập-lệnh-triển-khai)
  - [PHP Versions](#php-versions)
  - [Các biến môi trường](#biến-môi-trường)
- [Triển khai từ CI](#triển-khai-từ-ci)
  - [Sử dụng Trình kích hoạt triển khai](#sử-dụng-trình-kích-hoạt-triển-khai)
- [Nhánh triển khai](#nhánh-triển-khai)
- [Git Remote](#git-remote)
<!-- /TOC -->

<a id="markdown-giới-thiệu" name="giới-thiệu"></a>

## Giới thiệu
Triển khai là quá trình trong đó mã của bạn được tải xuống từ nhà cung cấp kiểm soát nguồn vào máy chủ của bạn, sẵn sàng cho cả thế giới truy cập. FlashVPS hiển thị các lần triển khai dưới dạng bảng, bảng cho biết những gì (nhật ký) đã được triển khai, thời điểm triển khai và thời gian triển khai trong bao lâu.
![](/vendor/docs/images/site-deploy-history.png)

<a id="markdown-môi-trường" name="môi-trường"></a>

### Môi trường
Một số ứng dụng, chẳng hạn như những ứng dụng được tạo bằng Framework Laravel, có thể yêu cầu tệp `.env` để cấu hình cài đặt như cơ sở dữ liệu và bộ nhớ đệm. Bạn có thể tạo và chỉnh sửa tệp Môi trường của mình trong bảng điều khiển quản lý của trang FlashVPS.

Tại bảng điều khiển quản lý trang web > Chọn `.env`
![](/vendor/docs/images/site-profile-new.png)
![](/vendor/docs/images/site-profile-new-env.png)

> **! Automatic Environment Files**  
> Nếu dự án của bạn chứa tệp `.env.example`, FlashVPS sẽ tự động sao chép tệp này và thay thế một số cài đặt để phù hợp với cài đặt cơ sở dữ liệu của máy chủ của bạn. Tệp `.env.example` trống có thể dẫn đến tệp môi trường trống trong lần triển khai đầu tiên.

<a id="markdown-tự-động-triển-khai" name="tự-động-triển-khai"></a>

## Tự động triển khai
Tính năng 'Tự động triển khai' của FlashVPS cho phép bạn dễ dàng triển khai các dự án của mình khi bạn đẩy mã lên nhà cung cấp kiểm soát nguồn của mình. Khi bạn đẩy đến nhánh triển khai đã được cấu hình của mình, FlashVPS sẽ lấy mã mới nhất của bạn từ kiểm soát nguồn và chạy tập lệnh triển khai đã được cấu hình của ứng dụng của bạn.
Bạn có thể kích hoạt tính năng tự động triển khai của FlashVPS theo sau:

1. Tại bảng điều khiển quản lý trang web > Chọn `Tự động triển khai`
![](/vendor/docs/images/site-profile-new.png)
![](/vendor/docs/images/site-profile-new-auto-deploy.png)
2. Chọn `Bật tự động triển khai`

<a id="markdown-tập-lệnh-triển-khai" name="tập-lệnh-triển-khai"></a>

## Tập lệnh triển khai
Các lệnh được thực thi trên máy chủ của bạn khi dự án của bạn được triển khai được xác định bởi tập lệnh triển khai của trang web của bạn. Tất nhiên, tập lệnh triển khai này có thể được chỉnh sửa trực tiếp trong giao diện người dùng FlashVPS.

FlashVPS cung cấp 1 số biến để bạn có thể dễ dàng sử dụng
```
FLASHVPS_SITE_ROOT='/đường-dẫn/đến/yoursite.com'
FLASHVPS_CODE_BRANCH='siteBranch'
FLASHVPS_PHP='your-phpVersion'
FLASHVPS_PHP_FPM='your-phpVersion-fpm'
```

Theo mặc định, tập lệnh triển khai của trang web của bạn sẽ:

```
cd $FLASHVPS_SITE_ROOT
git pull origin $FLASHVPS_CODE_BRANCH
echo 'Restarting FPM...';
sudo -S service $FLASHVPS_PHP_FPM reload
```

> **! Zero Downtime Deployments**  
> Việc triển khai có thể khiến trang web của bạn không khả dụng trong giây lát. Nếu bạn muốn trang web không bị trì hoãn khi triển khai, hãy xem [Envoyer](https://envoyer.io/)

<a id="markdown-php-versions" name="php-versions"></a>

## PHP Versions
Nếu bạn đã cài đặt [nhiều phiên bản PHP](/docs/vi/1.0/php) trên máy chủ của mình, thì tập lệnh triển khai của bạn có thể cần được cập nhật để sử dụng đúng phiên bản PHP.

Theo mặc định, `php` sẽ luôn trỏ đến phiên bản PHP đang hoạt động được sử dụng trên CLI. Nếu bạn cần sử dụng một phiên bản PHP khác, bạn phải sử dụng `phpx.x` trong đó `x.x` tương ứng với phiên bản được sử dụng (ví dụ: `php8.1`) khi gọi các lệnh PHP.

Tập lệnh triển khai cho các trang web mới được tạo sử dụng biến môi trường $FLASHVPS_PHP. [Biến môi trường](#biến-môi-trường) này sẽ luôn chứa tên phiên bản PHP hiện tại được cấu hình cho trang web, vì vậy không cần thay đổi bổ sung nào đối với tập lệnh triển khai của bạn khi sử dụng biến này và khi chuyển đổi phiên bản PHP của trang web của bạn.

<a id="markdown-biến-môi-trường" name="biến-môi-trường"></a>

## Các biến môi trường
FlashVPS sẽ tự động đưa các biến môi trường sau vào tập lệnh triển khai của bạn trong thời gian chạy:

| Biến | Mô tả |
|-----------------|:-------------|
| `FLASHVPS_PHP_FPM` | Tên tiến trình PHP-FPM đang được FlashVPS sử dụng.  |
| `FLASHVPS_PHP`    | Phiên bản PHP đang được trang web hoặc máy chủ FlashVPS sử dụng.          |
| `FLASHVPS_CODE_BRANCH`      | Tên của nhánh sẽ được triển khai.         |
| `FLASHVPS_SITE_ROOT`      | Gốc của đường dẫn triển khai, ví dụ: `/home/flashvps/mysite.com`         |

<!-- > **! Environment Variables**  
> FLASHVPS sẽ đặt tiền tố cho bất kỳ biến nào được đưa vào bằng FLASHVPS_. Vui lòng không sử dụng 'namespace' này khi định nghĩa các biến môi trường của riêng bạn. -->


<a id="markdown-triển-khai-từ-ci" name="triển-khai-từ-ci"></a>

## Triển khai từ CI
Cho đến nay, chúng ta đã thảo luận về việc triển khai các trang FlashVPS từ giao diện người dùng FlashVPS hoặc bằng cách sử dụng tính năng 'Tự động triển khai' của FlashVPS. Tuy nhiên, bạn cũng có thể triển khai chúng từ nền tảng CI mà bạn chọn.

Để thực hiện triển khai FlashVPS từ nền tảng CI, bạn có thể sử dụng `Triển khai từ CI`.

1. Tại bảng điều khiển quản lý trang web > Chọn `URL Tự động kích hoạt triển khai`
![](/vendor/docs/images/site-profile-new.png)
![](/vendor/docs/images/site-profile-new-url-auto-deploy.png)
2. Chọn `Làm mới mã thông báo triển khai`

<a id="markdown-sử-dụng-trình-kích-hoạt-triển-khai" name="sử-dụng-trình-kích-hoạt-triển-khai"></a>

### Sử dụng Trình kích hoạt triển khai
Bạn có thể thực hiện triển khai bất kỳ lúc nào bằng cách hướng dẫn nền tảng CI của bạn thực hiện yêu cầu `GET` hoặc `POST` tới URL được hiển thị trong chi tiết trang web của bạn.

Mặc dù bạn có thể làm mới mã thông báo trang web bất kỳ lúc nào, nhưng bạn sẽ cần cập nhật bất kỳ dịch vụ nào đang sử dụng URL này sau khi làm mới mã thông báo.

<!-- Dữ liệu bổ sung có thể được chuyển tới tập lệnh triển khai của bạn thông qua các tham số truy vấn được chuyển đến URL kích hoạt triển khai. Ví dụ: khi chuyển các tham số truy vấn sau `?token=abc1234&env=staging`, FLASHVPS sẽ tự động đưa vào một biến FLASHVPS_VAR_ENV tùy chỉnh sẽ đánh giá thành 'staging'. -->

<a id="markdown-nhánh-triển-khai" name="nhánh-triển-khai"></a>

## Nhánh triển khai
Bạn có thể thay đổi nhánh được triển khai cho trang web của mình bằng cách cập nhật cài đặt nhánh triển khai. Khi bạn đã cập nhật nhánh triển khai, sau đó bạn sẽ cần phải chọn **Triển khai ngay** để kích hoạt triển khai mới cho nhánh triển khai mới theo cách thủ công.

Các bước để cập nhật `nhánh triển khai`: 
1. Tại bảng điều khiển quản lý trang web > Chọn `Cập nhật nhánh triển khai`
![](/vendor/docs/images/site-profile-new.png)
2. Nhập tên nhánh cần thay đổi
![](/vendor/docs/images/site-profile-new-update-branch.png)
3. Chọn `Cập nhật`

Các bước để kích hoạt `triển khai ngay` một cách thủ công:

1. Tại bảng điều khiển quản lý trang web > Chọn `Deploy`
![](/vendor/docs/images/site-deploy-tab.png)
2. Chọn `Triển khai ngay`
![](/vendor/docs/images/site-deploy-now.png)

<a id="markdown-git-remote" name="git-remote"></a>

## Git Remote
Cập nhật điều khiển Git Remote từ bảng điều khiển quản lý trang web sẽ cập nhật URL Git Remote trên máy chủ của bạn; tuy nhiên, trang web sẽ không bị xóa hoặc không khả dụng trong quá trình này. Git Remote được cập nhật phải chứa cùng một kho lưu trữ / lịch sử Git với kho lưu trữ hiện được cài đặt.

Bạn không nên sử dụng chức năng này để cài đặt một dự án hoàn toàn khác trên một trang web. Nếu bạn muốn cài đặt một dự án hoàn toàn khác, bạn nên gỡ cài đặt hoàn toàn kho lưu trữ hiện có bằng cách sử dụng nút 'Xóa code' trong Bảng điều khiển quản lý trang web.

Các bước để cập nhật `Git Remote`: 
1. Tại bảng điều khiển quản lý trang web > Chọn `Cập nhật Git Remote`
![](/vendor/docs/images/site-profile-new.png)
2. Thay đổi nhà cung cấp hoặc đường dẫn đầy đủ của kho lưu trữ.
![](/vendor/docs/images/site-profile-new-update-git-remote.png)
3. Chọn `Cập nhật`

Các bước để `Xóa code`:

1. Tại bảng điều khiển quản lý trang web > Chọn `Xóa code`
![](/vendor/docs/images/site-profile-new.png)
2. Chọn `Xóa code`
![](/vendor/docs/images/site-profile-new-remove-code.png)
