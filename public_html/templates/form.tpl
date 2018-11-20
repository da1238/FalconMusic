{*<div class="row">*}
{*<div class="col-sm-12 col-md-12">*}
<form action="index.php" method="post">
    {* User's Name *}
    <div class="form-group row">
        <div class="col-6">
            <label class="col-form-label" for="frmFirstName">First Name</label>
            <input type="text"
                   class="form-control {if isset($errors['frmFirstName'])}is-invalid{elseif isset($errors)}is-valid{/if}"
                   name="frmFirstName" id="frmFirstName" placeholder="First Name"
                   {if isset($formValues['frmFirstName'])}value="{$formValues['frmFirstName']}"{/if}
            />
            <div class="invalid-feedback">{$errors['frmFirstName']}</div>
        </div>
        <div class="col-6">
            <label class="col-form-label" for="frmLastName">Last Name</label>
            <input type="text"
                   class="form-control {if isset($errors['frmLastName'])}is-invalid{elseif isset($errors)}is-valid{/if}"
                   name="frmLastName" id="frmLastName"
                   placeholder="Last Name"
                   {if isset($formValues['frmLastName'])}value="{$formValues['frmLastName']}"{/if}
            />
            <div class="invalid-feedback">{$errors['frmLastName']}</div>
        </div>
    </div>

    {* Address Section *}
    <div class="form-group row">
        <div class="col-6">
            <label class="col-2 col-form-label" for="frmStreet">Street</label>
            <input type="text" class="form-control {if isset($errors['frmStreet'])}is-invalid{elseif isset($errors)}is-valid{/if}"
                   name="frmStreet" id="frmStreet"
                   placeholder="Street Address"
                   {if isset($formValues['frmStreet'])}value="{$formValues['frmStreet']}"{/if}
            />
            <div class="invalid-feedback">{$errors['frmStreet']}</div>
        </div>
        <div class="col-3">
            <label class="col-form-label" for="frmCity">City</label>
            <input type="text" class="form-control {if isset($errors['frmCity'])}is-invalid{elseif isset($errors)}is-valid{/if}"
                   name="frmCity" id="frmCity"
                   placeholder="City"
                   {if isset($formValues['frmCity'])}value="{$formValues['frmCity']}"{/if}
            />
            <div class="invalid-feedback">{$errors['frmCity']}</div>
        </div>
        <div class="col-1">
            <label class="col-1 col-form-label" for="frmState">State</label>
            <input type="text" class="form-control {if isset($errors['frmState'])}is-invalid{elseif isset($errors)}is-valid{/if}"
                   name="frmState" id="frmState"
                   placeholder="State"
                   {if isset($formValues['frmState'])}value="{$formValues['frmState']}"{/if}
            />
            <div class="invalid-feedback">{$errors['frmState']}</div>
        </div>
        <div class="col-2">
            <label class="col-1 col-form-label" for="frmZip">Zip</label>
            <input type="text" class="form-control {if isset($errors['frmZip'])}is-invalid{elseif isset($errors)}is-valid{/if}"
                   name="frmZip" id="frmZip"
                   placeholder="Zip Code"
                   {if isset($formValues['frmZip'])}value="{$formValues['frmZip']}"{/if}
            />
            <div class="invalid-feedback">{$errors['frmZip']}</div>
        </div>
    </div>

    {* Login Information *}
    <div class="form-group row">
        <div class="col-6">
            <label class="col-form-label" for="frmUserName">User Name</label>
            <input type="text" class="form-control {if isset($errors['frmUserName'])}is-invalid{elseif isset($errors)}is-valid{/if}"
                   name="frmUserName" id="frmUserName"
                   placeholder="Chosen User Name"
                   {if isset($formValues['frmUserName'])}value="{$formValues['frmUserName']}"{/if}
            />
            <div class="invalid-feedback">{$errors['frmUserName']}</div>
        </div>
        <div class="col-6">
            <label class="col-form-label" for="frmPassword">Password</label>
            <input type="password" class="form-control {if isset($errors['frmPassword'])}is-invalid{elseif isset($errors)}is-valid{/if}"
                   name="frmPassword" id="frmPassword"/>
            <div class="invalid-feedback">{$errors['frmPassword']}</div>
        </div>
    </div>

    {* Social Information *}
    <div class="form-group row">
        <div class="col-6">
            <label class="col-2">Gender</label>
            <label>
                <input type="radio" name="frmGender" value="M"
                        {if isset($formValues['frmGender']) && $formValues['frmGender'] == 'M'}checked="checked"{/if} />
                <span class="custom-control-description"> Male </span>
            </label>
            <label>
                <input type="radio" name="frmGender" value="F"
                       {if isset($formValues['frmGender']) && $formValues['frmGender'] == 'F'}checked="checked"{/if} />
                <span class="custom-control-description"> Female </span>
            </label>
        </div>
        <div class="col-6">
            <label>Are you Married?</label>
            <label>
                <input type="checkbox" name="frmMarried" value="Yes"
                       {if isset($formValues['frmMarried'])}checked="checked"{/if} />
                <span class="custom-control-description">Yes</span>
            </label>
        </div>
    </div>

    {* Form Submit *}
    <div class="form-group row">
        <div class="offset-3 col-9">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
{*</div>*}
{*</div>*}