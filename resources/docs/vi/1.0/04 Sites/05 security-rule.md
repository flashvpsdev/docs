# Quy tắc bảo mật (Security Rules)

<!-- TOC -->

- [Giới thiệu](#giới-thiệu)
- [Quy tắc bảo mật (Security Rule)](#quy-tắc-bảo-mật-security-rules)
  - [Tạo quy tắc bảo mật](#tạo-quy-tắc-bảo-mật)
  - [Sửa quy tắc bảo mật](#sửa-quy-tắc-bảo-mật)
- [Thông tin xác thực (Credentials)](#thông-tin-xác-thực)

<!-- /TOC -->

<a id="markdown-giới-thiệu" name="giới-thiệu"></a>

## Giới thiệu
FlashVPS có thể định cấu hình bảo vệ bằng mật khẩu trên các trang web của bạn bằng cách sử dụng [xác thực quyền truy cập cơ bản](https://en.wikipedia.org/wiki/Basic_access_authentication). Bạn có thể chọn bảo vệ toàn bộ trang web của mình hoặc một đường dẫn cụ thể.

<a id="markdown-quy-tắc-bảo-mật-security-rules" name="quy-tắc-bảo-mật-security-rules"></a>

## Quản lý quy tắc bảo mật

<a id="markdown-tạo-quy-tắc-bảo-mật" name="tạo-quy-tắc-bảo-mật"></a>

### Tạo quy tắc bảo mật
Bạn có thể tạo Quy tắc bảo mật mới thông qua tab `Cấu hình Nginx` trên bảng điều khiển quản lý trang web của mình trong FlashVPS. Bạn phải cung cấp tên quy tắc bảo mật mà một số trình duyệt sẽ hiển thị trong lời nhắc xác thực của chúng, cũng như ít nhất một bộ thông tin xác thực. Nếu bạn cần thêm nhiều thông tin đăng nhập, bạn có thể nhấp vào nút + để thêm tổ hợp tên người dùng và mật khẩu mới.

Các bước tạo quy tắc bảo mật:
1. Tại tab `Cấu hình Nginx` > Chọn `New Security Rule`
![](/vendor/docs/images/nginxconfig-tab.png)
2. Nhập thông tin về quy tắc chuyển hướng
- **Memo**: Tên gợi nhớ cho quy tắc
- **Cặp Tên tên người và Mật khẩu**: Thông tin xác thực người dùng và mật khẩu sẽ được yêu cầu nhập khi truy cập đến đường dẫn bảo mật
![](/vendor/docs/images/nginxconfig-new-security-rule.png)
3. Chọn `New Security Rule`

> **⚠ INFO: Cập nhật Nginx Config.**  
> Sau khi thêm, xóa, sửa Nginx Config bạn cần bấm nút "Cập nhật Nginx Configuration" để những thay đổi có hiệu lực.

<a id="markdown-sửa-quy-tắc-bảo-mật" name="sửa-quy-tắc-bảo-mật"></a>

### Sửa quy tắc bảo mật
Bạn có thể sửa Quy tắc bảo mật thông qua tab `Cấu hình Nginx` trên bảng điều khiển quản lý trang web của mình trong FlashVPS. Các bước sửa quy tắc bảo mật:
1. Tại tab `Cấu hình Nginx` > Chọn tab `Server`
![](/vendor/docs/images/nginxconfig-server-tab.png)
2. Tỉm đến quy tắc bảo mật muốn sửa > chọn **biểu tượng chiếc bút**

***Lưu ý**: Chỉ chỉnh sửa **đường dẫn** cần bảo mật và **Memo** (Tên gợi nhớ)
![](/vendor/docs/images/nginxconfig-edit-security-rule.png)
3. Chọn `Edit Nginx Configuration`

> **⚠ INFO: Cập nhật Nginx Config.**  
> Sau khi thêm, xóa, sửa Nginx Config bạn cần bấm nút "Cập nhật Nginx Configuration" để những thay đổi có hiệu lực.

<a id="markdown-thông-tin-xác-thực" name="thông-tin-xác-thực"></a>

### Thông tin xác thực (Credentials)
FlashVPS tạo một tệp .htpasswd duy nhất cho mỗi quy tắc bảo mật, nghĩa là mỗi đường dẫn được bảo mật có thể có một bộ thông tin xác thực riêng. Điều này cũng có nghĩa là bạn sẽ cần phải nhập lại cùng một thông tin đăng nhập khi bảo mật nhiều đường dẫn. Nếu cần sửa đổi thông tin xác thực, bạn có thể làm theo hướng dẫn [Sửa quy tắc bảo mật](#sửa-quy-tắc-bảo-mật).
