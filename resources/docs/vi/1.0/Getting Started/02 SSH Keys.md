# SSH Keys

---

<!-- TOC -->

- [Không thể truy cập vào máy chủ bằng mật khẩu](#không-thể-truy-cập-vào-máy-chủ-bằng-mật-khẩu)
- [SSH Key là gì?](#ssh-key-là-gì)
- [Cách tạo SSH Key](#cách-tạo-ssh-key)
  - [FlashVPS hỗ trợ tạo SSH Key tự động](#flashvps-hỗ-trợ-tạo-ssh-key-tự-động)
  - [Tạo SSH Key bằng PuTTY-Gen](#tạo-ssh-key-bằng-putty-gen)

<!-- /TOC -->

<a id="markdown-không-thể-truy-cập-vào-máy-chủ-bằng-mật-khẩu" name="không-thể-truy-cập-vào-máy-chủ-bằng-mật-khẩu"></a>
## Không thể truy cập vào máy chủ bằng mật khẩu

Mặc định mỗi VPS bạn sẽ đăng nhập vào bằng username **root** và **mật khẩu root** mà nhà cung cấp đã gửi cho bạn lúc thuê VPS, tuy nhiên việc sử dụng mật khẩu luôn có 2 nguy cơ lớn là:

- Bạn sẽ mất hoàn toàn nếu lộ mật khẩu.
- Các attacker có thể sử dụng Brute Force Attack để dò tìm mật khẩu.

Do đó, để xác thực các kết nối từ bên ngoài vào VPS an toàn hơn, xác thực mật khẩu qua SSH bị tắt theo mặc định trên tất cả các máy chủ kết nối với FlashVPS và không được bật lại.

<a id="markdown-ssh-key-là-gì" name="ssh-key-là-gì"></a>
## SSH Key là gì?

SSH Key là một phương thức xác thực đăng nhập với máy chủ thông qua truy cập SSH bằng việc đối chiếu giữa một cặp keys, bao gồm một key cá nhân (private key) và key công khai (public key). Private key và Public key có mối liên hệ chặt chẽ với nhau nhằm mục đích nhận diện lẫn nhau.

SSH Key thường được dùng để **THAY THẾ CHO MẬT KHẨU** bằng cách xác minh quyền truy cập. Bạn có thể hiểu đơn giản, cách thức đăng nhập này theo dạng hỏi và trả lời, trong đó một bên trình bày câu hỏi và bên khác phải cung cấp một câu trả lời hợp lệ để được chứng thực.

<a id="markdown-cách-tạo-ssh-key" name="cách-tạo-ssh-key"></a>
## Cách tạo SSH Key

<a id="markdown-flashvps-hỗ-trợ-tạo-ssh-key-tự-động" name="flashvps-hỗ-trợ-tạo-ssh-key-tự-động"></a>
### FlashVPS hỗ trợ tạo SSH Key tự động

1. Đầu tiên bạn truy cập vào trang quản lý SSH Keys https://flashvps.dev/user/ssh-keys
2. Nhấn nút tạo khóa SSH mới
3. Một popup hiện ra, bạn nhấn vào "Tạo cho tôi 1 khóa SSH"

   ![](/vendor/docs/images/ssh-key01.png)
4. Bạn tiến hành tải 2 file OpenSSH Key và PuTTY Key về máy tính của mình.
5. Nhấn nút "Tạo khóa SSH mới" để hoàn tất.

<a id="markdown-tạo-ssh-key-bằng-putty-gen" name="tạo-ssh-key-bằng-putty-gen"></a>
### Tạo SSH Key bằng PuTTY-Gen

1. Cài đặt phần mềm PuTTY tại https://www.putty.org/
2. Nhấn nút **Generate** và **rê chuột vòng vòng màn hình** cho đến khi nó tạo xong.
   ![](/vendor/docs/images/puttygen-generate.jpg)
3. Sau khi hoàn tất tạo SSH Key, bạn tiến hành
   ![](/vendor/docs/images/puttygen-aftergenerator.jpg)
