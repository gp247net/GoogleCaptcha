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