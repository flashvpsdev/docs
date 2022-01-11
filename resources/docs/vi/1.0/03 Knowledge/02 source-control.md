# Quản lý nhà cung cấp kiểm soát nguồn

<!-- TOC -->

- [Các nhà cung cấp kiểm soát nguồn FlashVPS hỗ trợ](#các-nhà-cung-cấp-mã-nguồn-flashvps-hỗ-trợ)
- [Sử dụng Custom Git Provider](#sử-dụng-custom-git-provider)
  - [Đối với Github](#đối-với-github)
  - [Đối với Gitlab](#đối-với-gitlab)
- [Quản lý nhà cung cấp](#quản-lý-nhà-cung-cấp)
  - [Kết nối nhà cung cấp](#kết-nối-nhà-cung-cấp)
  - [Hủy kết nối nhà cung cấp](#hủy-kết-nối-nhà-cung-cấp)
  - [Làm mới token](#làm-mới-token)

<!-- /TOC -->

<a id="markdown-các-nhà-cung-cấp-mã-nguồn-flashvps-hỗ-trợ" name="các-nhà-cung-cấp-mã-nguồn-flashvps-hỗ-trợ"></a>

## Các nhà cung cấp kiểm soát nguồn FlashVPS hỗ trợ
FlashVPS hiện hỗ trợ các nhà cung cấp kiểm soát nguồn sau:
- Github
- Gitlab
- Custom Git Repositories

<a id="markdown-sử-dụng-custom-git-provider" name="sử-dụng-custom-git-provider"></a>

## Sử dụng Custom Git Provider
Để sử dụng được Custom Git Provider bạn cần thêm mã SSH Key mà FlashVPS cung cấp vào nhà cung cấp mã nguồn của bạn. Hướng dẫn thêm mã SSH Key:

<a id="markdown-đối-với-github" name="đối-với-github"></a>

### Đối với Github
1. Lấy mã SSH Key [tại đây](/docs/vi/1.0/the-basics#git-repository)
2. [Đăng nhập vào tài khoản Github](https://github.com/login)
3. Chọn vào avatar của bạn và chọn **Settings**:
![](/vendor/docs/images/github-ssh-01.png)
4. Chọn **SSH and DPG keys**
![](/vendor/docs/images/github-ssh-02.png)
5. Chọn **New SSH key**
![](/vendor/docs/images/github-ssh-03.png)
6. Nhập tiêu đề cho trường *Title* và dán mã SSH Key lấy được ở bước 1 vào trường *Key*
![](/vendor/docs/images/github-ssh-04.png)
7. Chọn **Add SSH key**

<a id="markdown-đối-với-gitlab" name="đối-với-gitlab"></a>

### Đối với Gitlab
1. Lấy mã SSH Key [tại đây](/docs/vi/1.0/the-basics#git-repository)
2. [Đăng nhập vào tài khoản GitLab](https://gitlab.com/users/sign_in)
3. Chọn vào avatar của bạn và chọn **Preferences**:
![](/vendor/docs/images/gitlab-ssh-01.png)
4. Chọn **SSH Keys**
![](/vendor/docs/images/gitlab-ssh-02.png)
5. Dán mã SSH Key lấy được ở bước 1 vào trường *Key* và Nhập tiêu đề cho trường *Title* và *Ngày hết hạn*
![](/vendor/docs/images/gitlab-ssh-03.png)
6. Chọn **Add key**

Sau khi bạn mã SSH Key đã được thêm vào nhà cung cấp kiểm soát nguồn của bạn, bạn [làm theo hướng dẫn sau](/docs/vi/1.0/the-basics#git-repository) và cài đặt mã nguồn như bình thường.

<a id="markdown-quản-lý-nhà-cung-cấp" name="quản-lý-nhà-cung-cấp"></a>

## Quản lý nhà cung cấp

<a id="markdown-kết-nối-nhà-cung-cấp" name="kết-nối-nhà-cung-cấp"></a>

### Kết nối nhà cung cấp
Bạn có thể kết nối với bất kỳ nhà cung cấp kiểm soát nguồn nào được hỗ trợ bất kỳ lúc nào thông qua bảng điều khiển Quản lý mã nguồn của FlashVPS tại tab `Quản lý mã nguồn` trong hồ sơ tài khoản của bạn:
1. [Đăng nhập vào FlashVPS](https://flashvps.dev/login)
2. Chọn vào avatar của bạn và chọn **Quản lý mã nguồn**
![](/vendor/docs/images/flashvps-user-source-control-01.png)
3. Chọn **Kết nối với Github|GitLab** để kết nối với nhà cung cấp mã nguồn tương ứng
![](/vendor/docs/images/flashvps-user-source-control-02.png)

<a id="markdown-hủy-kết-nối-nhà-cung-cấp" name="hủy-kết-nối-nhà-cung-cấp"></a>

### Hủy kết nối nhà cung cấp
Bạn có thể xóa nhà cung cấp điều khiển nguồn được kết nối bằng cách nhấp vào nút **Hủy liên kết** bên cạnh nhà cung cấp.
1. [Đăng nhập vào FlashVPS](https://flashvps.dev/login)
2. Chọn vào avatar của bạn và chọn **Quản lý mã nguồn**
![](/vendor/docs/images/flashvps-user-source-control-01.png)
3. Chọn **Hủy liên kết với Github|GitLab** để kết nối với nhà cung cấp mã nguồn tương ứng
![](/vendor/docs/images/flashvps-user-source-control-03-disconnect.png)

<a id="markdown-làm-mới-token" name="làm-mới-token"></a>

### Làm mới token
Nếu bạn muốn làm mới kết nối của FlashVPS với nhà cung cấp kiểm soát nguồn của mình, bạn có thể làm như vậy bằng cách nhấp vào nút **Làm mới Token** bên cạnh tên của nhà cung cấp kiểm soát nguồn trên trang `Quản lý mã nguồn` trong hồ sơ tài khoản FlashVPS của bạn.
![](/vendor/docs/images/flashvps-user-source-control-03-disconnect.png)
