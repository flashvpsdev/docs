# Những điều cơ bản

<!-- TOC -->

- [Tạo trang web](#tạo-trang-web)
- [Apps / Project](#apps-project)
  - [Git Repository](#git-repository)
  - [WordPress](#wordpress)
  - [phpMyAdmin](#phpMyAdmin)
- [Trang web mặc định](#trang-web-mặc-định)
- [Mẫu Nginx mặc định](#mẫu-nginx-mặc-định)
- [PHP Version](#php-version)
  - [Chuyển đổi phiên bản PHP cho trang web](#chuyển-đổi-phiên-bản-php-cho-trang-web)

<!-- /TOC -->

<a id="markdown-tạo-trang-web" name="tạo-trang-web"></a>

## Tạo trang web

Khi tạo một trang web mới trên máy chủ FlashVPS của bạn, nhiều tùy chọn cấu hình có sẵn cho bạn:
- **Máy chủ**: Máy chủ mà trang web sẽ được tạo trong đó.
- **Domain Name**: Tên miền cho trang web.
- **Aliases**: Bí danh cho trang web (tùy chọn)
- **Project Type**: Tùy chọn này cho biết liệu dự án được cài đặt cho trang web của bạn sẽ là một dự án PHP / Laravel hay một trang HTML tĩnh. Cài đặt này được sử dụng để xác định cấu trúc của tệp cấu hình Nginx được tạo cho trang web của bạfn.
- **Web Directory**: Thư mục có thể truy cập công khai qua Internet. Đối với các ứng dụng Laravel, đây thường là thư mục `/public`.
- **PHP Version**: Nếu bạn đã cài đặt nhiều phiên bản PHP trên máy chủ của mình, bạn có thể chọn phiên bản nào sẽ được sử dụng để phục vụ trang web.
- **Bật wildcard tên miền con**: Wildcard tên miền con cho phép bạn có thể đặt điểm đến cho tất cả tên miền con không tồn tại về website hiện tại.
- **Cách ly trang web**: Cài đặt cấu hình này cho biết liệu quá trình PHP-FPM có nên chạy trong tài khoản người dùng của chính nó hay không. Bạn có thể tìm hiểu thêm về cách ly trang web bằng cách tham khảo [tài liệu đầy đủ về tính năng này](/docs/1.0/sites/user-isolation).
- **Tạo cơ sở dữ liệu**: Cài đặt này cho biết liệu bạn có muốn tạo một cơ sở dữ liệu mới cho trang web của mình hay không.

1. [Tạo trang web](/sites/create)
![](/vendor/docs/images/create-new-site-1.png)
![](/vendor/docs/images/create-new-site-2.png)
2. Nhập thông tin > Chọn `Tạo trang web`

<a id="markdown-apps-project" name="apps-project"></a>

## Apps / Project
Khi trang web đã được tạo trong FlashVPS, bạn có thể cài đặt một ứng dụng hoặc dự án. Các dự án chứa mã nguồn thực của ứng dụng của bạn. FlashVPS có thể cài đặt ba loại ứng dụng: Git Repository, WordPress hoặc phpMyAdmin.
Cài đặt mã nguồn tại bảng điều khiển quản lý của trang web
![](/vendor/docs/images/site-dashboard.png)
![](/vendor/docs/images/code-install-site-dashboard.png)

<a id="markdown-git-repository" name="git-repository"></a>

### Git Repository
> **! Nhà cung cấp kiểm soát nguồn**  
> Trước khi bạn có thể cài đặt kho lưu trữ Git, trước tiên bạn phải đảm bảo rằng bạn đã [kết nối nhà cung cấp kiểm soát nguồn](/docs/vi/1.0/source-control#kết-nối-nhà-cung-cấp) với tài khoản FlashVPS của mình.

Khi bạn đã kết nối các tài khoản nhà cung cấp kiểm soát nguồn của mình, bạn có thể chọn nhà cung cấp từ một trong các tùy chọn có sẵn. Các bước cài đặt mã nguồn cho trang web: 
1. Chọn nhà cung cấp `Git`
![](/vendor/docs/images/source-code-git-repository.png)

2. Chọn Tùy chọn cài đặt mã nguồn **(Custom Git | Github | Gitlab)**
Nếu bạn chọn `Custom Git` bạn sẽ cần [thêm khóa SSH FlashVPS vào nhà cung cấp](/docs/vi/1.0/source-control#sử-dụng-custom-git-provider) theo cách thủ công.
![](/vendor/docs/images/source-code-custom-git.png)
3. Nhập tên kho lưu trữ. Đối với tên kho lưu trữ bạn nên cung cấp URL SSH đầy đủ, ví dụ: `git@flashvps.com:flashvps/flashvps.git`.
4. Nhập Tên nhánh
5. Tùy chọn chạy cài đặt Composer > Chọn Cài đặt Git Repository

<a id="markdown-wordpress" name="wordpress"></a>

### WordPress
Các bước cài đặt [Wordpress](https://wordpress.org/):
1. Chọn tùy chọn cài đặt mã nguồn `Wordpress`
![](/vendor/docs/images/source-code-wordpress.png)
2. Trường người dùng cơ sở dữ liệu và cơ sở dữ liệu có thể bỏ trống. FlashVPS sẽ tạo tự động cho bạn. Hoặc [Tạo cơ sở dữ liệu](/docs/vi/1.0/databases#tạo-cơ-sở-dữ-liệu) nếu chưa có. 
3. Chọn `Cài đặt Wordpress`

Sau khi quá trình cài đặt hoàn tất. Bạn có thể đi đến tên miền trang web của bạn và tiếp tục cài đặt WordPress từ trình duyệt.

> **! Bảo mật WordPress**  
> Bạn nên tiếp tục cài đặt WordPress ngay sau khi FlashVPS đã cài đặt nó cho bạn, để nó được đảm bảo an toàn với tên người dùng và mật khẩu của bạn. Bạn cũng có thể chọn tạo [Quy tắc bảo mật](/docs/vi/1.0/sites/nginx-configuration#quy-tắc-bảo-mật) mới trước khi cài đặt WordPress để cài đặt của bạn được bảo vệ bằng mật khẩu.

<a id="markdown-phpMyAdmin" name="phpMyAdmin"></a>

### phpMyAdmin
Các bước cài đặt mã nguồn [phpMyAdmin](https://phpmyadmin.net/):
1. Chọn tùy chọn cài đặt mã nguồn phpMyAdmin
![](/vendor/docs/images/source-code-phpmyadmin.png)
2. Chọn `Cài đặt phpMyAdmin`

Khi FlashVPS đã cài đặt phpMyAdmin, sau đó bạn có thể đăng nhập vào cài đặt của mình bằng bất kỳ tổ hợp tên người dùng và mật khẩu cơ sở dữ liệu nào của bạn.

<a id="markdown-trang-web-mặc-định" name="trang-web-mặc-định"></a>

## Trang web mặc định
![](/vendor/docs/images/default-site.png)
<!-- Khi ban đầu bạn cung cấp một máy chủ FlashVPS, FlashVPS sẽ tạo một trang web duy nhất trên máy chủ đặt tên là địa chỉ IP của máy chủ. Điều này rất tiện lợi vì đôi khi bạn có thể không có tên miền cụ thể nào bạn muốn liên kết với một máy chủ nhất định ngay sau khi máy chủ được tạo thành công. -->

Khi bạn đã sẵn sàng chuyển đổi ứng dụng của mình sang một tên miền chính thức, bạn có thể dễ dàng [Tạo trang web](#tạo-trang-web) với tên miền của bạn.

<a id="markdown-mẫu-nginx-mặc-định" name="mẫu-nginx-mặc-định"></a>

## Mẫu Nginx Mặc định
Dưới đây là ví dụ về cấu hình trang Nginx mặc định được sử dụng bởi FlashVPS.
```
server {
    listen 80;
    listen [::]:80;

    server_name www.your-domain.com;

    if ($http_x_forwarded_proto = 'https') {
        return 301 https://your-domain.com$request_uri;
    }

    return 301 $scheme://your-domain.com$request_uri;
}

server{
    listen 80;
    listen [::]:80;
    server_name your-domain.com;
    server_tokens off;
    root /home/flashvps/your-domain.com;
    
    # ssl_certificate ###
    # ssl_certificate_key ###
    
    # https://ssl-config.mozilla.org/
    # Ubuntu 20.04 UP
    ssl_protocols TLSv1.2 TLSv1.3;
    ssl_ciphers XXXXXX;
    ssl_prefer_server_ciphers off;
    ssl_dhparam /etc/nginx/dhparams.pem;
    
    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-XSS-Protection "1; mode=block";
    add_header X-Content-Type-Options "nosniff";
    
    index index.html index.htm index.php;
    
    charset utf-8;
    
    # USER CUSTOM CONFIG (CAN MOVE, DO NOT REMOVE!)
    location ^~ /.well-known/acme-challenge {
        auth_basic off;
        allow all;
        alias /home/flashvps/.letsencrypt;
    }
    
    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }
    
    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }
    
    access_log off;
    error_log  /var/log/nginx/your-domain.com-error.log error;
    
    error_page 404 /index.php;
    
    location ~ \.php$ {
        try_files $uri $uri/ =404;
        fastcgi_split_path_info ^(.+\.php)(/.+)$;
        fastcgi_pass unix:/var/run/php/php7.4-fpm.sock;
        fastcgi_index index.php;
        include fastcgi_params;
    }
    
    # Deny files starting with a . (dot) except .well-known
    location ~ /\.(?!well-known).* {
        deny all;
    }
    
    # WordPress: Add a slash at the end of request */wp-admin
    rewrite /wp-admin$ $scheme://$host$uri/ permanent;
    
    # WordPress: deny general stuff
    location ~* ^/(?:xmlrpc\.php|wp-links-opml\.php|wp-config\.php|wp-config-sample\.php|readme\.html|license\.txt)$ {
        deny all;
    }
    
    location ~* \.(3gp|gif|jpg|jpeg|png|ico|wmv|avi|asf|asx|mpg|mpeg|mp4|pls|mp3|mid|wav|swf|flv|exe|zip|tar|rar|gz|tgz|bz2|uha|7z|doc|docx|xls|xlsx|pdf|iso|eot|svg|ttf|woff|woff2)$ {
      gzip_static off;
      add_header Pragma public;
      add_header Cache-Control "public, must-revalidate, proxy-revalidate";
      access_log off;
      expires 30d;
      break;
    }
    
    location ~* \.(txt|js|css)$ {
      add_header Pragma public;
      add_header Cache-Control "public, must-revalidate, proxy-revalidate";
      access_log off;
      expires 30d;
      break;
    }
    
}
```

<a id="markdown-php-version" name="php-version"></a>

## PHP Version
Nếu máy chủ của bạn đã cài đặt nhiều phiên bản PHP, bạn có thể chuyển đổi phiên bản mà trang web dụng bất kỳ lúc nào bằng cách sử dụng tab `Site {domain_name}` của trang web trong bảng điều khiển FlashVPS.
![](/vendor/docs/images/site-dashboard.png)

<a id="markdown-chuyển-đổi-phiên-bản-php-cho-trang-web" name="chuyển-đổi-phiên-bản-php-cho-trang-web"></a>

### Chuyển đổi phiên bản PHP cho trang web
![](/vendor/docs/images/php-switch-version-site-dashboard.png)
Khi chuyển đổi phiên bản mà trang web đang sử dụng, bạn nên đảm bảo rằng máy chủ của mình có cài đặt đầy đủ extension/mô-đun PHP bổ sung cho phiên bản đó. Việc không cài đặt các mô-đun bổ sung có thể làm cho trang web của bạn không phản hồi.

Bạn cũng sẽ cần cập nhật tập lệnh triển khai của trang web của mình để tải lại phiên bản PHP-FPM chính xác và gọi phiên bản PHP chính xác khi chạy bất kỳ lệnh PHP nào.
Cập nhật tập lệnh triển khai tại bảng điều khiển quản lý của Trang web.

![](/vendor/docs/images/update-deployment-script-site-dashboard.png)

