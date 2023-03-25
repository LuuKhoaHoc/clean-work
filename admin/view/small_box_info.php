<?php

class small_box_info
{
    public static function show_box(string $title, $value, string $color_theme, string $icon): void
    {
        ?>

        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-<?= $color_theme ?>">
                <div class="inner">
                    <h3>
                        <?= $value ?>
                    </h3>

                    <p><?= $title ?></p>
                </div>
                <div class="icon">
                    <i class="ion ion-<?= $icon ?>"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <?php
    }

    public static function show_card(string $title, string $value, string $up_or_down, string $icon, string $color_theme)
    {
        ?>
        <p class="text-<?= $color_theme ?> text-xl">
            <i class="<?= $icon ?>"></i>
        </p>
        <p class="d-flex flex-column text-right">
            <span class="font-weight-bold">
                <i class="ion ion-android-arrow-<?= $up_or_down ?> text-<?= $color_theme ?>"></i> <?= $value ?>
            </span>
            <span class="text-muted"><?= $title ?></span>
        </p>
        <?php
    }
}