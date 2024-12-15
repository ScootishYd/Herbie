@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3">
            <x-sidebar />
        </div>

        <!-- Main Content -->
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h3>Account Dashboard</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Account Information</h4>
                            <p>Name:</p>
                            <p>Email:</p>
                            <a href=" class=" btn btn-primary">Edit Profile</a>
                        </div>
                        <div class="col-md-6">
                            <h4>Recent Activity</h4>
                            <ul>
                                <li>:</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Settings -->
                    <hr>
                    <h4>Account Settings</h4>
                    <ul class="list-group">
                      <li></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection