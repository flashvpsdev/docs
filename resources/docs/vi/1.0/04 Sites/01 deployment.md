# Tổng quan

Deployment là quá trình trong đó mã của bạn được tải xuống từ nhà cung cấp kiểm soát nguồn vào máy chủ của bạn, sẵn sàng cho cả thế giới truy cập. **FlashVPS** theo dõi 10 lần triển khai mới nhất để bạn có thể biết những gì đã được triển khai, thời điểm triển khai và thời gian triển khai.

<!-- TOC -->

- [Môi trường](#môi-trường)
- [Triển khai tự động](#triển-khai-tự-động)
- [Deploy Script](#deploy-script)
- [PHP Versions](#phiên-bản-php)
- [Các biến môi trường](#các-biến-môi-trường)
- [Thông báo triển khai](#thông-báo-triển-khai)

<!-- /TOC -->

<a id="markdown-thông-báo-triển-khai" name="thông-báo-triển-khai"></a>

## Thông báo triển khai

Bạn có thể bật thông báo triển khai cho trang web của mình từ tab Thông báo của bảng điều khiển quản lý trang web. **FlashVPS** hỗ trợ một số kênh thông báo:

- Email
- Slack
- Telegram
- Microsoft Teams
- Discord

> Thông báo mặc định cho việc triển khai không thành công.

> Theo mặc định, **FlashVPS** sẽ tự động thông báo cho bạn qua email nếu triển khai không thành công.

### Slack

Để bật thông báo Slack, trước tiên bạn cần có một workspace, tạo một app trên Slack để thiết lập **Webhook URL**. Vui lòng làm theo các bước sau:

![](/vendor/docs/images/slack03.png)

![](/vendor/docs/images/slack04.png)

![](/vendor/docs/images/slack05.png)

![](/vendor/docs/images/slack06.png)

![](/vendor/docs/images/slack07.png)

Sau khi bạn sao chép **Webhook URL**, bạn quay trở lại **FlashVPS** và dán URL vào ô input và chọn "Kích hoạt"

![](/vendor/docs/images/slack08.png)

Nếu bạn muốn sửa đổi kênh mà **FlashVPS** thông báo, trước tiên bạn nên "Vô hiệu hóa" thông báo Slack và sau đó kích hoạt lại cho trang web của bạn.

![](/vendor/docs/images/slack09.png)

### Telegram

Để bật thông báo Telegram, trước tiên bạn mở ứng dụng và tìm kiếm @**FlashVPS_Bot** sau đó bạn sao chép đoạn mã bên cạnh và gửi cho @**FlashVPS_Bot**

![](/vendor/docs/images/telegram01.png)

![](/vendor/docs/images/telegram02.png)

Sau khi bạn gửi nội dung đã sao chép cho **@FlashVPS_Bot** chúng tôi sẽ kiểm tra hợp lệ và thông báo cho bạn biết. Khi bạn nhận được thông báo "_Bây giờ bạn đã kết nối trang web của bạn...._" là bạn đã bật thành công.

Nếu bạn muốn đổi tài khoản nhận thông báo trước tiên bạn nên "Xóa" thông báo Telegram và sau đó kích hoạt lại như bước đầu.

![](/vendor/docs/images/telegram03.png)

### Microsoft Teams

Để bật thông báo **Microsoft Teams**, trước tiên bạn cần kích hoạt **Microsoft Teams**, sau đó bạn cần tạo 1 Team và tạo 1 channel trên **Microsoft Teams** để thiết lập **Webhook URL**. Vui lòng làm theo hướng dẫn sau:

![](/vendor/docs/images/msteams01.png)
![](/vendor/docs/images/msteam02.png)
![](/vendor/docs/images/msteam03.png)
![](/vendor/docs/images/msteam04.png)
![](/vendor/docs/images/msteam10.png)
![](/vendor/docs/images/msteam05.png)
![](/vendor/docs/images/msteam06.png)
![](/vendor/docs/images/msteam07.png)

Chọn **"Configure"**, cung cấp tên và tải lên hình ảnh cho webhook của bạn nếu được yêu cầu:

![](/vendor/docs/images/msteam08.png)

Cửa sổ hộp thoại hiển thị một URL duy nhất ánh xạ tới kênh. Sao chép và lưu URL webhook, để gửi thông tin đến **Microsoft Teams** và chọn **"Done"**:

![](/vendor/docs/images/msteam09.png)

Quay trở lại **FlashVPS** và dán **URL** vừa sao chép vào ô input và chọn **Kích hoạt**

![](/vendor/docs/images/msteam11.png)

Nếu bạn muốn đổi kênh nhận thông báo trước tiên bạn nên "Vô hiệu xóa" thông báo **Microsoft Teams** và sau đó kích hoạt lại theo như hướng dẫn ban đầu.

![](/vendor/docs/images/msteam12.png)

### Discord

Để bật thông báo Discord, trước tiên bạn cần tạo một channel mới. Để làm được việc đó, đi đến máy chủ Discord của bạn và chọn dấu **"+"** bên phải **'Text Channels'**:

![](/vendor/docs/images/discord01.png)

Sau đó, thiết thiết lập cho **'Text Channel'**, nhập một channel name và chọn private channel nếu bạn muốn có một kênh riêng tư:

![](/vendor/docs/images/discord02.png)

Khi bạn đã có channel, bạn chọn **'Edit Channel'** sau đó đi đến tab **Integrations** và chọn "Create Webhook".

Tại đây bạn thiết lập tên và channel, icon cho Webhook và chọn **"Copy Webhook URL'**:

![](/vendor/docs/images/discord03.png)
![](/vendor/docs/images/discord04.png)

Quay trở lại **FlashVPS** và dán **URL** vừa sao chép vào ô input và chọn **Kích hoạt**

![](/vendor/docs/images/discord05.png)

Nếu bạn muốn đổi kênh nhận thông báo trước tiên bạn nên "Vô hiệu xóa" thông báo **Discord** và sau đó kích hoạt lại theo như hướng dẫn ban đầu.
![](/vendor/docs/images/discord06.png)

### Webhooks

FlashVPS cũng có thể gửi một yêu cầu HTTP POST đến các URL tùy ý sau mỗi lần triển khai. Tải trọng(Payload) của yêu cầu sẽ chứa ID máy chủ, ID trang web, trạng thái triển khai và thông tin commit có liên quan:

```
{
  "server": {
      "id": 100811, "name": "flashvps-snail"
   },
  "site": {
      "id": 100838, "name": "demo1.doan-restaurant.me"
  },
  "status": "success",
  "branch": "main",
  "commit": "new feature",
  "commit_message": "N/A",
  "repo": "git@github.com:repository.git"
}
```
