<?php

/** @var rex_addon $this */

// Daten wie Autor, Version, Subpages etc. sollten wenn möglich in der package.yml notiert werden.
// Sie können aber auch weiterhin hier gesetzt werden:
$this->setProperty('author', 'Daniel Springer, Medienfeuer');

// Die Datei sollte keine veränderbare Konfigurationen mehr enthalten, um die Updatefähigkeit zu erhalten.
// Stattdessen sollte dafür die rex_config verwendet werden (siehe install.php)

// Klassen und lang-Dateien müssen hier nicht mehr eingebunden werden, sie werden nun automatisch gefunden.


// Im Frontend einbinden, wenn eingeloggt in Redaxo
if (!rex::isBackend() && rex_backend_login::hasSession()) {
    
    
	rex_view::addJsFile($this->getAssetsUrl('readable.js?v=' . $this->getVersion()));
	
	// CSS
	rex_extension::register('OUTPUT_FILTER', function(rex_extension_point $ep)
        {
            $suchmuster = array(
                '</head>'
            );
            $ersetzen   = array(
                '<link rel="stylesheet" href="'.$this->getAssetsUrl('readable.css?v=' . $this->getVersion()).'" media="all"></head>'
            );
            $ep->setSubject(str_replace($suchmuster, $ersetzen, $ep->getSubject()));
        });
	// JS
	rex_extension::register('OUTPUT_FILTER', function(rex_extension_point $ep)
        {
            $suchmuster = array(
                '</body>'
            );
            $ersetzen   = array(
                '<script src="'.$this->getAssetsUrl('readable.js?v=' . $this->getVersion()).'"></script></body>'
            );
            $ep->setSubject(str_replace($suchmuster, $ersetzen, $ep->getSubject()));
        });	
        
    
} // EoF if !rex Backend