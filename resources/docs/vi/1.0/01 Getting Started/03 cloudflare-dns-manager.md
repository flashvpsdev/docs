# Quản lý DNS Cloudflare

---

Nhằm mang lại trải nghiệm dịch vụ tốt nhất cho khách hàng, FlashVPS đã hỗ trợ quản lý **DNS Cloudflare**.

<!-- TOC -->

- [Hướng dẫn lấy Cloudflare API Token](#hướng-dẫn-lấy-cloudflare-api-token)
- [Hướng dẫn nhập Cloudflare API Token vào FlashVPS quản lý](#hướng-dẫn-nhập-cloudflare-api-token-vào-flashvps-quản-lý)
- [Hướng dẫn quản lý DNS](#hướng-dẫn-quản-lý-dns)
- [Có thể bạn chưa biết?](#có-thể-bạn-chưa-biết)

<!-- /TOC -->

<a id="markdown-hướng-dẫn-lấy-cloudflare-api-token" name="hướng-dẫn-lấy-cloudflare-api-token"></a>
## Hướng dẫn lấy Cloudflare API Token

1. Đăng nhập vào tài khoản Cloudflare của bạn.
2. Truy cập trang API Token tại: https://dash.cloudflare.com/profile/api-tokens, sau đó nhấn vào nút "Create Token"
   ![](/vendor/docs/images/cloudflare01.png)
3. Ở mục "Custom Token" nhấn "Get Started"
   ![](/vendor/docs/images/cloudflare02.png)
4. Ở mục "Create Custom Token" lần lượt điền và chọn như trong hình
   ![](/vendor/docs/images/cloudflare03.png)
5. Chọn "Create Token"
   ![](/vendor/docs/images/cloudflare04.png)
6. Vậy là thành công rồi, hãy sao chép token ở dưới đây để nhập vào FlashVPS nhé
   ![](/vendor/docs/images/cloudflare05.png)

<a id="markdown-hướng-dẫn-nhập-cloudflare-api-token-vào-flashvps-quản-lý" name="hướng-dẫn-nhập-cloudflare-api-token-vào-flashvps-quản-lý"></a>
## Hướng dẫn nhập Cloudflare API Token vào FlashVPS quản lý

1. Truy cập khu vực quản lý DNS FlashVPS tại https://flashvps.dev/user/dns
2. Nhấn nút "Thêm Khóa"
3. Nhập mô tả về API Token này
4. Nhập API Token nhận được ở trên
5. Nhấn nút "Thêm API Token"

<a id="markdown-hướng-dẫn-quản-lý-dns" name="hướng-dẫn-quản-lý-dns"></a>
## Hướng dẫn quản lý DNS

Sau khi thêm khóa API thành công, hệ thống sẽ tự động lấy tất cả các domain bạn cho phép quản lý về.
Các bạn chỉ cần chọn vào domain nào cần quản lý.

![](/vendor/docs/images/cloudflare06.png)

UI quản lý DNS tại FlashVPS tương thích hoàn toàn với Cloudflare, dễ dàng sử dụng.

<a id="markdown-có-thể-bạn-chưa-biết" name="có-thể-bạn-chưa-biết"></a>
## Có thể bạn chưa biết?

Khi bạn tạo một trang web mới, mà tên miền nằm trong danh sách domain được quản lý tại FlashVPS.
Hệ thống sẽ tự động tạo 1 bản ghi DNS type A trỏ về máy chủ đang sử dụng để tạo tên miền.
