# Sao lưu dữ liệu

<!-- TOC -->

- [Sao lưu đến Google Drive](#sao-lưu-đến-google-drive)
- [Sao lưu đến OneDrive](#sao-lưu-đến-onedrive)
- [Sao lưu đến DropBox](#sao-lưu-đến-dropbox)
- [Cấu hình sao lưu](#cấu-hình-sao-lưu)

<!-- /TOC -->

<a id="markdown-sao-lưu-đến-google-drive" name="sao-lưu-đến-google-drive"></a>

## Sao lưu đến Google Drive

Để quá trình cấu hình diễn ra suôn sẻ bạn cần chuẩn bị những thứ sau đây:
1. Một tài khoản Google Drive chuyên dùng để sao lưu dữ liệu
2. Cài Rclone và lấy Google Drive Token

   1. **Trên Windows**

      Tải phần mềm Rclone 64bit hoặc 32bit về máy tại địa chỉ https://rclone.org/downloads/
      ![](/vendor/docs/images/rclone-download.png)
      Sau đó giải nén file zip tải được ở trên ta có file rclone.exe, giả sử nằm ở thư mục `D:\Rclone\rclone.exe`
      Mở ứng dụng CMD của Windows (Run- CMD) rồi chạy lệnh sau:

      ```
      D:\Rclone\rclone.exe authorize "drive"
      ```

      Đừng quên thay `D:\Rclone\rclone.exe` thành đường dẫn tương ứng trên máy bạn nhé!
      Một trình duyệt sẽ mở ra, tới bước 3

   2. **Trên Linux/macOS/BSD**

      Mở ứng terminal rồi chạy lệnh để cài đặt (lưu ý nhập sudo password):

      ```
      curl https://rclone.org/install.sh -o rclone.sh;sudo bash rclone.sh;rm rclone.sh

      rclone authorize "drive"
      ```

      Một trình duyệt sẽ mở ra, tới bước 3

3. Chọn tài khoản Google sẽ sao lưu vào:
   ![](/vendor/docs/images/googledrive01.png)
4. Cho phép kết nối vào tài khoản của bạn:
   ![](/vendor/docs/images/googledrive02.png)
5. Quay lại terminal/cmd ở bước 2, bạn sẽ thấy một đoạn mã như hình bên dưới, vui lòng sao chép mã này lại:
   ![](/vendor/docs/images/rclone-ggdrive-config-token.png)
6. Truy vào [trang quản lý máy chủ](https://flashvps.dev/servers) và chọn máy chủ cần sao lưu, sau đó ấn vào tab "Sao lưu"
7. Chọn Google Drive
  ![](/vendor/docs/images/backup-list.png)
8. Ở ô memo bạn hãy nhập mô tả gì đó để ghi chú, ở ô thứ 2 là "Backup Google Drive Code" bạn hãy nhập mã đã sao chép được ở bước số 5
   ![](/vendor/docs/images/googledrive05.png)
9. Ấn lưu để hoàn tất.

<a id="markdown-sao-lưu-đến-onedrive" name="sao-lưu-đến-onedrive"></a>

## Sao lưu đến OneDrive

Để quá trình cấu hình diễn ra suôn sẻ bạn cần chuẩn bị những thứ sau đây:

1. Một tài khoản Microsoft OneDrive chuyên dùng để sao lưu dữ liệu
2. Cài Rclone và lấy OneDrive Token

   1. **Trên Windows**

      Tải phần mềm Rclone 64bit hoặc 32bit về máy tại địa chỉ https://rclone.org/downloads/
      ![](/vendor/docs/images/rclone-download.png)
      Sau đó giải nén file zip tải được ở trên ta có file rclone.exe, giả sử nằm ở thư mục `D:\Rclone\rclone.exe`
      Mở ứng dụng CMD của Windows (Run- CMD) rồi chạy lệnh sau:

      ```
      D:\Rclone\rclone.exe authorize "onedrive"
      ```

      Đừng quên thay `D:\Rclone\rclone.exe` thành đường dẫn tương ứng trên máy bạn nhé!
      Một trình duyệt sẽ mở ra, tới bước 3

   2. **Trên Linux/macOS/BSD**

      Mở ứng terminal rồi chạy lệnh để cài đặt (lưu ý nhập sudo password):

      ```
      curl https://rclone.org/install.sh -o rclone.sh;sudo bash rclone.sh;rm rclone.sh

      rclone authorize "onedrive"
      ```

      Một trình duyệt sẽ mở ra, tới bước 3

3. Đăng nhập vào tài khoản Microsoft (bỏ qua nếu bạn đã đăng nhập)
4. Cho phép kết nối vào tài khoản của bạn bằng cách ấn Có hoặc Yes:
   ![](/vendor/docs/images/onedrive-accept.png)
5. Quay lại terminal/cmd ở bước 2, bạn sẽ thấy một đoạn mã như hình bên dưới, vui lòng sao chép mã này lại:

   Đoạn mã ở giữa `Paste the following into your remote machine --->` và `<---End paste` nhé!
   ![](/vendor/docs/images/rclone-config-token.png)

6. Truy vào [trang quản lý máy chủ](https://flashvps.dev/servers) và chọn máy chủ cần sao lưu, sau đó ấn vào tab "Sao lưu"
7. Chọn OneDrive
   ![](/vendor/docs/images/backup-list.png)
8. Ở ô memo bạn hãy nhập mô tả gì đó để ghi chú, ở ô thứ 2 là "Backup OneDrive Code" bạn hãy nhập mã đã sao chép được ở bước số 5
   ![](/vendor/docs/images/connect-onedrive.png)
9. Ấn lưu để hoàn tất.

<a id="markdown-sao-lưu-đến-dropbox" name="sao-lưu-đến-dropbox"></a>

## Sao lưu đến DropBox

Để quá trình cấu hình diễn ra suôn sẻ bạn cần chuẩn bị những thứ sau đây:

1. Một tài khoản Dropbox chuyên dùng để sao lưu dữ liệu
2. Cài Rclone và lấy Dropbox Token

   1. **Trên Windows**

      Tải phần mềm Rclone 64bit hoặc 32bit về máy tại địa chỉ https://rclone.org/downloads/
      ![](/vendor/docs/images/rclone-download.png)
      Sau đó giải nén file zip tải được ở trên ta có file rclone.exe, giả sử nằm ở thư mục `D:\Rclone\rclone.exe`
      Mở ứng dụng CMD của Windows (Run- CMD) rồi chạy lệnh sau:

      ```
      D:\Rclone\rclone.exe authorize "dropbox"
      ```

      Đừng quên thay `D:\Rclone\rclone.exe` thành đường dẫn tương ứng trên máy bạn nhé!
      Một trình duyệt sẽ mở ra, tới bước 3

   2. **Trên Linux/macOS/BSD**

      Mở ứng terminal rồi chạy lệnh để cài đặt (lưu ý nhập sudo password):

      ```
      curl https://rclone.org/install.sh -o rclone.sh;sudo bash rclone.sh;rm rclone.sh

      rclone authorize "dropbox"
      ```

      Một trình duyệt sẽ mở ra, tới bước 3

3. Đăng nhập vào tài khoản Dropbox (bỏ qua nếu bạn đã đăng nhập)
4. Cho phép kết nối vào tài khoản của bạn bằng cách ấn "Đồng ý" hoặc "Allow":
   ![](/vendor/docs/images/dropbox-allow.png)
5. Quay lại terminal/cmd ở bước 2, bạn sẽ thấy một đoạn mã như hình bên dưới, vui lòng sao chép mã này lại:

   Đoạn mã ở giữa `Paste the following into your remote machine --->` và `<---End paste` nhé!
   ![](/vendor/docs/images/rclone-config-token.png)

6. Truy vào [trang quản lý máy chủ](https://flashvps.dev/servers) và chọn máy chủ cần sao lưu, sau đó ấn vào tab "Sao lưu"
7. Chọn Dropbox
   ![](/vendor/docs/images/backup-list.png)
8. Ở ô memo bạn hãy nhập mô tả gì đó để ghi chú, ở ô thứ 2 là "Backup Dropbox Code" bạn hãy nhập mã đã sao chép được ở bước số 5
   ![](/vendor/docs/images/connect-onedrive.png)
9. Ấn lưu để hoàn tất.

<a id="markdown-cấu-hình-sao-lưu" name="cấu-hình-sao-lưu"></a>

## Cấu hình sao lưu

![](/vendor/docs/images/backup-configuration.png)

- Biểu thức lịch trình sao lưu: tham khảo [tại đây](/docs/vi/1.0/cron-job)
- Chu kì sao lưu: số ngày gần nhất giữ lại các bản sao lưu, ví dụ thiết lập là 18 thì các bản sao lưu 19 ngày trước đó không còn khả dụng, bạn nên cân nhắc tải chúng về trước khi bị xóa đi.
- Loại trừ các thư mục: là đường dẫn chỉ đến thư mục bạn không nằm trong bản sao lưu dữ liệu
