# Medialist plugin 0.6.4

Medialist creates a list of files from your media folder.

Support Mp3, Ogg & PDF - _Your browser must support [HTML5 audio tag](https://en.wikipedia.org/wiki/HTML5_Audio)_

1. [Download and install Yellow](https://github.com/datenstrom/yellow/).
2. Download and install [Image plugin](https://github.com/datenstrom/yellow-plugins/tree/master/image).
3. Download [master.zip](https://github.com/nibreh/yellow-plugin-medialist/archive/master.zip). If you are using Safari, right click and select 'Download file as'.
4. Copy `master.zip` into your `system/plugins` folder.

## How to list media?

Create a `[medialist]` shortcut in your page.

The following arguments are available:

`LOCATION` = location of the folder  
`PATTERN` = file name as [regular expression](https://en.wikipedia.org/wiki/Regular_expression)  
`STYLE` = list style  

## Example:
    
    [medialist /]
    [medialist mp3/]
    [medialist .*ogg]
    [medialist .*mp3 mediastyle]
    [medialist .*pdf mediastyle]

To list specific files, use prefix of the file name. Example with `artist-song01.mp3`:

    [medialist artist-.*mp3]
    
You can use CSS to style medialist:

    .content .medialist ul {padding:0;list-style:none;}
    .content .medialist ul li {margin-top:1em;}
