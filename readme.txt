
=== The GDPR Framework ===
Contributors: codelight
Tags: gdpr
Requires at least: 4.7
Tested up to: 4.9.5
Requires PHP: 5.6.33
Stable tag: 1.0.5
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.en.html

Easy to use tools to help make your website GDPR-compliant. Fully documented, extendable and developer-friendly.

== Description ==

Easy to use tools to help make your website GDPR-compliant.

GDPR is a whopping 88 pages of legal text. Becoming compliant takes a lot more than just adding a couple of checkboxes to your forms! But worry not, we’ve got it covered. With help from [Triniti](https://triniti.eu), one of the top business and IT law firms in Europe, we’ve put together this plugin and written a thorough guide for making WordPress sites compliant with minimal effort.

You don't need to drown your customers in pointless acceptance checkboxes if you know what you're doing!

## Disclaimer
Using The GDPR Framework does NOT guarantee compliance to GDPR. This plugin gives you general information and tools, but is NOT meant to serve as complete compliance package. Compliance to GDPR is risk-based ongoing process that involves your whole business. Codelight is not eligible for any claim or action based on any information or functionality provided by this plugin.

### Documentation
Full documentation: [The WordPress Site Owner's Guide to GDPR](https://codelight.eu/wordpress-gdpr-framework/wordpress-site-owners-guide-to-gdpr/)
For developers: [Developer Docs](https://codelight.eu/wordpress-gdpr-framework/developer-docs/)

### Features
&#9745; Allow both users and visitors without an account to view, export and delete their personal data;
&#9745; Configure the plugin to delete or anonymize personal data automatically or send a notification and allow admins to do it manually;
&#9745; Track, manage and withdraw consent;
&#9745; Generate a GDPR-compatible Privacy Policy template for your site;
&#9745; Comes with a helpful installation wizard to get you started quickly;
&#9745; Fully documented;
&#9745; Developer-friendly. Everything can be extended, every feature and template can be overridden.

We're just getting started. There's lots more to come!

### Plugin support:
The GDPR Framework currently works with the following plugins
&#9745; Contact Form 7
&#9745; Gravity Forms - [Download the GDPR add-on](https://wordpress.org/plugins/gdpr-for-gravity-forms/)
&#9745; Formidable Forms - [Download the GDPR add-on](https://wordpress.org/plugins/gdpr-for-formidable-forms/)
&#9745; WPML

Coming in April 2018:
&#9744; Ninja Forms
&#9744; Contact Form 7 Flamingo

Still free and open-source.

Other integrations coming soon:
&#9744; WP Migrate DB
&#9744; WooCommerce (postponed until the launch of their own compliance toolkit)
&#9744; Easy Digital Downloads

We're happy to add support for other major plugins as well. If you have a request, get in touch!

== Changelog ==

= 1.0.5 =
* Add Spanish support (Thanks @elarequi!)
* Lower required PHP version to 5.6.0
* Re-add container alias for DataSubjectManager
* Fix for installer giving the option to add links to footer for unsupported themes
* Fix PHP notice in WPML module

= 1.0.4 =
* Fix translations, for real this time
* Add French translations (Thanks @datagitateur!)
* Fix PHP warning if WPML is activated
* Add filter around $headers array for all outgoing emails sent via this plugin

= 1.0.3 =
* Change text domain to 'gdpr-framework' to avoid conflict with other plugins
* Add Portuguese translation (Thanks @kativiti!)
* Add partial Estonian translation

= 1.0.2 =
* Fix T&C and Privacy Policy URLs on registration and comments forms
* Add basic styling and separate stylesheet for Privacy Tools page
* Allow disabling styles for Privacy Tools page via admin
* Add confirmation notice on deleting data via front-end Privacy Tools
* Change strings with 'gdpr-admin' domain back to 'gdpr'. Add context to all admin strings.

= 1.0.1 =
* Fix PHP notice on Privacy Tools frontend page if logged in as admin

= 1.0.0 =
* Initial release
