@extends('layouts.app')
@section('page-title')
    Groups
@endsection
@section('content')

    <table class="table">
        <thead>
        <th>id</th>
        <th>designation</th>
        <th>localization</th>
        <th>creation_date</th>
        <th>inactivation_date</th>
        <th>active</th>
        </thead>
        <tbody>
        <tr ng-repeat="item in {{\App\Model\Group::all()}}">
            <td> @{{ item.id }}</td>
            <td> @{{ item.designation }}</td>
            <td> @{{ item.localization }}</td>
            <td> @{{ item.creation_date }}</td>
            <td> @{{ item.inactivation_date }}</td>
            <td> @{{ item.active }}</td>
        </tr>
        </tbody>
    </table>
@endsection
