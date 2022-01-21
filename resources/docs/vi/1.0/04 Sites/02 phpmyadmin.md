# phpMyAdmin

<!-- TOC -->

- [phpMyAdmin là gì?](#phpmyadmin-là-gì)
- [Các tính năng nổi bật của phpMyAdmin](#các-tính-năng-nổi-bật-của-phpmyadmin)
- [Hướng dẫn cài đặt phpMyAdmin](#hướng-dẫn-cài-đặt-phpmyadmin)
- [Một số vấn đề cần lưu ý](#một-số-vấn-đề-cần-lưu-ý)
  - [Khi import file với dung lượng lớn](#khi-import-file-với-dung-lượng-lớn)
- [Một số thao tác cơ bản trên phpMyAdmin](#một-số-thao-tác-cơ-bản-trên-phpmyadmin)
  - [Tạo Cơ sở dữ liệu (CSDL)](#tạo-cơ-sở-dữ-liệu-csdl)
  - [Tạo bảng cho CSDL](#tạo-bảng-cho-csdl)
  - [Thêm bản ghi cho bảng](#thêm-bản-ghi-cho-bảng)
  - [Xuất file (Export File)](#xuất-file-export-file)
  - [Nhập file (Import File)](#nhập-file-import-file)
  - [Phân quyền](#phân-quyền)

<!-- /TOC -->

<a id="markdown-phpmyadmin-là-gì" name="phpmyadmin-là-gì"></a>

## phpMyAdmin là gì?

phpMyAdmin là một công cụ phần mềm miễn phí được viết bằng PHP, nhằm xử lý việc quản trị MySQL qua Web. phpMyAdmin hỗ trợ một loạt các hoạt động trên MySQL và MariaDB. Các hoạt động thường được sử dụng (quản lý cơ sở dữ liệu, bảng, cột, quan hệ, chỉ mục(indexes), người dùng, quyền, v.v.) có thể được thực hiện thông qua giao diện người dùng, trong khi bạn vẫn có khả năng thực thi trực tiếp bất kỳ câu lệnh SQL nào.

FlashVPS cũng hỗ trợ cài đặt phpMyAdmin, vì vậy bạn có thể quản lý cơ sở dữ liệu từ bất cứ đâu.

Nếu bạn chưa từng làm như vậy, bạn nên tạo một cơ sở dữ liệu và người dùng cơ sở dữ liệu mới. Điều này được phpMyAdmin sử dụng để lưu trữ cấu hình của cơ sở dữ liệu và người dùng của bạn.

Một khi FlashVPS đã cài đặt phpMyAdmin, sau đó bạn có thể đăng nhập vào cài đặt của mình bằng bất kỳ tổ hợp tên người dùng và mật khẩu cơ sở dữ liệu nào của bạn.

<a id="markdown-các-tính-năng-nổi-bật-của-phpmyadmin" name="các-tính-năng-nổi-bật-của-phpmyadmin"></a>

## Các tính năng nổi bật của phpMyAdmin

- Giao diện web trực quan
- Hỗ trợ hầu hết các tính năng của MySQL:
  - browse và xóa cơ sở dữ liệu, bảng, views, trường và indexes
  - tạo, sao chép, xóa, đổi tên và thay đổi cơ sở dữ liệu, bảng, trường và indexes
  - maintenance server, cơ sở dữ liệu và bảng, với các đề xuất về cấu hình máy chủ
  - thực thi, chỉnh sửa và bookmark bất kỳ câu lệnh SQL nào, thậm chí cả các truy vấn hàng loạt
  - quản lý MySQL user accounts and privileges
  - quản lý stored procedures and triggers
- Nhập dữ liệu từ CSV và SQL
- Xuất dữ liệu sang các định dạng khác nhau: CSV, SQL, XML, PDF, ISO / IEC 26300 - OpenDocument Text and Spreadsheet, Word, LATEX và các định dạng khác
- Administering multiple servers
- Tạo đồ họa của bố cục cơ sở dữ liệu của bạn ở các định dạng khác nhau
- Tạo các truy vấn phức tạp bằng cách sử dụng Query-by-example (QBE)
- Tìm kiếm toàn cầu trong một cơ sở dữ liệu hoặc một tập hợp con của nó
- Chuyển đổi dữ liệu được lưu trữ sang bất kỳ định dạng nào bằng cách sử dụng một tập hợp các predefined functions, như hiển thị dữ liệu BLOB dưới dạng hình ảnh hoặc download-link
- ...

<a id="markdown-hướng-dẫn-cài-đặt-phpmyadmin" name="hướng-dẫn-cài-đặt-phpmyadmin"></a>

## Hướng dẫn cài đặt phpMyAdmin

**Lưu ý:** Hiện tại **php8.1** còn mới cho nên việc cài đặt phpMyAdmin trên phiên bản này còn có một số lỗi.
Lựa chọn phiên bản **php8.0 hoặc thấp hơn** thay thế.

1. **Cài đặt máy chủ**: [Kết nối Máy Chủ sẵn có](/docs/vi/1.0/connect-custom-server). Bạn có thể cài MySQL hoặc MariaDB
   ![](/vendor/docs/images/phpmyadmin-create-new-server.png)

2. **Tạo trang web**: Tại giao diện thông tin máy chủ, bạn chọn `Tạo trang web mới`
   ![](/vendor/docs/images/phpmyadmin-list-site.png)
   Điền thông tin trang web và chọn `Tạo trang web`
   ![](/vendor/docs/images/phpmyadmin-create-new-site.png)

3. **Cài đặt phpMyAdmin**: Bạn đi tới bảng quản lý trang web.
   ![](/vendor/docs/images/site-dashboard.png)
   ![](/vendor/docs/images/code-install-site-dashboard.png)
  Sau đó chọn tùy chọn cài đặt mã nguồn phpMyAdmin
  ![](/vendor/docs/images/source-code-phpmyadmin.png)

4. Chọn `Cài đặt phpMyAdmin`

   FlashVPS sẽ tiến hành cài đặt giúp bạn, Quá trình cài đặt sẽ mất 1-2 phút. Sau đó bạn chỉ việc truy cập vào trang web và nếu bạn thấy giao diện như hình dưới là đã thành công.
   Bạn nhập username và password mà FlashVPS đã gửi cho bạn qua mail khi bạn tạo máy chủ. Hoặc bạn cũng có thể đi đến tab `Cơ sở dữ liệu` > và tạo username,password mới.
   ![](/vendor/docs/images/phpmyadmin-login-screen.png)

   Sau khi đăng nhập thành công có giao diện như sau:
   ![](/vendor/docs/images/phpmyadmin-dashboard.png)

<a id="markdown-một-số-vấn-đề-cần-lưu-ý" name="một-số-vấn-đề-cần-lưu-ý"></a>

## Một số vấn đề cần lưu ý

<a id="markdown-khi-import-file-với-dung-lượng-lớn" name="khi-import-file-với-dung-lượng-lớn"></a>

### Khi import file với dung lượng lớn

- Khi import file với dung lượng lớn sẽ mất nhiều thời gian xử lý
- Bạn quay lại [FlashVPS](/servers) và thiết lập thêm 1 vài thông số tại bảng quản lý máy chủ để việc import file thực hiện thành công:
  - Thiết lập [`Kích thước file tải lên tối đa`](/docs/vi/1.0/php#kích-thước-tải-lên-tệp-tối-đa) (MB)
  - Thiết lập [`thời gian thực thi`](/docs/vi/1.0/php#thời-gian-thưc-thi-tối-đa)

<a id="markdown-một-số-thao-tác-cơ-bản-trên-phpmyadmin" name="một-số-thao-tác-cơ-bản-trên-phpmyadmin"></a>

## Một số thao tác cơ bản trên phpMyAdmin

<a id="markdown-tạo-cơ-sở-dữ-liệu-csdl" name="tạo-cơ-sở-dữ-liệu-csdl"></a>

### Tạo Cơ sở dữ liệu (CSDL)

Tại giao diện chính, bạn chọn `Database` > `nhập tên csdl` và `collection` > `Create`
![](/vendor/docs/images/phpmyadmin-create-database.png)

<a id="markdown-tạo-bảng-cho-csdl" name="tạo-bảng-cho-csdl"></a>

### Tạo bảng cho CSDL

Ở sidebar phía bên trái bạn chọn vào tên CSDL, sau đó ở phía dưới `Create Table` bạn nhập `tên bảng` và `số cột` cho bảng và chọn `Go`
![](/vendor/docs/images/phpmyadmin-create-table.png)
Bạn điền thông tin cho bảng như tên cột, kiểu dữ liệu, độ dài/giá trị, giá trị mặc định, nullable,... sau đó chọn `Save`
![](/vendor/docs/images/phpmyadmin-create-table1.png)
Sau khi Chọn `Save` chúng ta được cấu trúc bảng như sau.
![](/vendor/docs/images/phpmyadmin-create-table2.png)

<a id="markdown-thêm-bản-ghi-cho-bảng" name="thêm-bản-ghi-cho-bảng"></a>

### Thêm bản ghi cho bảng

Tại bảng cần thêm bạn chọn vào tab `Insert` ở thanh điều hướng phía trên > `Điền thông tin` > `Go`
![](/vendor/docs/images/phpmyadmin-insert-record.png)
Thông báo thành công
![](/vendor/docs/images/phpmyadmin-insert-record1.png)
Bạn chọn vào tab `Browse` để xem danh sách các bản ghi đang có
![](/vendor/docs/images/phpmyadmin-view-table.png)

<a id="markdown-xuất-file-export-file" name="xuất-file-export-file"></a>

### Xuất file (Export File)

Có 2 loại xuất file:

- `Xuất CSDL`: Bạn chọn 1 CSDL và chọn vào tab `Export` > `Chọn kiểu cần format: SQL, CSV, Excel,...` > `Go`
  ![](/vendor/docs/images/phpmyadmin-export-database.png)

- `Xuất bảng`: Bạn chọn 1 bảng và chọn tab `Export` > `Chọn kiểu cần format: SQL, CSV, Excel,...` > `Rows` > `Go`
  ![](/vendor/docs/images/phpmyadmin-export-table.png)

<a id="markdown-nhập-file-import-file" name="nhập-file-import-file"></a>

### Nhập file (Import File)

Có 2 loại Nhập file:

- `Nhập CSDL`: Bạn chọn 1 CSDL và chọn vào tab `Import` > `Chọn file cần import.` > `Go`
- `Nhập bảng`: Bạn chọn 1 CSDL và chọn vào tab `Import` > `Chọn file cần import.` > `Go`

**_Lưu ý_**: Ở đây bạn cần lưu ý chỗ **(Max: 2.048KB)**. Đây là kích thước file tối đa có thể tải lên theo mặc định.
Nếu file của bạn có kích thước lớn hơn, bạn cần phải cập nhật kích thước theo hướng dẫn [tại đây](#một-số-vấn-đề-cần-lưu-ý).
Sau đó quay lại phpMyAdmin và thực hiện Nhập file như bình thường
![](/vendor/docs/images/phpmyadmin-import-database.png)

<a id="markdown-phân-quyền" name="phân-quyền"></a>

### Phân quyền

Phân quyền cũng có 2 loại là:

- `Phân quyền cho CSDL`: Chọn CSDL > chọn tab `Privileges` > `Add user account`
- `Phân quyền cho bảng`: Chọn bảng > chọn tab `Privileges` > `Add user account`
  ![](/vendor/docs/images/phpmyadmin-add-user.png)
  Điền thông tin đăng nhập
  ![](/vendor/docs/images/phpmyadmin-add-user1.png)
  Chọn quyền cho tài khoản và chọn `Go`
  ![](/vendor/docs/images/phpmyadmin-add-user2.png)
  Giao diện thêm thành công và sửa quyền
  ![](/vendor/docs/images/phpmyadmin-add-user3.png)
