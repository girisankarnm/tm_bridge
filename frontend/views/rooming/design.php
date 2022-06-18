    <?php

    /* @var $this yii\web\View */

    use yii\helpers\Html;
    frontend\assets\CommonAsset::register($this);

    $this->title = 'Design';
    $this->params['breadcrumbs'][] = $this->title;
    ?>
    <div class="tab-accordion">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="home-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="false">Home</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Profile</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="messages-tab" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Messages</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="settings-tab" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">Settings</a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade" id="tab-1" role="tabpanel" aria-labelledby="home-tab">
                <p class="content">
                In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is placeholder text placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy iscommonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is
                </p>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Overlay one
                                    <div class="float-right">
                                        <i class="fas fa-angle-down rotate-icon"></i>
                                    </div>
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>
                                    Some placeholder content for the first accordion panel. This panel is shown by default, thanks to the 
                                </p>
                                <button class="btn btn-sm btn-save"> Save </button>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Normal Tab
                                    <div class="float-right">
                                        <i class="fas fa-angle-down rotate-icon"></i>
                                    </div>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <p> Some placeholder content for the second accordion panel. This panel is hidden by default. </p>
                                <button class="btn btn-sm btn-save"> Save </button>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    What is overlay ?
                                    <div class="float-right">
                                        <i class="fas fa-angle-down rotate-icon"></i>
                                    </div>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <p> And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default. </p>
                                <button class="btn btn-sm btn-save"> Save </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="profile-tab">
                <p class="content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
            <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="messages-tab">
                <p class="content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
            <div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="settings-tab">
                <p class="content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
            </div>
        </div>

<script>
    $(function(){
        var hash = window.location.hash;
        hash ? $('#myTab li a[href="' + hash + '"]').tab('show') : $('#myTab li:first-child a').tab('show');

        $('.nav-tabs a').click(function (e) {
            $(this).tab('show');
            var scrollmem = $('body').scrollTop();
            window.location.hash = this.hash;
            $('html,body').scrollTop(scrollmem);
        });
    });
</script>