@extends ('layouts.master')

@section ('content')
    <!-- Title -->
    <h1>&nbsp&nbsp Keybank Vermont City Marathon Medical Record</h1>



    <form method="POST" action="/posts">

      {{ csrf_field() }}

      <div class="post-container">
        <button type="submit" class="post-show-edit-button">Submit</button>
      </div>

      <div class="post-container">
        <h3 class="form-header">Main Information</h3>
      </div>

      <div class="post-container">
        <input type="text" class="form-input" id="bib_number" name="bib_number" size="9" maxlength="9" value="{{ old('bib_number')}}" placeholder="BIB Number" required>
        <select id="location" name="location" class="form-input" placeholder="Location">
          <option value="Main Tent">Main Tent</option>
          <option value="Battery Tent">Battery Tent</option>
          <option value="Oakledge Tent">Oakledge Tent</option>
          <option value="Sag Wagon">Sag Wagon</option>
          <option value="BFD on course">BFD on course</option>
        </select>
      </div>

      <div class="post-container">
        <input type="text" class="form-input" id="first_name" name="first_name" size="15" maxlength="15" value="{{ old('first_name')}}" placeholder="First Name" required>
        <input type="text" class="form-input" id="middle_name" name="middle_name" size="15" maxlength="15" value="{{ old('middle_name')}}" placeholder="Middle Name">
        <input type="text" class="form-input" id="last_name" name="last_name" size="15" maxlength="15" value="{{ old('last_name')}}" placeholder="Last Name" required>
      </div>

      <div class="post-container">
        <input type="text" class="form-input" id="age" name="age" size="3" maxlength="3" value="{{ old('age')}}" placeholder="Age">
        <select id="sex" name="sex" class="form-input">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
        <input type="text" class="form-input" id="city" name="city" size="15" value="{{ old('city')}}" placeholder="City">
        <select id="state" name="state" class="form-input">
          <option value="AL">AL</option>
        	<option value="AK">AK</option>
        	<option value="AR">AR</option>
        	<option value="AZ">AZ</option>
        	<option value="CA">CA</option>
        	<option value="CO">CO</option>
        	<option value="CT">CT</option>
        	<option value="DC">DC</option>
        	<option value="DE">DE</option>
        	<option value="FL">FL</option>
        	<option value="GA">GA</option>
        	<option value="HI">HI</option>
        	<option value="IA">IA</option>
        	<option value="ID">ID</option>
        	<option value="IL">IL</option>
        	<option value="IN">IN</option>
        	<option value="KS">KS</option>
        	<option value="KY">KY</option>
        	<option value="LA">LA</option>
        	<option value="MA">MA</option>
        	<option value="MD">MD</option>
        	<option value="ME">ME</option>
        	<option value="MI">MI</option>
        	<option value="MN">MN</option>
        	<option value="MO">MO</option>
        	<option value="MS">MS</option>
        	<option value="MT">MT</option>
        	<option value="NC">NC</option>
        	<option value="NE">NE</option>
        	<option value="NH">NH</option>
        	<option value="NJ">NJ</option>
        	<option value="NM">NM</option>
        	<option value="NV">NV</option>
        	<option value="NY">NY</option>
        	<option value="ND">ND</option>
        	<option value="OH">OH</option>
        	<option value="OK">OK</option>
        	<option value="OR">OR</option>
        	<option value="PA">PA</option>
        	<option value="RI">RI</option>
        	<option value="SC">SC</option>
        	<option value="SD">SD</option>
        	<option value="TN">TN</option>
        	<option value="TX">TX</option>
        	<option value="UT">UT</option>
        	<option selected="selected" value="VT">VT</option>
        	<option value="VA">VA</option>
        	<option value="WA">WA</option>
        	<option value="WI">WI</option>
        	<option value="WV">WV</option>
        	<option value="WY">WY</option>
        </select>
        <input type="text" class="form-input" id="country" name="country" size="15" value="{{ old('country')}}" placeholder="Country">
      </div>

      <div class="post-container">
        <input list="info" name="pt_info" id="pt_info" class="form-input" size="15" value="{{ old('pt_info')}}" placeholder="Pt. Info">
        <datalist id="info">
          <option value="Marathon">
          <option value="Relay">
          <option value="Volunteer">
        </datalist>
        <label for="race_chip_collected">Race Chip Collected</label>
        <input type="checkbox" class="form-input" id="race_chip_collected" name="race_chip_collected" value="1">
        <label for="medal_given">Medal Given</label>
        <input type="checkbox" class="form-input" id="medal_given" name="medal_given" value="1">
      </div>

      <div class="post-container">
        <label for="time_in">Time In:</label>
        <input type="time" class="form-input" id="time_in" name="time_in" size="7" maxlength="7" value="{{ old('time_in') }}">
        <label for="time_out">Time Out:</label>
        <input type="time" class="form-input" id="time_out" name="time_out" size="7" maxlength="7" value="{{ old('time_out') }}">
      </div>

      <div class="post-container">
        <textarea class="form-input" id="relevant_medical_history" name="relevant_medical_history" placeholder="Relevant Medical History">{{ old('relevant_medical_history') }}</textarea>
      </div>

      <div class="post-container">
        <input type="text" class="form-input" id="allergies" name="allergies" size="80" value="{{ old('allergies') }}" placeholder="Allergies">
      </div>

      <div class="post-container">
        <input type="text" class="form-input" id="current_meds" name="current_meds" size="80" value="{{ old('current_meds') }}" placeholder="Current Meddications">
      </div>

      <div class="post-container">
        <h3 class="form-header">Family Information</h3>
      </div>

      <div class="post-container">
        <input type="text" class="form-input" id="emergency_contact_name" name="emergency_contact_name" size="30" value="{{ old('emergency_contact_name') }}" placeholder="Emergency Contact Name">
      </div>

      <div class="post-container">
        <input type="text" class="form-input" id="emergency_contact_phone_number" name="emergency_contact_phone_number" size="15" value="{{ old('emergency_contact_phone_number') }}" placeholder="Emergency Contact Phone Number">
      </div>

      <div class="post-container">
        <h3 class="form-header">Intake Medical Information</h3>
      </div>

      <div class="post-container">
        <input list="complaint-info" name="chief_complaint" id="chief_complaint" class="form-input" size="80" value="{{ old('chief_complaint')}}" placeholder="Chief Complaint">
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
        <input type="text" class="form-input" id="vital_signs_1" name="vital_signs_1" size="80" value="{{ old('vital_signs_1')}}" placeholder="Test 1">
      </div>

      <div class="post-container">
        <input type="text" class="form-input" id="vital_signs_2" name="vital_signs_2" size="80" value="{{ old('vital_signs_2')}}" placeholder="Test 2">
      </div>

      <div class="post-container">
        <input type="text" class="form-input" id="vital_signs_3" name="vital_signs_3" size="80" value="{{ old('vital_signs_3')}}" placeholder="Test 3">
      </div>

      <div class="post-container">
        <input type="text" class="form-input" id="vital_signs_4" name="vital_signs_4" size="80" value="{{ old('vital_signs_4')}}" placeholder="Test 4">
      </div>

      <div class="post-container">
        <input type="text" class="form-input" id="vital_signs_5" name="vital_signs_5" size="80" value="{{ old('vital_signs_5')}}" placeholder="Test 5">
      </div>

      <div class="post-container">
        <textarea id="labs" name="labs" placeholder="Labs">{{ old('labs') }}</textarea>
      </div>

      <div class="post-container">
        <h3 class="form-header">Treatment</h3>
      </div>

      <div class="post-container">
        TEMPLATE: IV 00 liters | 00:00 AM | IV_Solution | Volume 00
      </div>

      <div class="post-container">
        <input type="text" class="form-input" id="treatment_1" name="treatment_1" size="80" value="{{ old('treatment_1')}}" placeholder="Treatment 1">
      </div>

      <div class="post-container">
        <input type="text" class="form-input" id="treatment_2" name="treatment_2" size="80" value="{{ old('treatment_2')}}" placeholder="Treatment 2">
      </div>

      <div class="post-container">
        <input type="text" class="form-input" id="treatment_3" name="treatment_3" size="80" value="{{ old('treatment_3')}}" placeholder="Treatment 3">
      </div>

      <div class="post-container">
        <input type="text" class="form-input" id="treatment_4" name="treatment_4" size="80" value="{{ old('treatment_4')}}" placeholder="Treatment 4">
      </div>

      <div class="post-container">
        <input type="text" class="form-input" id="treatment_5" name="treatment_5" size="80" value="{{ old('treatment_5')}}" placeholder="Treatment 5">
      </div>

      <div class="post-container">
        <textarea id="physical_exam" name="physical_exam" placeholder="Physical Exam">{{ old('physical_exam') }}</textarea>
      </div>

      <div class="post-container">
        <input list="diagnosis-info" name="diagnosis" id="diagnosis" class="form-input" size="15" value="{{ old('diagnosis')}}" placeholder="Diagnosis">
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
        <input type="time" class="form-input" id="disposition_time" name="disposition_time" size="7" maxlength="7" value="{{ old('disposition_time')}}">
      </div>

      <div class="post-container">
        <input type="text" class="form-input" id="disposition_transportation" name="disposition_transportation" size="50" value="{{ old('disposition_transportation')}}" placeholder="Transported By">
        <label for="family_notification">Family Notification:</label>
        <input type="checkbox" class="form-input" id="family_notification" name="family_notification" value="1">
      </div>

      <div class="post-container">
        <textarea class="form-input" id="treatment_notes" name="treatment_notes" row="200" cols="20" placeholder="Treatment Notes">{{ old('treatment_notes') }}</textarea>
      </div>

      <div class="post-container">
        <h3 class="form-header">Provider</h3>
      </div>

      <div class="post-container">
        <input type="text" class="form-input" id="provider_name" name="provider_name" size="15" maxlength="15" value="{{ old('provider_name')}}" placeholder="Name">
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
