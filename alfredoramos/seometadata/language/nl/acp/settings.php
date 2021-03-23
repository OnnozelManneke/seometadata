<?php

/**
 * SEO Metadata extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @copyright 2018 Alfredo Ramos
 * @license GNU GPL-2.0-only
 */

/**
 * @ignore
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
 * @ignore
 */
if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'ACP_SEO_METADATA_EXPLAIN' => '<p>Hier kunt u de metagegevens configureren die u wilt genereren en weergeven. Raadpleeg de <a href="https://www.phpbb.com/customise/db/extension/seo_metadata/faq" rel="external nofollow noreferrer noopener" target="_blank"><strong>FAQ</strong></a> voor meer informatie. Als u hulp nodig heeft, gaat u naar de <a href="https://www.phpbb.com/customise/db/extension/seo_metadata/support" rel="external nofollow noreferrer noopener" target="_blank"><strong>Support</strong></a> sectie</p>',
	'ACP_SEO_METADATA_INFO' => 'Wijzigingen in de volgende waarden worden alleen toegepast op nieuwe onderwerpen, als u wilt dat deze ook op oude onderwerpen worden toegepast, moet u de cache leegmaken.',

	'ACP_SEO_METADATA_META_DESCRIPTION' => 'Beschrijving inschakelen',
	'ACP_SEO_METADATA_META_DESCRIPTION_EXPLAIN' => 'Beschrijving metatag.',

	'ACP_SEO_METADATA_DESC_LENGTH' => 'Beschrijving lengte',
	'ACP_SEO_METADATA_DESC_LENGTH_EXPLAIN' => 'Maximale lengte voor beschrijving die zal worden gebruikt in metatags zoals <samp>og:description</samp>. Het heeft een max. limiet van <samp>255</samp> tekens.',
	'ACP_SEO_METADATA_DESC_STRATEGY' => 'Beschrijving strategie',
	'ACP_SEO_METADATA_DESC_STRATEGY_EXPLAIN' => '<samp>Knip</samp> Knipt de beschrijving af op exacte positie als deze de maximale lengte overschrijdt.<br><samp>Ellipsis</samp> voegt een elipsis (<code>…</code>) toe aan het einde van de beschrijving als deze de maximale lengte overschrijdt.<br><samp>Breek woorden</samp> past zoveel mogelijk woorden zonder de maximale lengte te overschrijden.',
	'ACP_SEO_METADATA_DESC_CUT' => 'Knip',
	'ACP_SEO_METADATA_DESC_ELLIPSIS' => 'Ellipsis',
	'ACP_SEO_METADATA_DESC_BREAK_WORDS' => 'Breek woorden',

	'ACP_SEO_METADATA_IMAGE_STRATEGY' => 'Beeldstrategie',
	'ACP_SEO_METADATA_IMAGE_STRATEGY_EXPLAIN' => '<samp>Eerst gevonden</samp> selecteert de eerste gevonden afbeelding die kan worden gebruikt in de berichttekst.<br><samp>Afbeelding afmetingen</samp> selecteert de afbeelding met de grootste afmetingen (breedte, hoogte) binnen het bericht.',
	'ACP_SEO_METADATA_IMAGE_FIRST' => 'Eerst gevonden',
	'ACP_SEO_METADATA_IMAGE_DIMENSIONS' => 'Afbeelding afmetingen',

	'ACP_SEO_METADATA_DEFAULT_IMAGE' => 'Standaard afbeelding',
	'ACP_SEO_METADATA_DEFAULT_IMAGE_EXPLAIN' => 'Standaard afbeelding URL voor metatags zoals <samp>og:image</samp>. Het wordt alleen gebruikt als er geen afbeelding kan worden gevonden op de huidige pagina. Het moet groter zijn dan <samp>200</samp>x<samp>200</samp>px en relatief ten opzichte van <samp>%s</samp>',

	'ACP_SEO_METADATA_DEFAULT_IMAGE_DIMENSIONS' => 'Standaard afbeelding dimensies',
	'ACP_SEO_METADATA_DEFAULT_IMAGE_DIMENSIONS_EXPLAIN' => 'Breedte x hoogte van standaardafbeelding.',
	'ACP_SEO_METADATA_DEFAULT_IMAGE_WIDTH' => 'Standaard afbeeldingsbreedte',
	'ACP_SEO_METADATA_DEFAULT_IMAGE_HEIGHT' => 'Standaard afbeeldingshoogte',

	'ACP_SEO_METADATA_DEFAULT_IMAGE_TYPE' => 'Standaard afbeeldingstype',
	'ACP_SEO_METADATA_DEFAULT_IMAGE_TYPE_EXPLAIN' => 'Het MIME type standaardafbeelding.',

	'ACP_SEO_METADATA_LOCAL_IMAGES' => 'Locale afbeeldingen',
	'ACP_SEO_METADATA_LOCAL_IMAGES_EXPLAIN' => 'Haal alleen afbeeldingen op uit uw domein (<samp>%s</samp>).',

	'ACP_SEO_METADATA_ATTACHMENTS' => 'Inclusief bijlagen',
	'ACP_SEO_METADATA_ATTACHMENTS_EXPLAIN' => 'Voeg ook afbeeldingen van bijlagen toe. Ze worden gekozen in dezelfde volgorde waarin ze zijn geüpload.',

	'ACP_SEO_METADATA_PREFER_ATTACHMENTS' => 'Geef de voorkeur aan bijlagen',
	'ACP_SEO_METADATA_PREFER_ATTACHMENTS_EXPLAIN' => 'Bijlage afbeeldingen hebben een hogere prioriteit dan degene die uit de post zijn gehaald.',

	'ACP_SEO_METADATA_POST_METADATA' => 'Bericht metadata',
	'ACP_SEO_METADATA_POST_METADATA_EXPLAIN' => 'Genereer ook metadata voor specifieke bericht URL’s.',

	'ACP_SEO_METADATA_DATA_EXPLAIN' => 'Metadata worden dynamisch gegenereerd op basis van uw forum gegevens.',

	'ACP_SEO_METADATA_GLOBAL_SETTINGS' => 'Algemene instellingen',

	'ACP_SEO_METADATA_OPEN_GRAPH_SETTINGS' => 'Open Graph instellingen',
	'ACP_SEO_METADATA_OPEN_GRAPH' => 'Open Graph inschakelen',

	'ACP_SEO_METADATA_FACEBOOK_APPLICATION' => 'Facebook applicatie ID',
	'ACP_SEO_METADATA_FACEBOOK_APPLICATION_EXPLAIN' => 'Identificatie van uw Facebook applicatie.',
	'ACP_SEO_METADATA_FACEBOOK_PUBLISHER' => 'Facebook uitgever',
	'ACP_SEO_METADATA_FACEBOOK_PUBLISHER_EXPLAIN' => 'De URL van uw Facebook pagina.',

	'ACP_SEO_METADATA_TWITTER_CARD_SETTINGS' => 'Twitter Cards instellingen',
	'ACP_SEO_METADATA_TWITTER_CARDS' => 'Schakel Twitter Cards in',
	'ACP_SEO_METADATA_TWITTER_PUBLISHER' => 'Twitter uitgever',
	'ACP_SEO_METADATA_TWITTER_PUBLISHER_EXPLAIN' => 'De gebruikersnaam van uw website Twitter account.',

	'ACP_SEO_METADATA_JSON_LD_SETTINGS' => 'JSON-LD instellingen',
	'ACP_SEO_METADATA_JSON_LD' => 'Schakel JSON-LD in',
	'ACP_SEO_METADATA_JSON_LD_LOGO' => 'Logo van de uitgever',
	'ACP_SEO_METADATA_JSON_LD_LOGO_EXPLAIN' => 'Een aangepast logo dat door Google wordt gebruikt in de zoekresultaten. Het moet groter zijn dan <samp>112</samp>x<samp>112</samp>px en relatief aan <samp>%s</samp>',
	'ACP_SEO_METADATA_JSON_LD_LOGO_DIMENSIONS' => 'Afmetingen uitgeverslogo',
	'ACP_SEO_METADATA_JSON_LD_LOGO_DIMENSIONS_EXPLAIN' => 'Breedte x hoogte van het uitgeverslogo.',

	'ACP_SEO_METADATA_EXTRACTED_IMAGE_DATA' => 'Deze gegevens worden uit de afbeelding gehaald.',

	'ACP_SEO_METADATA_VALIDATE_INVALID_FIELDS' => 'Ongeldige waarden voor velden: %s',
	'ACP_SEO_METADATA_VALIDATE_INVALID_IMAGE' => 'De waarde die is opgegeven voor afbeelding <samp>%1$s</samp> heeft een lege URL gegenereerd.<br>Het kan zijn dat er een niet bestaande afbeelding is opgegeven of dat de bestandsnaam buiten de <samp>/images/</samp> folder is geplaatst.',
	'ACP_SEO_METADATA_VALIDATE_SMALL_IMAGE' => 'De afmetingen voor afbeelding <samp>%1$s</samp> moeten groter zijn dan <samp>%2$s</samp>x<samp>%3$s</samp>px',
	'ACP_SEO_METADATA_VALIDATE_INVALID_MIME_TYPE' => 'Het MIME type <samp>%2$s</samp> voor afbeelding <samp>%1$s</samp> is niet toegestaan.'
]);
