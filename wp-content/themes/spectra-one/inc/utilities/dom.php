<?php
/**
 * Target DOM Elements
 *
 * @package Spectra One
 * @author Brainstorm Force
 * @since 0.0.1
 */

declare( strict_types=1 );

namespace Swt;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use function bin2hex;
use function iconv;
use function libxml_clear_errors;
use DOMDocument;
use DOMElement;
use function is_a;
use function libxml_use_internal_errors;
use function current;
use function preg_replace_callback;
use function ltrim;
use function strtoupper;
use function sprintf;

/**
 * Formatted DOMDocument object from string.
 *
 * @since 0.0.1
 *
 * @param string $html HTML string to convert to DOM.
 *
 * @return \DOMDocument
 */
function dom( string $html ): DOMDocument {
	$dom = new DOMDocument();

	if ( ! $html ) {
		return $dom;
	}

	$libxml_previous_state   = libxml_use_internal_errors( true );
	$dom->preserveWhiteSpace = true;

	if ( defined( 'LIBXML_HTML_NOIMPLIED' ) && defined( 'LIBXML_HTML_NODEFDTD' ) ) {
		$options = LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD;
	} elseif ( defined( 'LIBXML_HTML_NOIMPLIED' ) ) {
		$options = LIBXML_HTML_NOIMPLIED;
	} elseif ( defined( 'LIBXML_HTML_NODEFDTD' ) ) {
		$options = LIBXML_HTML_NODEFDTD;
	} else {
		$options = 0;
	}

	$html = preg_replace_callback(
		'/[\x{80}-\x{10FFFF}]/u',
		static fn( array $matches ): string => sprintf(
			'&#x%s;',
			ltrim(
				strtoupper(
					bin2hex(
						iconv(
							'UTF-8',
							'UCS-4',
							current( $matches )
						)
					)
				),
				'0'
			)
		),
		$html
	);

	if ( ! empty( $html ) ) {
		$dom->loadHTML( $html, $options );
	}
	$dom->formatOutput = true;

	libxml_clear_errors();
	libxml_use_internal_errors( $libxml_previous_state );

	return $dom;
}

/**
 *  Formatted DOMElement object from a DOMDocument object.
 *
 * @since 0.0.1
 *
 * @param string $tag            HTML tag.
 * @param mixed  $dom_or_element DOMDocument.
 * @param int    $index          Index of element to return.
 *
 * @return \DOMElement|null
 */
function get_dom_element( string $tag, $dom_or_element, int $index = 0 ) {
	if ( ! is_a( $dom_or_element, DOMDocument::class ) && ! is_a( $dom_or_element, DOMElement::class ) ) {
		return null;
	}

	$element = $dom_or_element->getElementsByTagName( $tag )->item( $index );

	if ( ! $element ) {
		return null;
	}

	return dom_element( $element );
}

/**
 * DOMNode to a DOMElement.
 *
 * @since 0.0.1
 *
 * @param mixed $node DOMNode.
 *
 * @return \DOMElement|null
 */
function dom_element( $node ) {
	if ( $node->nodeType === XML_ELEMENT_NODE ) {
		return $node;
	}

	return null;
}

/**
 * Change html tag name.
 *
 * @since 0.0.1
 *
 * @param \DOMElement $element DOM Element.
 * @param string     $name    Tag name.
 *
 * @return \DOMElement
 */
function change_tag_name( DOMElement $element, string $name ): DOMElement {
	if ( ! $element->ownerDocument ) {
		return new DOMElement( $name );
	}

	$child_nodes = array();

	foreach ( $element->childNodes as $child ) {
		$child_nodes[] = $child;
	}

	$new_element = $element->ownerDocument->createElement( $name );

	foreach ( $child_nodes as $child ) {
		$child2 = $element->ownerDocument->importNode( $child, true );
		$new_element->appendChild( $child2 );
	}

	foreach ( $element->attributes as $attr_node ) {
		$attr_name  = $attr_node->nodeName;
		$attr_value = $attr_node->nodeValue;

		if ( $attr_value !== null ) {
			$new_element->setAttribute( $attr_name, $attr_value );
		}
	}

	if ( $element->parentNode ) {
		$element->parentNode->replaceChild( $new_element, $element );
	}

	return $new_element;
}

/**
 * Returns dom elements by class name as array.
 *
 * @since 0.0.1
 *
 * @param \DOMDocument|\DOMElement $dom        DOM document.
 * @param string                 $class_name class name.
 * @param string                 $tag        tag name.
 *
 * @return array
 */
function get_elements_by_class_name( $dom, string $class_name, string $tag = '*' ): array {
	$elements = array();

	foreach ( $dom->getElementsByTagName( $tag ) as $element ) {
		if ( $element->hasAttribute( 'class' ) ) {
			$classes = explode( ' ', $element->getAttribute( 'class' ) );

			if ( in_array( $class_name, $classes, true ) ) {
				$elements[] = $element;
			}
		}
	}

	return $elements;
}
