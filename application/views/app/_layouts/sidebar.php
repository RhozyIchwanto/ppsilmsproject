<?php if($this->session->userdata('app_grade') == 'Instructor'): ?>
    <div class="o-page__sidebar js-page-sidebar">
        <div class="c-sidebar is-minimized show">

            <a href="<?php echo base_url('app/lms_courses') ?>" class="c-sidebar__brand">
                <img src="<?php echo base_url(APP_LOGO) ?>" alt="Logo" class="c-sidebar__brand-img" title='Logo'>
                <span class="c-sidebar__brand-text"><?php echo APP_NAME ?></span>
            </a>

            <ul class="c-sidebar__list">
                <?php $this->load->view('app/_layouts/nav-instructor');?>
            </ul>
            
        </div> <!-- // .c-sidebar -->
    </div>
<?php endif ?>
<?php if ($this->session->userdata('app_grade') == 'App'): ?>
    <div class="o-page__sidebar js-page-sidebar">
        <div class="c-sidebar c-sidebar--light">
            <a href="<?php echo base_url('app/dashboard') ?>" class="c-sidebar__brand">
                <img src="<?php echo base_url(APP_LOGO) ?>" alt="Logo" title="logo" class="c-sidebar__brand-img">
                <?php echo APP_NAME ?>
            </a>

            <ul class="c-sidebar__list">
                <?php $this->load->view('app/_layouts/nav');?>
            </ul>

        </div><!-- // .c-sidebar -->
    </div><!-- // .o-page-sidebar -->
<?php endif ?>

<main class="o-page__content">
    <header class="c-navbar">
        <button class="c-sidebar-toggle u-mr-small">
            <span class="c-sidebar-toggle__bar"></span>
            <span class="c-sidebar-toggle__bar"></span>
            <span class="c-sidebar-toggle__bar"></span>
        </button> <!-- // c.sidebar-toggle-->

        <?php $this->load->view('app/_layouts/nav-top'); ?>
    </header>
</main>