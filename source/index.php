<!DOCTYPE html>
<?
$_SITE['foot'] = true;
?>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta http-equiv="content-language" content="nl">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" lang="nl" content="Korte samenvatting">
<meta name="theme-color" content="#3a5336">
<meta property="og:title" content="Title">
<meta property="og:description" content="Korte samenvatting.">
<meta property="og:image" content="image">
<meta property="og:url" content="canonical url  van deze pagina">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@" />
<meta name="twitter:creator" content="@" />
<link rel="icon" sizes="192x192" href="icon.png">
<link rel="apple-touch-icon" href="ios-icon.png">
<title>Krul test</title>
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400i|Open+Sans:400,400i,700" rel="stylesheet"> 
<style>
@font-face {
  font-family: 'krul';
  src:
    url('krul.ttf') format('truetype'),
    url('krul.woff') format('woff'),
    url('krul.svg#krul') format('svg');
  font-weight: normal;
  font-style: normal;
}
@font-face {
  font-family: 'krul';
  src:
    url('krul.ttf') format('truetype'),
    url('krul.woff') format('woff'),
    url('krul.svg#krul') format('svg');
  font-weight: normal;
  font-style: italic;
}

html {
  font-size: 18px;
  font-family: krul, Open Sans, sans-serif;
  margin: 0;
  padding: 0;
  color: #141d10;
  background: #f1f2ec;
}

body {
  font-size: 1rem;
  margin: 0;
  padding: 0;
}

nav {
  display: sticky;
  top: 0;
  left: 0;
  right: 0;
  background: #3a5336;
}

nav ul {
  padding: 0;
  margin: 0;
  display: flex;
}

nav li {
  padding: 0;
  margin: 0;
  display: block;
  padding: 0.25rem 1rem;
}

nav a,
nav a:link,
nav a:visited {
  color: white;
}

nav a:not(:hover) {
  background: none;
}

main {
  padding: 1rem;
  margin: auto;
  max-width: 48rem;
}

h1, h2, th {
  font-family: krul, Libre Baskerville, serif;
  font-weight: normal;
  font-style: italic;
  color: #3a5336;
  font-variant-ligatures: common-ligatures discretionary-ligatures;
}

h1 {
  font-size: 2rem;
  margin: 1rem 0 1rem;
}

h2{
  font-size: 1.5rem;
  margin: 2rem 0 1rem;
}

code {
  font-family: Consolas, monaco, Bitstream Vera Sans Mono, monospace;
  border: 1px solid #aaa;
  background: #eee;
  border-radius: 3px;
  padding: 1px 4px;
  font-size: 0.8em;
  color: #c9549d;
  vertical-align: 2px;
}

p {
  margin: 1em 0.1em;
  padding: 0;
}

a {
  padding-bottom: 0.2em;
  text-decoration: none;
  background-image: linear-gradient(to top, currentColor, currentColor 0.1em, transparent, 0.1em, transparent);
}

a:visited {
  color: #7aa4a9;
  text-decoration: none;
}

a:link,
a:hover {
  color: #3a5336;
  text-decoration: none;
}

a:active,
a:focus {
  color: #c9549d;
  text-decoration: none;
  outline-offset: 2px;
}

a:focus {
  outline: 2px solid currentColor;
}

blockquote {
  border-left: 0.5rem solid #7aa4a9;
  border-right: 0.125rem solid #7aa4a9;
  background: rgba(122, 164, 169, 0.25);
  margin-left: 0;
  margin-right: 0;
  margin-top: 1em;
  margin-bottom: 1em;
  padding-left: 2em;
  padding-top: 0.25em;
  padding-bottom: 0.25em;
  padding-right: 0.5em;
  font-style: italic;
}

blockquote + cite {
  display: block;
  font-size: 0.8em;
  margin-top: -0.5em;
}

cite::before {
  content: "— ";
}

table {
  width: 100%;
  table-layout: fixed;
  border-spacing: 0;
  border-collapse: collapse;
}

th, td {
  text-align: start;
  text-align: left;
  padding: 0.5em;
}

thead td,
thead th {
  border-bottom: 1px solid #141d10;
}

.even tr:nth-child(even) th,
.even tr:nth-child(even) td,
.odd tr:nth-child(odd) th,
.odd tr:nth-child(odd) td {
  background: white;
}

</style>
</head>
<body>
<nav>
<ul>
<li><a href="index">Index</a></li>
<li><a href="proposal">Proposal</a></li>
</ul>
</nav>
<main itemscope itemtype="http://schema.org/Article">
<h1 itemprop="name">Unicode krul &#x1f90f;</h1>
<p itemprop="description">Dit is een paragraaf die het een en ander verteld over waarom de krul in Unicode zou moeten.</p>
<p>tralala dit is een krul: &#x1f90f;</p>
<section>
<h2>Dit is een tussenkopje</h2>
<p>Deze staat als <code>&amp;#x1f90f;</code> in de pagina: &#x1f90f;</p>
<blockquote>Dit is een quote uit een artikel oid.</blockquote>
<cite>Bronvermeling</cite>
<p>Een stuk tekst met <a href="https://example.com">een link</a>.
<table>
<thead>
<tr>
<th>Dit</th>
<th>is</th>
</tr>
</thead>
<tbody class="odd">
<tr>
<td>een</td>
<td>tabel</td>
</tr>
<tr>
<th>met</th>
<td>inhoud.</td>
</tr>
</tbody>
</table>
</main>
</section>
</body>
</html>