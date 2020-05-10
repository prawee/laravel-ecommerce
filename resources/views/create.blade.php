<?php
/**
 * @link http://www.konkeanweb.com
 * 2020-05-11 04:55
 * @copyright Copyright (c) 2020 served
 * @author Prawee Wongsa <prawee@hotmail.com>
 * @license MIT
 */
?>
@extends('layouts.main')
@section('content')
    <div class="container">

        <h1>Create Page</h1>

        <!-- Default form register -->
        <form class="text-center border border-light p-5" action="#!">

            <p class="h4 mb-4">Add Student</p>

            <div class="form-row mb-4">
                <div class="col">
                    <!-- First name -->
                    <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name">
                </div>
                <div class="col">
                    <!-- Last name -->
                    <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name">
                </div>
            </div>

            <!-- E-mail -->
            <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail">

            <!-- Phone number -->
            <input type="text" id="defaultRegisterPhonePassword" class="form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">

            <!-- Newsletter -->

            <!-- Sign up button -->
            <button class="btn btn-info my-4 btn-block" type="submit">Add Data</button>

            <!-- Social register -->

            <!-- Terms of service -->

        </form>
        <!-- Default form register -->
    </div>
@endsection