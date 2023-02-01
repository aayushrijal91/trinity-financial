<div class="free_review">
    <?php $free_review = get_field('free_review', 'options'); ?>
    <img src="<?= get_template_directory_uri() ?>/images/background/frame-stack.jpg" alt="frames" class="w-100">
    <div class="inner">
        <div class="container-fluid">
            <div class="row justify-content-end">
                <div class="col-xl-11">
                    <div class="row justify-content-between align-items-end">
                        <div class="col-auto">
                            <div class="bg-grey py-5"></div>
                            <div class="part_1">
                                <div class="fw-500 ls-2 fs-28"><?= $free_review['part_1_title'] ?></div>
                                <a href="<?= $free_review['part_1_button']['url'] ?>" target="<?= $free_review['part_1_button']['target'] ?>" class="btn fs-21 fw-500 text-white rounded-0 px-0 mt-6"><?= $free_review['part_1_button']['title'] ?> <span class="ps-4"><svg width="24" height="17" viewBox="0 0 24 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.5661 7.75837L13.5375 1.60835C13.2003 1.3133 13.1661 0.800772 13.4612 0.463579C13.7562 0.126386 14.2687 0.0922174 14.6059 0.387261L23.2595 7.9591C23.6289 8.28232 23.6289 8.85697 23.2595 9.18019L14.6059 16.752C14.2687 17.0471 13.7562 17.0129 13.4612 16.6757C13.1661 16.3385 13.2003 15.826 13.5375 15.5309L20.5661 9.38091H1.62768C1.17962 9.38091 0.816406 9.01769 0.816406 8.56964C0.816406 8.12159 1.17962 7.75837 1.62768 7.75837H20.5661Z" fill="white" />
                                        </svg></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="part_2">
                                <img src="<?= get_template_directory_uri() ?>/images/logo/tfs-logo.png" alt="TFS">
                                <div class="fs-25 pt-9"><?= $free_review['part_2_title'] ?></div>
                            </div>
                            <div class="bg-white">
                                <a href="<?= $free_review['part_2_button']['url'] ?>" target="<?= $free_review['part_2_button']['target'] ?>" class="btn fs-21 fw-500 text-primary rounded-0 p-5"><?= $free_review['part_2_button']['title'] ?> <span class="ps-4"><svg width="23" height="17" viewBox="0 0 23 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.7643 7.65795L13.0447 1.77827C12.7223 1.49619 12.6897 1.00619 12.9717 0.683822C13.2538 0.361452 13.7438 0.328785 14.0662 0.610859L22.3393 7.84986C22.6925 8.15887 22.6925 8.70825 22.3393 9.01726L14.0662 16.2563C13.7438 16.5383 13.2538 16.5057 12.9717 16.1833C12.6897 15.8609 12.7223 15.3709 13.0447 15.0889L19.7643 9.20916H1.65842C1.23006 9.20916 0.882812 8.86191 0.882812 8.43355C0.882812 8.0052 1.23006 7.65795 1.65842 7.65795H19.7643Z" fill="#2B3484" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>