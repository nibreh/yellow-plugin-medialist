<?php
// Copyright (c) 2013-2015 Datenstrom, http://datenstrom.se
// This file may be used and distributed under the terms of the public license.
// Medialist plugin
class YellowMedialist
{
	const Version = "0.5.4";
	var $yellow;			//access to API
	// Handle initialisation
	function onLoad($yellow)
	{
		$this->yellow = $yellow;
		$this->yellow->config->setDefault("medialistStyle", "medialist");
	}
	
	// Handle page content parsing of custom block
	function onParseContentBlock($page, $name, $text, $shortcut)
	{
		$output = NULL;
		if($name=="medialist" && $shortcut)
		{
			list($pattern, $style, $size) = $this->yellow->toolbox->getTextArgs($text);
			if(empty($style)) $style = $this->yellow->config->get("medialistStyle");
			if(empty($size)) $size = "100%";
			$files = empty($pattern) ? $page->getFiles(true) : $this->yellow->files->index(true, true)->match("#$pattern#");
			if(count($files) && $this->yellow->plugins->isExisting("image"))
			{
				$page->setLastModified($files->getModified());
				$output = "<div class=\"".htmlspecialchars($style)."\">\n";
                    		$output .= "<ul>\n";
				foreach($files as $file)
				{

					switch($file->get("type"))
					{
						case "mp3":	$output .= "<li><audio controls=\"controls\">\n";
								$output .= "<source src=\"".htmlspecialchars($file->getLocation())."\" type=\"audio/mp3\" />\n";
								$output .= "</audio><br>\n";
	                					$output .= "<a href=\"".htmlspecialchars($file->getLocation())."\">".htmlspecialchars(basename($file->fileName))."</a></li>\n";
									break;
						case "ogg":	$output .= "<li><audio controls=\"controls\">";
								$output .= "<source src=\"".htmlspecialchars($file->getLocation())."\" type=\"audio/ogg\" />\n";
								$output .= "</audio><br>\n";
	                					$output .= "<a href=\"".htmlspecialchars($file->getLocation())."\">".htmlspecialchars(basename($file->fileName))."</a></li>\n";
									break;
                        			case "pdf":	$output .= "<li><a href=\"".htmlspecialchars($file->getLocation())."\">".htmlspecialchars(basename($file->fileName))."</a></li>\n";
									break;
					}

				}
				$output .= "</ul></div>\n";
			} else {
				$page->error(500, "Medialist '$pattern' does not exist!");
			}
		}
		return $output;
	}
}
$yellow->plugins->register("medialist", "YellowMedialist", YellowMedialist::Version);
?>
