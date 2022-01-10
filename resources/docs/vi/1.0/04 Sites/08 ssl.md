# SSL

<!-- TOC -->

- [Giới thiệu](#giới-thiệu)
- [LetsEnctypt](#letsencrypt)
- [Create Signing Request (CSR)](#create-signing-request)
- [Cài đặt chứng chỉ hiện có](#markdown-cài-đặt-chứng-chỉ-hiện-có)
- [Sao chép chứng chỉ](#sao-chép-chứng-chỉ)
- [Quản lý Chứng chỉ SSL](#quản-lý-chứng-chỉ-ssl)


<!-- /TOC -->

<a id="markdown-giới-thiệu" name="giới-thiệu"></a>

## Giới thiệu
FlashVPS hỗ trợ cài đặt chứng chỉ SSL tùy chỉnh và sử dụng LetsEncrypt để tạo chứng chỉ miễn phí cho các trang web của bạn.


<a id="markdown-letsencrypt" name="letsencrypt"></a>

## LetsEncrypt
[LetsEncrypt](https://letsencrypt.org/) cung cấp chứng chỉ SSL miễn phí được công nhận trên tất cả các trình duyệt chính.

FlashVPS sẽ tự động gia hạn chứng chỉ LetsEncrypt của bạn trong vòng 21 ngày trở xuống trước khi hết hạn. Hoặc bạn cũng có thể [gia hạn thủ công tại bảng quản lý chứng chỉ của trang web](#quản-lý-chứng-chỉ-ssl). Việc gia hạn sẽ diễn ra vào một ngày và giờ ngẫu nhiên để tránh làm tràn ngập các máy chủ LetsEncrypt.

Nếu có sự cố xảy ra khi gia hạn chứng chỉ, FlashVPS sẽ thông báo cho chủ sở hữu (owner) máy chủ qua email.

Bạn có thể tạo Singing Request tại tab `SSL` trên bảng quản lý trang web của FlashVPS:
![](/vendor/docs/images/site-ssl-01.png)
1. Tại tab `SSL` > Chọn `LetsEnctypt`
![](/vendor/docs/images/site-ssl-selection.png)
2. Chọn `cài đặt LetsEnctypt`
![](/vendor/docs/images/site-ssl-08.png)

> **! Cloning a LetsEncrypt Certificate**  
> Do quá trình gia hạn LetsEncrypt, không thể sao chép chứng chỉ LetsEncrypt sang các trang khác. Bạn chỉ cần cấp chứng chỉ LetsEncrypt mới cho trang web đó.

<a id="markdown-create-signing-request" name="create-signing-request"></a>

## Create Signing Request (CSR)
Create Signing Request là 1 đoạn text (chứa thông tin của chủ sở hữu tên miền) được mã hóa từ server (máy chủ) chuẩn bị cài đặt SSL. Nó chứa thông tin sẽ được bao gồm trong giấy chứng nhận của bạn như tên tổ chức của bạn, tên thông thường (tên miền), địa phương và quốc gia. 1 CSR sẽ được tạo ra ngay trước khi gửi yêu cầu cho bên cung cấp SSL để sinh ra SSL.

Bạn có thể tạo Singing Request tại tab `SSL` trên bảng quản lý trang web của FlashVPS:
![](/vendor/docs/images/site-ssl-01.png)
1. Tại tab `SSL` > Chọn `Tạo Signing Request`
![](/vendor/docs/images/site-ssl-selection.png)
2. Nhập thông tin CSR
![](/vendor/docs/images/site-ssl-03.png)
3. Chọn `Gửi`

<a id="markdown-cài-đặt-chứng-chỉ-hiện-có" name="cài-đặt-chứng-chỉ-hiện-có"></a>

## Cài đặt chứng chỉ hiện có
Nếu bạn đã sở hữu khóa và chứng chỉ từ một dịch vụ khác. FlashVPS hỗ trợ bạn cài đặt chứng chỉ đó cho trang web của bạn.
1. Tại tab `SSL` > Chọn `Cài đặt chứng chỉ hiện có`
![](/vendor/docs/images/site-ssl-selection.png)
2. Dán mã chứng chỉ và trường **Certificate** và mã khóa riêng tư vào trường **Private Key**
![](/vendor/docs/images/site-ssl-05.png)
3. Chọn `Lưu`

<a id="markdown-sao-chép-chứng-chỉ" name="sao-chép-chứng-chỉ"></a>

## Sao chép chứng chỉ
Bạn có thể dễ dàng sao chép 1 chứng chỉ từ chứng chỉ khác trong các máy chủ FlashVPS của bạn.
1. Tại tab `SSL` > Chọn `Sao chép chứng chỉ`
![](/vendor/docs/images/site-ssl-selection.png)
2. Chọn một chứng cần sao chép
![](/vendor/docs/images/site-ssl-06.png)
3. Chọn `Sao chép chứng chỉ`

<a id="markdown-quản-lý-chứng-chỉ-ssl" name="quản-lý-chứng-chỉ-ssl"></a>

## Quản lý Chứng chỉ SSL
FlashVPS hiển thị danh sách các chứng chỉ đã cài đặt dưới dạng bảng. Tại đây bạn có thể **Gia hạn**, **Kích hoạt** hoặc **xóa** chứng chỉ cho trang web.
![](/vendor/docs/images/site-ssl-01.png)
![](/vendor/docs/images/site-ssl-07.png)
