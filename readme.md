# huhu

Huhu is the WordPress Theme running on [unmus.de](https://www.unmus.de/).

## Description 

The WordPress Theme Huhu is a reengineered variant of the [Suidobashi Theme](https://www.elmastudio.de/wordpress-themes/suidobashi/) by [Elmastudio](https://www.elmastudio.de/). It's created specially for [unmus.de](https://www.unmus.de/). Using huhu on other WordPress is not recommended.

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
* Kunsthalle (Pinseldisko)
* Tagebuch (Zimtwolke)
* Fotoalbum (Raketenstaub)

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

## Special Templates

* Page Tweets (Mathilda)
* Page Troets (TootPress)

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

## Image Sizes

* 300x300 (WP Standard Medium)
* 250x250c (Rocket Thumb)
* 1300x0 (Extra Large)
* 1024x1024 (WP Standard Large)

## Fonts

Huhu uses the Font Source Sans Pro. All font files are embedded and will be loaded locally at runtime. Font updates can be fetched at Google Fonts.

## Languages

The theme supports German only (hard-coded).

## Plugin Dependencies

Following plugins are required at runtime.

* unmus Custom Plugin
* [Podlove Publisher](https://publisher.podlove.org)
* [WP-PageNavi](https://de.wordpress.org/plugins/wp-pagenavi/)
* [AMP](https://de.wordpress.org/plugins/amp/)
* [Advanced Custom Fields](https://www.advancedcustomfields.com)

## Plugin Styles Support

In addition styles of the following plugins are supported.

* Envira Gallery
* Lightweight Subscribe Comments
* MailChimp
* Mathilda
* TootPress

## Custom Fields Dependencies

Following custom fields are supported.

* Custom Field pinseldisko_sketchnote_description
* Custom Field pinseldisko_sketchnote_image
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

## Previous Functions

* AMP Support: Post, Ello, Pinseldisko, Raketenstaub

## Branches

This repository follows the git-flow workflow to a large extent.

* master branch is the latest release
* develop branch is the current state of development
* feature branches contain dedicated features in development
* bugfix branches contain dedicated bugfixes in development

Hotfix and release branches will not be applied in most cases.

## Unterstanding the Deployment

Branches will be deployed continously onto the environments. The master branch is connected with the productive environment and the develop branch is connected with the test environment. The deployment itself is managed by GitHub Actions. Releases are not used in the regular way. Releases can be understood as freeze of functional bundels.

## Built With

* [Visual Studio Code](https://code.visualstudio.com)
* [Adobe Experience Design](http://www.adobe.com/de/products/experience-design.html)

## License

This project is licensed under the GPL3 License.

## Changelog

### 0.8

Release pending

* Added: Styles for wp-block-image (Gutenberg)
* Added: Styles for Embedded Content (Embed Privacy)
* Bugfix: URL Breakout on Mobile (Toots)
* Bugfix: URL Breakout on Mobile (Tweets)
* Bugfix: Not declared Variable in Date/Author archive

### 0.7

Released: 22.03.2023

* Added: TootPress Support (Styles & Template)
* Added: Gutenberg Rendering Correction WordPress 5.7
* Added: WordPress Standard Image Sizes
* Changed: Download GIF moved to Asses
* Fixed: Visibility Comment List WordPress 5.5
* Fixed: Layout Issue with Search Results on Large Screens affecting Raketenstaub
* Removed: Beta CSS Process
* Adjusted: Podlove Contributors CSS

### 0.6

Released: 02.08.2020

* Added: Getting started with ACF
* Added: Using Excerpt Pinseldisko Description
* Added: BETA CSS
* Added: Tagebuch Taxonomy
* Added: Pinseldisko Taxonomy
* Added: Raketenstaub Taxonomy
* Added: CSS @ Mathilda Numbering
* Added: CSS @ Embedded Media Player
* Changed: Google Font Source Sans Pro locally integrated
* Changed: Taxonomy Label Zirkusliebe
* Changed: CC Process @ Pinseldisko
* Changed: CC Process @ Zirkusliebe
* Changed: CC Process @ Posts
* Changed: CC Process @ Zimtwolke
* Fixed: Last Paragraph Margin @ Box

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
