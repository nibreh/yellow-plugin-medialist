<?php list($name, $pattern, $style) = $yellow->getSnippetArgs() ?>
<?php if(!$pattern) $pattern = basename($yellow->page->location).".(ogg|mp3)" ?>
<?php if(!$style) $style = "musiclist" ?>
<ul class="<?php echo htmlspecialchars($style) ?>">
<?php $path = dirname($pattern); $path = ($path!=".") ? $path."/" : ""; $regex = "/^".basename($pattern)."$/"; ?>
<?php foreach($yellow->toolbox->getDirectoryEntries($yellow->config->get("mediaDir").$path, $regex, true, false, false) as $fileName): ?>
<?php $location = $yellow->config->get("serverBase")."/media/".$path.$fileName; ?>
<li>
<h5><?php echo htmlspecialchars($fileName) ?> </h5>
<audio controls="controls">
<source src="<?php echo htmlspecialchars(str_replace(".mp3", ".ogg", $location)) ?>" type="audio/ogg" />
<source src="<?php echo htmlspecialchars($location) ?>" type="audio/mp3" />
Your browser does not support the audio tag.
</audio>
</li>
<?php endforeach ?>
</ul>
