<script src="https://www.google.com/recaptcha/api.js"></script>
@if ($errors->has('captcha_field'))
<span class="help-block">
    {{ $errors->first('captcha_field') }}
</span>
@endif
<button id="gp247-recaptcha-button" class="g-recaptcha button"
        data-sitekey="{{ gp247_config('GoogleCaptcha_site_key') }}" 
        data-callback='onSubmit' 
        data-action='submit'>{{ $titleButton ?? gp247_language_render('front.captcha_action.submit') }}
</button>
<script>
    // Attach reCAPTCHA attributes to existing button if present
    // This keeps your original button styles and behaviors intact
    document.addEventListener('DOMContentLoaded', function () {
        var existingButton = document.getElementById("{{ $idButtonForm ?? 'gp247-button-process' }}");
        var fallbackButton = document.getElementById('gp247-recaptcha-button');

        if (existingButton) {
            existingButton.classList.add('g-recaptcha');
            existingButton.setAttribute('data-sitekey', "{{ gp247_config('GoogleCaptcha_site_key') }}");
            existingButton.setAttribute('data-callback', 'onSubmit');
            existingButton.setAttribute('data-action', 'submit');
            existingButton.setAttribute('type', 'button');

            if (fallbackButton) {
                fallbackButton.style.display = 'none';
            }
        }
    });

    function onSubmit(token) {
        document.getElementById("{{ $idForm ?? 'gp247-form-process' }}").submit();
    }
</script>