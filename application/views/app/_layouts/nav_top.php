
<a href="<?php echo base_url() ?>" class="c-btn--custom c-btn--small u-mr-auto c-btn c-btn--secondary" target='_blank'>
    <i class="fa fa-external-link"></i>
</a>

<h2 class="c-navbar__tille u-mr-auto"><?php echo $title ?></h2>

<div class="c-dropdown dropdown">
    <a href="#" class="c-avatar c-avatar--xsmall hasdropdown dropdown-toogle" id="dropdownMenuAvatar" data-toggle="dropdown" aria-haspopup="true" aria-expended="false">
        <img src="<?php echo (!empty($this->session->userdata('app_photo')) ? base_url('storage/uploads/user/photo'.$this->session->userdata('app_photo')) : base_url('storage/uploads/user/default.png'))?>" alt="<?php echo $this->session->userdata('app_pusername') ?>" class="c-avatar__img">
    </a>

    <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdwonMenuAvatar">
		<a class="c-dropdown__item dropdown-item" href="<?php echo base_url('app/user_setting') ?>">
			<i class="fa fa-user-circle u-mr-xsmall"></i>
			Profile
		</a>
		<a class="c-dropdown__item dropdown-item" href="javascript" data-toggle="modal" data-target="#app-about">
			<i class="fa fa-info-circle u-mr-xsmall"></i>
			About
		</a>
		<a class="c-dropdown__item dropdown-item" href="<?php echo base_url('auth/process_logout') ?>">
			<i class="fa fa-sign-out u-mr-xsmall"></i>
			Logout
		</a>
	</div>
</div>