# Khóa SSH

---

<!-- TOC -->

- [Không thể truy cập vào máy chủ bằng mật khẩu](#không-thể-truy-cập-vào-máy-chủ-bằng-mật-khẩu)
- [SSH Key là gì?](#ssh-key-là-gì)
- [Cách tạo SSH Key](#cách-tạo-ssh-key)
  - [FlashVPS hỗ trợ tạo SSH Key tự động](#flashvps-hỗ-trợ-tạo-ssh-key-tự-động)
  - [Tạo SSH Key bằng PuTTY-Gen](#tạo-ssh-key-bằng-putty-gen)
- [Thêm SSH Key vào máy chủ](#thêm-ssh-key-vào-máy-chủ)

<!-- /TOC -->

## Không thể truy cập vào máy chủ bằng mật khẩu

Mặc định mỗi VPS bạn sẽ đăng nhập vào bằng username **root** và **mật khẩu root** mà nhà cung cấp đã gửi cho bạn lúc thuê VPS, tuy nhiên việc sử dụng mật khẩu luôn có 2 nguy cơ lớn là:

- Bạn sẽ mất hoàn toàn nếu lộ mật khẩu.
- Các attacker có thể sử dụng Brute Force Attack để dò tìm mật khẩu.

Do đó, để xác thực các kết nối từ bên ngoài vào VPS an toàn hơn, xác thực mật khẩu qua SSH bị tắt theo mặc định trên tất cả các máy chủ kết nối với FlashVPS và không được bật lại.

## SSH Key là gì?

SSH Key là một phương thức xác thực đăng nhập với máy chủ thông qua truy cập SSH bằng việc đối chiếu giữa một cặp keys, bao gồm một key cá nhân (private key) và key công khai (public key). Private key và Public key có mối liên hệ chặt chẽ với nhau nhằm mục đích nhận diện lẫn nhau.

SSH Key thường được dùng để **THAY THẾ CHO MẬT KHẨU** bằng cách xác minh quyền truy cập. Bạn có thể hiểu đơn giản, cách thức đăng nhập này theo dạng hỏi và trả lời, trong đó một bên trình bày câu hỏi và bên khác phải cung cấp một câu trả lời hợp lệ để được chứng thực.

## Cách tạo SSH Key

### FlashVPS hỗ trợ tạo SSH Key tự động

1. Đầu tiên bạn truy cập vào trang quản lý SSH Keys https://flashvps.dev/user/ssh-keys
2. Nhấn nút tạo khóa SSH mới
3. Một popup hiện ra, bạn nhấn vào "Tạo cho tôi 1 khóa SSH"
   ![](/vendor/docs/images/ssh-key01.png)
4. Bạn tiến hành tải 2 file OpenSSH Key và PuTTY Key về máy tính của mình.
5. Nhấn nút "Tạo khóa SSH mới" để hoàn tất.

### Tạo SSH Key bằng PuTTY-Gen

1. Cài đặt phần mềm PuTTY tại https://www.putty.org/
2. Nhấn nút **Generate** và **rê chuột vòng vòng màn hình** cho đến khi nó tạo xong.
   ![](/vendor/docs/images/puttygen-generate.jpg)
3. Sau khi hoàn tất tạo SSH Key, bạn hãy lưu Private Key lại bằng cách ấn vào nút "Save Private Key" và hãy bảo quản cẩn thận nhé. Có thể đặt mật khẩu cho Private Key để tăng thêm bảo mật bằng cách nhập vào ô "Key passphare" và "Confirm passphare" trước khi ấn nút "Save Private Key"
   ![](/vendor/docs/images/puttygen-aftergenerator.jpg)
   Public Key là đoạn **ssh-rsa AAAA...** thì bạn hãy dùng nó để nhập vào FlashVPS nhé!

## Thêm SSH Key vào máy chủ

Trước khi kết nối máy chủ với FlashVPS, bạn nên nhập SSH Key ở trang [SSH Keys](https://flashvps.dev/user/ssh-keyshttps:/) như vậy mỗi khi kết nối một máy chủ mới, các SSH Key đã nhập sẽ được tự động thêm vào máy chủ mới mà không cần phải làm gì cả.

Để thêm thủ công SSH Key vào máy chủ, bạn hãy vào panel > Chọn máy chủ > SSH Key và thêm SSH Key giống như các bước ở trên.
