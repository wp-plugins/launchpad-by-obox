<?php global $apollo_options, $apollo_theme_options, $apollo; ?>
<?php if(isset($apollo_options["subscription_username"]) && $apollo_options["subscription_username"] != "") : ?>
    <div class="subscribe-form">
    	<h5><?php echo $apollo_options["subscription_title"]; ?></h5>
    	<form action="http://<?php echo $apollo_options["subscription_username"]; ?>.createsend.com/t/r/s/pirfi/" method="post" id="subForm" target="_blank">
            <input type="text" name="cm-pirfi-pirfi" id="pirfi-pirfi" placeholder="Enter your email here" />
            <input type="submit" class="submit_button" value="<?php echo $apollo_options["subscription_button"]; ?>" />
        </form>
    </div>
<?php endif; ?>