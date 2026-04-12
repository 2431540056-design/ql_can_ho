# 🏢 Xây dựng và phát triển Website Quản Lý Căn Hộ

## 📌 Giới thiệu
Đây là hệ thống website quản lý căn hộ được xây dựng bằng Laravel và MySQL, hỗ trợ quản lý căn hộ, cư dân, hợp đồng, hóa đơn và thanh toán.

---

## 👨‍💻 Nhóm thực hiện

**Nhóm 05**

| STT | Họ và tên           | MSSV       |
|-----|--------------------|------------|
| 1   | Ngô Quang Huy      | 2431540056 |
| 2   | Lê Anh Kiệt        | 2431540040 |
| 3   | Nguyễn Đăng Khôi   | 2431540006 |
| 4   | Nguyễn Lê Thiên Ân | 2431540044 |

---

## ⚙️ Công nghệ sử dụng

- Laravel Framework
- MySQL
- Bootstrap
- MVC Architecture

---

## 🚀 Chức năng chính

### Admin:
- Quản lý căn hộ
- Quản lý loại căn hộ
- Quản lý tài khoản
- Quản lý hợp đồng
- Quản lý hóa đơn
- Quản lý thanh toán
- Duyệt thuê
- Thông báo
- Xử lý phản ánh

### Cư dân:
- Đăng ký / đăng nhập
- Xem căn hộ
- Xem hợp đồng
- Xem hóa đơn
- Thanh toán
- Gửi phản ánh
- Yêu cầu thuê

---

## 📦 Hướng dẫn chạy project

```bash
git clone ...
cd ql_can_ho
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve