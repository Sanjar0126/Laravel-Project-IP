<section>
    <div class="topHeader">
        <i class="fa fa-times" id="exitmnu" aria-hidden="true"></i>
        <div class="topHeaderTop animated zoomIn">
            <div class="container1">
                <div class="row">
                    <div class="menu-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                        <p>menu</p>
                    </div>
                    <div class="topHeaderAddress col-md-4 col-sm-4">
                        <div class="topHeaderAddressMapIcon">
                            <img src="img/map.png" alt="" />
                        </div>
                        <div class="topHeaderAddresses">
                            <h4>Address</h4>
                            <h5>Burlesque, The Triangle, Liberty City</h5>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 logo">
                        <div class="topHeaderLogo">
                            <div class="thl-wrapper">
                                <a href="<?php echo e(route('homeIndex')); ?>">
                                    <img
                                        src="img/cluckin-logo.webp"
                                        alt=""
                                        style="width:100px;height:100px;"
                                    />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="sailDepartment col-md-4 col-sm-4">
                        <div class="sailDepartmentLeft">
                            <div class="sailDepartmentPhoneIcon">
                                <img src="img/phone.png" alt="" />
                            </div>
                            <div class="sailDepartmentSailing">
                                <h4>Call us</h4>
                                <h5>+998 97 368 68 08</h5>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
        <div
            class="topHeaderBottom sidebar container wow fadeInDown"
            data-wow-duration="2s"
            data-wow-delay="0.5s">
            <div class="menu">
                <ul class="topHeaderList">
                    <li>
                    <a href="<?php echo e(route('homeIndex')); ?>">Home</a>
                    </li>
                    <li>
                    <a href="<?php echo e(route('about')); ?>">About us</a>
                    </li>
                    <li>
                    <a href="<?php echo e(route('menu')); ?>">Menu</a>
                    </li>
                </ul>
                <ul class="topHeaderList leftlist">
                    <li>
                    <a href="<?php echo e(route('order')); ?>">Order </a>
                    </li>
                    <li>
                    <a href="<?php echo e(route('contact')); ?>">Contacts</a>
                    </li>
                    <?php if(Auth::guest()): ?>
                        <li>
                            <a href="<?php echo e(route('login')); ?>">login</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('register')); ?>">Register</a>
                        </li>
                        
                    <?php else: ?>
                        <li>
                            <a onclick="document.getElementById('logout-form').submit()" >Logout</a>
                        </li>
                    <?php endif; ?>
                </ul>

                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo csrf_field(); ?>
                    </form>
        
                </ul>
            </div>
        </div>
    </div>
</section><?php /**PATH /home/sanjar/ip-project/resources/views/partials/navbar.blade.php ENDPATH**/ ?>