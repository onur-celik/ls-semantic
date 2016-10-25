<div class="ui form">
  <div class="two fields">
    <div class="field error">
      <label>First Name</label>
      <input placeholder="First Name" type="text">
    </div>
    <div class="field">
      <label>Last Name</label>
      <input placeholder="Last Name" type="text">
    </div>
  </div>
  <div class="field error">
    <label>Gender</label>
    <div class="ui selection dropdown">
      <div class="default text">Select</div>
      <i class="dropdown icon"></i>
      <input type="hidden" name="gender">
      <div class="menu">
        <div class="item" data-value="male">Male</div>
        <div class="item" data-value="female">Female</div>
      </div>
    </div>
  </div>
  <div class="inline field error">
    <div class="ui checkbox">
      <input type="checkbox" tabindex="0" class="hidden">
      <label>I agree to the Terms and Conditions</label>
    </div>
  </div>
</div>