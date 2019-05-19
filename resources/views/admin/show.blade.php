@extends ('layouts.master')

@section ('content')
    <!-- Title -->
    <h1>&nbsp&nbsp Keybank Vermont City Marathon Medical Record</h1>

    <hr>

    <form method="POST" action="/admin/update/{{ $post->id }}">

      {{ csrf_field() }}

      <div class="post-container">
        <button type="submit" class="post-show-edit-button">Submit</button>
      </div>

      <hr>

      <div class="post-container">
        <h3 class="form-header">Main Information</h3>
      </div>

      <div class="post-container">
        <input type="text" class="form-input" id="bib_number" name="bib_number" size="9" maxlength="9" value="{{ $post->bib_number }}" placeholder="BIB Number" readonly>
        <input type="text" class="form-input" id="location" name="location" size="9" maxlength="9" value="{{ $post->location }}" readonly>
      </div>

      <div class="post-container">
        <input type="text" class="form-input" id="first_name" name="first_name" size="15" maxlength="85" value="{{ $post->first_name }}" placeholder="First Name" readonly>
        <input type="text" class="form-input" id="middle_name" name="middle_name" size="15" maxlength="85" value="{{ $post->middle_name }}" placeholder="Middle Name" readonly>
        <input type="text" class="form-input" id="last_name" name="last_name" size="15" maxlength="85" value="{{ $post->last_name }}" placeholder="Last Name" readonly>
      </div>

      <div class="post-container">
        <input type="text" class="form-input" id="age" name="age" size="3" maxlength="3" value="{{ $post->age }}" placeholder="Age" readonly>
        <input type="text" class="form-input" id="sex" name="sex" size="3" value="{{ $post->sex }}" placeholder="Sex" readonly>
        <input type="text" class="form-input" id="city" name="city" size="15" value="{{ $post->city }}" placeholder="City" readonly>
        <input type="text" class="form-input" id="state" name="state" size="15" value="{{ $post->state }}" placeholder="State" readonly>
        <input type="text" class="form-input" id="country" name="country" size="15" value="{{ $post->country }}" placeholder="Country" readonly>
      </div>

      <div class="post-container">
        <input list="info" name="pt_info" id="pt_info" class="form-input" size="15" value="{{ $post->pt_info }}" placeholder="Pt. Info" readonly>
        <datalist id="info">
          <option value="Marathon">
          <option value="Relay">
          <option value="Volunteer">
        </datalist>
        <label for="race_chip_collected">Race Chip Collected:</label>
        <input type="text" size="1" class="form-input" id="race_chip_collected" name="race_chip_collected" value="{{ $post->race_chip_collected }}" readonly>
        <label for="medal_given">Medal Given:</label>
        <input type="text" size="1" class="form-input" id="medal_given" name="medal_given" value="{{ $post->medal_given }}" readonly>
      </div>

      <div class="post-container">
        <label for="time_in">Time In:</label>
        <input type="time" class="form-input" id="time_in" name="time_in" size="7" maxlength="7" value="{{ $post->time_in }}">
        <label for="time_out">Time Out:</label>
        <input type="time" class="form-input" id="time_out" name="time_out" size="7" maxlength="7" value="{{ $post->time_out }}">
      </div>

      <div class="post-container">
        <textarea id="relevant_medical_history" name="relevant_medical_history" placeholder="Relevant Medical History">{{ $post->relevant_medical_history }}</textarea>
      </div>

      <div class="post-container">
        <input type="text" class="form-input" id="allergies" name="allergies" size="80" value="{{ $post->allergies }}" placeholder="Allergies">
      </div>

      <div class="post-container">
        <input type="text" class="form-input" id="current_meds" name="current_meds" size="80" value="{{ $post->current_meds }}" placeholder="Current Medications">
      </div>

      <hr>

      <div class="post-container">
        <h3 class="form-header">Family Information</h3>
      </div>

      <div class="post-container">
        <input type="text" class="form-input" id="emergency_contact_name" name="emergency_contact_name" size="30" value="{{ $post->emergency_contact_name }}" placeholder="Emergency Contact Name">
      </div>

      <div class="post-container">
        <input type="text" class="form-input" id="emergency_contact_phone_number" name="emergency_contact_phone_number" size="15" value="{{ $post->emergency_contact_phone_number }}" placeholder="Emergency Contact Phone Number">
      </div>

      <div class="post-container">
        <h3 class="form-header">Intake Medical Information</h3>
      </div>

      <div class="post-container">
        <input list="complaint-info" name="chief_complaint" id="chief_complaint" class="form-input" size="80" value="{{ $post->chief_complaint }}" placeholder="Chief Complaint">
        <datalist id="complaint-info">
          <option value="Fatigue">
          <option value="Chills">
          <option value="Overheated">
          <option value="Weakness">
          <option value="Dehydration">
          <option value="Allergic Reaction">
          <option value="Dizziness">
          <option value="Lightheaded">
          <option value="Headache">
          <option value="Syncope">
          <option value="Altered Mental State">
          <option value="Diarrhea">
          <option value="Nausea">
          <option value="Vomiting">
          <option value="Rectal Bleed">
          <option value="Abdominal Pain">
          <option value="Abrasion">
          <option value="Laceration">
          <option value="Blisters">
          <option value="Sunburn">
          <option value="Tachycardia">
          <option value="Palpitations">
          <option value="Chest Pain/Pressure">
          <option value="SOB">
          <option value="Wheeze">
          <option value="Muscle Cramps">
          <option value="Muscle Strain">
          <option value="Ortho">
          <option value="Joint Pain">
          <option value="Foot">
          <option value="Ankle">
          <option value="Knee">
          <option value="Hip">
          <option value="Back">
          <option value="Upper Extremity">
        </datalist>
      </div>

      <div class="post-container">
        <h3 class="form-header">Vital Signs/Labs</h3>
      </div>

      <div class="post-container">
        TEMPLATE: 00:00 AM | BP 00 | P 00 | RR 00 | Skin 00 | I-stat 00 | Glucose 00 | 02 Sat 00 | Other
      </div>

      <div class="post-container">
        <input type="text" class="form-input" id="vital_signs_1" name="vital_signs_1" size="80" value="{{ $post->vital_signs_1 }}" placeholder="Test 1">
      </div>

      <div class="post-container">
        <input type="text" class="form-input" id="vital_signs_2" name="vital_signs_2" size="80" value="{{ $post->vital_signs_2 }}" placeholder="Test 2">
      </div>

      <div class="post-container">
        <input type="text" class="form-input" id="vital_signs_3" name="vital_signs_3" size="80" value="{{ $post->vital_signs_3 }}" placeholder="Test 3">
      </div>

      <div class="post-container">
        <input type="text" class="form-input" id="vital_signs_4" name="vital_signs_4" size="80" value="{{ $post->vital_signs_4 }}" placeholder="Test 4">
      </div>

      <div class="post-container">
        <input type="text" class="form-input" id="vital_signs_5" name="vital_signs_5" size="80" value="{{ $post->vital_signs_5 }}" placeholder="Test 5">
      </div>

      <div class="post-container">
        <textarea id="labs" name="labs" placeholder="Labs">{{ $post->labs }}</textarea>
      </div>

      <div class="post-container">
        <h3 class="form-header">Treatment</h3>
      </div>

      <div class="post-container">
        TEMPLATE: IV 00 liters | 00:00 AM | IV_Solution | Volume 00
      </div>

      <div class="post-container">
        <input type="text" class="form-input" id="treatment_1" name="treatment_1" size="80" value="{{ $post->treatment_1 }}" placeholder="Treatment 1">
      </div>

      <div class="post-container">
        <input type="text" class="form-input" id="treatment_2" name="treatment_2" size="80" value="{{ $post->treatment_2 }}" placeholder="Treatment 2">
      </div>

      <div class="post-container">
        <input type="text" class="form-input" id="treatment_3" name="treatment_3" size="80" value="{{ $post->treatment_3 }}" placeholder="Treatment 3">
      </div>

      <div class="post-container">
        <input type="text" class="form-input" id="treatment_4" name="treatment_4" size="80" value="{{ $post->treatment_4 }}" placeholder="Treatment 4">
      </div>

      <div class="post-container">
        <input type="text" class="form-input" id="treatment_5" name="treatment_5" size="80" value="{{ $post->treatment_5 }}" placeholder="Treatment 5">
      </div>

      <div class="post-container">
        <textarea id="physical_exam" name="physical_exam" placeholder="Physical Exam">{{ $post->physical_exam }}</textarea>
      </div>

      <div class="post-container">
        <input list="diagnosis-info" name="diagnosis" id="diagnosis" class="form-input" size="15" value="{{ $post->diagnosis }}" placeholder="Diagnosis">
        <datalist id="diagnosis-info">
          <option value="Dehydration">
          <option value="Hyperthermia">
          <option value="Hypothermia">
          <option value="Hyponatremia">
          <option value="Muscle Cramps">
          <option value="Orthopaedic">
          <option value="Podiatry">
        </datalist>
        <label for="disposition">Disposition:</label>
        <select id="disposition" name="disposition" class="form-input">
          <option value="Released on Own">Released On Own</option>
          <option value="Released with Family">Released With Family</option>
          <option value="Follow-up Care Needed">Follow Up Care Needed</option>
          <option value="Refusal of Care">Refusal of Care</option>
          <option value="Medical Transport to FAHC">Medical Transport to FAHC</option>
        </select>
        <label for="disposition_time">Time:</label>
        <input type="time" class="form-input" id="disposition_time" name="disposition_time" size="7" maxlength="7" value="{{ $post->disposition_time }}">
      </div>

      <div class="post-container">
        <input type="text" class="form-input" id="disposition_transportation" name="disposition_transportation" size="50" value="{{ $post->disposition_transportation }}" placeholder="Transported By">
        <label for="family_notification">Family Notification:</label>
        <input type="checkbox" class="form-input" id="family_notification" name="family_notification" value="1">
      </div>

      <div class="post-container">
        <textarea class="form-input" id="treatment_notes" name="treatment_notes" row="200" cols="20" placeholder="Treatment Notes">{{ $post->treatment_notes }}</textarea>
      </div>

      <div class="post-container">
        <h3 class="form-header">Provider</h3>
      </div>

      <div class="post-container">
        <input type="text" class="form-input" id="provider_name" name="provider_name" size="15" maxlength="15" value="{{ $post->provider_name }}" placeholder="Name">
        <select id="provider_prefix" name="provider_prefix" class="form-input">
          <option value="MD">MD</option>
          <option value="RN">RN</option>
          <option value="ATC">ATC</option>
          <option value="EMT">EMT</option>
          <option value="DO">DO</option>
        </select>
        <label for="provider_signature">Signature:</label>
        <input type="checkbox" class="form-input" id="provider_signature" name="provider_signature" value="1">
      </div>

      <div class="post-container">
        <button type="submit" class="post-show-edit-button">Submit</button>
      </div>

      <br>

      @include ('layouts.errors')

    </form>

@endsection
