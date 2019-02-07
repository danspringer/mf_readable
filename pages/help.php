<?php
$title = 'Readable für REDAXO 5';
$content = 'Readable ist ein kleines jQuery-Plugin, mit dem Sie Ihre Absätze beim Erstellen von Content besser lesbar machen können. Es fügt das Styling zwischen dem 45. und 75. Zeichen jedes <code>&lt;p&gt;</code> -Tags auf Ihrer Seite ein. Readable wird automatisch im Frontend aktiviert, wenn man im Backend in REDAXO eingeloggt ist. </p>
<p>Dadurch erhalten Sie eine visuelle Referenz, um anzuzeigen, ob Änderungen an der Schriftgröße oder Inhaltsbreite usw. erforderlich sind.</p>
<p>Lesen Sie, warum die 45-75-Regel wichtig ist, und sehen Sie sich die Demo hier an. <a href="https://readable.now.sh/">https://readable.now.sh/</a></p>
<p><img src="https://camo.githubusercontent.com/ac1c810d20e601e4810638b24382e5485c7b6f87/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f662e636c2e6c792f6974656d732f3038316b3169306c3147317330393062327432572f7265616461626c652e676966" alt="Readable.js für REDAXO 5" title="Readable Redaxo 5">';
$fragment = new rex_fragment();
$fragment->setVar('class', 'info', false);
$fragment->setVar('title', $title, false);
$fragment->setVar('body', '<p>' . $content . '</p>', false);
echo $fragment->parse('core/page/section.php');

?>

