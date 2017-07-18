<form class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend>Form Name</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fn">First name</label>
            <div class="col-md-4">
                <input id="fn" name="fn" type="text" placeholder="first name" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="ln">Last name</label>
            <div class="col-md-4">
                <input id="ln" name="ln" type="text" placeholder="last name" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="cmpny">Company</label>
            <div class="col-md-4">
                <input id="cmpny" name="cmpny" type="text" placeholder="company" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="email">Email</label>
            <div class="col-md-4">
                <input id="email" name="email" type="text" placeholder="email" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="add1">Address 1</label>
            <div class="col-md-4">
                <input id="add1" name="add1" type="text" placeholder="" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="add2">Address 2</label>
            <div class="col-md-4">
                <input id="add2" name="add2" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="city">City</label>
            <div class="col-md-4">
                <input id="city" name="city" type="text" placeholder="city" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="zip">Zip Code</label>
            <div class="col-md-4">
                <input id="zip" name="zip" type="text" placeholder="Zip Code" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="ctry">Country</label>
            <div class="col-md-4">
                <input id="ctry" name="ctry" type="text" placeholder="Country" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="phone">Text InputPhone</label>
            <div class="col-md-4">
                <input id="phone" name="phone" type="text" placeholder="Phone#" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Multiple Radios (inline) -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Training">Would you like to attend our Networking Reception on September 3, 2015?</label>
            <div class="col-md-4">
                <label class="radio-inline" for="Training-0">
                    <input type="radio" name="Training" id="Training-0" value="yes" checked="checked">
                    Yes
                </label>
                <label class="radio-inline" for="Training-1">
                    <input type="radio" name="Training" id="Training-1" value="no">
                    No
                </label>
            </div>
        </div>

        <!-- Multiple Radios (inline) -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Networking_Reception">Would you like to attend our Technical Product Update Session on September 4, 2015?</label>
            <div class="col-md-4">
                <label class="radio-inline" for="Networking_Reception-0">
                    <input type="radio" name="Networking_Reception" id="Networking_Reception-0" value="meet_yes" checked="checked">
                    Yes
                </label>
                <label class="radio-inline" for="Networking_Reception-1">
                    <input type="radio" name="Networking_Reception" id="Networking_Reception-1" value="meet_no">
                    No
                </label>
            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="selectbasic">Select Basic</label>
            <div class="col-md-4">
                <select id="selectbasic" name="selectbasic" class="form-control input-md">
                    <option>Option one</option>
                    <option>Option two</option>
                </select>
            </div>
        </div>


        <!-- Multiple Radios (inline) -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Dinner">Would you like to attend our Networking Dinner on September 4, 2015?</label>
            <div class="col-md-4">
                <label class="radio-inline" for="Dinner-0">
                    <input type="radio" name="Dinner" id="Dinner-0" value="dinner_yes" checked="checked">
                    Yes
                </label>
                <label class="radio-inline" for="Dinner-1">
                    <input type="radio" name="Dinner" id="Dinner-1" value="dinner_no">
                    No
                </label>
            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="submit"></label>
            <div class="col-md-4">
                <button id="submit" name="submit" class="btn btn-primary">SUBMIT</button>
            </div>
        </div>

    </fieldset>
</form>
