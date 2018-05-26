@extends ('layouts.master')

@section ('content')
    <!-- Title -->
    <h1>&nbsp&nbsp Keybank Vermont City Marathon Medical Record</h1>

    <hr>

    <div class="post-container">
      <a href="/admin/edit/{{ $post->id }}" class="post-show-edit-button">Edit</a>
    </div>

    <hr>

    <div class="post-container">
      <h3 class="form-header">Main Information</h3>
    </div>

    <hr>

    <div class="post-container">
      <label for="bib_number">BIB Number:</label>
      <p class="form-show">{{ $post->bib_number }}</p>
      <label for="location">Location:</label>
      <p class="form-show">{{ $post->location }}</p>
    </div>

    <div class="post-container">
      <label for="first_name">First Name:</label>
      <p class="form-show">{{ $post->first_name }}</p>
      <label for="middle_name">Middle Name:</label>
      <p class="form-show">{{ $post->middle_name }}</p>
      <label for="middle_name">Last Name:</label>
      <p class="form-show">{{ $post->last_name }}</p>
    </div>

    <div class="post-container">
      <label for="age">Age:</label>
      <p class="form-show">{{ $post->age }}</p>
      <label for="sex">Sex:</label>
      <p class="form-show">{{ $post->sex }}</p>
      <label for="city">City:</label>
      <p class="form-show">{{ $post->city }}</p>
      <label for="state">State:</label>
      <p class="form-show">{{ $post->state }}</p>
      <label for="country">Country:</label>
      <p class="form-show">{{ $post->country }}</p>
    </div>

    <div class="post-container">
      <label for="pt_info">Pt. Info:</label>
      <p class="form-show">{{ $post->pt_info }}</p>
      <label for="race_chip_collected">Race Chip Collected:</label>
      <p class="form-show">{{ $post->race_chip_collected }}</p>
      <label for="medal_given">Medal Given:</label>
      <p class="form-show">{{ $post->medal_given }}</p>
    </div>

    <div class="post-container">
      <label for="time_in">Time In:</label>
      <p class="form-show">{{ $post->time_in }}</p>
      <label for="time_out">Time Out:</label>
      <p class="form-show">{{ $post->time_out }}</p>
    </div>

    <hr>

    <div class="post-container">
      <label for="relevant_medical_history">Relevant Medical History:</label>
      <p class="form-show">{{ $post->relevant_medical_history }}</p>
    </div>

    <div class="post-container">
      <label for="allergies">Allergies:</label>
      <p class="form-show">{{ $post->allergies }}</p>
      <label for="current_meds">Current Meds:</label>
      <p class="form-show">{{ $post->current_meds }}</p>
    </div>

    <hr>

    <div class="post-container">
      <h3 class="form-header">Family Information</h3>
    </div>

    <hr>

    <div class="post-container">
      <label for="current_meds">Emergency Contact Name:</label>
      <p class="form-show">{{ $post->emergency_contact_name }}</p>
    </div>

    <div class="post-container">
      <label for="current_meds">Emergency Contact Phone Number:</label>
      <p class="form-show">{{ $post->emergency_contact_phone_number }}</p>
    </div>

    <hr>

    <div class="post-container">
      <h3 class="form-header">Intake Medical Information</h3>
    </div>

    <hr>

    <div class="post-container">
      <label for="chief_complaint">Chief Complaint:</label>
      <p class="form-show">{{ $post->chief_complaint }}</p>
    </div>

    <hr>

    <div class="post-container">
      <h3 class="form-header">Vital Signs/Labs</h3>
    </div>

    <hr>

    <div class="post-container">
          TEMPLATE: 00:00 AM | BP 00 | P 00 | RR 00 | Skin 00 | I-stat 00 | Glucose 00 | 02 Sat 00 | Other
    </div>

    <hr>

    <div class="post-container">
      <label for="vital_signs_1">Test 1:</label>
      <p class="form-show">{{ $post->vital_signs_1 }}</p>
    </div>

    <div class="post-container">
      <label for="vital_signs_2">Test 2:</label>
      <p class="form-show">{{ $post->vital_signs_2 }}</p>
    </div>

    <div class="post-container">
      <label for="vital_signs_3">Test 3:</label>
      <p class="form-show">{{ $post->vital_signs_3 }}</p>
    </div>

    <div class="post-container">
      <label for="vital_signs_4">Test 4:</label>
      <p class="form-show">{{ $post->vital_signs_4 }}</p>
    </div>

    <div class="post-container">
      <label for="vital_signs_5">Test 5:</label>
      <p class="form-show">{{ $post->vital_signs_5 }}</p>
    </div>

    <div class="post-container">
      <label for="labs">Labs:</label>
      <p class="form-show">{{ $post->labs }}</p>
    </div>

    <hr>

    <div class="post-container">
      <h3 class="form-header">Treatment</h3>
    </div>

    <hr>

    <div class="post-container">
      TEMPLATE: IV 00 liters | 00:00 AM | IV_Solution | Volume 00
    </div>

    <hr>

    <div class="post-container">
      <label for="treatment">Treatment 1:</label>
      <p class="form-show">{{ $post->treatment_1 }}</p>
    </div>

    <div class="post-container">
      <label for="treatment">Treatment 2:</label>
      <p class="form-show">{{ $post->treatment_2 }}</p>
    </div>

    <div class="post-container">
      <label for="treatment">Treatment 3:</label>
      <p class="form-show">{{ $post->treatment_3 }}</p>
    </div>

    <div class="post-container">
      <label for="treatment">Treatment 4:</label>
      <p class="form-show">{{ $post->treatment_4 }}</p>
    </div>

    <div class="post-container">
      <label for="treatment">Treatment 5:</label>
      <p class="form-show">{{ $post->treatment_5 }}</p>
    </div>

    <div class="post-container">
      <label for="treatment">Physical Exam:</label>
      <p class="form-show">{{ $post->physical_exam }}</p>
    </div>


    <hr>

    <div class="post-container">
      <label for="diagnosis">Diagnosis:</label>
      <p class="form-show">{{ $post->diagnosis }}</p>
      <label for="disposition">Disposition:</label>
      <p class="form-show">{{ $post->disposition }}</p>
      <label for="disposition_time">Time:</label>
      <p class="form-show">{{ $post->disposition_time }}</p>
    </div>

    <div class="post-container">
      <label for="disposition_transportation">Transported By:</label>
      <p class="form-show">{{ $post->disposition_transportation }}</p>
      <label for="family_notification">Family Notification:</label>
      <p class="form-show">{{ $post->family_notification }}</p>
    </div>

    <div class="post-container">
      <label for="treatment_notes">Treatment Notes:</label>
      <p class="form-show">{{ $post->treatment_notes }}</p>
    </div>

    <hr>

    <div class="post-container">
      <h3 class="form-header">Provider</h3>
    </div>

    <hr>

    <div class="post-container">
      <label for="provider_name">Name:</label>
      <p class="form-show">{{ $post->provider_name }}</p>
      <label for="provider_prefix">Prefix:</label>
      <p class="form-show">{{ $post->provider_prefix }}</p>
      <label for="provider_signature">Signature:</label>
      <p class="form-show">{{ $post->provider_signature }}</p>
    </div>

    <hr>

    <div class="post-container">
      <a href="/admin/edit/{{ $post->id }}" class="post-show-edit-button">Edit</a>
    </div>

@endsection
