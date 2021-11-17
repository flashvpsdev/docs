# Quản lý file với SFTP

<!-- TOC -->

- [Giao thức SFTP là gì?](#giao-thức-sftp-là-gì)
- [SFTP Client là gì?](#sftp-client-là-gì)
- [Hướng dẫn sử dụng WinSCP](#hướng-dẫn-sử-dụng-winscp)
- [Hướng dẫn sử dụng FileZilla](#hướng-dẫn-sử-dụng-filezilla)

<!-- /TOC -->

<a id="markdown-giao-thức-sftp-là-gì" name="giao-thức-sftp-là-gì"></a>

## Giao thức SFTP là gì?

![](/vendor/docs/images/sftp.jpg)

SFTP hay còn được biết đến với cái tên gốc là: SSH File Transfer Protocol.
Đó là giao thức SSH - Secure Shell, một giao thức dùng để di chuyển các tệp tin.
SFTP được phát triển vào những năm 1990. Và nó cho phép di chuyển các tệp tin 1 cách an toàn.

<a id="markdown-sftp-client-là-gì" name="sftp-client-là-gì"></a>

## SFTP Client là gì?

SFTP Client là một phần mềm sử dụng giao thức SFTP để truyền tệp một cách an toàn đến các máy tính từ xa.

<a id="markdown-hướng-dẫn-sử-dụng-winscp" name="hướng-dẫn-sử-dụng-winscp"></a>

## Hướng dẫn sử dụng WinSCP

1. Tải về và cài đặt tại địa chỉ: https://winscp.net/eng/download.php
2. Bấm nút "New Session" để khởi tạo kết nối mới
   ![](/vendor/docs/images/winscp-new-session.png)
3. Cấu hình như hình, sau đó bấm vào nút "Advanced..."
   ![](/vendor/docs/images/winscp-config.png)
4. Ở bên trái chọn SSH > Authentication, sau đó bấm vào nút ... trong khung màu đỏ và chọn private PuttyKey,
   nếu chưa có Private PuTTY Key, bạn hãy xem [hướng dẫn tại đây](/docs/vi/1.0/ssh-keys)
   ![](/vendor/docs/images/winscp-advanced-setting.png)
   Sau đó bấm OK.
5. Bấm "Login" để đăng nhập
   ![](/vendor/docs/images/winscp-login.png)
6. Xong, bạn có thể upload file lên máy chủ của mình.
   ![](/vendor/docs/images/winscp-done.png)

<a id="markdown-hướng-dẫn-sử-dụng-filezilla" name="hướng-dẫn-sử-dụng-filezilla"></a>

## Hướng dẫn sử dụng FileZilla

1. Tải về và cài đặt tại địa chỉ: https://filezilla-project.org/download.php?type=client
2. Từ menu chọn "File > Site Manager"
   ![](/vendor/docs/images/filezilla-site-manager.png)
3. Bấm "New Site" để tạo site mới
   ![](/vendor/docs/images/filezilla-new-site.png)
4. Cấu hình như hình dưới, lưu ý:

   ② protocol: chọn SFTP

   ⑤ Logon Type: chọn key file

   ⑦ nếu chưa có Private PuTTY Key, bạn hãy xem [hướng dẫn tại đây](/docs/vi/1.0/ssh-keys)
   ![](/vendor/docs/images/filezilla-config.png)
   Sau đó bấm Connect.

5. Xong, bạn có thể upload file lên máy chủ của mình.
