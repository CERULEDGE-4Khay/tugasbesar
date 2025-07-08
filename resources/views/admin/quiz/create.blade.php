@extends('layouts.admin')

@section('content')

<div class="col-md-12 mb-3">
  <h2>Add Quiz</h2>
</div>

<div class="col-md-12">
  <div class="card">
    <div class="card-body">
      <form action="{{ route('quiz.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Nama Quiz -->
        <div class="mb-3">
          <label for="name" class="form-label">Nama Quiz</label>
          <input type="text" class="form-control" required placeholder="Nama Quiz" name="quiz_title">
        </div>

        <div class="mb-3">
          <label for="mission_id" class="form-label">Pilih Misi</label>
          <select name="mission_id" class="form-select" required>
            @foreach ($missions as $mission)
              <option value="{{ $mission->id }}">{{ $mission->mission_title }}</option>
            @endforeach
          </select>
        </div>

        <!-- Tipe Quiz -->
        <div class="mb-3">
          <label for="tipe" class="form-label">Tipe Quiz</label>
          <select class="form-select" name="tipe" id="tipe">
            <option value="beginner">Beginner</option>
            <option value="intermediate">Intermediate</option>
            <option value="pro">Pro</option>
          </select>
        </div>

        <!-- Level -->
        <div class="mb-3">
          <label for="level" class="form-label">Level</label>
          <select class="form-select" name="level" id="level">
            <option value="1">1</option><option value="2">2</option><option value="3">3</option>
            <option value="4">4</option><option value="5">5</option>
          </select>
        </div>

        <!-- Deskripsi -->
        <div class="mb-3">
          <label class="form-label">Description</label>
          <textarea class="form-control" style="height: 100px" name="quiz_description"></textarea>
        </div>

        <!-- ❗ Tambah Jawaban -->
        <div class="mb-3">
          <label class="form-label">Jawaban</label>
          <div id="answer-wrapper">
            <!-- Container untuk jawaban -->
            <div class="input-group mb-2 answer-item">
              <input type="text" name="answers[]" class="form-control" placeholder="Jawaban">
              <div class="input-group-text">
                <input type="radio" name="correct" value="0" title="Jawaban Benar">
              </div>
              <button type="button" class="btn btn-danger btn-sm remove-answer">Hapus</button>
            </div>
          </div>
          <button type="button" class="btn btn-secondary btn-sm" onclick="addAnswer()">+ Tambah Jawaban</button>
        </div>

        <!-- Submit -->
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
  </div>
</div>

<!-- JS untuk dynamic answer -->
<script>
  let answerIndex = 1;

  function addAnswer() {
    const wrapper = document.getElementById('answer-wrapper');
    const div = document.createElement('div');
    div.classList.add('input-group', 'mb-2', 'answer-item');

    div.innerHTML = `
      <input type="text" name="answers[]" class="form-control" placeholder="Jawaban">
      <div class="input-group-text">
        <input type="radio" name="correct" value="${answerIndex}" title="Jawaban Benar">
      </div>
      <button type="button" class="btn btn-danger btn-sm remove-answer">Hapus</button>`
    wrapper.appendChild(div);
    answerIndex++;
  }

  document.addEventListener('click', function(e) {
    if (e.target.classList.contains('remove-answer')) {
      e.target.parentElement.remove();
    }
  });
</script>

@endsection