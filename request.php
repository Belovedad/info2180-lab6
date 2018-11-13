<?php

$xmldata = '<?xml version="1.0" encoding="UTF-8"?>
<entries>
     <definition>
        <name> Definition </name>
        <author> John </author>
        <words>A statement of the exact meaning of a word, especially in a dictionary.</words>
    </definition>
    
    <definition>
        <name> Bar </name>
        <author> Mary </author>
        <words>A place that sells alcholic beverages.</words>
    </definition>
    
    <definition >
        <name> AJAX </name>
        <author> Kimberley </author>
        <words>Technique which involves the use of javascript and xml (or JSON).</words>
    </definition>
    
    <definition>
        <name> HTML </name>
        <author> Thresh </author>
        <words>The standard markup language for creating web pages and web applications.</words>
    </definition>
    
    <definition>
        <name> CSS </name>
        <author> Pob </author>
        <words>A style sheet language used for describing the presentation of a document written in a markup language.</words>
    </definition>
    
    <definition>
        <name> JavaScript </name>
        <author> Karl </author>
        <words>A lightweight, interpreted programming language with first-class functions that adds interactivity to your website.</words>
    </definition>
    
    <definition>
        <name> PHP </name>
        <author> Lion </author>
        <words> A server-side scripting language, and a powerful tool for making dynamic and interactive websites.</words>
    </definition>
    
</entries>'; 

header('Content-Type: text/xml');
$xmlOutput = new SimpleXMLElement($xmldata);
echo $xmlOutput->asXML();


