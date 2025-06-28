@extends('layouts.guest')
@section('content')

 <section id="hero" class="hero section dark-background">

    <img src="{{ asset('img/guitar-quiz.png')}}" alt="" data-aos="fade-in">

    <div class="container d-flex flex-column align-items-center">
      <h2 data-aos="fade-up" data-aos-delay="100">FUN QUIZ PICKITUP</h2>
      <p data-aos="fade-up" data-aos-delay="200">Disini kamu akan di uji pengetahuan soal gitar kamu nih, siap?</p>
    </div>

  </section>
  <div class="container py-3">
    <div class="row gy-4">
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <h1><i class="bi bi-card-list m-2"></i>QUIZ SESSION</h1>
          <p>Kamu pasti sering bingung udah sejauh mana sih level pengetahuan kamu? sering ngerasa terjebak di kondisi yang stuck seperti cara bermain yg gitu gitu aja, sampai akhirnya mulai malas main gitar lagi. 
          Nah, Fun Quiz disini akan membantu kamu agar kamu bisa melihat sejauh mana pengetahuan kamu dan apa saja yang belum kamu ketahui, karena bisa jadi itu menjadi hambatan kamu untuk berkembang dalam bermain gitar.
          </p>
        </div>  
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <img src="{{ asset('img/guitar-quiz2.png')}}" width="500px" height="200px" class="img-fluid rounded-4 mb-4" alt="Quiz Pickitup">

        </div>
    </div>    
      <h2>APA ITU QUIZ</h2>
      <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. At exercitationem corporis id cupiditate perspiciatis, ducimus minima maiores praesentium itaque eaque culpa aut ad expedita atque sed ipsam fugit dicta voluptatum.</P>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo distinctio ab voluptates. Odio rerum nam, natus, consequuntur eligendi pariatur aliquam dicta vitae incidunt ex reprehenderit iure, provident nulla perspiciatis quod!</p>
      <button class="btn btn-primary">MULAI</button>
    </div>
    @endsection