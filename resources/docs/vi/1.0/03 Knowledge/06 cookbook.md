# Cookbook

<!-- TOC -->

- [Công việc đã lên lịch Không chạy](#công-việc-đã-lên-lịch-không-chạy)
- [Quy tắc tường lừa SSH bị xóa](#xóa-quy-tắc-tường-lửa-ssh)

<!-- /TOC -->

<a id="markdown-công-việc-đã-lên-lịch-không-chạy" name="công-việc-đã-lên-lịch-không-chạy"></a>

## Công việc đã lên lịch Không chạy
Điều quan trọng cần lưu ý là chỉ cần một công việc đã lên lịch được cấu hình sai sẽ phá vỡ tất cả các công việc trong bộ lập lịch. Bạn nên xác minh rằng tần suất và các lệnh của bạn là chính xác bằng cách sử dụng một công cụ như [Crontab.guru](https://crontab.guru/).

<a id="markdown-xóa-quy-tắc-tường-lửa-ssh" name="xóa-quy-tắc-tường-lửa-ssh"></a>

## Quy tắc tường lừa SSH bị xóa
Nếu bạn đã xóa quy tắc tường lửa (thường là cổng 22) khỏi giao diện người dùng FlashVPS hoặc trực tiếp trên máy chủ, FlashVPS sẽ không thể kết nối với máy chủ và sẽ không thể tạo lại quy tắc này cho bạn.

Để khắc phục điều này, bạn sẽ cần truy cập trực tiếp vào máy chủ thông qua nhà cung cấp của mình và thêm lại cổng SSH theo cách thủ công. DigitalOcean cho phép bạn kết nối từ xa thông qua bảng điều khiển của họ.

FlashVPS sử dụng `ufw` cho tường lửa, vì vậy khi bạn đã kết nối với máy chủ, bạn cần chạy phần sau với quyền `root`:

`ufw allow 22`
