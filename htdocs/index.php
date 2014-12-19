<html>

<h1>REF2014 RDF</h1>

<p>Christopher Gutteridge 2014-12-18. 
<a href='mailto:cjg@ecs.soton.ac.uk'>cjg@ecs.soton.ac.uk</a>
</p> 
<p>Hi. Today is the Web &amp; Internet Science Christmas party so I've been rushing to get this set up in between mince pies. I'll improve it if people have suggestions but I wanted to get v0.1 up right away.</p>
<p>The namespace will change once this becomes more stable.</p>
<h2>Changelog</h2>
<ul>
<li>2014-12-19 Fixed missing datatypes for float and integer values.</li>
<li>2014-12-19 Corrected typo in example namespace to add a "/".</li>
<li>2014-12-18 First Version.</li>
</ul>
<h2>Data</h2>
<p><a href='/data/ref.ttl'>Download REF2014 RDF (ttl, 3Mb, 60,000 triples)</a> converted from <a href='http://results.ref.ac.uk/%28S%28cz3si0m2t5ohie1zdazm3beo%29%29/DownloadResults'>spreadsheet on results.ref.ac.uk</a> -- I have no idea what the license is but I really hope it's CC0 or similar.</p>

<h2><a href='sparql.php'>SPARQL Endpoint</a></h2>
<p>I've also set up a cheap and cheerful (ARC2) SPARQL endpoint containing this dataset plus the list of learning providers from <a href='http://learning-provider.data.ac.uk/'>http://learning-provider.data.ac.uk/</a> which provides linksets to Gateway to Research and DBPedia, and what consortia they belong to (Russell Group etc.). And also the dbpedia triples for all UK institututions.</p>

<h2>Example Data from ref.ttl</h2>

<pre style='border: 1px solid black; background-color: #ddf; overflow-x: auto;padding:5px'>
<?php
$data = file_get_contents( "data/example.ttl" );
print htmlspecialchars( $data );
?>
</pre>

<h2>Example Data from <a href='http://learning-provider.data.ac.uk/data/learning-providers-plus.ttl'>learning-providers-plus.ttl</a></h2>

<pre style='border: 1px solid black; background-color: #ddf; overflow-x: auto;padding:5px'>
<?php
$data = file_get_contents( "data/10007798.ttl" );
print htmlspecialchars( $data );
?>
</pre>

</html>
