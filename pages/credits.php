<?php
$title = 'Umsetzung für REDAXO';
$content = '<p>Medienfeuer, Daniel Springer</p>
<p>K&ouml;nigstra&szlig;e 22<br />
Im Marquardtbau am Schlo&szlig;platz<br />
70173 Stuttgart<br /><br />
+49 (0)711 / 217 249 507<br />
info@medienfeuer.de</p>
<p><a href="https://www.medienfeuer.de" target="_blank">www.medienfeuer.de</a></p>';
$fragment = new rex_fragment();
$fragment->setVar('class', 'info', false);
$fragment->setVar('title', $title, false);
$fragment->setVar('body', $content, false);
echo $fragment->parse('core/page/section.php');


$title = 'Readable';
$content = '<p>Readable is a small jQuery plugin to help you make your paragraphs, well, more readable. It injects styling between the 45th and 75th character of every <code>&lt;p&gt;</code> tag on your page.

This gives you a visual reference to tell you if tweaks are needed on your font-size or content width, etc.

Read why the 45-75 rule is important and <a href="https://readable.now.sh/" target="_blank">view the demo here</a>.</p

<ul>
<li>@author    Matt D. Smith <a href="mailto:matt@mds.is">matt@mds.is</a></li>
<li>@copyright 2015 Matt D. Smith <a href="mailto:matt@mds.is">matt@mds.is</a></li>
<li>@license   <a href="https://raw.githubusercontent.com/mds/readable/master/LICENSE">https://raw.githubusercontent.com/mds/readable/master/LICENSE</a>  The MIT License (MIT)</li>
<li>@link      <a href="https://github.com/mds/readable">https://github.com/mds/readable</a></li>
</ul>';
$fragment = new rex_fragment();
$fragment->setVar('class', 'info', false);
$fragment->setVar('title', $title, false);
$fragment->setVar('body', $content, false);
echo $fragment->parse('core/page/section.php');

?>