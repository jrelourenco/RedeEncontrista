@extends('layouts.app')
@section('page-title')
    Curriculo
@endsection
@section('content')

    <ul class="list-unstyled activity-list">
        <li>
            <i class="fa fa-shopping-cart activity-icon pull-left"></i>
            <p>
                <a href="#">Jonathan</a> commented on <a href="#">Special Deal 2013</a> <span
                        class="timestamp">12 minutes ago</span>
            </p>
        </li>
        <li>
            <i class="fa fa-pencil activity-icon pull-left"></i>
            <p>
                <a href="#">Jonathan</a> posted <a href="#">a new blog post</a> <span
                        class="timestamp">4 hours ago</span>
            </p>
        </li>
        <li>
            <i class="fa fa-user activity-icon pull-left"></i>
            <p>
                <a href="#">Jonathan</a> edited his profile <span class="timestamp">11 hours ago</span>
            </p>
        </li>
        <li>
            <i class="fa fa-pencil activity-icon pull-left"></i>
            <p>
                <a href="#">Jonathan</a> has added review on <a href="#">jQuery Complete Guide</a> book
                <span class="timestamp">Yesterday</span>
            </p>
        </li>
        <li>
            <i class="fa fa-thumbs-up activity-icon pull-left"></i>
            <p>
                <a href="#">Jonathan</a> liked <a href="#">a post</a> <span
                        class="timestamp">December 12</span>
            </p>
        </li>
        <li>
            <i class="fa fa-tasks activity-icon pull-left"></i>
            <p>
                <a href="#">Jonathan</a> has completed one task <span class="timestamp">December 11</span>
            </p>
        </li>
        <li>
            <i class="fa fa-picture-o activity-icon pull-left"></i>
            <p>
                <a href="#">Jonathan</a> uploaded <a href="#">new photos</a> <span
                        class="timestamp">December 5</span>
            </p>
        </li>
        <li>
            <i class="fa fa-credit-card activity-icon pull-left"></i>
            <p>
                <a href="#">Jonathan</a> has updated his credit card info <span
                        class="time stamp">September 28</span>
            </p>
        </li>
    </ul>
    <p class="text-center"><a href="#" class="btn btn-custom-primary">View more <i
                    class="fa fa-long-arrow-right"></i></a></p>

@endsection