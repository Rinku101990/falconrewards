<?php if($this->website->web_lang=='en'){ ?>
<div class="col-md-3 col-sm-3">
    <div class="personal-tab">
        <ul>
            <li>
                <a class="" href="<?php echo site_url('account/dashboard');?>"><?php echo $this->variables[36]->var_parent_name;?></a>
            </li>
            <li>
                <a class="" href="<?php echo site_url('account/profile');?>"><?php echo $this->variables[37]->var_parent_name;?></a>
            </li>
            <li>
                <a class="" href="<?php echo site_url('account/payment');?>"><?php echo $this->variables[38]->var_parent_name;?></a>
            </li>
            <li>
                <a class="" href="<?php echo site_url('account/active_tickets');?>"><?php echo $this->variables[24]->var_parent_name;?></a>
            </li>
            <li>
                <a class="" href="<?php echo site_url('account/change_password');?>"><?php echo $this->variables[39]->var_parent_name;?></a>
            </li>
            <li>
                <a class="" href="<?php echo site_url('account/logout');?>"><?php echo $this->variables[40]->var_parent_name;?></a>
            </li>
        </ul>
    </div>
</div>
<?php }else if($this->website->web_lang=='ar'){?>
<div class="col-md-3 col-sm-3">
    <div class="personal-tab">
        <ul>
            <li>
                <a class="" href="<?php echo site_url('account/dashboard');?>"><?php echo $this->variables[36]->var_parent_name_ar;?></a>
            </li>
            <li>
                <a class="" href="<?php echo site_url('account/profile');?>"><?php echo $this->variables[37]->var_parent_name_ar;?></a>
            </li>
            <li>
                <a class="" href="<?php echo site_url('account/payment');?>"><?php echo $this->variables[38]->var_parent_name_ar;?></a>
            </li>
            <li>
                <a class="" href="<?php echo site_url('account/active_tickets');?>"><?php echo $this->variables[24]->var_parent_name_ar;?></a>
            </li>
            <li>
                <a class="" href="<?php echo site_url('account/change_password');?>"><?php echo $this->variables[39]->var_parent_name_ar;?></a>
            </li>
            <li>
                <a class="" href="<?php echo site_url('account/logout');?>"><?php echo $this->variables[40]->var_parent_name_ar;?></a>
            </li>
        </ul>
    </div>
</div>
<?php } ?>