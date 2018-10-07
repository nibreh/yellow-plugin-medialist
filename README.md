# Medialist plugin

Medialist creates a list of files (Mp3, Ogg & PDF) from your media folder.

_Your browser must support [HTML5 audio tag](https://en.wikipedia.org/wiki/HTML5_Audio)_

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
    [medialist downloads/]
    [medialist .*pdf mediastyle]
    [medialist music/.*mp3 mediastyle]

To list specific files, use prefix of the file name. Example with `artist-song01.mp3`:

    [medialist artist-.*mp3]
    
You can use CSS to style medialist:

    .content .mediastyle ul {padding:0;list-style:none;}
    .content .mediastyle ul li {margin-top:1em;}
