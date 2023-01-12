<h1 class="code-line" data-line-start=0 data-line-end=1 ><a id="Neptunia_0"></a>Neptunia</h1>
<h2 class="code-line" data-line-start=1 data-line-end=2 ><a id="_Neo_Plural_Tune_Indonesia__1"></a><em>Neo Plural Tune Indonesia</em></h2>
<p class="has-line-data" data-line-start="3" data-line-end="4"><a href="https://nodesource.com/products/nsolid"><img src="https://cldup.com/dTxpPi9lDf.thumb.png" alt="N|Solid"></a></p>
<p class="has-line-data" data-line-start="5" data-line-end="6"><a href="https://travis-ci.org/joemccann/dillinger"><img src="https://travis-ci.org/joemccann/dillinger.svg?branch=master" alt="Build Status"></a></p>
<p class="has-line-data" data-line-start="7" data-line-end="8">Neptunia adalah framework buatan anak bangsa yang dikembangkan dengan tujuan mempermudah mempelajari struktur data framework, bisa di atur librarynya, adanya documentasi lengkap mendatang.</p>
<ul>
<li class="has-line-data" data-line-start="9" data-line-end="11">Konsep Neptunia ( Neo =&gt; Baru, Plural =&gt; banyak, Tune =&gt; nada / bisa di adjust / tuning, Indonesia =&gt; buatan karya anak bangsa Indonesia)</li>
</ul>
<h2 class="code-line" data-line-start=11 data-line-end=12 ><a id="Fitur_11"></a>Fitur</h2>
<ul>
<li class="has-line-data" data-line-start="13" data-line-end="15">Nesa ( Neptunia Assistant )</li>
</ul>
<blockquote>
<p class="has-line-data" data-line-start="15" data-line-end="16">Nesa adalah console php framework Neptunia. ( mirip seperti artisan kalau pernah menggunakan laravel)</p>
</blockquote>
<p class="has-line-data" data-line-start="18" data-line-end="20">And of course Dillinger itself is open source with a [public repository][dill]<br>
on GitHub.</p>
<h1 class="code-line" data-line-start=21 data-line-end=22 ><a id="_21"></a></h1>
<h2 class="code-line" data-line-start=22 data-line-end=23 ><a id="Struktur_Folder_22"></a>Struktur Folder</h2>
<dl>
<dt>|neptunia</dt>
<dd>
<dl>
<dt>||-Config/</dt>
<dd>
<dl>
<dt>|||-Database/</dt>
<dd>
<dl>
<dt>||||-UserDatabase.php</dt>
<dd>
<dl>
<dt>||||-Queries/</dt>
<dd>|||||-Query.php</dd>
</dl>
</dd>
</dl>
</dd>
</dl>
</dd>
<dd>|||-UserConfig.php<br>
|||-Routes/<br>
||||-web.php</dd>
</dl>
</dd>
<dd>
<dl>
<dt>||-Http/</dt>
<dd>
<dl>
<dt>|||-Controllers/</dt>
<dd>||||-Controller.php</dd>
</dl>
</dd>
</dl>
</dd>
<dd>
<dl>
<dt>||-Models/</dt>
<dd>|||-Model.php</dd>
</dl>
</dd>
<dd>
<dl>
<dt>|-routes</dt>
<dd>||-web.php</dd>
</dl>
</dd>
<dd>
<dl>
<dt>|-views</dt>
<dd>
<dl>
<dt>||-Layout/</dt>
<dd>|||-template.php</dd>
</dl>
</dd>
<dd>
<dl>
<dt>||-Page/</dt>
<dd>|||-home.php</dd>
</dl>
</dd>
<dd>
<dl>
<dt>||-Component/</dt>
<dd>|||-card.php</dd>
</dl>
</dd>
</dl>
</dd>
<dd>
<dl>
<dt>|-public</dt>
<dd>||-index.php<br>
||-.htaccess</dd>
</dl>
</dd>
<dd>|-index.php<br>
|-src<br>
|vendor<br>
|.env<br>
|.gitignore<br>
|composer.json<br>
|composer.lock<br>
|index.php<br>
|nesa</dd>
</dl>
<h2 class="code-line" data-line-start=58 data-line-end=59 ><a id="Development_58"></a>Development</h2>
<p class="has-line-data" data-line-start="60" data-line-end="61">Want to contribute? Great!</p>
<p class="has-line-data" data-line-start="62" data-line-end="63">developing local server di</p>
<pre><code class="has-line-data" data-line-start="65" data-line-end="67" class="language-sh"><span class="hljs-number">127.0</span>.<span class="hljs-number">0.1</span>:<span class="hljs-number">8888</span>
</code></pre>
<h2 class="code-line" data-line-start=68 data-line-end=69 ><a id="License_68"></a>License</h2>
<p class="has-line-data" data-line-start="70" data-line-end="71">MIT</p>