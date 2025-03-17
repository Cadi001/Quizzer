@include('components.header')
<!-- Main container with margin for spacing -->
  <div class="container my-5">
    <!-- Card to nicely group quiz content -->
    <div class="card">
      <!-- Card header with a centered title -->
      <div class="card-header text-center">
        <h2>Quiz Title</h2>
      </div>
      <!-- Card body containing the quiz form -->
      <div class="card-body">
        <form>
          <!-- Question 1 -->
          <div class="mb-4">
            <p><strong>1. What is the capital of France?</strong></p>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="question1" id="q1a1" value="Berlin">
              <label class="form-check-label" for="q1a1">
                Berlin
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="question1" id="q1a2" value="Madrid">
              <label class="form-check-label" for="q1a2">
                Madrid
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="question1" id="q1a3" value="Paris">
              <label class="form-check-label" for="q1a3">
                Paris
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="question1" id="q1a4" value="Rome">
              <label class="form-check-label" for="q1a4">
                Rome
              </label>
            </div>
          </div>
          <!-- Centered Submit Button -->
          <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-success">Submit Answers</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  @include('components.footer')