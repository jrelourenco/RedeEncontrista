<div class="tab-pane profile active" id="profile-tab">

    <div class="clearfix"></div>
    <div class="col-md-4">
        <div class="text-center">
            <img src="/img/default-avatar.png" alt="Profile Picture"/>
            <h2>{{$profile->name}}</h2>
            <div class="row">
                @include('layouts.social_button',['social'=>'facebook'])
                @include('layouts.social_button',['social'=>'facebook'])
                @include('layouts.social_button',['social'=>'facebook'])
                @include('layouts.social_button',['social'=>'facebook'])
            </div>
        </div>
    </div>
    <div class="col-md-8">

        <div class=" col-md-9 col-lg-9 ">
            <table class="table">
                <tbody>
                <tr>
                    <th>Department:</th>
                    <td>{{$profile->sp}}</td>
                </tr>

                <tr>
                    <th>Date of Birth</th>
                    <td>{{$profile->birth_date}}</td>
                </tr>

                <tr>
                <tr>
                    <td>Gender</td>
                    <td>{{$profile->gender ? "female":"male"}}</td>
                </tr>
                <tr>
                    <td>Home Address</td>
                    <td>{{$profile->address}}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><a href="mailto:{{$profile->email}}">{{$profile->email}}</a></td>
                </tr>
                <td>Phone Number</td>
                <td>123-4567-890(Landline)<br><br>555-4567-890(Mobile)
                </td>

                </tr>

                </tbody>
            </table>
        </div>


    </div>
</div>

