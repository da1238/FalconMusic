<?php
/* Smarty version 3.1.33, created on 2018-10-09 09:39:41
  from 'C:\@CloudDrives\Dropbox\@Messiah\@courses\cis291\291WebExamples\Smarty Example #2\public_html\templates\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bbcaf9d73bde7_04708799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31f8a2fffcd6f79fd549881450d177bda0d2392e' => 
    array (
      0 => 'C:\\@CloudDrives\\Dropbox\\@Messiah\\@courses\\cis291\\291WebExamples\\Smarty Example #2\\public_html\\templates\\form.tpl',
      1 => 1539092378,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbcaf9d73bde7_04708799 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="index.php" method="post">
        <div class="form-group row">
        <div class="col-6">
            <label class="col-form-label" for="frmFirstName">First Name</label>
            <input type="text"
                   class="form-control <?php if (isset($_smarty_tpl->tpl_vars['errors']->value['frmFirstName'])) {?>is-invalid<?php } elseif (isset($_smarty_tpl->tpl_vars['errors']->value)) {?>is-valid<?php }?>"
                   name="frmFirstName" id="frmFirstName" placeholder="First Name"
                   <?php if (isset($_smarty_tpl->tpl_vars['formValues']->value['frmFirstName'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['formValues']->value['frmFirstName'];?>
"<?php }?>
            />
            <div class="invalid-feedback"><?php echo $_smarty_tpl->tpl_vars['errors']->value['frmFirstName'];?>
</div>
        </div>
        <div class="col-6">
            <label class="col-form-label" for="frmLastName">Last Name</label>
            <input type="text"
                   class="form-control <?php if (isset($_smarty_tpl->tpl_vars['errors']->value['frmLastName'])) {?>is-invalid<?php } elseif (isset($_smarty_tpl->tpl_vars['errors']->value)) {?>is-valid<?php }?>"
                   name="frmLastName" id="frmLastName"
                   placeholder="Last Name"
                   <?php if (isset($_smarty_tpl->tpl_vars['formValues']->value['frmLastName'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['formValues']->value['frmLastName'];?>
"<?php }?>
            />
            <div class="invalid-feedback"><?php echo $_smarty_tpl->tpl_vars['errors']->value['frmLastName'];?>
</div>
        </div>
    </div>

        <div class="form-group row">
        <div class="col-6">
            <label class="col-2 col-form-label" for="frmStreet">Street</label>
            <input type="text" class="form-control <?php if (isset($_smarty_tpl->tpl_vars['errors']->value['frmStreet'])) {?>is-invalid<?php } elseif (isset($_smarty_tpl->tpl_vars['errors']->value)) {?>is-valid<?php }?>"
                   name="frmStreet" id="frmStreet"
                   placeholder="Street Address"
                   <?php if (isset($_smarty_tpl->tpl_vars['formValues']->value['frmStreet'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['formValues']->value['frmStreet'];?>
"<?php }?>
            />
            <div class="invalid-feedback"><?php echo $_smarty_tpl->tpl_vars['errors']->value['frmStreet'];?>
</div>
        </div>
        <div class="col-3">
            <label class="col-form-label" for="frmCity">City</label>
            <input type="text" class="form-control <?php if (isset($_smarty_tpl->tpl_vars['errors']->value['frmCity'])) {?>is-invalid<?php } elseif (isset($_smarty_tpl->tpl_vars['errors']->value)) {?>is-valid<?php }?>"
                   name="frmCity" id="frmCity"
                   placeholder="City"
                   <?php if (isset($_smarty_tpl->tpl_vars['formValues']->value['frmCity'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['formValues']->value['frmCity'];?>
"<?php }?>
            />
            <div class="invalid-feedback"><?php echo $_smarty_tpl->tpl_vars['errors']->value['frmCity'];?>
</div>
        </div>
        <div class="col-1">
            <label class="col-1 col-form-label" for="frmState">State</label>
            <input type="text" class="form-control <?php if (isset($_smarty_tpl->tpl_vars['errors']->value['frmState'])) {?>is-invalid<?php } elseif (isset($_smarty_tpl->tpl_vars['errors']->value)) {?>is-valid<?php }?>"
                   name="frmState" id="frmState"
                   placeholder="State"
                   <?php if (isset($_smarty_tpl->tpl_vars['formValues']->value['frmState'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['formValues']->value['frmState'];?>
"<?php }?>
            />
            <div class="invalid-feedback"><?php echo $_smarty_tpl->tpl_vars['errors']->value['frmState'];?>
</div>
        </div>
        <div class="col-2">
            <label class="col-1 col-form-label" for="frmZip">Zip</label>
            <input type="text" class="form-control <?php if (isset($_smarty_tpl->tpl_vars['errors']->value['frmZip'])) {?>is-invalid<?php } elseif (isset($_smarty_tpl->tpl_vars['errors']->value)) {?>is-valid<?php }?>"
                   name="frmZip" id="frmZip"
                   placeholder="Zip Code"
                   <?php if (isset($_smarty_tpl->tpl_vars['formValues']->value['frmZip'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['formValues']->value['frmZip'];?>
"<?php }?>
            />
            <div class="invalid-feedback"><?php echo $_smarty_tpl->tpl_vars['errors']->value['frmZip'];?>
</div>
        </div>
    </div>

        <div class="form-group row">
        <div class="col-6">
            <label class="col-form-label" for="frmUserName">User Name</label>
            <input type="text" class="form-control <?php if (isset($_smarty_tpl->tpl_vars['errors']->value['frmUserName'])) {?>is-invalid<?php } elseif (isset($_smarty_tpl->tpl_vars['errors']->value)) {?>is-valid<?php }?>"
                   name="frmUserName" id="frmUserName"
                   placeholder="Chosen User Name"
                   <?php if (isset($_smarty_tpl->tpl_vars['formValues']->value['frmUserName'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['formValues']->value['frmUserName'];?>
"<?php }?>
            />
            <div class="invalid-feedback"><?php echo $_smarty_tpl->tpl_vars['errors']->value['frmUserName'];?>
</div>
        </div>
        <div class="col-6">
            <label class="col-form-label" for="frmPassword">Password</label>
            <input type="password" class="form-control <?php if (isset($_smarty_tpl->tpl_vars['errors']->value['frmPassword'])) {?>is-invalid<?php } elseif (isset($_smarty_tpl->tpl_vars['errors']->value)) {?>is-valid<?php }?>"
                   name="frmPassword" id="frmPassword"/>
            <div class="invalid-feedback"><?php echo $_smarty_tpl->tpl_vars['errors']->value['frmPassword'];?>
</div>
        </div>
    </div>

        <div class="form-group row">
        <div class="col-6">
            <label class="col-2">Gender</label>
            <label>
                <input type="radio" name="frmGender" value="M"
                        <?php if (isset($_smarty_tpl->tpl_vars['formValues']->value['frmGender']) && $_smarty_tpl->tpl_vars['formValues']->value['frmGender'] == 'M') {?>checked="checked"<?php }?> />
                <span class="custom-control-description"> Male </span>
            </label>
            <label>
                <input type="radio" name="frmGender" value="F"
                       <?php if (isset($_smarty_tpl->tpl_vars['formValues']->value['frmGender']) && $_smarty_tpl->tpl_vars['formValues']->value['frmGender'] == 'F') {?>checked="checked"<?php }?> />
                <span class="custom-control-description"> Female </span>
            </label>
        </div>
        <div class="col-6">
            <label>Are you Married?</label>
            <label>
                <input type="checkbox" name="frmMarried" value="Yes"
                       <?php if (isset($_smarty_tpl->tpl_vars['formValues']->value['frmMarried'])) {?>checked="checked"<?php }?> />
                <span class="custom-control-description">Yes</span>
            </label>
        </div>
    </div>

        <div class="form-group row">
        <div class="offset-3 col-9">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
<?php }
}
