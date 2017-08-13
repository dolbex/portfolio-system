@extends('devise::admin.layouts.master')

@section('title')
    <div id="dvs-admin-title">
        <h1><span class="ion-speedometer"></span> Dashboard</h1>
    </div>
@stop

@section('main')

    <div class="dvs-flexbox">
        <div class="dvs-admin-card wide dvs-api" data-dvs-url="<?= URL::route('admin-blogs-index') ?>">
            <div class="dvs-card-top">
                <span class="dvs-icon ion-code-working"></span>
            </div>
            <div class="dvs-card-bottom">
                <div class="dvs-icon ion-code-working"></div>
                <h5>Blog Posts</h5>
                <p>Control and manage the blog posts on your site</p>
            </div>
        </div>

        <div class="dvs-admin-card dvs-groups" data-dvs-url="<?= URL::route('admin-portfolioitems-index') ?>">
            <div class="dvs-card-top">
                <span class="dvs-icon ion-code-working"></span>
            </div>
            <div class="dvs-card-bottom">
                <div class="dvs-icon ion-code-working"></div>
                <h5>Portfolio Items</h5>
                <p>Items in your portfolio</p>
            </div>
        </div>

        <div class="dvs-admin-card dvs-permissions" data-dvs-url="<?= URL::route('admin-portfoliocategories-index') ?>">
            <div class="dvs-card-top">
                <span class="dvs-icon ion-code-working"></span>
            </div>
            <div class="dvs-card-bottom">
                <div class="dvs-icon ion-code-working"></div>
                <h5>Portfolio Categories</h5>
                <p>Categories for your portfolio.</p>
            </div>
        </div>

        <div class="dvs-admin-card wide dvs-pages" data-dvs-url="<?= URL::route('dvs-pages') ?>">
            <div class="dvs-card-top">
                <span class="dvs-icon ion-document"></span>
            </div>
            <div class="dvs-card-bottom">
                <div class="dvs-icon ion-document"></div>
                <h5>Pages</h5>
                <p>Manage pages, set URLs, and page versions.</p>
            </div>
        </div>

        <div class="dvs-admin-card dvs-menus" data-dvs-url="<?= URL::route('dvs-menus') ?>">
            <div class="dvs-card-top">
                <span class="dvs-icon ion-android-menu"></span>
            </div>
            <div class="dvs-card-bottom">
                <div class="dvs-icon ion-android-menu"></div>
                <h5>Menus</h5>
                <p>Manage menus and children items.</p>
            </div>
        </div>

        <div class="dvs-admin-card dvs-users" data-dvs-url="<?= URL::route('dvs-users') ?>">
            <div class="dvs-card-top">
                <span class="dvs-icon ion-ios-person"></span>
            </div>
            <div class="dvs-card-bottom">
                <div class="dvs-icon ion-ios-person"></div>
                <h5>Users</h5>
                <p>Manage users and define group associations.</p>
            </div>
        </div>
    </div>

    <script>devise.require(['app/admin/dashboard'])</script>
@stop
