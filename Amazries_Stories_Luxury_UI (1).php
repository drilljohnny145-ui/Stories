<?php
/* Amazries Stories - Luxury Author Website Template */
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Amazries Stories | Joy Dunsin</title>
<style>
:root{--gold:#d4af37;--black:#070707;--ivory:#f5f1e8;}
*{box-sizing:border-box;margin:0;padding:0}
body{background:var(--black);color:var(--ivory);font-family:Georgia,serif}
.hero{min-height:100vh;display:flex;align-items:center;justify-content:center;text-align:center;
background:linear-gradient(135deg,#050505,#121212,#20170f);padding:30px}
.hero h1{font-size:clamp(3rem,8vw,6rem);max-width:900px}
.hero p{max-width:700px;margin:20px auto;font-size:1.2rem}
.btn{display:inline-block;padding:16px 32px;border-radius:50px;text-decoration:none;margin:8px}
.gold{background:linear-gradient(135deg,#d4af37,#f5d76e);color:#000}
.outline{border:1px solid var(--gold);color:var(--ivory)}
.section{max-width:1200px;margin:auto;padding:80px 20px}
.grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:24px}
.card{background:rgba(255,255,255,.04);border:1px solid rgba(212,175,55,.3);
border-radius:24px;padding:24px}
</style>
</head>
<body>
<section class="hero">
<div>
<h1>Stories That Keep You Reading Until Dawn</h1>
<p>Apocalypse. Fantasy. Revenge. Power. Romance.</p>
<a class="btn gold" href="#books">Explore Books</a>
<a class="btn outline" href="#reader">Read Free Chapters</a>
</div>
</section>

<section id="books" class="section">
<h2>Featured Stories</h2>
<div class="grid">
<div class="card">
<h3>Apocalypse Rebirth: My Ex Begged Outside My Fortress</h3>
<p>Complete Series 1</p>
<a class="btn gold" href="https://selar.com/113635d419">Buy on Selar</a>
</div>
<div class="card">
<h3>Ascension Protocol: From Trash to Tyrant</h3>
<p>Coming Soon</p>
</div>
</div>
</section>

<section id="reader" class="section">
<h2>Sample Reader</h2>
<p>Replace with your chapter content.</p>
</section>

<section class="section">
<h2>Joy Dunsin</h2>
<p>Creator of immersive fiction packed with survival, power progression and emotional twists.</p>
</section>
</body>
</html>