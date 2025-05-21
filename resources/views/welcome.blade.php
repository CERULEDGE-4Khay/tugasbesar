<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PickItUp</title>
  <link rel="stylesheet" href="css/home.css">
 
</head>
<body>
  <div class="container">
    <header>
      <h1>PickItUp</h1>
      <h2>Learn How to Play Guitar Better</h2>
      <p>Your guide to play guitar awesome properly</p>
      <button class="btn">Get Started</button>
      <button class="btn"> <a href="/login">Login</button>
    </header>

    <section class="categories">
      <div class="category">
        <img src="img/how-to-play-acoustic-guitar.jpg">

        <h3>Basic</h3>
      </div>
      <div class="category">
        <img src="img/intermediate.jpg">

        <h3>Intermediate</h3>
      </div>
      <div class="category">
       <img src="img/pro.jpg">

        <h3>Pro</h3>
      </div>
    </section>

    <section class="info-grid">
      <div class="info-box">
        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="none" viewBox="0 0 64 64">
  <rect x="12" y="10" width="40" height="44" rx="4" fill="#FFF8E1" stroke="#FFC107" stroke-width="2"/>
  <text x="20" y="30" font-size="20" fill="#F57F17">?</text>
</svg>

        <h4>Educational Quiz</h4>
        <p>Test your knowledge</p>
        <a href="#">Take Quiz</a>
      </div>
      <div class="info-box">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="64" height="64">
  <circle cx="32" cy="24" r="14" fill="#FFEB3B" stroke="#FBC02D" stroke-width="2"/>
  <path d="M26 40h12v6a2 2 0 0 1-2 2h-8a2 2 0 0 1-2-2v-6z" fill="#FFA000"/>
  <path d="M30 48h4v4h-4z" fill="#616161"/>
  <!-- Garis sinar cahaya -->
  <line x1="32" y1="4" x2="32" y2="10" stroke="#FBC02D" stroke-width="2"/>
  <line x1="52" y1="24" x2="58" y2="24" stroke="#FBC02D" stroke-width="2"/>
  <line x1="6" y1="24" x2="12" y2="24" stroke="#FBC02D" stroke-width="2"/>
  <line x1="47" y1="9" x2="43" y2="13" stroke="#FBC02D" stroke-width="2"/>
  <line x1="17" y1="9" x2="21" y2="13" stroke="#FBC02D" stroke-width="2"/>
</svg>

        <h4> Pro Tips</h4>
        <p>Simple tips for improve your skill</p>
        <a href="#">View Tips</a>
      </div>
      <div class="info-box">
        <img src="{{ asset('/img/guitar.png') }}" alt="Question or Request?">
        <h4>Any Question or Request?</h4>
        <p>Go here to appointment your needed</p>
        <a href="#">Learn More</a>
      </div>
    </section>
  </div>

  <script>
    const button = document.querySelector('.btn')
    button.addEventListener('click', function() {
        alert('Kamu belum siap mulai, silahkan login dahulu.')
    })
  </script>
</body>
</html>
