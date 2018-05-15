@extends ('layouts.master')

@section ('content')
    <!-- Title -->
    <h1>&nbsp&nbsp Keybank Vermont City Marathon Medical Record</h1>

    <hr>

    <div class="container">

      <div class="row">
        <div class="col-12">
          <h3 class="form-header">Main Information</h3>
        </div>
      </div>
      <!-- /row -->

      <hr>

      <div class="row">
        <div class="col-2">
          <label for="bib_number">BIB Number:</label>
        </div>
        <div class="col-2">
          <p class="form-show">{{ $post->bib_number }}</p>
        </div>
        <div class="col-1">
          <label for="location">Location:</label>
        </div>
        <div class="col-2">
          <p class="form-show">{{ $post->location }}</p>
        </div>
      </div>
      <!-- /row -->

      <div class="row">
        <div class="col-2">
          <label for="first_name">First Name:</label>
        </div>
        <div class="col-2">
          <p class="form-show">{{ $post->first_name }}</p>
        </div>
        <div class="col-2">
          <label for="middle_name">Middle Name:</label>
        </div>
        <div class="col-2">
          <p class="form-show">{{ $post->middle_name }}</p>
        </div>
        <div class="col-2">
          <label for="middle_name">Last Name:</label>
        </div>
        <div class="col-2">
          <p class="form-show">{{ $post->last_name }}</p>
        </div>
      </div>
      <!-- /row -->

      <div class="row">
        <div class="col-1">
          <label for="age">Age:</label>
        </div>
        <div class="col-1">
          <p class="form-show">{{ $post->age }}</p>
        </div>
        <div class="col-1">
          <label for="sex">Sex:</label>
        </div>
        <div class="col-1">
          <p class="form-show">{{ $post->sex }}</p>
        </div>
        <div class="col-1">
          <label for="city">City:</label>
        </div>
        <div class="col-2">
          <p class="form-show">{{ $post->city }}</p>
        </div>
        <div class="col-1">
          <label for="state">State:</label>
        </div>
        <div class="col-1">
          <p class="form-show">{{ $post->state }}</p>
        </div>
        <div class="col-1">
          <label for="country">Country:</label>
        </div>
        <div class="col-2">
          <p class="form-show">{{ $post->country }}</p>
        </div>
      </div>
      <!-- /row -->

      <div class="row">
        <div class="col-2">
          <label for="pt_info">Pt. Info:</label>
        </div>
        <div class="col-2">
          <p class="form-show">{{ $post->pt_info }}</p>
        </div>
        <div class="col-3">
          <label for="race_chip_collected">Race Chip Collected:</label>
        </div>
        <div class="col-1">
          <p class="form-show">{{ $post->race_chip_collected }}</p>
        </div>
        <div class="col-2">
          <label for="medal_given">Medal Given:</label>
        </div>
        <div class="col-1">
          <p class="form-show">{{ $post->medal_given }}</p>
        </div>
      </div>
      <!-- /row -->

      <div class="row">
        <div class="col-2">
          <label for="time_in">Time In:</label>
        </div>
        <div class="col-1">
          <p class="form-show">{{ $post->time_in }}</p>
        </div>
        <div class="col-2">
          <label for="time_out">Time Out:</label>
        </div>
        <div class="col-1">
          <p class="form-show">{{ $post->time_out }}</p>
        </div>
      </div>
      <!-- /row -->

      <hr>

      <div class="row">
        <div class="col-3">
          <label for="relevant_medical_history">Relevant Medical History:</label>
        </div>
        <div class="col-9">
          <p class="form-show">{{ $post->relevant_medical_history }}</p>
        </div>
      </div>
      <!-- /row -->

      <div class="row">
        <div class="col-1">
          <label for="allergies">Allergies:</label>
        </div>
        <div class="col-5">
          <p class="form-show">{{ $post->allergies }}</p>
        </div>
        <div class="col-2">
          <label for="current_meds">Current Meds:</label>
        </div>
        <div class="col-4">
          <p class="form-show">{{ $post->current_meds }}</p>
        </div>
      </div>
      <!-- /row -->

      <hr>

      <div class="row">
        <div class="col-12">
          <h3 class="form-header">Intake Medical Information</h3>
        </div>
      </div>
      <!-- /row -->

      <hr>

      <div class="row">
        <div class="col-2">
          <label for="chief_complaint">Chief Complaint:</label>
        </div>
        <div class="col-10">
          <p class="form-show">{{ $post->chief_complaint }}</p>
        </div>
      </div>
      <!-- /row -->

      <hr>

      <div class="row">
        <div class="col-12">
          <h3 class="form-header">Vital Signs/Labs</h3>
        </div>
      </div>
      <!-- /row -->

      <hr>

      <div class="row">
        <div class="col-12">
          TEMPLATE: 00:00 AM | BP 00 | P 00 | RR 00 | Skin 00 | I-stat 00 | Glucose 00 | 02 Sat 00 | Other
        </div>
      </div>
      <!-- /row -->

      <hr>

      <div class="row">
        <div class="col-3">
          <label for="vital_signs_1">Test 1:</label>
        </div>
        <div class="col-9">
          <p class="form-show">{{ $post->vital_signs_1 }}</p>
        </div>
      </div>
      <!-- /row -->

      <div class="row">
        <div class="col-3">
          <label for="vital_signs_2">Test 2:</label>
        </div>
        <div class="col-9">
          <p class="form-show">{{ $post->vital_signs_2 }}</p>
        </div>
      </div>
      <!-- /row -->

      <div class="row">
        <div class="col-3">
          <label for="vital_signs_1">Test 3:</label>
        </div>
        <div class="col-9">
          <p class="form-show">{{ $post->vital_signs_3 }}</p>
        </div>
      </div>
      <!-- /row -->

      <div class="row">
        <div class="col-3">
          <label for="vital_signs_1">Test 4:</label>
        </div>
        <div class="col-9">
          <p class="form-show">{{ $post->vital_signs_4 }}</p>
        </div>
      </div>
      <!-- /row -->

      <div class="row">
        <div class="col-3">
          <label for="vital_signs_1">Test 5:</label>
        </div>
        <div class="col-9">
          <p class="form-show">{{ $post->vital_signs_5 }}</p>
        </div>
      </div>
      <!-- /row -->

      <hr>

      <div class="row">
        <div class="col-12">
          <h3 class="form-header">Treatment</h3>
        </div>
      </div>
      <!-- /row -->

      <hr>

      <div class="row">
        <div class="col-12">
          TEMPLATE: IV 00 liters | 00:00 AM | IV_Solution | Volume 00
        </div>
      </div>
      <!-- /row -->

      <hr>

      <div class="row">
        <div class="col-3">
          <label for="treatment">Treatment 1:</label>
        </div>
        <div class="col-9">
          <p class="form-show">{{ $post->treatment_1 }}</p>
        </div>
      </div>
      <!-- /row -->

      <div class="row">
        <div class="col-3">
          <label for="treatment">Treatment 2:</label>
        </div>
        <div class="col-9">
          <p class="form-show">{{ $post->treatment_2 }}</p>
        </div>
      </div>
      <!-- /row -->

      <div class="row">
        <div class="col-3">
          <label for="treatment">Treatment 3:</label>
        </div>
        <div class="col-9">
          <p class="form-show">{{ $post->treatment_3 }}</p>
        </div>
      </div>
      <!-- /row -->

      <div class="row">
        <div class="col-3">
          <label for="treatment">Treatment 4:</label>
        </div>
        <div class="col-9">
          <p class="form-show">{{ $post->treatment_4 }}</p>
        </div>
      </div>
      <!-- /row -->

      <div class="row">
        <div class="col-3">
          <label for="treatment">Treatment 5:</label>
        </div>
        <div class="col-9">
          <p class="form-show">{{ $post->treatment_5 }}</p>
        </div>
      </div>
      <!-- /row -->

      <hr>

      <div class="row">
        <div class="col-1">
          <label for="diagnosis">Diagnosis:</label>
        </div>
        <div class="col-2">
          <p class="form-show">{{ $post->diagnosis }}</p>
        </div>
        <div class="col-2">
          <label for="disposition">Disposition:</label>
        </div>
        <div class="col-3">
          <p class="form-show">{{ $post->disposition }}</p>
        </div>
        <div class="col-1">
          <label for="disposition_time">Time:</label>
        </div>
        <div class="col-1">
          <p class="form-show">{{ $post->disposition_time }}</p>
        </div>
      </div>
      <!-- /row -->

      <div class="row">
        <div class="col-2">
          <label for="disposition_transportation">Transported By:</label>
        </div>
        <div class="col-5">
          <p class="form-show">{{ $post->disposition_transportation }}</p>
        </div>
        <div class="col-3">
          <label for="family_notification">Family Notification:</label>
        </div>
        <div class="col-1">
          <p class="form-show">{{ $post->family_notification }}</p>
        </div>
      </div>
      <!-- /row -->

      <div class="row">
        <div class="col-3">
          <label for="treatment_notes">Treatment Notes:</label>
        </div>
        <div class="col-9">
          <p class="form-show">{{ $post->treatment_notes }}</p>
        </div>
      </div>
      <!-- /row -->

      <hr>

      <div class="row">
        <div class="col-12">
          <h3 class="form-header">Provider</h3>
        </div>
      </div>
      <!-- /row -->

      <hr>

      <div class="row">
        <div class="col-1">
          <label for="provider_name">Name:</label>
        </div>
        <div class="col-2">
          <p class="form-show">{{ $post->provider_name }}</p>
        </div>
        <div class="col-1">
          <label for="provider_prefix">Prefix:</label>
        </div>
        <div class="col-1">
          <p class="form-show">{{ $post->provider_prefix }}</p>
        </div>
        <div class="col-1">
          <label for="provider_signature">Signature:</label>
        </div>
        <div class="col-1">
          <p class="form-show">{{ $post->provider_signature }}</p>
        </div>
      </div>
      <!-- /row -->

      <hr>

      <div class="row">
        <a href="/admin/edit/{{ $post->id }}" class="post-show-edit-button">Edit</a>
      </div>
      <!-- /row -->

    </div>
    <!-- /container -->

@endsection
