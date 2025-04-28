# Google reCAPTCHA v3 Plugin Documentation

## Introduction

The Google reCAPTCHA plugin for GP247 helps protect your website from spam and abuse by integrating Google reCAPTCHA v3. This plugin uses the reCAPTCHA v3 mechanism to analyze user behavior without requiring verification through images or checkboxes.

## Requirements

- GP247 version 1.1 or higher
- Google reCAPTCHA v3 account

## Installation

1. Install the plugin through the GP247 Admin Panel:
   - Go to **Admin Panel > Extension > Plugins**
   - Find and select **GoogleCaptcha**
   - Click the **Install** button

2. After installation, activate the plugin:
   - In the plugin list, find **GoogleCaptcha**
   - Click the **Enable** button

## Configuration

### Register Google reCAPTCHA v3

1. Visit [Google reCAPTCHA Admin](https://www.google.com/recaptcha/admin)
2. Sign in with your Google account
3. Click **+ Create** to create a new site
4. Enter a name for the site
5. Select **reCAPTCHA v3** in the **reCAPTCHA type** section
6. Add your website domain in the **Domains** section
7. Accept the terms of service and click **Submit**
8. Copy the provided **Site Key** and **Secret Key**

### Configure plugin in GP247

1. Log in to Admin Panel
2. Go to **Extension > Plugins > GoogleCaptcha**
3. Enter:
   - **Site Key**: Paste the Site Key from Google reCAPTCHA
   - **Secret Key**: Paste the Secret Key from Google reCAPTCHA
4. Save the configuration

### Activate and configure Captcha in the system

1. After entering the Site Key and Secret Key information, go to **Shop Setting > Shop Config**
2. Select the **Captcha** tab
3. Activate the Captcha function by switching the status to **ON**
4. Select captcha type as **Google reCaptcha**
5. Check the list of pages to apply captcha (such as registration, login, contact, etc.)
6. Click **Save** to save the configuration

## Usage

The plugin will automatically activate reCAPTCHA v3 on registration and login forms. To add Google reCAPTCHA to a custom form, use the following code:

```blade
@include($appPath.'::render', [
    'idForm' => 'your-form-id',
    'idButtonForm' => 'your-button-id',
    'titleButton' => 'Submit'
])
```

Where:
- `idForm`: ID of the form that needs captcha
- `idButtonForm`: ID of the original submit button (will be hidden)
- `titleButton`: Title of the new submit button

## Check operation

1. Access the registration or login page
2. Fill in the information and submit the form
3. If configured correctly, reCAPTCHA v3 will automatically verify the user

## Common troubleshooting

- **Captcha not displaying**: Check that the Site Key has been entered correctly
- **Verification error**: Check that the Secret Key has been entered correctly
- **Domain not allowed**: Make sure your domain has been added to the Domains list in the Google reCAPTCHA control panel

## Uninstallation

1. Go to **Admin Panel > Extension > Plugins**
2. Find **GoogleCaptcha**
3. Click the **Disable** button to disable the plugin
4. Click the **Uninstall** button to completely uninstall

## Support

If you have any issues with the plugin, please contact:
- Website: https://GP247.net

---

# Tài liệu Plugin Google reCAPTCHA v3

## Giới thiệu

Plugin Google reCAPTCHA cho GP247 giúp bảo vệ website của bạn khỏi spam và lạm dụng bằng cách tích hợp Google reCAPTCHA v3. Plugin này sử dụng cơ chế reCAPTCHA v3 giúp phân tích hành vi người dùng mà không cần xác thực thông qua hình ảnh hoặc checkbox.

## Yêu cầu

- GP247 phiên bản 1.1 trở lên
- Tài khoản Google reCAPTCHA v3

## Cài đặt

1. Cài đặt plugin thông qua Admin Panel của GP247:
   - Vào **Admin Panel > Extension > Plugins**
   - Tìm và chọn **GoogleCaptcha**
   - Nhấn vào nút **Install**

2. Sau khi cài đặt, kích hoạt plugin:
   - Trong danh sách plugin, tìm **GoogleCaptcha**
   - Nhấn vào nút **Enable**

## Cấu hình

### Đăng ký Google reCAPTCHA v3

1. Truy cập [Google reCAPTCHA Admin](https://www.google.com/recaptcha/admin)
2. Đăng nhập với tài khoản Google của bạn
3. Nhấn **+ Create** để tạo một site mới
4. Nhập tên cho site
5. Chọn **reCAPTCHA v3** trong mục **reCAPTCHA type**
6. Thêm domain của website vào mục **Domains**
7. Đồng ý với điều khoản dịch vụ và nhấn **Submit**
8. Sao chép **Site Key** và **Secret Key** được cung cấp

### Cấu hình plugin trong GP247

1. Đăng nhập vào Admin Panel
2. Vào **Extension > Plugins > GoogleCaptcha**
3. Nhập:
   - **Site Key**: Dán Site Key từ Google reCAPTCHA
   - **Secret Key**: Dán Secret Key từ Google reCAPTCHA
4. Lưu cấu hình

### Kích hoạt và cấu hình Captcha trong hệ thống

1. Sau khi đã nhập thông tin Site Key và Secret Key, vào **Shop Setting > Shop Config**
2. Chọn tab **Captcha**
3. Kích hoạt chức năng Captcha bằng cách chuyển trạng thái sang **ON**
4. Chọn loại captcha là **Google reCaptcha**
5. Tích chọn danh sách các trang sẽ áp dụng captcha (như đăng ký, đăng nhập, liên hệ, v.v.)
6. Nhấn **Save** để lưu cấu hình

## Sử dụng

Plugin sẽ tự động kích hoạt reCAPTCHA v3 trên các form đăng ký và đăng nhập. Để thêm Google reCAPTCHA vào form tùy chỉnh, sử dụng mã sau:

```blade
@include($appPath.'::render', [
    'idForm' => 'your-form-id',
    'idButtonForm' => 'your-button-id',
    'titleButton' => 'Submit'
])
```

Trong đó:
- `idForm`: ID của form cần thêm captcha
- `idButtonForm`: ID của nút submit gốc (sẽ được ẩn)
- `titleButton`: Tiêu đề của nút submit mới

## Kiểm tra hoạt động

1. Truy cập trang đăng ký hoặc đăng nhập
2. Điền thông tin và gửi form
3. Nếu cấu hình đúng, reCAPTCHA v3 sẽ tự động xác thực người dùng

## Xử lý lỗi phổ biến

- **Captcha không hiển thị**: Kiểm tra Site Key đã được nhập chính xác
- **Lỗi xác thực**: Kiểm tra Secret Key đã được nhập chính xác
- **Domain không được phép**: Đảm bảo domain của bạn đã được thêm vào danh sách Domains trong bảng điều khiển Google reCAPTCHA

## Gỡ cài đặt

1. Vào **Admin Panel > Extension > Plugins**
2. Tìm **GoogleCaptcha**
3. Nhấn vào nút **Disable** để vô hiệu hóa plugin
4. Nhấn vào nút **Uninstall** để gỡ cài đặt hoàn toàn

## Hỗ trợ

Nếu bạn gặp vấn đề với plugin, vui lòng liên hệ:
- Website: https://GP247.net
