# Chuyển hướng (Redirects)

<!-- TOC -->

- [Chuyển hướng (Redirects)](#chuyển-hướng-redirects)
  - [Tạo quy tắc chuyển hướng](#tạo-quy-tắc-chuyển-hướng)
  - [Sửa quy tắc chuyển hướng](#sửa-quy-tắc-chuyển-hướng)
- [Chuyển hướng tạm thời và Chuyển hướng vĩnh viễn](#chuyển-hướng-tạm-thời-và-chuyển-hướng-vĩnh-viễn)
  - [Chuyển hướng tạm thời](#chuyển-hướng-tạm-thời)
  - [Chuyển hướng vĩnh viễn](#chuyển-hướng-vĩnh-viễn)
  - [Chuyển hướng Last](#chuyển-hướng-last)


<!-- /TOC -->

<a id="markdown-chuyển-hướng-redirects" name="chuyển-hướng-redirects"></a>

## Chuyển hướng (Redirects)
FlashVPS cho phép bạn định cấu hình chuyển hướng có thể được định cấu hình để tự động chuyển hướng khách truy cập từ trang này sang trang khác. Các quy tắc chuyển hướng này có thể được tạo thông qua tab 'New Rewrite Rule' tại giao diện quản lý cấu hình nginx của trang web.

<a id="markdown-tạo-quy-tắc-chuyển-hướng" name="tạo-quy-tắc-chuyển-hướng"></a>

### Tạo quy tắc chuyển hướng
Chuyển hướng là các trình bao bọc xung quanh các [quy tắc viết lại](https://nginx.org/en/docs/http/ngx_http_rewrite_module.html#rewrite) của Nginx và có thể sử dụng cú pháp chuyển hướng đầy đủ được Nginx hỗ trợ, bao gồm cả biểu thức chính quy (regular expressions). Ví dụ: bạn có thể sử dụng `= /` để chỉ khớp với gốc của miền.

Các bước tạo Redirect Rule:
1. Tại tab `Cấu hình Nginx` > Chọn `New Rewrite Rule`
![](/vendor/docs/images/nginxconfig-tab.png)
2. Nhập thông tin về quy tắc chuyển hướng
- **Memo**: Tên gợi nhớ cho quy tắc
- **Loại**: Chuyển hướng tạm thời | Chuyển hướng vĩnh viến | last
![](/vendor/docs/images/nginxconfig-new-rewrite-rule.png)
3. Chọn `New Rewrite Rule`

> **⚠ INFO: Cập nhật Nginx Config.**  
> Sau khi thêm, xóa, sửa Nginx Config bạn cần bấm nút "Cập nhật Nginx Configuration" để những thay đổi có hiệu lực.

<a id="markdown-sửa-quy-tắc-chuyển-hướng" name="sửa-quy-tắc-chuyển-hướng"></a>

### Sửa quy tắc chuyển hướng
Bạn có thể sửa Quy tắc chuyển hướng thông qua tab `Cấu hình Nginx` trên bảng điều khiển quản lý trang web của mình trong FlashVPS. Các bước sửa quy tắc chuyển hướng:
1. Tại tab `Cấu hình Nginx` > Chọn tab `Server`
![](/vendor/docs/images/nginxconfig-server-tab.png)
2. Tỉm đến quy tắc chuyển hướng muốn sửa > chọn **biểu tượng chiếc bút**

***Lưu ý**: Chỉ chỉnh sửa **quy tắc chuyển hướng** và **Memo** (Tên gợi nhớ)
![](/vendor/docs/images/nginxconfig-edit-rewrite-rule.png)
3. Chọn `Edit Nginx Configuration`

> **⚠ INFO: Cập nhật Nginx Config.**  
> Sau khi thêm, xóa, sửa Nginx Config bạn cần bấm nút "Cập nhật Nginx Configuration" để những thay đổi có hiệu lực.

<a id="markdown-chuyển-hướng-tạm-thời-và-chuyển-hướng-vĩnh-viễn" name="chuyển-hướng-tạm-thời-và-chuyển-hướng-vĩnh-viễn"></a>

## Chuyển hướng tạm thời và Chuyển hướng vĩnh viẽn
FlashVPS hỗ trợ 2 loại chuyển hướng:
- Chuyển hướng Vĩnh viễn (Mã trạng thái HTTP 301)
- Chuyển hướng Tạm thời (Mã trạng thái HTTP 302)

Mặc dù cả hai loại chuyển hướng này thường ẩn đối với người dùng, nhưng trình duyệt sẽ xử lý chúng theo cách khác nhau và điều quan trọng là phải biết sự khác biệt.

<a id="markdown-chuyển-hướng-tạm-thời" name="chuyển-hướng-tạm-thời"></a>

### Chuyển hướng tạm thời
Khi trình duyệt gặp chuyển hướng tạm thời, nó sẽ đưa bạn đến đích và quên rằng nó đã được chuyển hướng từ trang gốc. Nếu bạn thay đổi trang đích và sau đó truy cập lại trang gốc, trình duyệt sẽ thấy vị trí chuyển hướng mới và đưa bạn đến đó.

<a id="markdown-chuyển-hướng-vĩnh-viễn" name="chuyển-hướng-vĩnh-viễn"></a>

### Chuyển hướng vĩnh viễn
Với chuyển hướng vĩnh viễn, trình duyệt sẽ nhớ rằng nó đã được chuyển hướng khỏi trang gốc. Để tiết kiệm việc thực hiện một yêu cầu mạng khác, lần tiếp theo trình duyệt truy cập trang gốc, trình duyệt sẽ thấy rằng nó đã được chuyển hướng và ngay lập tức truy cập trang đó thay thế.

Mặc dù bạn có thể thay đổi điểm đến của chuyển hướng vĩnh viễn, nhưng bạn sẽ cần phải xóa bộ nhớ cache của trình duyệt trước khi truy cập lại trang gốc. Việc thay đổi chuyển hướng vĩnh viễn được coi là một phương pháp không tốt, vì vậy hãy cẩn thận khi thực hiện.

<a id="markdown-chuyển-hướng-last" name="chuyển-hướng-last"></a>

### Chuyển hướng Last
Chuyển hướng last sẽ đảm bảo dừng tìm kiếm lệnh viết lại ở vị trí hiện tại hoặc chặn và sử dụng URI đã thay đổi (VD: URI được viết lại) và tìm kiếm vị trí mới cho bất kỳ lệnh viết lại nào phù hợp.

