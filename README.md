# Musiclist snippet

Snippet for [YellowCMS](https://github.com/markseu/yellowcms). 
List of music (ogg/mp3) and play them with `<audio>` tag.

1. Download and install [Yellow](https://github.com/markseu/yellowcms).
2. Download and install [include plugin](https://github.com/markseu/yellowcms-extensions/tree/master/plugins/include)
3. Download [musiclist.php](https://github.com/nibreh/yellowcms-musiclist/blob/master/musiclist.php), copy into your `system/snippets` folder.
4. Add .ogg & .mp3 files in your `media/music` folder
5. Include the snippet by editing your page : `[include snippet musiclist music/.*(ogg|mp3)]`

By the way, you can use this style :

`.content .musiclist { margin:0; padding:0; list-style:none; width:100%; }  
.content .musiclist li {margin:0; padding:0.5em; }  
.content .musiclist li h5 {margin:0; padding:0; }`

Thanks to Mark Seuffert for his help