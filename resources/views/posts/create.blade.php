@extends ('layouts.master')

@section ('content')
    <!-- Title -->
    <h1>&nbsp&nbsp Keybank Vermont City Marathon Medical Record</h1>

    <hr>

    <form method="POST" action="/posts">

      {{ csrf_field() }}

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
            <input type="text" class="form-input" id="bib_number" name="bib_number" size="9" maxlength="9" value="{{ old('bib_number')}}" required>
          </div>
          <div class="col-1">
            <label for="location">Location:</label>
          </div>
          <div class="col-2">
            <select id="location" name="location" class="form-input">
              <option value="Main Tent">Main Tent</option>
              <option value="Battery Tent">Battery Tent</option>
              <option value="Oakledge Tent">Oakledge Tent</option>
              <option value="Sag Wagon">Sag Wagon</option>
              <option value="BFD on course">BFD on course</option>
            </select>
          </div>
        </div>
        <!-- /row -->

        <div class="row">
          <div class="col-2">
            <label for="first_name">First Name:</label>
          </div>
          <div class="col-2">
            <input type="text" class="form-input" id="first_name" name="first_name" size="15" maxlength="15" value="{{ old('first_name')}}" required>
          </div>
          <div class="col-2">
            <label for="middle_name">Middle Name:</label>
          </div>
          <div class="col-2">
            <input type="text" class="form-input" id="middle_name" name="middle_name" size="15" maxlength="15" value="{{ old('middle_name')}}">
          </div>
          <div class="col-2">
            <label for="middle_name">Last Name:</label>
          </div>
          <div class="col-2">
            <input type="text" class="form-input" id="last_name" name="last_name" size="15" maxlength="15" value="{{ old('last_name')}}" required>
          </div>
        </div>
        <!-- /row -->

        <div class="row">
          <div class="col-1">
            <label for="age">Age:</label>
          </div>
          <div class="col-1">
            <input type="text" class="form-input" id="age" name="age" size="3" maxlength="3" value="{{ old('age')}}" required>
          </div>
          <div class="col-1">
            <label for="sex">Sex:</label>
          </div>
          <div class="col-1">
            <select id="sex" name="sex" class="form-input">
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>
          <div class="col-1">
            <label for="city">City:</label>
          </div>
          <div class="col-2">
            <input type="text" class="form-input" id="city" name="city" size="15" value="{{ old('city')}}">
          </div>
          <div class="col-1">
            <label for="state">State:</label>
          </div>
          <div class="col-1">
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
          </div>
          <div class="col-1">
            <label for="country">Country:</label>
          </div>
          <div class="col-2">
            <input type="text" class="form-input" id="country" name="country" size="15" value="{{ old('country')}}">
          </div>
        </div>
        <!-- /row -->

        <div class="row">
          <div class="col-2">
            <label for="pt_info">Pt. Info:</label>
          </div>
          <div class="col-2">
            <input list="info" name="pt_info" id="pt_info" class="form-input" size="15" value="{{ old('pt_info')}}">
            <datalist id="info">
              <option value="Marathon">
              <option value="Relay">
              <option value="Volunteer">
            </datalist>
          </div>
          <div class="col-3">
            <label for="race_chip_collected">Race Chip Collected:</label>
          </div>
          <div class="col-1">
            <input type="checkbox" class="form-input" id="race_chip_collected" name="race_chip_collected" value="1">
          </div>
          <div class="col-2">
            <label for="medal_given">Medal Given:</label>
          </div>
          <div class="col-1">
            <input type="checkbox" class="form-input" id="medal_given" name="medal_given" value="1">
          </div>
        </div>
        <!-- /row -->

        <div class="row">
          <div class="col-2">
            <label for="time_in">Time In:</label>
          </div>
          <div class="col-1">
            <input type="time" class="form-input" id="time_in" name="time_in" size="7" maxlength="7" value="{{ old('time_in')}}" required>
          </div>
          <div class="col-2">
            <label for="time_out">Time Out:</label>
          </div>
          <div class="col-1">
            <input type="time" class="form-input" id="time_out" name="time_out" size="7" maxlength="7" value="{{ old('time_out')}}">
          </div>
        </div>
        <!-- /row -->

        <hr>

        <div class="row">
          <div class="col-3">
            <label for="relevant_medical_history">Relevant Medical History:</label>
          </div>
          <div class="col-9">
            <input type="text" class="form-input" id="relevant_medical_history" name="relevant_medical_history" size="80" value="{{ old('relevant_medical_history')}}">
          </div>
        </div>
        <!-- /row -->

        <div class="row">
          <div class="col-1">
            <label for="allergies">Allergies:</label>
          </div>
          <div class="col-5">
            <input type="text" class="form-input" id="allergies" name="allergies" size="50" value="{{ old('allergies')}}">
          </div>
          <div class="col-2">
            <label for="current_meds">Current Meds:</label>
          </div>
          <div class="col-4">
            <input type="text" class="form-input" id="current_meds" name="current_meds" size="35" value="{{ old('current_meds')}}">
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
          <div class="col-2">
            <input list="complaint-info" name="chief_complaint" id="chief_complaint" class="form-input" size="15" value="{{ old('chief_complaint')}}" required>
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
          <div class="col-3">
            <label for="vital_signs_1">Test 1:</label>
          </div>
          <div class="col-9">
            <input type="text" class="form-input" id="vital_signs_1" name="vital_signs_1" size="80" value="{{ old('vital_signs_1')}}">
          </div>
        </div>
        <!-- /row -->

        <div class="row">
          <div class="col-3">
            <label for="vital_signs_2">Test 2:</label>
          </div>
          <div class="col-9">
            <input type="text" class="form-input" id="vital_signs_2" name="vital_signs_2" size="80" value="{{ old('vital_signs_2')}}">
          </div>
        </div>
        <!-- /row -->

        <div class="row">
          <div class="col-3">
            <label for="vital_signs_1">Test 3:</label>
          </div>
          <div class="col-9">
            <input type="text" class="form-input" id="vital_signs_3" name="vital_signs_3" size="80" value="{{ old('vital_signs_3')}}">
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
          <div class="col-3">
            <label for="treatment">Treatment:</label>
          </div>
          <div class="col-9">
            <input type="text" class="form-input" id="treatment" name="treatment" size="80" value="{{ old('treatment')}}">
          </div>
        </div>
        <!-- /row -->

        <div class="row">
          <div class="col-1">
            <label for="diagnosis">Diagnosis:</label>
          </div>
          <div class="col-2">
            <input list="diagnosis-info" name="diagnosis" id="diagnosis" class="form-input" size="15" value="{{ old('diagnosis')}}">
            <datalist id="diagnosis-info">
              <option value="Dehydration">
              <option value="Hyperthermia">
              <option value="Hypothermia">
              <option value="Hyponatremia">
              <option value="Muscle Cramps">
              <option value="Orthopaedic">
              <option value="Podiatry">
            </datalist>
          </div>
          <div class="col-2">
            <label for="disposition">Disposition:</label>
          </div>
          <div class="col-3">
            <select id="disposition" name="disposition" class="form-input">
              <option value="Released on Own">Released On Own</option>
              <option value="Released with Family">Released With Family</option>
              <option value="Follow-up Care Needed">Follow Up Care Needed</option>
              <option value="Refusal of Care">Refusal of Care</option>
              <option value="Medical Transport to FAHC">Medical Transport to FAHC</option>
            </select>
          </div>
          <div class="col-1">
            <label for="disposition_time">Time:</label>
          </div>
          <div class="col-1">
            <input type="time" class="form-input" id="disposition_time" name="disposition_time" size="7" maxlength="7" value="{{ old('disposition_time')}}">
          </div>
        </div>
        <!-- /row -->

        <div class="row">
          <div class="col-2">
            <label for="disposition_transportation">Transported By:</label>
          </div>
          <div class="col-5">
            <input type="text" class="form-input" id="disposition_transportation" name="disposition_transportation" size="50" value="{{ old('disposition_transportation')}}">
          </div>
          <div class="col-3">
            <label for="family_notification">Family Notification:</label>
          </div>
          <div class="col-1">
            <input type="checkbox" class="form-input" id="family_notification" name="family_notification" value="1">
          </div>
        </div>
        <!-- /row -->

        <div class="row">
          <div class="col-3">
            <label for="treatment_notes">Treatment Notes:</label>
          </div>
          <div class="col-9">
            <input type="text" class="form-input" id="treatment_notes" name="treatment_notes" size="80" value="{{ old('treatment_notes')}}">
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
            <input type="text" class="form-input" id="provider_name" name="provider_name" size="15" maxlength="15" value="{{ old('provider_name')}}" required>
          </div>
          <div class="col-1">
            <label for="provider_prefix">Prefix:</label>
          </div>
          <div class="col-1">
            <select id="provider_prefix" name="provider_prefix" class="form-input">
              <option value="MD">MD</option>
              <option value="RN">RN</option>
              <option value="ATC">ATC</option>
              <option value="EMT">EMT</option>
              <option value="DO">DO</option>
            </select>
          </div>
          <div class="col-1">
            <label for="provider_signature">Signature:</label>
          </div>
          <div class="col-1">
            <input type="checkbox" class="form-input" id="provider_signature" name="provider_signature" value="1">
          </div>
        </div>
        <!-- /row -->

        <hr>

        <div class="row">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <!-- /row -->

      </div>
      <!-- /container -->

      <br>

      @include ('layouts.errors')

    </form>

@endsection
