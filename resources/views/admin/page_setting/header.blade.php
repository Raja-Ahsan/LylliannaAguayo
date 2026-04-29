@extends('layouts.admin.app')
@section('content')
@section('title', $page_title)
@push('css')
<style>
	.header-settings-container {
		background: #ffffff;
		border-radius: 12px;
		box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
		overflow: hidden;
		margin: 20px 0;
	}

	.header-settings-body {
		padding: 0px 30px 40px;
		background: #f8f9fa;
	}

	.section-banner {
		background: linear-gradient(180deg, #EEB72D 0%, #FFE59F 49.52%, #EEB72D 100%) !important;
		padding: 15px 20px;
		margin: 0 -40px 25px -40px;
		border-bottom: 3px solid #242424;
		box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
		display: flex;
		justify-content: center;
		align-items: center;
		position: relative;
	}

	.section-banner h3 {
		margin: 0;
		font-size: 18px;
		font-weight: 600;
		color: #242424;
		letter-spacing: 0.5px;
		text-transform: uppercase;
	}

	.section-banner .btn {
		background: #000000;
		color: #242424;
		border: 2px solid #242424;
		padding: 8px 24px;
		border-radius: 25px;
		font-size: 13px;
		font-weight: 700;
		text-decoration: none;
		transition: all 0.3s ease;
		position: absolute;
		right: 20px;
		display: inline-flex;
		align-items: center;
		gap: 6px;
		box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
	}

	.section-banner .btn:hover {
		background: #242424;
		color: #fff;
		transform: translateY(-2px);
		box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
	}

	.section-banner .btn i {
		font-size: 12px;
	}

	.section-block {
		margin-bottom: 40px;
		padding-bottom: 30px;
		border-bottom: 2px solid #e0e0e0;
	}

	.section-block:last-of-type {
		border-bottom: none;
		margin-bottom: 30px;
		padding-bottom: 0;
	}

	.section-heading {
		background: linear-gradient(180deg, #EEB72D 0%, #FFE59F 49.52%, #EEB72D 100%) !important;
		padding: 12px 20px;
		margin: 0 0 25px 0;
		border-radius: 8px;
		border: 2px solid #242424;
		box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
	}

	.section-heading h4 {
		margin: 0;
		font-size: 15px;
		font-weight: 700;
		color: #242424;
		letter-spacing: 0.5px;
		text-transform: uppercase;
		display: flex;
		align-items: center;
		gap: 8px;
	}

	.section-heading h4 i {
		font-size: 16px;
	}

	.header-settings-container .form-group {
		margin-bottom: 25px;
	}

	.header-settings-container .form-group label {
		font-weight: 600;
		color: #2c3e50;
		margin-bottom: 10px;
		font-size: 14px;
		display: block;
	}

	.header-settings-container .form-control {
		border: 2px solid #e0e0e0;
		border-radius: 8px;
		padding: 5px;
		font-size: 14px;
		line-height: 1.6;
		transition: all 0.3s ease;
		background: #ffffff;
		box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
		width: 100%;
	}

	.header-settings-container .form-control:focus {
		border-color: #EEB72D;
		box-shadow: 0 0 0 3px rgba(238, 183, 45, 0.2);
		outline: none;
	}

	.header-settings-container .form-control:hover {
		border-color: #bdbdbd;
	}

	.existing-photo {
		border-radius: 8px;
		border: 2px solid #e0e0e0;
		object-fit: cover;
		margin-top: 12px;
		box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
	}

	.image-preview-container {
		margin-top: 15px;
		padding: 15px;
		background: #ffffff;
		border-radius: 8px;
		border: 2px dashed #e0e0e0;
		display: inline-block;
	}

	.action-section {
		text-align: center;
		padding-top: 30px;
		margin-top: 30px;
		border-top: 2px solid #e0e0e0;
	}

	.btn-update {
		background: linear-gradient(135deg, #EEB72D 0%, #d4a020 100%);
		border: none;
		border-radius: 8px;
		padding: 12px 40px;
		font-size: 16px;
		font-weight: 600;
		color: #1a1a1a;
		box-shadow: 0 4px 15px rgba(238, 183, 45, 0.35);
		transition: all 0.3s ease;
		cursor: pointer;
		text-transform: uppercase;
		letter-spacing: 0.5px;
	}

	.btn-update:hover {
		transform: translateY(-2px);
		box-shadow: 0 6px 20px rgba(238, 183, 45, 0.45);
		background: linear-gradient(135deg, #d4a020 0%, #EEB72D 100%);
		color: #1a1a1a;
	}

	.btn-update:active {
		transform: translateY(0);
	}

	.social-links-grid {
		display: grid;
		grid-template-columns: 1fr;
		gap: 0px;
	}

	.social-links-grid .form-group {
		margin-bottom: 20px;
	}

	.social-links-grid .form-group:last-child {
		margin-bottom: 0;
	}

	@media (max-width: 768px) {
		.header-settings-body { padding: 20px; }
		.section-banner { margin: 0 -20px 20px -20px; padding: 12px 15px; }
		.section-banner h3 { font-size: 16px; }
		.social-links-grid { grid-template-columns: 1fr; }
	}
</style>
@endpush


<section class="content">
	<div class="row">
		<div class="col-md-12">
			<form action="{{ route('page_setting.store') }}" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
				@csrf
				<input type="hidden" name="parent_slug" value="{{ $model->slug }}">
				<div class="header-settings-container">
					<div class="header-settings-body">
						<div class="section-banner">
							<h3>Header Settings</h3>
							<a href="{{ route('page.index') }}" class="btn btn-sm">
								<i class="fa fa-arrow-left"></i> Back
							</a>
						</div>

						@if (session('message'))
						<div style="background: #d4edda; border: 2px solid #28a745; border-radius: 8px; padding: 12px 16px; color: #155724; font-weight: 500; margin-bottom: 20px;">
							{{ session('message') }}
						</div>
						@endif

						<div class="section-block">
							<h4><i class="fa fa-image"></i> Branding Assets</h4>

							<div class="form-group">
								<label for="header_favicon">Favicon</label>
								<input type="file" id="header_favicon" name="header_favicon" class="form-control" accept="image/*">
								<small style="color: #6c757d; display: block; margin-top: 5px;">Recommended size: 32x32 pixels or 16x16 pixels</small>
								@if (isset($page_data['header_favicon']))
								<div class="image-preview-container">
									<img src="{{ asset('/public/admin/assets/images/page/' . $page_data['header_favicon']) }}" class="existing-photo" style="height:50px;" alt="Current Favicon">
								</div>
								@endif
							</div>

							<div class="form-group">
								<label for="header_logo">Logo</label>
								<input type="file" id="header_logo" name="header_logo" class="form-control" accept="image/*">
								<small style="color: #6c757d; display: block; margin-top: 5px;">Recommended: PNG with transparent background</small>
								@if (isset($page_data['header_logo']))
								<div class="image-preview-container">
									<img src="{{ asset('/public/admin/assets/images/page/' . $page_data['header_logo']) }}" class="existing-photo" style="height:100px;" alt="Current Logo">
								</div>
								@endif
							</div>
						</div>
 
						<h4><i class="fa fa-share-alt"></i> Social Media Links</h4>

						<div class="social-links-grid">
							<div class="form-group">
								<label for="footer_facebook"><i class="fa fa-facebook"></i> Facebook Link</label>
								<input type="url" id="footer_facebook" name="footer_facebook" class="form-control" value="{{ isset($page_data['footer_facebook']) ? $page_data['footer_facebook'] : '' }}" placeholder="https://facebook.com/yourpage">
							</div>

							<div class="form-group">
								<label for="footer_linkedin"><i class="fa fa-linkedin"></i> LinkedIn Link</label>
								<input type="url" id="footer_linkedin" name="footer_linkedin" class="form-control" value="{{ isset($page_data['footer_linkedin']) ? $page_data['footer_linkedin'] : '' }}" placeholder="https://linkedin.com/in/yourprofile">
							</div>

							<div class="form-group">
								<label for="footer_twitter"><i class="fa fa-twitter"></i> X (Twitter) Link</label>
								<input type="url" id="footer_twitter" name="footer_twitter" class="form-control" value="{{ isset($page_data['footer_twitter']) ? $page_data['footer_twitter'] : '' }}" placeholder="https://twitter.com/yourhandle">
							</div>
						</div> 

						<div class="action-section">
							<button type="submit" class="btn-update" name="form_header">
								<i class="fa fa-save"></i> Update Settings
							</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>
@endsection

@push('js')
<script>
$(document).ready(function() {
	// File input preview (optional enhancement)
	$('input[type="file"]').on('change', function() {
		var fileName = $(this).val().split('\\').pop();
		if (fileName) {
			console.log('Selected file: ' + fileName);
		}
	});
});
</script>
@endpush
