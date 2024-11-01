=== Plugin Name ===
SparkEmbed

Contributors:      codecide
Plugin Name:       SparkChart Embed
Plugin URI:        https://plugins.codecide.net/product/spe
Tags:              shortcode, iframe, surveys, spark chart, sparkchart, satellite
Author URI:        https://plugins.codecide.net/
Author:            codecide
Donate link:       https://www.redcross.org/donate/donation
Requires PHP:      5.4
Requires at least: 4.5
Tested up to:      5.3.2
Stable tag:        1.0.0
Version:           1.0.0

== Description ==
_SparkChart Embed_ -- aka SparkEmbed -- is a lightweight module that allows Spark Chart (https://www.sparkchart.com/) users to easily embed satellite surveys in a WordPress post or page using a configurable shortcode. The authors of the plugin are not related to SparkChart.com, nor is this an endorsement of the product -- and vice versa. 

The module can be disabled from the settings page. 
*Important:* The module is disabled by default. If you leave the _Enabled_ box unchecked, the plugin will have no effect at all. 

Pattern: [spark]https://survey.sparkchart.com/start/{id}/[/spark]
Shortcodes with the pattern above will display the referenced Spark Chart satellite survey in an iframe.

Shortcode configuration:

The following attributes can be used to configure the display of the iframe and/or its wrapper:

* class
    * A CSS class that will be applied to the outer wrapper (div). Defaults to none.
    * Example: [spark class="my_awesome_class"]https://survey.sparkchart.com/start/{id}/[/spark]
* width
    * The width of the iframe. If no unit is provided, _px_ will be used. Defaults to 100%. 
    * Example: [spark width="88%"]https://survey.sparkchart.com/start/{id}/[/spark]
* height
    * The height of the iframe. By default, the height of the iframe element will be set to 90% of the height of the current viewport, set through JavaScript. Setting a _height_ value will override that behavior. If no unit is provided, _px_ will be used. Defaults to none.
    * Example: [spark height="1200"]https://survey.sparkchart.com/start/{id}/[/spark]
* border_width, border_color, border_style, background_color, padding
    * CSS properties aliases applied to the outer frame. This allows users to specify a border and other styling attributes. Note that it is recommended to use the _class_ attribute and write your own CSS rule instead. Also note the underscore character replacing the hyphen in the original CSS property name.
    * Example: [spark border_width="1" border_color="red"]https://survey.sparkchart.com/start/{id}/[/spark]

== Installation ==

Install and configure the plugin as needed in the SparkEmbed settings page: /wp-admin/admin.php?page=sparkembed_settings. 

_Note_ that the plugin is not enabled by default. Check the _Enabled_ box in the settings page to turn it on.

General information about installing WordPress plugins can be found [here](https://codex.wordpress.org/Managing_Plugins#Installing_Plugins)

== Upgrade Notice ==
= 1.0.0 =
Initial release

== Screenshots ==
1. The configuration screen.

== Changelog ==
= 1.0 =
* Initial release.

== Roadmap ==

* Allow custom shortcode identifier
* Add lightbox option

== Frequently Asked Questions ==
= Is it official? = 
No, the authors have no affiliation with Spark Chart. We use Spark Chart for customer and market surveys internally, but we do not promote or profit in any way from its usage.
= Is it really free? =
Yes, this plugin is completely free. 
= I found a bug/I need a feature =
Please leave a comment on the plugin's official page and we will address it as soon as possible.

== Donations ==
None needed. 
