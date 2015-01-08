<html>

<head>
<style>
h2 { margin-top: 2em; }
.example { border: 1px solid black; background-color: #ddf; overflow-x: auto;padding:5px; }
</style>
</head>

<body>
<h1>REF2014 RDF</h1>

<p>Christopher Gutteridge 2014-12-18. 
<a href='mailto:cjg@ecs.soton.ac.uk'>cjg@ecs.soton.ac.uk</a>
</p> 
<p>Hi. Today is the Web &amp; Internet Science Christmas party so I've been rushing to get this set up in between mince pies. I'll improve it if people have suggestions but I wanted to get v0.1 up right away.</p>
<p>The namespace will change once this becomes more stable.</p>
<h2>Changelog</h2>
<ul>
<li>2014-12-19 Added 'profile' to submission URIs as all 4 profiles had same URI.</li>
<li>2014-12-19 Fixed missing datatypes for float and integer values.</li>
<li>2014-12-19 Corrected typo in example namespace to add a "/".</li>
<li>2014-12-18 First Version.</li>
</ul>
<h2>Data</h2>
<p><a href='/data/ref.ttl'>Download REF2014 RDF (ttl, 3Mb, 60,000 triples)</a> converted from <a href='http://results.ref.ac.uk/%28S%28cz3si0m2t5ohie1zdazm3beo%29%29/DownloadResults'>spreadsheet on results.ref.ac.uk</a>. There is not yet a clear license on the source data.</p>

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

</body>

</html>
