<style>
    #{{ $idButtonForm ?? 'gp247-button-process'}}{
        display: none !important;
    }
</style>
<script src="https://www.google.com/recaptcha/api.js"></script>
@if ($errors->has('captcha_field'))
<span class="help-block">
    {{ $errors->first('captcha_field') }}
</span>
@endif
<button class="g-recaptcha button" 
        data-sitekey="{{ gp247_config('GoogleCaptcha_site_key') }}" 
        data-callback='onSubmit' 
        data-action='submit'>{{ $titleButton ?? gp247_language_render('front.captcha_action.submit') }}</button>
<script>
    function onSubmit(token) {
        document.getElementById("{{ $idForm ?? "gp247-form-process" }}").submit();
    }
</script>