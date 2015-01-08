<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>

<!-- Basic Page Needs
  ================================================== -->
<meta charset="utf-8">
<title>REF2014</title>
<meta name="description" content="Linked Open Data for the 2014 UK REF">
<meta name="author" content="Christopher Gutteridge">

<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="http://network-bar.data.ac.uk/subsite.css" type="text/css">
<link rel="stylesheet" href="/resources/site.css">
    
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	
    <link rel="shortcut icon" href="http://network-bar.data.ac.uk/images/favicon.ico">
    
    <link rel="apple-touch-icon" href="http://network-bar.data.ac.uk/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="http://network-bar.data.ac.uk/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="http://network-bar.data.ac.uk/images/apple-touch-icon-114x114.png">

<style>
h2 { margin-top: 2em; }
.example { border: 1px solid black; background-color: #ddf; overflow-x: auto;padding:5px; }
</style>

</head>
<body>

<!-- Primary Page Layout
	================================================== --> 

  <div class="container">
    <div class="sixteen columns padding_top_30 ">
      <h1>REF2014 Linked Data</h1>
<p>This site provides a linked data (RDF) version of the <a href='http://results.ref.ac.uk/'>2014 UK REF</a>.</p>
    </div>
    <div class="eight columns ">

<h3>Data Download</h3>
<p><a href='/data/ref.ttl'>Download REF2014 RDF (ttl, 3Mb, 60,000 triples)</a> converted from <a href='http://results.ref.ac.uk/%28S%28cz3si0m2t5ohie1zdazm3beo%29%29/DownloadResults'>spreadsheet on results.ref.ac.uk</a>. There is not yet a clear license on the source data.</p>
<h3>Terms</h3>
<p>This dataset uses a number of RDF terms. View terms as [<a href='http://neologism.ecs.soton.ac.uk/ref2014'>HTML</a>] [<a href='/terms.ttl'>TTL</a>]</p>

    </div>
    <div class="eight columns ">
<h3>Changelog</h3>
<ul>
<li>2015-01-08 Reworked site to sit in the data.ac.uk domain. Namespace now uses a final URI. Added vocab terms.</li>
<li>2014-12-19 Added 'profile' to submission URIs as all 4 profiles had same URI.</li>
<li>2014-12-19 Fixed missing datatypes for float and integer values.</li>
<li>2014-12-19 Corrected typo in example namespace to add a "/".</li>
<li>2014-12-18 First Version.</li>
</ul>

    </div>
    <div class="sixteen columns ">

<h2><a href='/sparql'>SPARQL Endpoint</a></h2>
<p>I've also set up a cheap and cheerful (ARC2) SPARQL endpoint containing this dataset plus the list of learning providers from <a href='http://learning-provider.data.ac.uk/'>http://learning-provider.data.ac.uk/</a> which provides linksets to Gateway to Research and DBPedia, and what consortia they belong to (Russell Group etc.). And also the dbpedia triples for all UK institututions.</p>


      <form id="sparql-form" action="/sparql" enctype="application/x-www-form-urlencoded" method="get">
        <textarea style='width:99%' id="query" name="query" rows="20" cols="80">
<?php print htmlspecialchars( file_get_contents( "data/example.sparql" ) ); ?>
        </textarea>
        
        <input type="hidden" name='output' value='htmltab' />
        <input type="hidden" name="show_inline" value="1" />
        <div class="form-buttons">
          <input type="submit" value="Send Query" />
          <input type="reset" value="Reset" />
        </div>
      </form>

<h2>Example Data from ref.ttl</h2>

<pre class='example'>
<?php print htmlspecialchars( file_get_contents( "data/example.ttl" ) ); ?>
</pre>

<h2>Example Data from <a href='http://learning-provider.data.ac.uk/data/learning-providers-plus.ttl'>learning-providers-plus.ttl</a></h2>

<pre class='example'>
<?php print htmlspecialchars( file_get_contents( "data/10007798.ttl" ) ); ?>
</pre>
<h3>Credits</h3>
<p>Site &amp; RDF version of data by Christopher Gutteridge: <a href='mailto:chris@totl.net'>chris@totl.net</a> or <a href='twitter.com/cgutteridge'>@cgutteridge</a>.</p> 
 </div>
 </div>
 </body>
</html>
<script type="text/javascript" src="//network-bar.data.ac.uk/network-bar.js"></script>

