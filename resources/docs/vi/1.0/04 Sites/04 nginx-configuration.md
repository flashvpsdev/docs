# Cấu hình Nginx

<!-- TOC -->

- [Quy tắc Chuyển hướng (Redirect Rules)](#quy-tắc-chuyển-hướng)
- [Quy tắc Bảo mật (Security Rules))](#quy-tắc-bảo-mật)
- [Quản lý Cấu hình Nginx](#quản-lý-cấu-hình-nginx)
  - [Xem trước cấu hình Nginx](#xem-trước-cấu-hình-nginx)
  - [Tạo block cấu hình nginx](#tạo-block-cấu-hình-nginx)
  - [Sửa block cấu hình nginx](#sửa-block-cấu-hình-nginx)
  - [Cập nhật Nginx Configuration](#cập-nhật-cấu-hình-nginx-configration)

<!-- /TOC -->

<a id="markdown-quy-tắc-chuyển-hướng" name="quy-tắc-chuyển-hướng"></a>

## Quy tắc Chuyển hướng (Redirect Rules)
FlashVPS cho phép bạn định cấu hình chuyển hướng có thể được định cấu hình để tự động chuyển hướng khách truy cập từ trang này sang trang khác. [Chi tiết](/docs/vi/1.0/rewrite-rule)

<a id="markdown-quy-tắc-bảo-mật" name="quy-tắc-bảo-mật"></a>

## Quy tắc Bảo mật (Security Rules)
FlashVPS cho phép bạn định cấu hình chuyển hướng có thể được định cấu hình để tự động chuyển hướng khách truy cập từ trang này sang trang khác. [Chi tiết](/docs/vi/1.0/security-rule)

<a id="markdown-quản-lý-cấu-hình-nginx" name="quản-lý-cấu-hình-nginx"></a>

## Quản lý Cấu hình Nginx
Tại giao diện quản lý cấu hình nginx FlashVPS hỗ trợ các chức năng cho phép bạn dễ dàng quản lý tệp cấu hình nginx.
![](/vendor/docs/images/nginxconfig-tab-more-details.png)

> **⚠ INFO: Cập nhật Nginx Config.**  
> Sau khi thêm, xóa, sửa Nginx Config bạn cần bấm nút "Cập nhật Nginx Configuration" để những thay đổi có hiệu lực.

<a id="markdown-xem-trước-cấu-hình-nginx" name="xem-trước-cấu-hình-nginx"></a>

## Xem trước cấu hình Nginx
FlashVPS cho phép xem nội dung tệp cấu hình Nginx tại tab `Cấu hình Nginx` của trên bảng điều khiển quản lý trang web của mình bạn chọn vào biểu tượng `con mắt`. 
![](/vendor/docs/images/nginxconfig-preview.png)

<a id="markdown-tạo-block-cấu-hình-nginx" name="tạo-block-cấu-hình-nginx"></a>

## Tạo block cấu hình nginx
FlashVPS hỗ trợ bạn tạo các khổi cấu hình nginx. Các bước tạo block cấu hình nginx:
1. Tại tab `Cấu hình Nginx` > Chọn `New Nginx Configuration`
![](/vendor/docs/images/nginxconfig-new-nginx-configuration.png)
2. Điền thông tin block cấu hình
- **Memo**: Tên gợi nhớ cho block, tên này sẽ chỉ hiển thị trên hệ thống của FlashVPS không lưu vào máy chủ VPS của bạn
- **Position**: Vị trí lưu block cấu hình trong tệp cấu hình cho trang web của bạn.
  - **Server**: Vị trí lưu sẽ nằm trong khối server chính (Block chứa toàn bộ cấu hình về trang web của bạn) trong tệp cấu hình trang web
  - **Before**: Vị trí lưu sẽ nằm trước khối server chính
  - **After**: Vị trí lưu sẽ nằm sau khối server chính
- Nội dung block cấu hình
3. Chọn `New Nginx Configuration`

> **⚠ INFO: Cập nhật Nginx Config.**  
> Sau khi thêm, xóa, sửa Nginx Config bạn cần bấm nút "Cập nhật Nginx Configuration" để những thay đổi có hiệu lực.

<a id="markdown-sửa-block-cấu-hình-nginx" name="sửa-block-cấu-hình-nginx"></a>

## Sửa block cấu hình nginx
Các bước sửa block cấu hình nginx:
1. Tại tab `Cấu hình Nginx` > Chọn vị trí tab (**Before | Server | After**) mà block cấu hình được lưu trước đó
![](/vendor/docs/images/nginxconfig-server-tab.png)
2. Tỉm đến block cấu hình nginx muốn sửa > chọn **biểu tượng chiếc bút**

>Nếu block cần sửa là **Block bảo mật** thì tham khảo [Sửa quy tắc bảo mật](/docs/vi/1.0/security-rule#sửa-quy-tắc-bảo-mật) hoặc **Block chuyển hướng** tham khảo [Sửa quy tắc chuyển hướng](/docs/vi/1.0/rewrite-rule#sửa-quy-tắc-chuyển-hướng)

3. Điền thông tin muốn sửa
- **Memo**: Tên gợi nhớ cho block, tên này sẽ chỉ hiển thị trên hệ thống của FlashVPS không lưu vào máy chủ VPS của bạn
- **Position**: Vị trí lưu block cấu hình trong tệp cấu hình cho trang web của bạn.
  - **Server**: Vị trí lưu sẽ nằm trong khối server chính (Block chứa toàn bộ cấu hình về trang web của bạn) trong tệp cấu hình trang web
  - **Before**: Vị trí lưu sẽ nằm trước khối server chính
  - **After**: Vị trí lưu sẽ nằm sau khối server chính
- Nội dung block cấu hình
![](/vendor/docs/images/nginxconfig-edit-general-block.png)
4. Sau khi đã sửa, Chọn `Edit Nginx Configuration`

> **⚠ INFO: Cập nhật Nginx Config.**  
> Sau khi thêm, xóa, sửa Nginx Config bạn cần bấm nút "Cập nhật Nginx Configuration" để những thay đổi có hiệu lực.

<a id="markdown-cập-nhật-cấu-hình-nginx-configration" name="cập-nhật-cấu-hình-nginx-configration"></a>

## Cập nhật Nginx Configuration
Sau khi thêm, xóa, sửa Nginx Config bạn cần bấm nút "Cập nhật Nginx Configuration" để những thay đổi có hiệu lực
Tại giao diện quản lý cấu hình Nginx > Chọn `Cập nhật Nginx Configuration`
![](/vendor/docs/images/nginxconfig-update.png)
