@extends('layouts.app')
@section('page-title')
    Profile
@endsection

@section('content')


        <ul class="nav nav-tabs">
            <li class="active"><a href="#profile-tab" data-toggle="tab"><i class="fa fa-user"></i> Profile</a></li>
            <li><a href="#activity-tab" data-toggle="tab"><i class="fa fa-rss"></i> Recent Activity</a></li>
            <li><a href="#settings-tab" data-toggle="tab"><i class="fa fa-gear"></i> Settings</a></li>
        </ul>
        <br>
        <div class="tab-content profile-page">

            @include("pages.profile.profile")
            @include("pages.profile.activity")
            @include("pages.profile.settings")

        </div>

@endsection