<?php

use baixinxing\ace\AceAsset;
?>
<a data-toggle="dropdown" href="#" class="dropdown-toggle">
    <img class="nav-user-photo" src="<?= $this->assetBundles[AceAsset::className()]->baseUrl ?>/avatars/user.jpg" alt="Jason's Photo" />
    <span class="user-info">
        <small>Welcome,</small>
        Bai Xinxing
    </span>

    <i class="ace-icon fa fa-caret-down"></i>
</a>

<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
    <li>
        <a href="#">
            <i class="ace-icon fa fa-cog"></i>
            Settings
        </a>
    </li>

    <li>
        <a href="profile.html">
            <i class="ace-icon fa fa-user"></i>
            Profile
        </a>
    </li>

    <li class="divider"></li>

    <li>
        <a href="#">
            <i class="ace-icon fa fa-power-off"></i>
            Logout
        </a>
    </li>
</ul>