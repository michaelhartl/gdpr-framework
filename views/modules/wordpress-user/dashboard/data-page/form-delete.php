<table class="form-table">
    <tr>
        <th>
            <label>
                <?= __('Delete this user and all data', 'gdpr-admin') ?>
            </label>
        </th>
        <td>
            <?php if ($showDelete): ?>
                <a class="button" href="<?= esc_url($url); ?>">
                    <?= __('Delete my data', 'gdpr-admin') ?>
                </a>
                <br/>
                <p class="description">
                    <?= __('Delete all data we have gathered about you.', 'gdpr') ?> <br/>
                    <?= __('If you have a user account on our site, it will also be deleted.', 'gdpr') ?> <br/>
                    <?= __('Be careful - this action is permanent and CANNOT be undone.', 'gdpr') ?>
                </p>
            <?php else: ?>
                <p>
                    <em>
                        <?= __('You seem to have an administrator or equivalent role, so deleting/anonymizing via this page is disabled.'); ?>
                    </em>
                </p>
            <?php endif; ?>
        </td>
    </tr>
</table>


