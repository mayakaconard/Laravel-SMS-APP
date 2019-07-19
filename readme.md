## Installation

To install this application, clone it and do https://github.com/mayakaconard/Laravel-SMS-APP.git or you can use SSH git@github.com:mayakaconard/Laravel-SMS-APP.git

## What next?

Navigate to your project folder and run composer install

<pre class="">composer install</pre>

## Create a copy of your .env file

cp .env.example .env

## Generate an app encryption key

<pre class="">php artisan key:generate</pre>

## Install Africastaking API Via Composer

<pre class="">composer require africastalking/africastalking</pre>

## Usage

<p>The SDK needs to be instantiated using your username and API key, which you can get from the <a href="https://account/africastalking.com" rel="nofollow">dashboard</a>.</p>
<blockquote>
<p>You can use this SDK for either production or sandbox apps. For sandbox, the app username is <strong>ALWAYS</strong> <code>sandbox</code></p>
</blockquote>
<div class="highlight highlight-text-html-php"><pre><span class="pl-s1"><span class="pl-k">use</span> <span class="pl-c1">AfricasTalking\SDK\AfricasTalking</span>;</span>
<span class="pl-s1"></span>
<span class="pl-s1"><span class="pl-smi">$username</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">'</span>YOUR_USERNAME<span class="pl-pds">'</span></span>; <span class="pl-c"><span class="pl-c">//</span> use 'sandbox' for development in the test environment</span></span>
<span class="pl-s1"><span class="pl-smi">$apiKey</span>   <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">'</span>YOUR_API_KEY<span class="pl-pds">'</span></span>; <span class="pl-c"><span class="pl-c">//</span> use your sandbox app API key for development in the test environment</span></span>
<span class="pl-s1"><span class="pl-smi">$AT</span>       <span class="pl-k">=</span> <span class="pl-k">new</span> <span class="pl-c1">AfricasTalking</span>(<span class="pl-smi">$username</span>, <span class="pl-smi">$apiKey</span>);</span>
<span class="pl-s1"></span>
<span class="pl-s1"><span class="pl-c"><span class="pl-c">//</span> Get one of the services</span></span>
<span class="pl-s1"><span class="pl-smi">$sms</span>      <span class="pl-k">=</span> <span class="pl-smi">$AT</span><span class="pl-k">-&gt;</span>sms();</span>
<span class="pl-s1"></span>
<span class="pl-s1"><span class="pl-c"><span class="pl-c">//</span> Use the service</span></span>
<span class="pl-s1"><span class="pl-smi">$result</span>   <span class="pl-k">=</span> <span class="pl-smi">$sms</span><span class="pl-k">-&gt;</span>send([</span>
<span class="pl-s1">    <span class="pl-s"><span class="pl-pds">'</span>to<span class="pl-pds">'</span></span>      <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">'</span>+2XXYYYOOO<span class="pl-pds">'</span></span>,</span>
<span class="pl-s1">    <span class="pl-s"><span class="pl-pds">'</span>message<span class="pl-pds">'</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">'</span>Hello World!<span class="pl-pds">'</span></span></span>
<span class="pl-s1">]);</span>
<span class="pl-s1"></span>
<span class="pl-s1"><span class="pl-c1">print_r</span>(<span class="pl-smi">$result</span>);</span></pre></div>
<p>See <a href="/mayakaconard/africastalking-php/blob/master/example">example</a> for more usage examples.</p>
<h2><a id="user-content-instantiation" class="anchor" aria-hidden="true" href="#instantiation"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg>

## License

The Laravel project is open-source software licensed under the [MIT license](https://github.com/mayakaconard).
