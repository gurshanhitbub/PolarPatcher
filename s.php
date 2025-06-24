<?php
// Target URL
$url = 'https://sniffyscripts.unaux.com/axiom/scripts';

// Fetch HTML content using file_get_contents
$htmlContent = file_get_contents($url);

// Check if the content was successfully fetched
if ($htmlContent === false) {
    die("Failed to retrieve content from $url");
}

// Replace all occurrences of "Axiom" with "WTS"
$modifiedContent = str_replace("Axiom", "WTS", $htmlContent);

// Output the modified content
echo $modifiedContent;

// Optional: Save to file
// file_put_contents('modified_page.html', $modifiedContent);
?>
