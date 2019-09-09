<% if $EnableGDPR && $GDPRNotice %>
	<div id="iq-gdpr">
		<div class="iq-gdpr typography">
			<div class="iq-gdpr__notice">
				$GDPRNotice
			</div>
			<div class="iq-gdpr__dismiss">
				<a href="/_accepts_cookies" class="btn">I Accept</a>
			</div>
		</div>
	</div>
<% end_if %>