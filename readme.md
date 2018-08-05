# huhu

Huhu is the WordPress Theme running on [unmus.de](https://www.unmus.de/).

## Description 

The WordPress Theme Huhu is an reengineered variant of the [Suidobashi Theme](https://www.elmastudio.de/wordpress-themes/suidobashi/) by [Elmastudio](https://www.elmastudio.de/). It's created specially for [unmus.de](https://www.unmus.de/). Using huhu on other WordPress is not recommended.

## Supported WordPress Templates

* Blog Archive
* Tag Archive
* Category Archive
* Author Archive
* Date Archive
* Single Post
* Search
* Page
* Image
* Zip Attachement
* Embed
* Header
* Footer
* Comments
* 404
* Maintenance

## Supported Custom Post Types

All custom post types have an archive and single template.

* Episodes (Podlove Publisher)
* Pinseldisko (unmus related) 
* Ello (unmus related)
* Raketenstaub (unmus related)

# Supported Custom Taxonomies

All custom taxonomies have an archive template.

* Artist (Podcast)

## Supported Post Formats

Post Formats are designed for the usage with CPT Ello.

* Quote 
* Image 

## Supported Page Templates

* Standard
* Full Width

## Template Parts

* Meta 
* About
* Microformats 

## AMP Support

* Single Post
* Single Ello
* Single Pinseldisko
* Single Raketenstaub

## Advanced Functionality

* [Microformats](http://microformats.org)
* Valid W3C HTML5 Code

## Critical Path CSS

Included as reference for manual usage.

## Integrated JavaScripts

* HTML5 Shiv (HTML5 Support Extension)
* Huhu (unmus related)
* FitVids (jQuery Extension for Videos)
* Transform (depreciated)

## Further Extensions

* Widget Area (only for CPT Single Episode)
* Shortcodes
* HTML Filter (ensuring W3C valid HTML output)

## Fonts

Huhu uses the Google Font Source Sans Pro. It will be loaded dynamicly. For local integration all required files are enclosed. 

## Languages

The theme supports German only (hard-coded).

## Plugin Dependencies

Following plugins are required at runtime.

* unmus Custom Plugin
* [Podlove Publisher](https://publisher.podlove.org)
* [WP-PageNavi](https://de.wordpress.org/plugins/wp-pagenavi/)
* [AMP](https://de.wordpress.org/plugins/amp/)

## Plugin Styles Support

In addition styles of the following plugins are supported.

* Lightweight Subscribe Comments
* Mathilda
* MailChimp
* Envira Gallery

## Custom Fields Dependencies

Following custom fields are supported.

* Custom Field pinseldisko_sketchnote_description
* Custom Field licence_type
* Custom Field licence_version
* Custom Field licence_include
* Custom Field licence_exclude
* Custom Field rocket_photographer_other

## Responsive Resolutions

Following screen resolution are marked up with CSS.

* Smartphone
* Tablet Portrait
* Tablet Landscape
* 13inch
* Larger Desktop Screens (up to 1260 pixel width)
* 15inch
* 21inch
* 27inch

## Notes

This theme does not add any new logic to WordPress or generate new data within WordPres. All code is limited to the user interface and its HTML output.

## Installation

1. Do it the WordPress Way! 
2. Put the critical css into your caching pluin (if applicable)
3. Copy maintenance.php into the folder wp-content

## Built With

* [Visual Studio Code](https://code.visualstudio.com)
* [Adobe Experience Design](http://www.adobe.com/de/products/experience-design.html)

## License

This project is licensed under the GPL3 License.

## Changelog

### 0.6

Release pending

* Added: CSS @ Mathilda Numbering
* Added: CSS @ Embedded Media Player

### 0.5

Released: 24.03.2018

* Added: Envira Gallery Styles
* Added: Template & Styles for Custom Taxonomy Artist
* Added: Podlove Contributor List Styles
* Improved: wpPage-Navi Styles
* Changed: Bottom Padding H2 Archive View
* Changed: Smaller Raketenstaub Images @ Archives
* Removed: Selfreferential Link on Single Raketenstaub
* Fixed: Headline Top Margin @ Search Results Raketenstaub
* Fixed: Side-Effect Envira Styles

### 0.4

Released: 14.02.2018

* Changed: Raketenstaub Grid View to Classic List View
* Added: Other Photographs @ Rocket Format
* Removed: Search Filter for Post Formats Quote & Image
* Fixed: Social Icons Alignment @ AMP Output

### 0.3

Released: 28.01.2018

* New: Raketenstaub Archive Template
* New: Raketenstaub Single Template
* New: Raketenstaub AMP Template
* Added: 2 additional Image Sizes
* Fixed: Position Menu @ Large Screens

### 0.2

Released: 20.01.2018

* New: Date Template 
* New: Zip Attachement Template
* New: Embed Template
* Changed: Link Color @ Comments
* Fixed: Page Template Full Width (now really full width ;-)
* Fixed: No CPT Quotes & CPT Images in Author Archive
* Added: Pinseldisko Thumbnails @ Search Results & Archives
* Added: Search Results Description
* Added: Theme Icon
* Added: ReadMe

### 0.1

Released: 14.09.2017

* Initial Theme Release