				<div id="dop-form-popup" class="form-popup mfp-hide signup-form-wrap">
					<form class="signup-form form">
						<div class="input-wrap">
							<input type="text" name="uName" value="Name" data-value="Name">
						</div><?php /* End input-wrap */ echo "\n"; ?>
						<div class="input-wrap">
							<input type="text" name="uCompany" value="Company" data-value="Company">
						</div><?php /* End input-wrap */ echo "\n"; ?>
						<div class="input-wrap">
							<input type="text" name="uEmail" value="Email" data-value="Email">
						</div><?php /* End input-wrap */ echo "\n"; ?>
						<div class="input-wrap">
							<input type="text" name="uPhone" value="Phone" data-value="Phone">
						</div><?php /* End input-wrap */ echo "\n"; ?>
						<div class="input-wrap dropdown-wrap">
							<select id="uRole" class="has-dropdown wide">
								<option value="student" data-display-text="Role: Student">Student</option>
								<option value="developer" data-display-text="Role: Developer">Developer</option>
								<option value="scientist" data-display-text="Role: Scientist">Scientist</option>
								<option value="cto/cio" data-display-text="Role: CTO/CIO">CTO/CIO</option>
								<option value="business-manager" data-display-text="Role: Business Manager">Business Manager</option>
							</select>
						</div><?php /* End input-wrap */ echo "\n"; ?>
						<div class="input-wrap">
							<input type="checkbox" name="services-agreement" id="services-agreement">
							<label for="services-agreement" class="slim">
								<span></span>
								<div class="checkbox-text">I agree to the <a href="<?php $base_url; ?>/cloud-services-agreement-and-clusterpoint-license-agreement" target="_blank">Cloud Services Agreement and Clusterpoint License Agreement.</a></div>
							</label>
						</div><?php /* End input-wrap */ echo "\n"; ?>
							<div class="input-wrap">
								<a href="#" class="btn btn-red"><span class="button-label">Submit </span><span class="button-dots"></span></a>
								<input type="submit" value="Submit" class="btn btn-red" style="display: none;">
							</div><?php /* End input-wrap */ echo "\n"; ?>
							<div class="error-message">Invalid email address</div><?php /* End error-message */ echo "\n"; ?>
							<div class="success-message">Message has been sent.</div><?php /* End success-message */ echo "\n"; ?>
					</form>
				</div><?php /* End form-popup */ echo "\n"; ?>