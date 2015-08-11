# Medialist plugin 0.5.2

Medialist is the successor of the musiclist snippet, it creates a list of files from your media folder (Ogg, Mp3 and Pdf).

1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download [medialist.php](medialist.php?raw=true), copy it into your `system/plugins` folder.  

Create a `[medialist]` shortcut in your page.

The following arguments are available:
  
`PATTERN` = file name as [regular expression](https://en.wikipedia.org/wiki/Regular_expression)  
`STYLE` = list style  

For example:

    [medialist]
    [medialist .*ogg mediastyle]
    [medialist .*mp3 mediastyle]
    [medialist .*pdf mediastyle]

You can use this CSS in your theme:

    .content .mediastyle { margin:0; padding:0; list-style:none; width:100%; }  
    .content .mediastyle li { margin:0; padding:0.5em; }  
    .content .mediastyle li h5 { margin:0; padding:0; }

To list specific files, use prefix of the file name, example with `artist-song01.mp3`:

    [medialist artist.*mp3 mediastyle]
