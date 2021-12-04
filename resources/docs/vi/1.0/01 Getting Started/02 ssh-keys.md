# Khóa SSH

---

<!-- TOC -->

- [Không thể truy cập vào máy chủ bằng mật khẩu](#không-thể-truy-cập-vào-máy-chủ-bằng-mật-khẩu)
- [SSH Key là gì?](#ssh-key-là-gì)
- [Cách tạo SSH Key](#cách-tạo-ssh-key)
  - [FlashVPS hỗ trợ tạo SSH Key tự động](#flashvps-hỗ-trợ-tạo-ssh-key-tự-động)
  - [Tạo SSH Key bằng phần mềm PuTTY-Gen trên Windows](#tạo-ssh-key-bằng-phần-mềm-putty-gen-trên-windows)
  - [Tạo SSH Key bằng puttygen trên (Ubuntu/MacOS)](#tạo-ssh-key-bằng-puttygen-trên-ubuntumacos)
  - [Tạo SSH Key bằng ssh-keygen (Windows/Linux/MacOS)](#tạo-ssh-key-bằng-ssh-keygen-windowslinuxmacos)
- [Thêm SSH Key vào máy chủ](#thêm-ssh-key-vào-máy-chủ)

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

<a id="markdown-tạo-ssh-key-bằng-phần-mềm-putty-gen-trên-windows" name="tạo-ssh-key-bằng-phần-mềm-putty-gen-trên-windows"></a>

### Tạo SSH Key bằng phần mềm PuTTY-Gen trên Windows

1. Cài đặt phần mềm PuTTY tại https://www.putty.org/
2. Nhấn nút **Generate** và **rê chuột vòng vòng màn hình** cho đến khi nó tạo xong.
   ![](/vendor/docs/images/puttygen-generate.jpg)
3. Sau khi hoàn tất tạo SSH Key, bạn hãy lưu Private Key lại bằng cách ấn vào nút "Save Private Key" và hãy bảo quản cẩn thận nhé. Có thể đặt mật khẩu cho Private Key để tăng thêm bảo mật bằng cách nhập vào ô "Key passphare" và "Confirm passphare" trước khi ấn nút "Save Private Key"
   ![](/vendor/docs/images/puttygen-aftergenerator.jpg)
   Public Key là đoạn **ssh-rsa AAAA...** thì bạn hãy dùng nó để nhập vào FlashVPS nhé!

<a id="markdown-tạo-ssh-key-bằng-puttygen-trên-ubuntumacos" name="tạo-ssh-key-bằng-puttygen-trên-ubuntumacos"></a>

### Tạo SSH Key bằng puttygen trên (Ubuntu/MacOS)

**Cài puttygen**

_Đối với Mac_ : `brew install putty`

_Đối với Linux_: `sudo apt install putty-tools`

**Tạo khóa SSH Key (version 2)**

```
puttygen -t rsa -b 2048 -o /home/flashvps/.ssh/id_putty_flashvps --ppk-param version=2
```

**Tạo khóa SSH Key (version 3)**

```
puttygen -t rsa -b 2048 -o /home/flashvps/.ssh/id_putty_flashvps
```

Sau khi chạy lệnh trên sẽ được file Private Key được lưu tại đường dẫn bạn đã nhập, Để sử dụng được khóa bạn cần có Public Key. Tạo Public Key như sau:

`puttygen -L /home/flashvps/.ssh/id_putty_flashvps`

Sau khi chạy lệnh trên sẽ thấy nội dung được trả về có dạng `ssh-rsa AAAA...` bạn sao chép đoạn mã này và thêm vào máy chủ của bạn nhé.

Trong trường hợp bạn cần lưu `Public Key` vào 1 nơi nào đó bạn chạy lệnh sau:

`puttygen -L /home/flashvps/.ssh/id_putty_flashvps > /path/to/save/filename.pub`

File sẽ được lưu tại `/path/to/save/filename.pub`

**Ghi chú:** thay `/home/flashvps/.ssh/id_putty_flashvps` thành đường dẫn lưu file của bạn.

<a id="markdown-tạo-ssh-key-bằng-ssh-keygen-windowslinuxmacos" name="tạo-ssh-key-bằng-ssh-keygen-windowslinuxmacos"></a>

### Tạo SSH Key bằng ssh-keygen (Windows/Linux/MacOS)

**Đối với Windows**

Kích hoạt OpenSSH Client trên Windows 10 bằng cách:

1. Mở panel **Settings**, nhấp vào **Apps**
2. Dưới heading _Apps and Features_ , click vào **Optional Features.**
   ![](/vendor/docs/images/kich-hoat-ssh-key-windows.webp)
3. Lướt xuống list để tìm xem **OpenSSH Client** được liệt kê chưa
   - Nếu chưa, click vào dấu + bên cạnh **Add a feature.**
   - Trượt xuống dưới danh sách để tìm và chọn **OpenSSH Client.**
     ![](/vendor/docs/images/windows-optional-features.webp)
   - Cuối cùng, nhấp vào **Install.**

Sau khi kích hoạt xong OpenSSH Client mở `command line` với quyền **admin** và chạy lệnh sau:

`ssh-keygen -t rsa -m PKCS8 -b 2048 -f "C:\Users\your_username\.ssh"`

Thay `C:\Users\your_username\.ssh` với đường dẫn nơi lưu khóa ssh của bạn.

**Đối với Linux/Mac**

`ssh-keygen -t rsa -m PKCS8 -b 2048 -f $HOME/.ssh/id_rsa_flashvps`

Sau khi chạy lệnh trên tại đường dẫn `$HOME/.ssh/` sẽ có 2 file tên là `id_rsa_flashvps` (Private Key) và `id_rsa_flashvps.pub` (Public Key) bạn sao chép nội dung Public Key và thêm vào máy chủ của bạn nhé.

<a id="markdown-thêm-ssh-key-vào-máy-chủ" name="thêm-ssh-key-vào-máy-chủ"></a>

## Thêm SSH Key vào máy chủ

Trước khi kết nối máy chủ với FlashVPS, bạn nên nhập SSH Key ở trang [SSH Keys](https://flashvps.dev/user/ssh-keys) như vậy mỗi khi kết nối một máy chủ mới, các SSH Key đã nhập sẽ được tự động thêm vào máy chủ mới mà không cần phải làm gì cả.

Để thêm thủ công SSH Key vào máy chủ, bạn hãy vào panel > Chọn máy chủ > SSH Key và thêm SSH Key giống như các bước ở trên.
