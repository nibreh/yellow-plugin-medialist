# Musiclist snippet

List of music (ogg/mp3) and play them with `<audio>` tag.

1. Download and install [Yellow](https://github.com/markseu/yellowcms).
2. Download and install [include plugin](https://github.com/markseu/yellowcms-extensions/tree/master/plugins/include)
3. Download [musiclist.php](musiclist.php?raw=true), copy it into your `system/themes/snippets` folder.
4. Add .ogg & .mp3 files in your `media/music` folder
5. Include the snippet by editing your page : `[include snippet musiclist music/.*(ogg|mp3)]`

By the way, you can use this CSS in your theme:

```
.content .musiclist { margin:0; padding:0; list-style:none; width:100%; }  
.content .musiclist li {margin:0; padding:0.5em; }  
.content .musiclist li h5 {margin:0; padding:0; }`
```
