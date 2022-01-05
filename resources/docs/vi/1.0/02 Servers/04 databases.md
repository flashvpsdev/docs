# Cơ sở dữ liệu 

<!-- TOC -->

- [Tổng quát](#tổng-quát)
- [Tạo máy chủ với cơ sở dữ liệu](#tạo-máy-chủ-với-cơ-sở-dữ-liệu)
- [Cài đặt Cơ sở dữ liệu sau](#cài-đặt-cơ-sở-dữ-liệu-sau)
- [Quản lý Cơ sở dữ liệu](#quản-lý-cở-sở-dữ-liệu)
  - [Tạo cở sở dữ liệu](#tạo-cơ-sở-dữ-liệu)
  - [Tạo người dùng cở sở dữ liệu](#tạo-người-dùng-cơ-sở-dữ-liệu)
  - [Đồng bộ cơ sở dữ liệu](#đồng-bộ-cơ-sở-dữ-liệu)

<!-- /TOC -->

<a id="markdown-tổng-quát" name="tổng-quát"></a>

## Tổng quát 

Khi cài đặt một máy chủ FlashVPS mới, bạn có thể chọn cài đặt một máy chủ cơ sở dữ liệu (database server). Sau đó, bạn có thể sử dụng trang FlashVPS Dashboard để quản lý cơ sở dữ liêu, người dùng và quyền.

<a id="markdown-tạo-máy-chủ-với-cơ-sở-dữ-liệu" name="tạo-máy-chủ-với-cơ-sở-dữ-liệu"></a>

## Tạo máy chủ với cơ sở dữ liệu

Tạo một máy chủ với cơ sở dữ liệu như sau:

1. Bạn đi đến [Connect New Server](https://flashvps.dev/servers/create)
2. Tại màn hình tạo máy chủ bạn điền thông tin máy chủ > Sau đó chọn 1 cơ sở dữ liệu (**MySQL | MariaDB**) > Chọn Thêm máy chủ
![](/vendor/docs/images/create-new-server-with-database.png)

Sau đó, FlashVPS sẽ tự động cài đặt máy chủ cùng với cơ sở dữ liệu đã được chọn và tạo một người dùng CSDL `flashvps`, mật khẩu người dùng được tạo ngẫu nhiên. Tên người dùng CSDL và mật khẩu sẽ được gửi đến mail của bạn khi máy chủ được tạo thành công.

<a id="markdown-cài-đặt-cơ-sở-dữ-liệu-sau" name="cài-đặt-cơ-sở-dữ-liệu-sau"></a>

## Cài đặt Cơ sở dữ liệu sau
Nếu sau này bạn quyết định rằng bạn cần cài đặt cơ sở dữ liệu trên máy chủ của mình, bạn có thể cài đặt thông qua tab `Ứng dụng` của máy chủ. Sau khi cài đặt, bạn sẽ có thể quản lý cơ sở dữ liệu của mình thông qua FlashVPS.

<a id="markdown-quản-lý-cở-sở-dữ-liệu" name="quản-lý-cở-sở-dữ-liệu"></a>

## Quản lý Cơ sở dữ liệu
Đối với các máy chủ chạy MySQL, MariaDB FlashVPS cung cấp một số tính năng nâng cao cho phép bạn quản lý cơ sở dữ liệu và người dùng cơ sở dữ liệu của bạn một cách dễ dàng. Chúng tôi sẽ thảo luận về các tính năng này bên dưới

<a id="markdown-tạo-cơ-sở-dữ-liệu" name="tạo-cơ-sở-dữ-liệu"></a>

### Tạo Cơ sở dữ liệu
Bạn có thể tạo cơ sở dữ liệu mới thông qua tab Cơ sở dữ liệu của máy chủ trong FlashVPS. Tối thiểu, bạn phải cung cấp tên của cơ sở dữ liệu mới của mình. Người dùng có thể truy cập cơ sở dữ liệu.

1. Tại tab `Cơ sở dữ liệu`
![](/vendor/docs/images/database-tab.png)
2. Chọn `Tạo Cơ sở dữ liệu` và nhập tên cơ sở dữ liệu muốn tạo và chọn người dùng có thể truy cập cơ sở dữ liệu (**Tùy chọn**).
![](/vendor/docs/images/create-database.png)
3. Chọn `Lưu`

<a id="markdown-tạo-người-dùng-cơ-sở-dữ-liệu" name="tạo-người-dùng-cơ-sở-dữ-liệu"></a>

### Tạo người dùng Cơ sở dữ liệu
Bạn có thể tạo thêm người dùng cơ sở dữ liệu thông qua tab `Cơ sở dữ liệu` của bảng điều khiển FlashVPS. Để làm như vậy, bạn cần cung cấp tối thiểu tên người dùng, mật khẩu.

1. Tại tab `Cơ sở dữ liệu`
![](/vendor/docs/images/database-tab.png)
2. Chọn `Tạo người dùng cơ sở dữ liệu` và nhập tên người dùng, mật khẩu, phạm vi truy cập, cơ sở dữ liệu muốn truy cập
![](/vendor/docs/images/create-user-database.png)
3. Chọn `Lưu`

<a id="markdown-đồng-bộ-cơ-sở-dữ-liệu" name="đồng-bộ-cơ-sở-dữ-liệu"></a>

### Đồng bộ Cơ sở dữ liệu


