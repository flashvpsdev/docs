# Cookbook

<!-- TOC -->

- [Khởi động lại PHP-FPM](#restarting-php-fpm)
- [Đặt lại mật khẩu sudo](#đặt-lại-mật-khẩu-sudo)
- [Nâng cấp Node.js](#nâng-cấp-nodejs)
- [Đã vượt quá giới hạn Droplet DigitalOcean](#đã-vượt-quá-giới-hạn-droplet-digitalocean)
- [Máy chủ bị ngắt kết nối](#máy-chủ-bị-ngắt-kết-nối)

<!-- /TOC -->

<a id="markdown-restarting-php-fpm" name="restarting-php-fpm"></a>

## Khởi động lại PHP-FPM
Khi cấu hình máy chủ của bạn, FlashVPS cấu hình FPM để nó có thể được khởi động lại mà không cần sử dụng mật khẩu 'sudo' của máy chủ. Để làm như vậy, bạn nên sử dụng lệnh sau. Tất nhiên, bạn nên điều chỉnh phiên bản PHP để phù hợp với phiên bản PHP được cài đặt trên máy của bạn:

`echo "" | sudo -S service php8.1-fpm reload`

<a id="markdown-đặt-lại-mật-khẩu-sudo" name="đặt-lại-mật-khẩu-sudo"></a>

## Đặt lại mật khẩu sudo
FlashVPS không lưu trữ mật khẩu sudo của máy chủ của bạn và do đó không thể đặt lại mật khẩu đó cho bạn. Để đặt lại mật khẩu, bạn cần liên hệ với nhà cung cấp máy chủ của mình hoặc sử dụng các phương tiện đặt lại mật khẩu sudo trên trang tổng quan của nhà cung cấp máy chủ.

Khi mật khẩu đã được đặt lại, FlashVPS sẽ không thể SSH vào máy của bạn dưới dạng `root`. Điều này ngăn bạn chỉnh sửa các tệp cấu hình PHP / Nginx từ giao diện người dùng FlashVPS và cũng sẽ ngăn các chức năng FlashVPS khác nhau hoạt động bình thường. Trước khi FlashVPS có thể truy cập vào máy chủ của bạn, bạn sẽ cần phải SSH vào máy chủ FlashVPS của mình dưới tên `flashvps` và đặt lại mật khẩu người dùng `root`:

<a id="markdown-nâng-cấp-nodejs" name="nâng-cấp-nodejs"></a>

## Nâng cấp Node.js
FlashVPS cho phép bạn chọn phiên cài NodeJS khi một cài máy chủ mới. Tuy nhiên, khi máy chủ của bạn cũ đi, bạn có thể muốn nâng cấp phiên bản Node.js:

`sudo apt-get install --only-upgrade nodejs`

<a id="markdown-đã-vượt-quá-giới-hạn-droplet-digitalocean" name="đã-vượt-quá-giới-hạn-droplet-digitalocean"></a>

## Đã vượt quá giới hạn Droplet DigitalOcean
Lỗi này được trả lại bởi [DigitalOcean](https://digitalocean.com/) khi bạn đã đạt đến giới hạn về số lượng droplet bạn có thể tạo. Bạn có thể yêu cầu DigitalOcean tăng giới hạn droplet của mình bằng cách liên hệ với bộ phận hỗ trợ của họ. Khi họ đã tăng giới hạn của bạn, bạn có thể [tạo máy chủ](/docs/vi/1.0/connect-vultr-server) trong FlashVPS

<a id="markdown-máy-chủ-bị-ngắt-kết-nối" name="máy-chủ-bị-ngắt-kết-nối"></a>

## Máy chủ bị ngắt kết nối
Có một số lý do khiến máy chủ của bạn có thể có trạng thái 'ngắt kết nối'. Chúng tôi khuyến khích bạn kiểm tra các giải pháp phổ biến này trước khi liên hệ với bộ phận hỗ trợ:
- Xác minh rằng máy chủ được bật thông qua bảng điều khiển của nhà cung cấp máy chủ của bạn. Nếu máy chủ bị tắt nguồn, bạn nên khởi động lại nó bằng cách sử dụng bảng điều khiển của nhà cung cấp của bạn.
- Xác minh rằng khóa công khai do FlashVPS tạo cho máy chủ được thêm vào trong các tệp `/root/.ssh/authorized_keys` và `/home/flashvps/.ssh/authorized_keys`. Khóa này có sẵn thông qua tab 'Meta' của bảng quản lý FlashVPS trên máy chủ của bạn.
- Nếu máy chủ của bạn nằm sau tường lửa (behind a firewall), hãy đảm bảo rằng bạn đã [cho phép các địa chỉ IP của FlashVPS truy cập vào máy chủ](/docs/vi/1.0/overview#địa-chỉ-ip-flashvps).
- Nếu bạn đã xóa Cổng 22 khỏi quy tắc tường lửa của máy chủ, bạn sẽ cần liên hệ với nhà cung cấp máy chủ của mình và yêu cầu họ khôi phục quy tắc. Xóa quy tắc này ngăn FlashVPS truy cập máy chủ của bạn qua SSH.
- Xóa bất kỳ khóa cá nhân nào hoặc các dòng khác không chứa khóa công khai hợp lệ khỏi các tệp `/root/.ssh/authorized_keys` và `/home/FlashVPS/.ssh/authorized_keys`.

Nếu bạn vẫn gặp sự cố kết nối, bạn cũng nên xác minh rằng các quyền(permissions) và quyền sở hữu(ownership) của các thư mục và tệp sau là chính xác:
```
# Fixes the "root" user (run as root)

chown root:root /root
chown -R root:root /root/.ssh
chmod 700 /root/.ssh
chmod 600 /root/.ssh/authorized_keys

# Fixes the "flashvps" user

chown flashvps:flashvps /home/flashvps
chown -R flashvps:flashvps /home/flashvps/.ssh
chmod 700 /home/flashvps/.ssh
chmod 600 /home/flashvps/.ssh/authorized_keys
```

Nếu sau khi thử tất cả các giải pháp trên, FlashVPS vẫn không thể kết nối với máy chủ của bạn nhưng bạn vẫn có thể SSH vào máy chủ, vui lòng chạy lệnh sau với tư cách là người dùng root và chia sẻ kết quả với bộ phận hỗ trợ của FlashVPS:

`grep 'sshd' /var/log/auth.log | tail -n 10`

> **! FlashVPS Management**  
> Nếu FlashVPS không thể kết nối với máy chủ của bạn, bạn sẽ không thể quản lý nó thông qua bảng điều khiển FlashVPS cho đến khi kết nối được khôi phục.
