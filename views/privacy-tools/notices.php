<div class="gdpr-notice">
    <?php if ('email_sent' === $_REQUEST['gdpr_notice']): ?>
        <?= __('We will send you an email with the link to access your data. Please check your spam folder as well!', 'gdpr'); ?>
    <?php endif; ?>

    <?php if ('invalid_email' === $_REQUEST['gdpr_notice']): ?>
        <?= __('The email you entered does not appear to be a valid email.', 'gdpr'); ?>
    <?php endif; ?>

    <?php if ('invalid_key' === $_REQUEST['gdpr_notice']): ?>
        <?= __('Sorry - the link seems to have expired. Please try again!', 'gdpr'); ?>
    <?php endif; ?>

    <?php if ('consent_withdrawn' === $_REQUEST['gdpr_notice']): ?>
        <?= __('Consent withdrawn.', 'gdpr'); ?>
    <?php endif; ?>

    <?php if ('request_sent' === $_REQUEST['gdpr_notice']): ?>
        <?= __('We have received your request and will reply within 30 days.', 'gdpr'); ?>
    <?php endif; ?>
</div>
